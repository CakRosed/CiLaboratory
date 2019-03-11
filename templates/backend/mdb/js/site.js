var path = window.location.pathname;
var host = window.location.hostname;


$(function () {

	$(document).ready(function () {
		// Material Select Initialization
		$('.mdb-select').material_select();

		// Sidenav Initialization
		$(".button-collapse").sideNav();
	});



	// Hashchange
	$(window).hashchange(function () {
		var hash = $.param.fragment(); //mengambil hash dari browser

		if (hash == "tambah") {
			if (path.search('admin/artikel') > 0) {
				$('#elegantModalForm .modal-body #post_title').val('');
				$('#elegantModalForm .modal-body #post_content').val('');

				$('#elegantModalForm .modal-header #myModalLabel').text('Tambah Artikel');
				$('#elegantModalForm #submit-artikel').text('Tambah');
				$('#elegantModalForm #form-artikel').attr('action', 'tambah');
			}
			$('#elegantModalForm').modal('show');

		} else if (hash.search('edit') == 0) {

			if (path.search('admin/artikel') > 0) {
				var post_ID = getUrlVars()['id'];
				var Artikel_detail = getJSON('http://' + host + path + '/action/ambil', {
					id: post_ID
				});
				//value data
				$('#elegantModalForm .modal-body #post_title').val('' + Artikel_detail.data['post_title']);
				$('#elegantModalForm .modal-body #post_content').val('' + Artikel_detail.data['post_content']);
				//opsional modal
				$('#elegantModalForm .modal-header #myModalLabel').text('Edit Artikel');
				$('#elegantModalForm #submit-artikel').text('Edit');
				$('#elegantModalForm #form-artikel').attr('action', 'edit');
				//trigger
				$('#elegantModalForm #form-artikel #post_id').val(post_ID);
			}
			$('#elegantModalForm').modal('show');

		} else if (hash.search("hapus") == 0) {
			if (path.search('admin/artikel') > 0) {
				$('#elegantModalForm form').hide();
				$('#elegantModalForm #myModalLabel').text('Hapus artikel');
				$('#elegantModalForm #submit-artikel').text('Hapus saja');
				$('#elegantModalForm #form-artikel').attr('action', 'hapus');
				$('#elegantModalForm .modal-body').prepend('<p id="hapus-notif">Apakah Anda yakin akan menghapus : Artikel ... ???</p>');

			}
			$('#elegantModalForm').modal('show');
		} else if (hash.search("ambil") == 0) {
			if (path.search('admin/artikel')) {
				var hal_aktif, cari, kategori = null;
				var hash = getUrlVars();
				if (hash['hal']) {
					hal_aktif = hash['hal'];
				}

				ambil_artikel(hal_aktif, true);
				$('ul#pagination-artikel li a:contains(' + hal_aktif + ')').parents().addClass('active').siblings().removeClass('active');
			}
		}

	});
	$(window).trigger('hashchange'); //memanggil ulang hash ketika browser di reload

	$('#elegantModalForm').on('hidden.bs.modal', function () {
		window.history.pushState(null, null, path);
		$('#elegantModalForm').removeClass('modal-lg');
		$('#elegantModalForm form').find("input[type=text], textarea").val(null);
		$('#elegantModalForm #hapus-notif').remove();
		$('#elegantModalForm form').show();
	});

	moment.locale('id');

	/* ************************************** */
	/*        BACKEND BAGIAN ARTIKEL          */
	/* ************************************** */

	$(document).on('click', '#submit-artikel', function (e) {
		e.preventDefault(); //menjalankan preintah javascript tanpa reload atau menjalankan link

		var action = $('#form-artikel').attr('action');
		var datatosend = $('#form-artikel').serialize();

		$.ajax('http://' + host + path + '/action/' + action, {
			dataType: 'json',
			type: 'POST',
			data: datatosend,
			success: function (data) {
				if (data.status == "success") {
					ambil_artikel(null, false);
					$('#elegantModalForm').modal('hide');
					toastr.success('Sukses! Anda telah menulis artikel kedalam database');
				} else {
					$.each(data.errors, function (key, value) {
						$('#' + key).attr('placeholder', value);
					});
				}
			}
		});
		//end ajax
	});
	ambil_artikel(null, false);
});





/* ************************************** */
/*       ANEKA JAVASCRIPT FUNCTION        */
/* ************************************** */

function ambil_artikel(hal_aktif, scrolltop) {
	if ($('table#tbl_artikel').length > 0) {
		$.ajax('http://' + host + path + '/action/ambil', {
			dataType: 'json',
			type: 'POST',
			data: {
				hal_aktif: hal_aktif
			},
			success: function (data) {
				$('table#tbl_artikel tbody tr').remove();
				$.each(data.record, function (index, element) {
					$('table#tbl_artikel').find('tbody').append(
						'<tr>' +
						'<td width="2%"><input class="form-check-input" name="post_id[]" type="checkbox" id="checkbox' + element.post_ID + '" value="' + element.post_ID + '" id="checkbox1">' +
						'<label class = "form-check-label" for = "checkbox' + element.post_ID + '" class = "mr-2 label-table"></label ></td > ' +
						'<td width="50%"><a href="artikel#edit?id=' + element.post_ID + '">' + element.post_title + '<a></td>' +
						'<td width="10%"><i class="far fa-comment-dots mx-1"></i> ' + element.comment_count + '</td>' +
						'<td width="10%"><i class="far fa-eye mx-1"></i> ' + element.post_counter + ' </td>' +
						'<td width="12%"><i class="far fa-clock mr-1"></i> ' + moment(element.post_date).fromNow() + '</td>' +
						'<td width="16%">' +
						'<a href="artikel#hapus?id=' + element.post_ID + '">' +
						'<button class="btn btn-sm peach-gradient mr-1" data-toggle="modal" data-target="#elegantModalForm"><i class="fas fa-trash"></i></button>' +
						'</a>' +
						'<a href="artikel#edit?id=' + element.post_ID + '">' +
						'<button class="btn btn-sm purple-gradient mr-1" data-toggle="modal" data-target="#elegantModalForm"><i class="fas fa-pencil-alt"></i></button>' +
						'</a>' +
						'</td>' +
						'</tr>'
					);
				});

				// BGIAN UNTUK PAGINATION
				var pagination = '';
				var paging = Math.ceil(data.total_rows / data.perpage);

				if ((!hal_aktif) && ($('ul#pagination-artikel li').length == 0)) {
					$('ul#pagination-artikel li').remove();
					for (i = 1; i <= paging; i++) {
						pagination = pagination + '<li class="page-item clearfix d-none d-md-inline-block"><a href="artikel#ambil?hal=' + i + '" class="page-link">' + i + '</a></li>'
					}
				}

				$('ul#pagination-artikel').append(pagination);
				$("ul#pagination-artikel li:contains(" + hal_aktif + ")").addClass('active');
				if (scrolltop == true) {
					$('body').scrollTop(0);
				}
			}
		});
	}
}

function getUrlVars() {
	var vars = [],
		hash;
	var hashesh = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	for (var i = 0; i < hashesh.length; i++) {
		// window.location.href untuk menggambil value dari url get
		// slice(window.location.href.indexOf('?')) untuk memisahkan index menurut string ?
		// split('&'); memisahkan value yang diambil berdasarkan string & dan mengembalikannya sebagai index array
		// final = mengambil index value get dari url 

		hash = hashesh[i].split('=');

		vars.push(hash[0]);
		vars[hash[0]] = hash[1];
	}
	return vars;
}

function getJSON(url, data) {
	return JSON.parse(
		$.ajax({
			type: 'POST',
			url: url,
			data: data,
			dataType: 'JSON',
			global: false,
			async: false,
			success: function (msg) {

			}
		}).responseText
	);
}
