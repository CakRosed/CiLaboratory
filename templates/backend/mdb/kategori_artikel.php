
<?php get_template('header'); ?>

  <!--Main layout-->
  <main>
    <div class="container-fluid">

      <!--Section: Basic examples-->
      <section>

        <h2 class="font-weight-bold mt-lg-5 mb-5 pb-4"><strong>Daftar kategori</strong></h2>

        <div class="card card-cascade narrower z-depth-1">

          <!--Card-->
          <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

            <div>
              <a href="<?= set_url('artikel/kategori#tambah');?>"><button type="button" class="btn btn-outline-white btn-rounded btn-sm px-3"><i class="fas fa-plus mt-0"></i></button></a>
            </div>

            <a href="" class="white-text text-center mx-3">Data kategori artikel</a>

          </div>
          <!--/Card-->

          <div class="px-4 pb-3" id="list-kategori">
            <ul class="list-group hirarki kategori">
                <!-- <li id="ID_9" class="list-group-item ">
                  <div class="row justify-content-between">
                    <div class="col-md-4 pt-2">
                      <a class="link-edit" href="kategori#edit?id=9">Bisnis</a>
                    </div>
                    <div class="col-md-4">
                      <a href="kategori#edit?id=9" id="edit" class="btn purple-gradient btn-sm"> Edit</a> 
                      <a href="kategori#hapus?id=9" id="hapus" class="btn peach-gradient btn-sm"> Hapus</a>
                    </div>
                  </div>
                </li>
                <li id="ID_9" class="list-group-item ">
                  <div class="row justify-content-between">
                    <div class="col-md-4 pt-2">
                      <a class="link-edit" href="kategori#edit?id=9">Desi</a>
                    </div>
                    <div class="col-md-4">
                      <a href="kategori#edit?id=9" id="edit" class="btn purple-gradient btn-sm"> Edit</a> 
                      <a href="kategori#hapus?id=9" id="hapus" class="btn peach-gradient btn-sm"> Hapus</a>
                    </div>
                  </div>
                  <ul class="list-group hirarki kategori my-3">
                      <li id="ID_9" class="list-group-item ">
                        <div class="row justify-content-between">
                          <div class="col-md-4 pt-2">
                            <a class="link-edit" href="kategori#edit?id=9">Bisnis</a>
                          </div>
                          <div class="col-md-4">
                            <a href="kategori#edit?id=9" id="edit" class="btn purple-gradient btn-sm"> Edit</a> 
                            <a href="kategori#hapus?id=9" id="hapus" class="btn peach-gradient btn-sm"> Hapus</a>
                          </div>
                        </div>
                      </li>
                      <li id="ID_9" class="list-group-item ">
                        <div class="row justify-content-between">
                          <div class="col-md-4 pt-2">
                            <a class="link-edit" href="kategori#edit?id=9">Vesion</a>
                          </div>
                          <div class="col-md-4">
                            <a href="kategori#edit?id=9" id="edit" class="btn purple-gradient btn-sm"> Edit</a> 
                            <a href="kategori#hapus?id=9" id="hapus" class="btn peach-gradient btn-sm"> Hapus</a>
                          </div>
                        </div>
                      </li>
                  </ul>
                </li> -->
            </ul>
          </div>
          
        </div>

      </section>
      <!--Section: Basic examples-->

    </div>
  </main>
  <!--Main layout-->

  <!-- Modal -->
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Tambah kategori artikel</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->  
      <div class="modal-body mx-4">  
        <form role="form" id="form-kategori-artikel" action="tambah">
        <div class="md-form mb-5">
          <input type="text" id="post_title" value="asdf" name="category_name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Nama kategori</label>
        </div>

        <div class="md-form pb-3">
          <textarea type="text" name="category_description" rows="5" id="post_content" class="form-control md-textarea"></textarea>
          <label data-error="wrong" data-success="right" for="post_content">Deskripsi kategori</label>
        </div>
 
        <!--Teal select-->
          <select id="category_parent" name="category_parent" class="mdb-select md-form colorful-select dropdown-warning">
            <option disabled selected value="1">Pilih induk kategori</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
            <option value="4">Option 4</option>
            <option value="5">Option 5</option>
          </select>
        <!--/Teal select-->

        <input type="hidden" name="category_id" id="category_id" />
        </form>

        <div class="text-center mb-3">
          <button type="button" id="submit-kategori-artikel" class="btn aqua-gradient btn-block btn-rounded z-depth-1a">Submit</button>
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->

<?php get_template('footer');