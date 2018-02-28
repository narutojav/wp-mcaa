<?php $query = new WP_Query( array('category_name=news',  'posts_per_page' => 3 )  );?>
<?php
if ($query-> have_posts()) : ?>
<?php while ($query->have_posts()) : $query->the_post(); ?>
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
<div class="col-md-4 news">
  <img src="<?php echo $thumb_url[0] ?>" alt="">
  <h5><?php the_title(); ?></h5>
  <p><?php echo $excerpt; ?></p>
  <a href="<?php the_permalink() ?>">Read more</a>
</div>
<?php endwhile; ?>
<?php endif; ?>
