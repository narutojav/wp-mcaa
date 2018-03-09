<?php get_header(); ?>
<div id="cover-img" style="background-image:url(<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>)">
  <!-- <div class="gradient"></div> -->
  <div class="container">
    <h3><?php
    $category = get_queried_object();
    echo $category->cat_name;?></h3>
  </div>
</div>
<div id="content">
  <div class="container">
    <div class="row main">
      <div class="col-md-3">
        <ul class="nav-side">
          <?php wp_nav_menu( array( 'theme_location' => 'primary','container' => false, 'items_wrap'  => '%3$s', 'walker' => new My_Walker_Nav_Menu() ) ); ?>
        </ul>
        <!-- <div class="latest">
          <h4>latest news</h4>
        </div> -->
      </div>
      <div class="col-md-9 about">
        <p class="short">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>

      </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>
