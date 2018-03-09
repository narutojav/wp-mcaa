<html>
<head>
  <?php wp_head(); ?>
  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/swiper.min.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" media="screen" title="no title" charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>
<body>
  <div class="overplay"></div>
  <div id="header">
    <div class="row top">
      <div class="container">
        <div class="col-md-4 logo">
          <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          if ( has_custom_logo() ) {
                  echo '<img src="'. esc_url( $logo[0] ) .'">';
          } else {
                  echo '<h1>'. get_bloginfo( 'description' ) .'</h1>';
          } ?>
          <!-- <a href="/mcaa"><img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="" /></a> -->
        </div>
        <div class="col-md-8 navmain" style="float:right;">
          <ul class="top-menu">
            <div class="search">

              <div class="lang">
                <a href="?lang=mn"><img src="<?php echo get_template_directory_uri(); ?>/images/mn.png" alt=""></a>
                <a href="?lang=en"><img src="<?php echo get_template_directory_uri(); ?>/images/gb.ico" alt=""></a>
              </div>
              <div class="input-group">
                <input id="email" type="text" class="form-control" name="email" placeholder="Хайх">
                <span class="input-group-addon"><a href=""><i class="glyphicon glyphicon-search"></i></a></span>
              </div>
            </div>
            <li>
              <?php
                  if ( is_user_logged_in() ) {?>
                    <a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
                    <?php
                      global $current_user;
                  } else {
                      echo '<a hred="#" data-toggle="modal" data-target="#loginModal">Login</a>';
                  }
               ?>
            </li>
            <li>
              <a href="">Site map</a>
            </li>
            <li>
              <a href="http://localhost/mcaa/en/english-contact/">Contact us</a>
            </li>

          </ul>
          <ul class="bottom-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'primary','container' => false, 'items_wrap'  => '%3$s', 'walker' => new My_Walker_Nav_Menu() ) ); ?>
          </ul>
        </div>
        <a id="collapse-btn"><i class="fa fa-bars"></i></a>
      </div>
    </div>
    <div class="line">

    </div>
  </div>
