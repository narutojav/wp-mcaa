<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php
	$thumb_id = get_post_thumbnail_id();
	$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', false);
?>
<div id="cover-img" style="background-image:url(<?php echo $thumb_url[0];   ?>)">
	<div class="container">
		<h3><?php the_title(); ?></h3>
	</div>
</div>

<div id="content">
	<div class="container">
		<div class="row">
			<!-- <ul class="active-cont">
				<li><a href="">Civil Aviation Authority</a></li>
				<li><a href=""> About CAAS</a></li>
				<li><a href=""> Events</a></li>
				<li><a href="">Safety Series Events</a></li>
			</ul> -->
		</div>
		<div class="row main">
			<div class="col-md-3">
				<ul class="nav-side">
					<?php wp_nav_menu( array( 'theme_location' => 'primary','container' => false, 'items_wrap'  => '%3$s', 'walker' => new My_Walker_Nav_Menu() ) ); ?>
				</ul>
				<div class="latest">
					<h4>latest news</h4>
				</div>
			</div>
				<div class="col-md-9">
					<article class="main-article">
						<div class="singleContentBlock">
							<?php the_content(); ?>
							<div style="text-align: right; display: block">
								<span id="lastModifiedDate" style="display:inline-block;font-style:italic;     margin-bottom: 20px;"><?php the_date(); ?></span>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
