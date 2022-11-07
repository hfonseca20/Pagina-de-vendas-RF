<?php
    /*
    Template Name: Pagina telegram
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



.text-cabecario {
    font-family: manta;
    font-size: 59px;
    color: white;
    letter-spacing: 3px;
    word-spacing: 3px;
    line-height: 110px;
    margin-bottom: -20px;
	margin-top: -25px;
    text-align: center;

}
 

.text-cabecario01 {
    
    font-size: 20px;
    padding-top: 16px;
    text-align: center;
    color: white;
    padding-bottom: 0px;
    letter-spacing: 0px;
    word-spacing: 1px;
    line-height: px;
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

@media(max-width: 990px){
    .text-cabecario {
    font-size: 49px;
    color: white;
    padding-left:5px;
    padding-top:15px ;
    letter-spacing: ;
    word-spacing: ;
    line-height: 90px; 

   
}

}

		 
@media(max-width: 766px){
	
.text-cabecario01 {
    margin-left: -42px;
	
 }

 .text-cabecario {
    font-size: 52px;
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

 .text-cabecario {
    font-size: 32px;
 }

.text-cabecario01 {
    font-size: 12px;
    margin-left: -10px;
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

.btn-page-ebook {
    font-family: 'Montserrat';
    background: #1B98E0;
    padding: 12px 39px;
    border-radius: 8px;
    font-size: 24px;
    color: #fff;
    display: table;
    margin: 60px auto 0 auto;
    border: 1px solid #ffffff;
    text-align: center;
}
		 
		 
	 	
</style>

</head>


<body class="img_fundo" >

  <!--Cabeçario -->

    <header>
        <div class="container">
            <div class="row" style="margin-top:-60px" >
  		
  		        <div class="center01">
                    <div class="col-12 text-cabecario01 " >
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/foto-email.png" width="50%">

                    </div>
 
                    <div class="col-12 text-cabecario " style="">
                        <p>Maravilha, lindona!</p>
            
                    </div>
  		        </div>
  		
            </div>

        </div>
    </header>

	<!--secao formulario -->

<section class="box-22 center01" id="box-2">
	<div class="center01">
 
		<div class="row center01">
				
			<div class="col-lg-7 col-sm-9 center01">
		      <h3 class="text-cabecario01">Vamos nos comunicar, a partir de agora,<br>
              também por e-email!</h3>

              <h3 class="text-cabecario01">Aproveita e entra no meu Canal do TELEGRAM<br>
              para receber conteúdo que só dou lá!</h3>


             <div>

                   <a href="https://t.me/amelhorvoce" class="btn btn-page-ebook">TELEGRAM</a>
                
             </div>
             
												
			</div>

		</div>
	</div>
</section>


</body>
</html>

