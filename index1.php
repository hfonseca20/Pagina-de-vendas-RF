 <?php 
   /*
    Template Name: Home
    */
 get_header(); ?>
<header class="main">
      <nav>
        <div class="container">
          <label class="logo" ><a href="http://cynthiacunha.com.br/">Cynthia Cunha</a></label>
          <span id="mobile-btn" class="mobile-btn"></span>
          <ul id="menu" class="menu menujs">
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#ebook">Ebook</a></li>
            <!--<li><a href="https://www.amelhorvoce.com.br/blog">Blog</a></li>-->
            <li><a href="#instagram">Instagram</a></li>
            <li><a href="#contato">Contato</a></li>
          </ul>
        </div>
      </nav>
      <div class="container">
         <div class="frase">
          <p>RESGATE SUA ESSÊNCIA FEMININA</p>
          <p>Participe do meu <br>canal do Telegram</p>
          <a href="https://t.me/amelhorvoce"><button class="btn-saiba-mais">SAIBA MAIS</button></a> 
            <!--<div class="col-md-6">
              <div class="img-back">
              <!--<img src="<?= get_template_directory_uri(); ?>/assets/img/Cynthia_Cunha_main.png" alt="Cintia Cunha">
              </div>
            </div>-->
        </div>
      </div>
  </header>

  <section id="ebook"  class="box-2" id="box-2">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="img-back-4">
              <img src="<?= get_template_directory_uri(); ?>/assets/img/capa_ebook.png" alt="Livro como ser uma mulher positiva" alt="Ebook Como Ser uma Mulher Positiva">
            </div>
          </div>
          <div class="col-md-6">
            <p class="title-book">Baixe grátis meu eBook ‘’Feminina no Primeiro Encontro”</p>
            
            
               <span id="loading" style="display: none;" align="center"><img src="<?= get_template_directory_uri(); ?>/assets/img/loading.gif" style="max-width: 50px; display: block; margin: 0 auto;"></span>
            <p id="msg-ebook" class="yikes-easy-mc-success-message" style="display: none;">Parabéns! Você está a um passo de se tornar uma mulher positiva! Verifique seu email.</p>  
            
            
             <!-- Início Formulário -->
          <form action="https://paginas.rocks/pages/index/467398" method="post" >
          <input id="id" name="id" type="hidden" value="467398" />
          <input id="mid" name="mid" type="hidden" value="467398" />
          <input id="pid" name="pid" type="hidden" value="19961889" />
          <input id="list_id" name="list_id" type="hidden" value="467398" />
          <input id="provider" name="provider" type="hidden" value="leadlovers" />
          <label for="name">Nome*</label>
          <input class="form-control form-ll" id="name" name="name" placeholder="Digite seu nome" type="text"  />
          <label for="email">E-mail*</label>
          <input class="form-control form-ll" id="email" name="email" placeholder="Digite seu melhor email" type="text" />

          <button class="btn btn-danger"  type="submit" class="btn">BAIXAR EBOOK</button>
          <input type="hidden" id="source" name="source" value="" />
          <img src="https://llimages.com/redirect/redirect.aspx?A=V&p=19961889&m=467398" style="display: none;" />

        </form>  <!--Fim Fomulario Ativo -->
             
             <!--Inicio Formulario inativo--->
            <!--
            <form action="" id="form">
                 <input id="id" name="id" type="hidden" value="467398" />  
                               <input id="mid" name="mid" type="hidden" value="467398" />  
                <input id="pid" name="pid" type="hidden" value="16661415" />  
                               <input id="list_id" name="list_id" type="hidden" value="467398" />  
                               <input id="provider" name="provider" type="hidden" value="leadlovers" /> 
                               <input type="hidden" id="source" name="source" value="" /> 

              <label>Nome*</label>
              <input id="nome" type="text" name="name" placeholder="Digite seu nome">
              <label>Email*</label>
              <input id="email" type="text" name="email" placeholder="Digite seu melhor email">
              <button type="submit" class="btn">BAIXAR EBOOK</button>

            </form>-->
			  
			  <!-- Fim Formulário -->
            
          </div>
        </div>
      </div>
    </section>

    <section id="instagram" class="insta folha-insta">
    <h2><a href="https://instagram.com/cynthiabcunhaa" target="_blank">Siga-me no Instagram</a></h2>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="insta-bloco">
            <a href="https://instagram.com/cynthiabcunhaa" target="_blank" ><img src="<?= get_template_directory_uri(); ?>/assets/text/nova01.png"></a>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="insta-bloco">
            <a href="https://instagram.com/cynthiabcunhaa" target="_blank"><img src="<?= get_template_directory_uri(); ?>/assets/text/nova02.png" alt=""></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="insta-bloco">
            <a href="https://instagram.com/cynthiabcunhaa" target="_blank"><img src="<?= get_template_directory_uri(); ?>/assets/text/nova03.png" alt=""></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="insta-bloco">
            <a href="https://instagram.com/cynthiabcunhaa" target="_blank"><img src="<?= get_template_directory_uri(); ?>/assets/text/nova04.png" alt=""></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="insta-bloco">
            <a href="https://instagram.com/cynthiabcunhaa" target="_blank"><img src="<?= get_template_directory_uri(); ?>/assets/text/nova05.png" alt=""></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="insta-bloco">
            <a href="https://instagram.com/cynthiabcunhaa" target="_blank"><img src="<?= get_template_directory_uri(); ?>/assets/text/nova06.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contato" class="contato">
	  <?php echo do_shortcode( '[contact-form-7 id="28" title="Contato"]' ); ?>
	 
	  
	<!--  Início Formulario Inativo Contato ----
    <div class="container">

      <div class="box-contato">
        <h3>Contato</h3>
        <div class="row">
          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Nome*</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu nome">
          </div>
          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label"><span style="color: transparent;">sss<span></label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Sobrenome">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="exampleFormControlInput1" class="form-label">Email*</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu email">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="exampleFormControlInput1" class="form-label">Assunto*</label>
              <input type="email" class="form-control" placeholder="Digite o assunto" id="exampleFormControlInput1">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-floating">
               <label for="floatingTextarea">Mensagem*</label>
              <textarea class="form-control" id="floatingTextarea"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <button type="submit" class="btnnn">ENVIAR</button>
			
        </div>
      </div>
    </div> ---Fim fomulario inativo Contato  -->
		  
  </section>    
		
    <section id="sobre" class="box">
      <div class="container">
        <div class="row">
          <div  class="col-md-12 col-lg-6 col-sm-12">
            <h3>Quem é Cynthia Cunha</h3>
            <div class="frase-2">
              <p>Olá lindona, tudo bem?
              Eu ensino mulheres a respeitarem
              sua essência feminina e sentirem
              todo o poder de sua feminilidade.</p>
              <hr>
              <p>Fico muito feliz de você estar aqui!
              Com amor, Cynthia Cunha.</p>
          
            </div>
          </div>
          <div class="col-md-12 col-lg-6 col-sm-12">
            <div class="img-back-2">
              <img class="pull-right" src="<?= get_template_directory_uri(); ?>/assets/img/IMG_3168.png" alt="Cintia- A melhor você">
            </div>
          </div>
        </div>  
      </div>    
    </section>
<?php get_footer(); ?>