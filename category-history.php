<?php get_header(); ?>
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
    <div class="container1">
      <div class="row main">

        <div class="col-md-12 ">
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
                  <section class="timeline">
                    <ol>
                      <?php
                				$postq2 = new WP_Query(
                				 array(
                					'post_type' =>'post',
                					'posts_per_page' => 300,
                					'category_name'=>'history')
                				);
                				if($postq2->have_posts()):
                						while ( $postq2->have_posts() ) :
                				$postq2->the_post();?>
                			<?php
                			$thumb_id = get_post_thumbnail_id();
                			$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', false);
                			$excerpt = strip_tags($post->post_content);
                						if (strlen($excerpt) > 200) {
                						$excerpt = substr($excerpt, 0, 200);
                						$excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
                						$excerpt .= '...';
                						}
                			?>
                      <li>
                        <div>
                          <time><?php the_title(); ?></time> <?php echo $excerpt; ?>
                        </div>
                      </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                      <li></li>
                    </ol>

                    <div class="arrows">
                      <a class="arrow arrow__prev disabled" disabled>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_prev.svg" alt="prev timeline arrow">
                      </a>
                      <a class="arrow arrow__next">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_next.svg" alt="next timeline arrow">
                      </a>
                    </div>
                  </section>

                </div>
              </div>
            </div>
          </div>



          <style media="screen">
            .section {
              background: #F45B69;
              padding: 50px 0;
            }

            .section .container {
              width: 90%;
              max-width: 1200px;
              margin: 0 auto;
              text-align: center;
            }

            .section h1 {
              font-size: 2.5rem;
            }

            .section h2 {
              font-size: 1.3rem;
            }


            /* TIMELINE
–––––––––––––––––––––––––––––––––––––––––––––––––– */

            .timeline {
              white-space: nowrap;
              overflow-x: hidden;
            }

            .timeline ol {
              font-size: 0;
              width: 100vw;
              padding: 250px 0;
              transition: all 1s;
            }

            .timeline ol li {
              position: relative;
              display: inline-block;
              list-style-type: none;
              width: 160px;
              height: 3px;
              background: #fff;
            }

            .timeline ol li:last-child {
              width: 280px;
            }

            .timeline ol li:not(:first-child) {
              margin-left: 14px;
            }

            .timeline ol li:not(:last-child)::after {
              content: '';
              position: absolute;
              top: 50%;
              left: calc(100% + 1px);
              bottom: 0;
              width: 12px;
              height: 12px;
              transform: translateY(-50%);
              border-radius: 50%;
              background: #F45B69;
            }

            .timeline ol li div {
              position: absolute;
              left: calc(100% + 7px);
              width: 280px;
              padding: 15px;
              font-size: 1rem;
              white-space: normal;
              color: black;
              background: white;
            }

            .timeline ol li div::before {
              content: '';
              position: absolute;
              top: 100%;
              left: 0;
              width: 0;
              height: 0;
              border-style: solid;
            }

            .timeline ol li:nth-child(odd) div {
              top: -16px;
              transform: translateY(-100%);
            }

            .timeline ol li:nth-child(odd) div::before {
              top: 100%;
              border-width: 8px 8px 0 0;
              border-color: white transparent transparent transparent;
            }

            .timeline ol li:nth-child(even) div {
              top: calc(100% + 16px);
            }

            .timeline ol li:nth-child(even) div::before {
              top: -8px;
              border-width: 8px 0 0 8px;
              border-color: transparent transparent transparent white;
            }

            .timeline time {
              display: block;
              font-size: 1.2rem;
              font-weight: bold;
              margin-bottom: 8px;
            }


            /* TIMELINE ARROWS
–––––––––––––––––––––––––––––––––––––––––––––––––– */

            .timeline .arrows {
              display: flex;
              justify-content: center;
              margin-bottom: 20px;
            }

            .timeline .arrows .arrow__prev {
              margin-right: 20px;
            }

            .timeline .disabled {
              opacity: .5;
            }

            .timeline .arrows img {
              width: 45px;
              height: 45px;
            }


            /* GENERAL MEDIA QUERIES
–––––––––––––––––––––––––––––––––––––––––––––––––– */

            @media screen and (max-width: 599px) {
              .timeline ol,
              .timeline ol li {
                width: auto;
              }

              .timeline ol {
                padding: 0;
                transform: none !important;
              }

              .timeline ol li {
                display: block;
                height: auto;
                background: transparent;
              }

              .timeline ol li:first-child {
                margin-top: 25px;
              }

              .timeline ol li:not(:first-child) {
                margin-left: auto;
              }

              .timeline ol li div {
                width: 94%;
                height: auto !important;
                margin: 0 auto 25px;
              }

              .timeline ol li div {
                position: static;
              }

              .timeline ol li:nth-child(odd) div {
                transform: none;
              }

              .timeline ol li:nth-child(odd) div::before,
              .timeline ol li:nth-child(even) div::before {
                left: 50%;
                top: 100%;
                transform: translateX(-50%);
                border: none;
                border-left: 1px solid white;
                height: 25px;
              }

              .timeline ol li:last-child,
              .timeline ol li:nth-last-child(2) div::before,
              .timeline ol li:not(:last-child)::after,
              .timeline .arrows {
                display: none;
              }
            }
          </style>
        </div>
      </div>

    </div>
  </div>
  <?php get_footer(); ?>
