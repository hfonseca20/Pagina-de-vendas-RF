 <?php
    /*
    Template Name: Ebook
    */
    get_header();
?>

	<section class="page-ebook">
		<img class="img-book" src="<?= get_template_directory_uri(); ?>/assets/img/livro-page.png" align="Ebook Como Ser uma Mulher Positiva">
	</section>
	<section class="page-ebook-2">
		<p>Você vai aprender a ser uma mulher mais <strong>positiva</strong> 
usando o poder das afirmações.</p>
		<button class="btn-book" onclick="iniModal('modal-emp')">BAIXAR EBOOK </button>
	</section>

    <!-- modal -->

    <div id="modal-emp" class="modal-container">
        <div class="modal">
            <button class="fechar">X</button>
            <div class="row" class="for-center">
              <h3 class="subtitulo"></h3>
            </div>
            <?php echo do_shortcode( '[yikes-mailchimp form="1"]' ); ?>
           <!-- <form>
                <div class="row">
                  <input type="text" name="nome" class="input-emp" placeholder="Seu Nome" required>
                </div>
                <div class="row">
                  <input type="email" name="email" class="input-emp" placeholder="Seu melhor email" required>
                </div>
                <div class="row">
                  <button type="submit" class="uf-submit" class="input-emp uf-submit">Baixar Ebook</button>
                </div>
            </form>-->
        </div>
    </div>
    <!-- fim modal -->
	<?php get_footer(); ?>