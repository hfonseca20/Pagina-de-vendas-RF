
 <?php get_header(); ?>
	<section class="coluna">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="coluna-text">
				<h1 class="title-blog"><?php the_title(); ?></h1>

				<?php the_content(); ?>
			</div>

 		<?php endwhile; endif; ?>

	</section>
<!--	<section class="email-inter">
		<div>
			<div class="col-md-12">
				<div class="email-campo">
					<p class="single-email">Informe seu email e receba atualizações</p>
					<form action="">
						<input type="text" name="" placeholder="Digite seu melhor email">
						<button type="submit" class="btnn">Enviar!</button>
					</form>
				</div>
			</div>
		</div>
	</section>-->
	<hr>
<?php get_footer(); ?>