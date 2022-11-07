 <?php
    /*
    Template Name: Ebook seja positiva
    */
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charSet="utf-8"/>
	<meta name="author" content="Max Silva"/>
	<meta name="application-name" content="Ebook - Como ser uma mulher positiva."/>
	<meta name="msapplication-TileColor" content="#FF760C"/>
	<meta name="theme-color" content="#FF760C"/>
	<meta name="viewport" content="initial-scale=1.0, width=device-width"/>
	<meta name="description" content="Você está preparada para aprender afirmações poderosas capazes de revolucionar a sua vida?"/>
	<meta property="og:title" content="Ebook - Como ser uma mulher positiva. "/>
	<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/assets/img/favicon.ico" />
	<meta property="og:url" content="http:www.amelhorvoce.com.br"/><meta property="og:site_name" content="A melhor Voce"/>
	<meta property="og:description" content="Você está preparada para aprender afirmações poderosas capazes de revolucionar a sua vida?"/>
	<meta property="og:type" content="website"/>
	<link rel="apple-touch-icon" href="<?= get_template_directory_uri(); ?>/assets/img/logo-a_melhor_voce.png"/>
	<meta property="og:image" itemprop="image" content="<?= get_template_directory_uri(); ?>/assets/img/logo-a_melhor_voce.png">
	
	<link rel="canonical" href="https://www.amelhorvoce.com.br/ebook-seja-uma-mulher-positiva"/>
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css"/>
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/grid.min.css"/>

	<title>A melhor você</title>
	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '3044753852296868'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=3044753852296868&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
</head>
<body>
		<nav class="nac-cla">
			   <div class="bar-princ">
					    <div class="container">
					        
						<label class="logo" ><img src="<?= get_template_directory_uri(); ?>/assets/img/logo_a_melhor_voce_nova.png" alt="logo A Melhor Você"></label>
						<span class="head-text" ><p class="title-head">Saiba como se tornar uma <strong>MULHER POSITIVA</strong>!</p></span>
					</div>
					
				</div>
		
		</nav>
	<section class="page-ebook positiva">
		<div class="container">
			<div class="cont-positiva">
				<div class="row">
					
						<div class="col-md-6 mob-b">
							<p class="tema-posit">Depois de ler esse ebook, você vai saber: </p>
							<ul>
								<li>Como usar o poder das AFIRMAÇÕES a seu favor.</li>

								<li>Como as suas CRENÇAS LIMITANTES te sabotam.</li>

								<li>Como aumentar sua AUTOESTIMA e ser uma mulher muito mais poderosa.</li>

								<li>Como ter PROSPERIDADE afirmando frases poderosas.</li>

								<li>O impacto das afirmações positivas na sua SAÚDE.</li>

								<li>Como você pode melhorar seu RELACIONAMENTO (ou conseguir um).</li>

								<li>Como você pode evoluir no seu TRABALHO usando suas palavras.</li>
								
							</ul>
						
						</div>
						<div class="col-md-6 mob-a"><img class="img-book" src="<?= get_template_directory_uri(); ?>/assets/img/livro-page.png" align="Ebook Como Ser uma Mulher Positiva"></div>
				
				</div>
		</div>
		</div>
	</section>
	<section id="ebook-mulher-positiva" class="page-ebook-2 positiva">
		<p>Você está preparada para aprender <strong>AFIRMAÇÕES PODEROSAS</strong> capazes de revolucionar a sua vida?</p>
		<button class="btn-book" onclick="iniModal('modal-emp')">QUERO MEU EBOOK AGORA</button>
	</section>

    <!-- modal -->

    <div id="modal-emp" class="modal-container">
        <div class="modal">
            <button class="fechar">X</button>
            <div class="row" class="for-center">
              <h3 class="subtitulo"></h3>
            </div>
            <span id="loading" style="display: none;" align="center"><img src="<?= get_template_directory_uri(); ?>/assets/img/loading.gif" style="max-width: 50px; display: block; margin: 0 auto;"></span>
            <p id="msg-ebook" style="color: #cc8e0a !important;
    background: #e6d2d1 !important;
    padding: 8px;
    border-radius: 9px;
    font-family: 'FwY';
    font-size: 14px;
    position: relative; display: none;">Parabéns! Você está a um passo de se tornar uma mulher positiva! Verifique seu email.</p>
    
    <!-- Formulário -->
  <!-- <link rel='stylesheet' href='https://blob.llimages.com/machine-files/all-css/form-ll.css'>
   <form action="/" method="post" id="form" >  
   <input id="id" name="id" type="hidden" value="425042" />  
   <input id="pid" name="pid" type="hidden" value="15451786" />  
   <input id="list_id" name="list_id" type="hidden" value="425042" />  
   <input id="provider" name="provider" type="hidden" value="leadlovers" />   
   <label for="name">Nome:</label>   
   <input class="form-control form-ll" id="name" name="name" placeholder="Informe o seu nome" type="text" class="input-emp"  />   
   <label for="email">E-mail:</label>   
   <input class="form-control form-ll" id="email" name="email" placeholder="Informe o seu melhor email" type="text" class="input-emp" />  
   <button class="btn btn-danger" style="background-color: #c59e96;
    border-color: #c59e96; margin:15px 0 5px;      width: 100%;" type="submit">QUERO MEU EBOOK AGORA</button>  
   <input type="hidden" id="source" name="source" value="" />  
   <img src="https://llimages.com/redirect/redirect.aspx?A=V&p=15451786&m=425042" style="display: none;" />
</form>-->

            
           <form action="/" method="post" id="form">
           <input id="id" name="id" type="hidden" value="467398" />  
                               <input id="mid" name="mid" type="hidden" value="467398" />  
								<input id="pid" name="pid" type="hidden" value="16661415" />  
                               <input id="list_id" name="list_id" type="hidden" value="467398" />  
                               <input id="provider" name="provider" type="hidden" value="leadlovers" /> 
                               <input type="hidden" id="source" name="source" value="" />  
           <input type="hidden" id="source" name="source" value="" />  
                <div class="row">
                  <input type="text" id="nome" name="nome" class="input-emp" placeholder="Seu Nome" required>
                </div>
                <div class="row">
                  <input type="email" id="email" name="email" class="input-emp" placeholder="Seu melhor email" required>
                </div>
                <div class="row">
                  <button type="submit" class="uf-submit" class="input-emp uf-submit">Baixar Ebook</button>
                </div>
            </form>
            
            
        </div>
    </div>
    <!-- fim modal -->

<footer class="rodape">
		<!--<div class="rodape-back-1">
			<div class="social">
				<ul >
					<li class="folha-rodape-dir"></li>
					<li class="folha-rodape-esq folha-rodape-dir"><a href="" target="_blank"><img src="<?= get_template_directory_uri(); ?>/assets/img/insta.png" alt="Logo Instagram"></a></li>
				</ul>
			</div>
		</div>
		<div class="rodape-back-2">
			<p><strong></br>&copy; 2020 Todos os direitos reservados.</p>
		</div>-->
		<div class="rodape-back-1">
			<div class="social">
				<ul >
					<!--<li class="folha-rodape-dir"><a href="https://www.facebook.com/amelhorvoce" target="_blank"><img src="<?= get_template_directory_uri(); ?>/assets/img/face.png" alt="Logo Facebook"></a></li>-->
					<li class="folha-rodape-dirr folha-rodape-esq"><a href="https://instagram.com/cynthiabcunhaa" target="_blank"><img src="<?= get_template_directory_uri(); ?>/assets/img/insta.png" alt="Logo Instagram"></a></li>
				</ul>
			</div>
		</div>
		<div class="rodape-back-2">
			<p><!--Designed by <strong><a href="" target="_blank">Pablo Phaedra</a></strong> and Developed by <strong><a href="" target="_blank">Max Silva</a></strong></br>--><strong>&copy; 2020 Todos os direitos reservados.</strong></p>
		</div>
	</footer>
	<script type="text/javascript">

		/* Ativar Modal */
        function iniModal(modalId){
            const modal = document.getElementById(modalId);
            modal.classList.add('mostrar');
            modal.addEventListener('click', (e)=>{
                if(e.target.id == modalId || e.target.className == 'fechar'){
                    modal.classList.remove('mostrar');
                }
            });
        }
	</script>
	<script src="<?= get_template_directory_uri(); ?>/assets/js/jq.min.js"></script>
	<script>
    	$( document ).ready(function() {
    	    
    	           /* $( "#form" ).submit(function( event ) {
              
                            event.preventDefault();
                           // var dados = $(this).serialize();
                           var nme = $( "#nome" ).val();
                           var eml = $( "#email" ).val();
                     
                           $.ajax({
                              url: "<?= get_template_directory_uri(); ?>/api/mailchimp.php",
                              type: 'POST',
                              data: {email: eml , nome: nme},
                              beforeSend: function(){
                                  $("#loading").show();
                              }
                            })
                            
                            .done(function(data) {
                               
                                $("#loading").hide();
                                $("#msg-ebook").show();
                            });
                    });
                    */
                    /**/
                    
                    
                     $( "#form" ).submit(function( event ) {
              
                            event.preventDefault();
                           // var dados = $(this).serialize();
                           var nme = $( "#nome" ).val();
                           var eml = $( "#email" ).val();
                           var id1 = $( "#id" ).val();
                           var pid1 = $( "#pid" ).val();
                           var list_id1 = $( "#list_id" ).val();
                           var provider1 = $( "#provider" ).val();
                     
                           $.ajax({
                              url: "https://paginas.rocks/Pages/Index/16661415",
                              type: 'POST',
                              data: {name: nme, email: eml,id: id1, pid: pid1, list_id: list_id1, provider: provider1},
                              beforeSend: function(){
                                  $("#loading").show();
                              }
                            })
                            .always(function() {
                                $("#loading").hide();
                                $("#msg-ebook").show();
                              });
                            
                          
                    });
                    /**/

               
         });
	
	    
	</script>
</body>
</html>