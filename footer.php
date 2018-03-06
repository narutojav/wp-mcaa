<div id="footer">
    <div class="container ">
      <div class="row links">
        <div class="col-md-3 col-xs-6">
          <li><a href="#">About mcaa</a>
            <ul>
              <li><a href="">vision & mission</a></li>
              <li><a href="">Structure</a></li>
              <li><a href="">Directors</a></li>
              <li><a href="">History</a></li>
            </ul>
          </li>
        </div>
        <div class="col-md-3 col-xs-6">
          <li><a href="#">About mcaa</a>
            <ul>
              <li><a href="">vision & mission</a></li>
              <li><a href="">Structure</a></li>
              <li><a href="">Directors</a></li>
              <li><a href="">History</a></li>
            </ul>
          </li>
        </div>
        <div class="col-md-3 col-xs-6">
          <li><a href="#">About mcaa</a>
            <ul>
              <li><a href="">vision & mission</a></li>
              <li><a href="">Structure</a></li>
              <li><a href="">Directors</a></li>
              <li><a href="">History</a></li>
            </ul>
          </li>
        </div>
        <div class="col-md-3 col-xs-6">
          <li><a href="#">About mcaa</a>
            <ul>
              <li><a href="">vision & mission</a></li>
              <li><a href="">Structure</a></li>
              <li><a href="">Directors</a></li>
              <li><a href="">History</a></li>
            </ul>
          </li>
        </div>
        <div id="loginModal" class="modal fade" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Нэвтрэх</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?php wp_login_form(); ?>
              </div>

            </div>
          </div>
        </div>
      </div>
      <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
      <div class="copyright">
        <p><?php
        $lang  =  get_bloginfo( 'description' );
        $pieces = explode(",", $lang);
        if ( qtrans_getLanguage() == 'mn' ) {
          echo $pieces[0];
        }
        elseif ( qtrans_getLanguage() == 'en' ) {
          echo $pieces[1];
        }
         ?></p>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script charset="utf-8" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script charset="utf-8" src="<?php echo get_template_directory_uri(); ?>/dist/js/jquery.mapit.min.js"></script>
  <script charset="utf-8" src="<?php echo get_template_directory_uri(); ?>/dist/js/swiper.min.js"></script>
  <script charset="utf-8" src="<?php echo get_template_directory_uri(); ?>/dist/js/initializers.js"></script>

  <script charset="utf-8" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

</body>

</html>
