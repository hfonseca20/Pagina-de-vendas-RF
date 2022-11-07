 <?php
    /*
    Template Name: Ebook MP
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

.instanovo {
    padding: 34px 0px 20px 0px;
    text-align: center;
    background: #1d0008;
    background: #1d0008;
    position: relative;
}

.instanovo h2 {
    font-family: 'FwY';
    color: #cc8e0a;
    padding: 0px 8px;
    display: block;
    margin: 15px auto 26px auto;
    max-width: 350px;
    text-align: center;
    font-size: 30px;
}

.instanovo h2 a {
    color: #fff;
	word-spacing: 6px;
	letter-spacing:1px;
}

.instanovo img {
    margin: 30px 5px;
    border: 1px solid #e5d3d0;
	max-width: 80%;

}

.formulario {

    font-family: 'FwY';
    color: #fff;
    text-align: center;
    background: #1d0008;
    background: #1d0008;
    position: relative;
 


}

.espaco {
    margin: 35px;
}


.text-cabecario {
    font-family: manta;
    font-size: 90px;
    color: white;
    letter-spacing: 3px;
    word-spacing: 3px;
    line-height: 110px;


}

.text-cabecario01 {
    
    font-size: 20px;
    padding-top: 90px;
    color: white;
    padding-left:70px;
    padding-bottom: 50px;
    letter-spacing: 0px;
    word-spacing: 1px;
    line-height: 35px;
    font-family: 'Montserrat';

}

.text-cabecario02 {
    
    font-size: 20px;
    color: white;line-height: 30px;
    padding-left:70px;
    padding-bottom: 15px;
    letter-spacing: 0px;
    word-spacing: 1px;
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

/*
.box-2 {
    padding-top: 50px;
    background: #1d0008;
}
*/

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

.roda_pe_novo img {
    width: 100%;
    margin-top: -400px;
   

}





form#form {
    margin-top: 67px;
}


/*box 2*/

/*
.box-2 {
    padding-top: 50px;
    background: #530920;
}
*/

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
    font-size: 80px;
    color: white;
    padding-left:5px;
    padding-top:15px ;
    letter-spacing: ;
    word-spacing: ;
    line-height: 90px; 

   
}

}
		 
@media(max-width: 766px){
    .text-cabecario {
    font-size: 55px;
    color: white;
    padding-left:5px;
    padding-top:15px ;
    letter-spacing: ;
    word-spacing: ;
    line-height: 65px; 
	

}
	
.text-cabecario01 {
    margin-left: -42px;
	
 }

 .text-cabecario02 {
    margin-left: -42px;
	
 }

}

@media(max-width:680px){

    .text-cabecario {
    font-size: 50px;
    color: white;
    padding-left:;
    padding-top:10px ;
    letter-spacing: ;
    word-spacing: ;
    line-height: 55px; ;
}

   .text-cabecario01{
   	font-size: 14px;
	margin-left: -30px;

   }

   .text-cabecario02{
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
    color: white;
    padding-left:12px;
    padding-top:10px ;
    letter-spacing: ;
    word-spacing: ;
    line-height: 55px; ;
}

.text-cabecario01 {
    margin-left: -30px;
 }

 .text-cabecario02 {
    margin-left: -30px;
 }	

}		 
		 
		 
		 
	 	
	 </style>


</head>

<body class="img_fundo" >

  <!--Cabeçario -->

  <header>
  	<div class="container">
  	<div class="row" >
  		
  		 <div class="col-12 text-cabecario " style="" >
  		 	<p>Saiba como se tornar <br> Mulher Positiva</p>
  		 		
  		</div>

  		<div class="">

  			<div class="text-cabecario01">
  				
  				<h2>Depois de ler esse ebook, você vai saber:</h2>

  			</div>
  			
  			<div >
  			   
  			   <p class="text-cabecario02"> * como usar o poder das afirmações a seu favor ;</p>

  			   <p class="text-cabecario02">* como as suas crenças limitantes te sabotam;</p>

  			   <p class="text-cabecario02">* como aumentar sua AUTOESTIMA e ser uma mulher muito mais poderosa;</p>

  			   <p class="text-cabecario02">* como ter PROSPERIDADE afirmando frases poderosas;</p>

  			   <p class="text-cabecario02">* impacto das afirmações positivas na sua saúde;</p>

               <p class="text-cabecario02">* como você pode melhorar o seu relacionamento(ou conseguir um); </p>

               <p class="text-cabecario02">* como você pode evoluir no seu TRABALHO usando suas palavras. </p>
  			   
  		   </div>

  		   <div class="text-cabecario01">
  		   	 <h3> Você está preparada para aprender afirmações<br> poderosas capazes de revolucionar a sua vida ? </h3>

  		   </div>


  		</div>
  		

  	</div>

</div>
  </header>

	<!--secao formulario -->

<section class="box-22" id="box-2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6">
								
						
					     <span id="loading" style="display: none;" align="center"><img src="http://cynthiacunha.com.br/wp-content/themes/cynthia/assets/img/loading.gif" style="max-width: 50px; display: block; margin: 0 auto;"></span>
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

          <button class="btn btn-danger" class="btn-page-ebook"  type="submit" class="btn">BAIXAR EBOOK</button>
          <input type="hidden" id="source" name="source" value="" />
          <img src="https://llimages.com/redirect/redirect.aspx?A=V&p=19961889&m=467398" style="display: none;" />

        </form>  <!--Fim Fomulario Ativo -->
						
						
						<!--Início Fomulario Inativo -->
						<!--<form action="" id="form">
						     <input id="id" name="id" type="hidden" value="467398">  
                               <input id="mid" name="mid" type="hidden" value="467398">  
								<input id="pid" name="pid" type="hidden" value="16661415">  
                               <input id="list_id" name="list_id" type="hidden" value="467398">  
                               <input id="provider" name="provider" type="hidden" value="leadlovers"> 
                               <input type="hidden" id="source" name="source" value="">  
							<label>Nome*</label>
							<input id="nome" type="text" name="name" placeholder="Digite seu nome">
							<label>Email*</label>
							<input id="email" type="text" name="email" placeholder="Digite seu melhor email">
							<button type="submit" class="btn-page-ebook">BAIXAR EBOOK</button>
						</form> -->
						
					</div>

					<div class="col-md-6">
						<div class="img-back-4">
							<img src="<?= get_template_directory_uri(); ?>/assets/img/livro-como-ser-uma-mulher-positiva.png" alt="Livro como ser uma mulher positiva">
						</div>
					</div>

				</div>
			</div>
</section>

<section class=" roda_pe_novo">
   <img src="<?= get_template_directory_uri(); ?>/assets/img/barra_novo20.png">
    

</section>



</body>
</html>




		