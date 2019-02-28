
<?php get_template('header'); ?>

  <!--Main layout-->
  <main>
    <div class="container-fluid">

      <!--Section: Basic examples-->
      <section>

        <h2 class="font-weight-bold mt-lg-5 mb-5 pb-4"><strong>Daftar artikel</strong></h2>

        <!--Top Table UI-->
        <div class="card p-2 mb-5">

          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-lg-3 col-md-12">
  
              <!--Name-->
              <select onchange="eventPick()" class="mdb-select colorful-select dropdown-primary mx-2 md-form mt-3 md-dropdown pl-md-4">
                <option value="" disabled selected>Aksi artikel</option>
                <option value="hapus"> Hapus</a></option>
                <option value="pending"> Pending</a></option>
                <option value="publis"> Publish</a></option>
              </select>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3  col-md-6">

              <!--Blue select-->
              <select class="mdb-select colorful-select dropdown-primary mx-2 md-form mt-3 md-dropdown">
                <option value="" disabled selected>Filter artikel</option>
                <option value="1">Contacts in no segments <span> (100)</span></option>
                <option value="1">Segment 1 <span> (2000)</span></option>
                <option value="2">Segment 2 <span> (1000)</span></option>
                <option value="3">Segment 3 <span> (4000)</span></option>
              </select>
              <!--/Blue select-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 offset-md-6 offset-lg-3">

              <form class="form-inline md-form mt-2 ml-2">
                <input class="form-control mt-2" type="text" placeholder="Pencarian" style="max-width: 150px;">
                <button class="btn btn-sm btn-primary ml-2 px-1"><i class="fas fa-search p-1"></i> </button>
              </form>

            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

        </div>
        <!--Top Table UI-->

        <div class="card card-cascade narrower z-depth-1">

          <!--Card image-->
          <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

            <div>
              <a href="<?= set_url('artikel#tambah');?>"><button type="button" class="btn btn-outline-white btn-rounded btn-sm px-3"><i class="fas fa-plus mt-0"></i></button></a>
            </div>

            <a href="" class="white-text text-center mx-3">Data artikel</a>

          </div>
          <!--/Card image-->

          <div class="px-4">

            <div class="table-responsive">
              <!--Table-->
              <table id="tbl_artikel" class="table table-hover mb-0">

                <!--Table head-->
                <thead>
                  <tr>
                    <th>
                      <input class="form-check-input" type="checkbox" id="checkbox">
                      <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
                    </th>
                    <th class="th-lg"><a>Judul artikel <i class="fas fa-sort ml-1"></i></a></th>
                    <th class="th-lg"><a href="">komentar<i class="fas fa-sort ml-1"></i></a></th>
                    <th class="th-lg"><a href="">dilihat<i class="fas fa-sort ml-1"></i></a></th>
                    <th class="th-lg"><a href="">waktu<i class="fas fa-sort ml-1"></i></a></th>
                    <th class="th-lg"><a href="">menu aksi<i class="fas fa-sort ml-1"></i></a></th>
                  </tr>
                </thead>
                <!--Table head-->

                <!--Table body-->
                <tbody>
                  <!-- <tr>
                    <th scope="row">
                      <input class="form-check-input" type="checkbox" id="checkbox1">
                      <label class="form-check-label" for="checkbox1" class="label-table"></label>
                    </th>
                    <td>3 tips efesiensi coding backend menggunakan code igniter</td>
                    <td><i class="far fa-comment-dots mx-1"></i> 38</td>
                    <td><i class="far fa-eye mx-1"></i> 103 </td>
                    <td><i class="far fa-clock mr-1"></i> 3 minggu yang lalu</td>
                    <td>
                      <a href="<?= set_url('artikel#hapus?id=1'); ?>">
                        <button class="btn btn-sm peach-gradient mr-1" data-toggle="modal" data-target="#elegantModalForm"><i class="fas fa-trash"></i></button>
                      </a>
                      <a href="<?= set_url('artikel#edit?id=1'); ?>">
                        <button class="btn btn-sm purple-gradient mr-1" data-toggle="modal" data-target="#elegantModalForm"><i class="fas fa-pencil-alt"></i></button>
                      </a>
                    </td>
                  </tr> -->
                </tbody>
                <!--Table body-->
              </table>
              <!--Table-->
            </div>

            <hr class="my-0">

            <!--Bottom Table UI-->
            <div class="d-flex justify-content-between">

              <!--Name-->
              <select class="mdb-select colorful-select dropdown-primary mt-2">
                <option value="" disabled>Rows number</option>
                <option value="1" selected>5 rows</option>
                <option value="2">25 rows</option>
                <option value="3">50 rows</option>
                <option value="4">100 rows</option>
              </select>

              <!--Pagination -->
              <nav class="my-4">
                <ul class="pagination pagination-circle pg-blue mb-0">

                  <!--First-->
                  <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link">First</a></li>

                  <!--Arrow left-->
                  <li class="page-item disabled">
                    <a class="page-link" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>

                  <!--Numbers-->
                  <li class="page-item active"><a class="page-link">1</a></li>
                  <li class="page-item"><a class="page-link">2</a></li>
                  <li class="page-item clearfix d-none d-md-inline-block"><a class="page-link">3</a></li>
                  <li class="page-item clearfix d-none d-md-inline-block"><a class="page-link">4</a></li>
                  <li class="page-item clearfix d-none d-md-inline-block"><a class="page-link">5</a></li>

                  <!--Arrow right-->
                  <li class="page-item">
                    <a class="page-link" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>

                  <!--First-->
                  <li class="page-item clearfix d-none d-md-block"><a class="page-link">Last</a></li>

                </ul>
              </nav>
              <!--/Pagination -->

            </div>
            <!--Bottom Table UI-->

          </div>
        </div>

      </section>
      <!--Section: Basic examples-->

    </div>
  </main>
  <!--Main layout-->

<?php get_template('footer');