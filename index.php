<?php get_header()?>
<!-- SLider -->
<div id="slider">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<?php $query = new WP_Query('category_name=slide', 'posts_per_page=3' );?>
			<?php
			if ($query-> have_posts()) : ?>
			<?php while ($query->have_posts()) : $query->the_post(); ?>
			<?php
			$thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', false);
			$excerpt = strip_tags($post->post_content);
						if (strlen($excerpt) > 400) {
						$excerpt = substr($excerpt, 0, 400);
						$excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
						$excerpt .= '...';
						}
			?>
			<div class="swiper-slide" style="background-image: url('<?php echo $thumb_url[0] ?>');">
				<div class="container slide">
					<div class="post">
						<div class="title">
							<?php the_title(); ?>
						</div>
						<p>
							<?php echo $excerpt ?>
						</p>
						<a href="<?php the_permalink() ?>">Registration</a>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination"></div>
	</div>
</div>
<!-- News -->
<div id="news" class="container">
	<div class="col-md-9">
		<h4>Latest press releases and speeches</h4>
		<div class="row">
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
			
		</div>
	</div>
	<div class="col-md-3 banner"><img src="images/corsia.jpg" alt=""></div>
</div>
<!-- legal -->
<div id="legal" class="legal-bg">
	<div class="bg"></div>
	<div class="container legal">
		<div class="col-md-3">
			<div class="title">
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon1.png" alt="">
				<h4>Legislation</h4>
			</div>
			<ul>
				<li>Suspected unapproved parts</li>
				<li>Control of unserviceable and scrap parts</li>
				<li>Aircraft leasing procedure manual</li>
				<li>Air operators</li>
				<li>Air navigation services</li>
				<li>Aerodrome</li>
				<li>Aviation metrology</li>
			</ul>
		</div>
		<div class="col-md-3">
			<div class="title">
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon1.png" alt="">
				<h4>Regulations</h4>
			</div>
			<ul>
				<li>Suspected unapproved parts</li>
				<li>Control of unserviceable and scrap parts</li>
				<li>Aircraft leasing procedure manual</li>
				<li>Air operators</li>
				<li>Air navigation services</li>
				<li>Aerodrome</li>
				<li>Aviation metrology</li>
			</ul>
		</div>
		<div class="col-md-3">
			<div class="title">
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon1.png" alt="">
				<h4>Guidelines & Advisory</h4>
			</div>
			<ul>
				<li>Suspected unapproved parts</li>
				<li>Control of unserviceable and scrap parts</li>
				<li>Aircraft leasing procedure manual</li>
				<li>Air operators</li>
				<li>Air navigation services</li>
				<li>Aerodrome</li>
				<li>Aviation metrology</li>
			</ul>
		</div>
		<div class="col-md-3">
			<h4>Fly It Safe</h4>
			<p>In Singapore, aerial activities – such as the flying of kites or unmanned aircraft – are becoming increasingly popular...</p>
			<a>Read more</a>
		</div>
	</div>
</div>
<!-- partner -->
<div id="partner">
	<div class="container">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php
				$args = array( 'post_type' => 'partner', 'posts_per_page' => 100,  'order' => 'ASC' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product;
				?>				
				<?php
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
				?>
				<div class="swiper-slide">
					<a href="http://<?php the_title(); ?>/" target="_blank"><img src="<?php echo $thumb_url[0] ?>" alt="" /></a>
				</div>
				<?php 
				$all = get_field('orgaznization'); 
				$pieces = explode(" ", $all);
				echo $pieces[0];
				echo $pieces[1];
				?>
				<?php endwhile; ?>
				<?php $s++; wp_reset_query(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer()?>