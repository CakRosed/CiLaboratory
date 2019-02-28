var path = window.location.pathname;
var host = window.location.hostname;


$(function (){

    $(document).ready(function() {
        // Material Select Initialization
        $('.mdb-select').material_select();
        
        // Sidenav Initialization
        $(".button-collapse").sideNav();
    });

     

    // Hashchange
    $(window).hashchange(function(){
        var hash = $.param.fragment(); //mengambil hash dari browser
        
        if (hash == "tambah") {
            if (path.search('admin/artikel') > 0) {
				$('#elegantModalForm .modal-header #myModalLabel').text('Tambah Artikel');
				$('#elegantModalForm #submit-artikel').text('Tambah');
				$('#elegantModalForm #form-artikel').attr('action', 'tambah');
            }
            $('#elegantModalForm').modal('show');
        
        }else if(hash.search('edit') == 0){
            if (path.search('admin/artikel') > 0) {
				$('#elegantModalForm .modal-header #myModalLabel').text('Edit Artikel');
				$('#elegantModalForm #submit-artikel').text('Edit');
				$('#elegantModalForm #form-artikel').attr('action', 'edit');
            }
            $('#elegantModalForm').modal('show');
         
        }else if(hash.search("hapus") == 0){
            if (path.search('admin/artikel') > 0) {
                $('#elegantModalForm form').hide();
                $('#elegantModalForm #myModalLabel').text('Hapus artikel');
                $('#elegantModalForm #submit-artikel').text('Hapus saja');
				$('#elegantModalForm #form-artikel').attr('action', 'hapus');
                $('#elegantModalForm .modal-body').prepend('<p id="hapus-notif">Apakah Anda yakin akan menghapus : Artikel ... ???</p>');

            }
            $('#elegantModalForm').modal('show');
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
    
    /* ************************************** */
    /*        BACKEND BAGIAN ARTIKEL          */
    /* ************************************** */
    
    $(document).on('click', '#submit-artikel', function(e){
        e.preventDefault(); //menjalankan preintah javascript tanpa reload atau menjalankan link
    
        var action      = $('#form-artikel').attr('action');
        var datatosend  = $('#form-artikel').serialize();
    
        $.ajax('http://' + host + path + '/action/' + action,{
            dataType: 'json',
            type: 'POST',
            data: datatosend,
            success:function(data){
                if (data.status == "success") {
                    ambil_artikel(null, false);
                    $('#elegantModalForm').modal('hide');
                    toastr.success('Sukses! Anda telah menulis artikel kedalam database');
                }else{
                    $.each(data.errors, function(key, value){
                         $('#'+key).attr('placeholder', value);
                    });
                }
            }
        }); 
        //end ajax
    }); 
    ambil_artikel(null,false);
}); 


    


    /* ************************************** */
    /*       ANEKA JAVASCRIPT FUNCTION        */
    /* ************************************** */

    function ambil_artikel(hal_aktif,scrolltop){
        if ($('table#tbl_artikel').length > 0) {
           $.ajax('http://'+host+path+'/action/ambil',{
               dataType:'json',
                type: 'POST', 
                data:{hal_aktif:hal_aktif},
                success: function(data){
                $('table#tbl-artikel tbody tr').remove();
                $.each(data.record , function(index, element){
                    // $('table#tbl_artikel tbody tr').remove();
                        $('table#tbl_artikel').find('tbody').append(
                            '<tr>'+
                                '<th scope="row">'+
                                '<input class="form-check-input" name="post_id[]" type="checkbox" value="'+element.post_ID+'" id="checkbox1">'+
                                '<label class="form-check-label" for="checkbox1" class="label-table"></label>'+
                                '</th>'+
                                '<td><a href="artikel#edit?id='+element.post_ID+'">'+element.post_title+'<a></td>'+
                                '<td><i class="far fa-comment-dots mx-1"></i> '+element.comment_count+'</td>'+
                                '<td><i class="far fa-eye mx-1"></i> '+element.post_counter+' </td>'+
                                '<td><i class="far fa-clock mr-1"></i> '+moment(element.post_date).fromNow()+'</td>'+
                                '<td>'+
                                '<a href="artikel#hapus?id='+element.post_ID+'">'+
                                    '<button class="btn btn-sm peach-gradient mr-1" data-toggle="modal" data-target="#elegantModalForm"><i class="fas fa-trash"></i></button>'+
                                '</a>'+
                                '<a href="artikel#edit?id='+element.post_ID+'">'+
                                    '<button class="btn btn-sm purple-gradient mr-1" data-toggle="modal" data-target="#elegantModalForm"><i class="fas fa-pencil-alt"></i></button>'+
                                '</a>'+
                                '</td>'+
                            '</tr>'
                        );
                    });
                }
           }); 
        }
    }
