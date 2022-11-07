 <?php
    /*
    Template Name: Blog
    */
    get_header();
?>

	<section class="blog-container">
		<div class="">
		   <div class="container">
				<div class="row">

				<?php
					$args = array(
					'post_type' => 'post',
				    'orderby' => 'post_date',
				    //'posts_per_page' => 2
				);
				$query = new WP_Query($args);
				if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
				?>

						<div class="col-md-6 col-lg-4 col-sm-12">
							<a href="<?php the_permalink(); ?>">
							<div class="box-not">
								<h1 class="title-bolg"><?php the_title(); ?></h1>
								<p class="p-bolg"><?php the_excerpt(); ?></p>
							</div>
							</a>
						</div>
			<?php endwhile; endif; ?>
						
				  </div>
			</div>
		</div>
	</section>
	<span class="back-onda"></span>
	<?php get_footer(); ?>