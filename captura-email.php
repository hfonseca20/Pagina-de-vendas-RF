<?php
    /*
    Template Name: Captura de Email
    */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charSet="utf-8"/>
	<meta name="author" content="Max Silva - maxleandro2@gmail.com"/>
	<meta name="application-name" content="A melhor você"/>
	<meta name="msapplication-TileColor" content="#FF760C"/>
	<meta name="theme-color" content="#FF760C"/>
	<meta name="viewport" content="initial-scale=1.0, width=device-width"/>
	<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/assets/img/favicon.ico" />
	<meta name="description" content="Para Você conseguir ser feliz com alguém, você tem que aprender a ser feliz sozinha."/>
	<meta property="og:title" content="A melhor Você "/>
	<meta property="og:url" content="http:www.amelhorvoce.com.br"/><meta property="og:site_name" content="A melhor Voce"/>
	<meta property="og:description" content="Para Você conseguir ser feliz com alguém, você tem que aprender a ser feliz sozinha."/>
	<meta property="og:image" content="<?= get_template_directory_uri(); ?>/assets/img/logo-a_melhor_voce.png">
	<meta property="og:type" content="website"/>
	<link rel="apple-touch-icon" href="/icon_192.png"/>
	<link rel="canonical" href="http:www.amelhorvoce.com.br"/>
	<title>Cynthia Cunha</title>
	<meta name="google-site-verification" content="wMGE53EXXf4Yh_iN4PAkiOVEN_SDbbBRwxfqJwwdAcI" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
	 <?php wp_head(); ?>

<style type="text/css">

	 	   /* site novo pagina ebook */

html {
    margin-top: 0px !important;
}

body {
 margin-top: 30px;"
}



.formulario {

    font-family: 'FwY';
    color: #fff;
    text-align: center;
    background: #1d0008;
    background: #1d0008;
    position: relative;
 


}



.text-cabecario01 {
    
    font-size: 20px;
    padding-top: 90px;
    text-align: center;
    color: white;
   /* padding-left:70px;*/
    padding-bottom: 70px;
    letter-spacing: 0px;
    word-spacing: 1px;
    line-height: 40px;
    font-family: 'Montserrat';

}



.btn-page-ebook {
    font-family: 'Montserrat';
    background: transparent;
    padding: 12px 39px;
    border-radius: 8px;
    font-size: 18px;
    color: #fff;
    display: block;
    margin: 60px auto 0 auto;
    border: 2px solid #ffffff;
}


.box-22::after{
    content: '';
    display: block;
    height: 158px;
    width: 100%;
    background: url('<?= get_template_directory_uri(); ?>/assets/img/bar-novoo_.png') no-repeat;
    background-size: cover;

}

.img_fundo {

  background: url('<?= get_template_directory_uri(); ?>/assets/img/fundo_ebook01.jpg') no-repeat;
  background-size: cover;
}



form#form {
    margin-top: 67px;
}


/*box 2*/

.box-22::after{
    content: '';
    display: block;
    height: 158px;
    width: 100%;
    background: url('assets/img/barra-nova-1-02.png') no-repeat;
    background-size: cover;

}

.box-22 label{
    color: #ffffff;
    font-family: Montserrat;
    /*color: #ad6d40;*/
    font-size: 17px;
    font-weight: 600;
    display: block;
    margin: 25px 0 8px 11px;
}

.box-22 button:hover{
    background: #cc8e0a;
    cursor: pointer;
}

.box-22 input {
    border: none;
    padding: 13px 18px;
    font-size: 18px;
    border-radius: 11px;
    width: 100%;
}
.box-22 input:hover { 
    background: #ecd4d0;
}


/*------------*/

 @media(max-width: 991px){
       .img-back-2 {
            text-align: center;
            margin: 0px 0px !important;
            display: none;
        }
}

		 
@media(max-width: 766px){
	
.text-cabecario01 {
    margin-left: -42px;
	
 }


}

@media(max-width:680px){


   .text-cabecario01{
   	font-size: 14px;
	margin-left: -30px;

   }



   form#form {
    margin-top: 10px;
    }
    .box-2 {
    padding-top: 10px;
    background: #1d0008;
    }

}
		 
@media (max-width:480px) {

.text-cabecario01 {
    margin-left: -30px;
 }

}		 

.center01 {
    margin: auto !important;

}	

.btn-botao {
    background: transparent;
    padding: 16px 39px;
    border-radius: 8px;
    color: #fff;
    font-weight: 800;
    display: block;
    font-family: arial;
    font-size: 25px;
    margin: 50px auto 0 auto;
    border: 2px solid #ffffff;
}	 
		 
		 
	 	
</style>

</head>


<body class="img_fundo" >

  <!--Cabeçario -->

    <header>
        <div class="container">
            <div class="row" >
  		
  		        <div class="center01">

                    <div class="text-cabecario01"> 				
                        <h2>Quero receber o e-mail <br>de domingo!</h2>

  			        </div>

  		        </div>
  		
            </div>

        </div>
    </header>

	<!--secao formulario -->

<section class="box-22 center01" id="box-2">
	<div class="center01">
		<div class="row center01">
				
			<div class="col-lg-6 col-sm-8 center01">
								
						
				<span id="loading" style="display: none;" align="center"><img src="http://cynthiacunha.com.br/wp-content/themes/cynthia/assets/img/loading.gif" style="max-width: 50px; display: block; margin: 0 auto;"></span>
                <p id="msg-ebook" class="yikes-easy-mc-success-message" style="display: none;">Parabéns! Você está a um passo de se tornar uma mulher positiva! Verifique seu email.</p>	
					
												   

                <!---inicio novo formulario-->
                <form action="https://paginas.rocks/pages/index/467398" method="post" >
                    <input id="id" name="id" type="hidden" value="467398" />
                    <input id="mid" name="mid" type="hidden" value="467398" />
                    <input id="pid" name="pid" type="hidden" value="20410869" />
                    <input id="list_id" name="list_id" type="hidden" value="467398" />
                    <input id="provider" name="provider" type="hidden" value="leadlovers" />
                    <label for="name">Nome:</label>
                    <input class="form-control form-ll" id="name" name="name" placeholder="Digite seu nome" type="text"  />
                    <label for="email">E-mail:</label>
                    <input class="form-control form-ll" id="email" name="email" placeholder="Digite seu melhor e-mail" type="text" />

                    <button class="btn btn-danger btn-page-ebook btn-botao" type="submit">Quero Receber!</button>
                    <input type="hidden" id="source" name="source" value="" />
                    <img src="https://llimages.com/redirect/redirect.aspx?A=V&p=20410869&m=467398" style="display: none;" />
                </form>
												
			</div>


		</div>
	</div>
</section>


</body>
</html>


