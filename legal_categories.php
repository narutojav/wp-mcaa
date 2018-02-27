<?php
/**
* A Simple Category Template
*/

get_header(); ?> 



<div class="container-fluid scontenent">
<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>

<header class="archive-header">
<h1 class="archive-title">Category: <?php single_cat_title( '', false ); ?></h1>


<?php
// Display optional category description
 if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>
<?php while ( have_posts() ) : the_post(); ?>
      <a href="">
        
      <div class="col-sm-4 com-md-6">
        <img src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url();} ?>" class="img-responsive" alt="">
        <div class="tailbar"><?php the_title(); ?></div>
      </div>
      </a>
      <?php endwhile; 

else: ?>

<?php endif; ?>
</div>

<?php get_footer(); ?>