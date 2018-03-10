<?php get_header(); ?>
<div class="row main">
  <?php
    $img_src = z_taxonomy_image_url($category->term_id);
    if ( $img_src ) {

        echo '<div id="cover-img" style="background-image:url('.$img_src.'">';

          echo '<div class="container">';
            echo'<h3>';
            $category = get_queried_object();
            echo $category->cat_name;
            echo '</h3>';
          echo '</div>';
        echo '</div>';
    } else {
        echo '<li>';
        $category = get_queried_object();
          echo $category->cat_name;
          echo '</li>';
    }

?>
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
            <?php
              $categories = get_the_category();
              foreach($categories as $key => $category) {
                $url = get_term_link((int)$category->term_id,'category');
                $categories[$key] =

                  "{$category->category_description}";
              }
              echo "\n" . implode("\n",$categories) . "\n";
            ?>
          </p>
          <?php while ( have_posts() ) : the_post(); ?>
          <?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', false);
            $excerpt = strip_tags($post->post_content);
                  if (strlen($excerpt) > 100) {
                  $excerpt = substr($excerpt, 0, 100);
                  $excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
                  $excerpt .= '...';
                  }
                  ?>
          <div class="col-md-6">
            <div class="img" style="background-image:url(<?php echo $thumb_url[0];   ?>);">
            </div>
            <a href=<?php the_permalink() ?>""><h3>
              <?php if (strlen("the_title()") > 50) { ?>
              <?php the_title(); ?>
          <?php } if (strlen("the_title()") < 50) { ?>
              <?php echo substr(get_the_title(), 0, 50); ?>...
          <?php } ?>
            </h3>
            <!-- <p><?php echo $excerpt; ?></p> -->
            </a>

          </div>
              <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
