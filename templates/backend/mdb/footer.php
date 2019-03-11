<footer class="page-footer font-small special-color-dark pt-4 aqua-gradient-rgba mt-5">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fab fa-google-plus-g"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fab fa-dribbble"> </i>
          </a>
        </li>
      </ul>
      <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 blue-gradient-rgba">© 2018 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <!-- Modal -->
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Tambah artikel</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body--> 
      <div class="modal-body mx-4">  
        <form role="form" id="form-artikel" action="tambah">
        <div class="md-form mb-5">
          <input type="text" id="post_title" value="asdf" name="post_title" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Judul Artikel</label>
        </div>

        <div class="md-form pb-3">
          <textarea type="text" value="asdf" name="post_content" rows="8" id="post_content" class="form-control md-textarea" rows="3"></textarea>
          <label data-error="wrong" data-success="right" for="post_content">Isi konten</label>
        </div>

        <input type="hidden" name="mass_action_type" id="mass_action_type" />
        <input type="hidden" name="post_id" id="post_id" />
        </form>

        <div class="text-center mb-3">
          <button type="button" id="submit-artikel" class="btn aqua-gradient btn-block btn-rounded z-depth-1a">Submit</button>
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->

 <!-- /Start your project here-->

 <!-- SCRIPTS -->
 <!-- Bootstrap core JavaScript -->
 <script type="text/javascript" src="<?php echo get_template_directory(dirname(__FILE__), 'js/'); ?>bootstrap.min.js"></script>
 <!-- MDB core JavaScript -->
 <script type="text/javascript" src="<?php echo get_template_directory(dirname(__FILE__), 'js/'); ?>mdb.js"></script>
 <!-- Bootstrap momment -->
 <script type="text/javascript" src="<?php echo get_template_directory(dirname(__FILE__), 'js/'); ?>moment-with-locales.js"></script>
 <!-- Bootstrap tooltips -->
 <script type="text/javascript" src="<?php echo get_template_directory(dirname(__FILE__), 'js/'); ?>popper.min.js"></script>
 <!-- hashchange -->
 <script type="text/javascript" src="<?php echo get_template_directory(dirname(__FILE__), 'js/') ;?>jquery.ba-bbq.min.js"></script>
 <!-- custom js -->
 <script type="text/javascript" src="<?php echo get_template_directory(dirname(__FILE__), 'js/'); ?>site.js"></script>
</body>

</html>
