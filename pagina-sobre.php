 <?php
    /*
    Template Name: Pagina Sobre
    */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charSet="utf-8"/>
    <meta name="author" content="Max Silva - maks.silva25@gmail.com"/>
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

     <!--Começo do Site- Sobre-->



<style type="text/css">

html {
    margin-top: 0px !important;
}

.roda_pe_novo img {
    width: 100%;
    margin-top: px;
   
}


.img_fundo {

  background: url('<?= get_template_directory_uri(); ?>/assets/img/fundo_ebook01.jpg') no-repeat;
  background-size: cover;
}

.text_sobre {
  font-family:Montserrat ;
  margin-top: 60px;
  letter-spacing: 1px;
  padding: 25px;
  font-size: 26px;

}

.text_sobre p {
  margin-bottom: 28px;
}

.foto-cynthia {
  width: 60%; 
  margin-top: -870px; 
  margin-bottom: -300px;
  float: right; 

 
 

}

.FonteAssinatura {
  font-family: manta;
  font-size: 55px;
}


/* ---Formato Responsivo--- */
@media only screen and (max-width:1199px ) {
   
   .text_sobre {
  font-family:Montserrat ;
  margin-top: 60px;
  letter-spacing: 1px;
  padding: 14px;
  font-size: 21px;

}

 .foto-cynthia {
  width: 600px; 
  margin-top: -700px; 
  margin-bottom: -300px;
  

}

.roda_pe_novo img {
    margin-top:-10px;
   
}
  
}

@media only screen and (max-width:1024px ) {
   
   .text_sobre {
  font-family:Montserrat ;
  margin-top: 60px;
  letter-spacing: 1px;
  padding: 14px;
  font-size: 21px;

}

 .foto-cynthia {
  width: 60%; 
  margin-top: -750px; 
  margin-bottom: -300px;
  margin-right: 1% ;

}

.roda_pe_novo img {
    margin-top:-20px;
   
}
  
}


@media (max-width:991px ) {
   
   .text_sobre {
  font-family:Montserrat ;
  margin-top: 60px;
  letter-spacing: 1px;
  padding: 14px;
  font-size: 17px;

}

 .foto-cynthia {
  width: 50%; 
  margin-top: -620px; 
  margin-bottom: -300px;
  margin-right: 1% ;

}

.FonteAssinatura {
  font-family: manta;
  font-size: 42px;
}

.roda_pe_novo img {
    margin-top:-50px;
   
}
  
}

@media only screen and (max-width:900px ) {
   
   .text_sobre {
  font-family:Montserrat ;
  margin-top: 60px;
  letter-spacing: 1px;
  padding: 14px;
  font-size: 15px;

}

 .foto-cynthia {
  width: 60%; 
  margin-top: -600px; 
  margin-bottom: -300px;
  margin-right: 1% ;

}

.roda_pe_novo img {
    margin-top:-10px;
   
}

  
}

@media (max-width:784px ) {
   
   .text_sobre {
  font-family:Montserrat ;
  margin-top: 60px;
  letter-spacing: 1px;
  padding: 14px;
  font-size: 1em;

}

 .foto-cynthia {
  width: 55%; 
  margin-top: -500px; 
  margin-bottom: -300px;
  float: right; 
  margin-right: 1% ;


}

.roda_pe_novo img {
    width: 100%;
    margin-top:-20px;
   
}

.FonteAssinatura {
  font-family: manta;
  font-size: 40px;
}

  
}

@media (max-width:760px ) {
   
   .text_sobre {
  font-family:Montserrat ;
  margin-top: 60px;
  letter-spacing: 1px;
  padding: 14px;
  font-size: 12px;

}

 .foto-cynthia {
  width: 55%; 
  margin-top: -500px; 
  margin-bottom: -300px;
  float: right; 
  margin-right: 1% ;


}

.roda_pe_novo img {
    width: 100%;
    margin-top:-20px;
   
}

.FonteAssinatura {
  font-family: manta;
  font-size: 30px;
}

  
}


@media (max-width:695px ) {
   


 .foto-cynthia {
  width: 55%; 
  margin-top: -450px; 
  margin-bottom: -300px;
  float: right; 
  margin-right: 1% ;


}
  
}

@media (max-width:624px ) {
   


 .foto-cynthia {
  width: 55%; 
  margin-top: -420px; 
  margin-bottom: -300px;
  float: right; 
  margin-right: 1% ;


}
  
}

@media (max-width:580px ) {
   


 .foto-cynthia {
  width: 55%; 
  margin-top: -380px; 
  margin-bottom: -300px;
  float: right; 
  margin-right: 1% ;


}
  
}

@media (max-width:524px ) {
   


 .foto-cynthia {
  width: 55%; 
  margin-top: -340px; 
  margin-bottom: -300px;
  float: right; 
  margin-right: 1% ;


}
  
}

@media (max-width:470px ) {
   


 .foto-cynthia {
  width: 55%; 
  margin-top: -320px; 
  margin-bottom: -300px;
  float: right; 
  margin-right: 1% ;


}
  
}


@media (max-width:425px ) {
   
   .text_sobre {
  font-family:Montserrat ;
  margin-top: 60px;
  letter-spacing: 1px;
  padding: 14px;
  font-size: 10px;

}

 .foto-cynthia {
  width: 55%; 
  margin-top: -290px; 
  margin-bottom: -250px;
  float: right; 
  margin-right: 1% ;


}

.roda_pe_novo img {
    width: 100%;
    margin-top:-25px;
   
}

.FonteAssinatura {
  font-family: manta;
  font-size: 20px;
}

  
}




@media (max-width:375px ) {
   
   .text_sobre {
  font-family:Montserrat ;
  margin-top: 60px;
  letter-spacing: 1px;
  padding: 14px;
  font-size: 12px;

}

 .foto-cynthia {
   display: none;


}

.roda_pe_novo img {
    width: 100%;
    margin-top:-25px;
   
}

.FonteAssinatura {
  font-family: manta;
  font-size: 20px;
}

  
}

/*----Formanto Responsivo END ----*/



</style>


</head>


<body class="img_fundo">


      <div class="container" style="color: white;">
        <div class="row">
          <div class="col-12 text_sobre">

            <p>Meu nome é Cynthia Cunha, sou apaixonada pela ideia de tornar as<br> mulheres mais femininas e o mundo mais leve. com o poder do feminino.          
            </p>

            <p>Você já se sentiu cansada de ser a mulher maravilha? Aquele que faz e <br> acontece, que tudo resolve e que aprendeu que ser empoderada é não <br>precisar de ninguém pra nada?
            </p>

            <p>Já sentiu que alcançou seus objetivos materiais, mas que algo faltava<br> no seu coração?    
            </p>

            <p>É sobre esse algo que eu te ensino, sobre voltar a SER <br> o que você nasceu pra ser - MULHER.
            </p>

            <p> Além de ser mentora de feminilidade, sou Advogada<br> e Empresária na área de Medicina e Segurança do <br> Trabalho. Moro em São Luís - MA, tenho uma filha<br> e HOJE posso dizer que, depois de muito querer<br> ser a "empoderada" e funcionar a maior parte<br>do tempo na energia masculina, por<br> muitos anos, estou plenamente instalada<br> na minha ESSÊNCIA FEMININA. </p>

            <p> Muito prazer, lindona!<br>
              Estamos juntas!<br>
              Beijo,
            </p>

            <p class="FonteAssinatura">Cynthia Cunha</p>

            
          </div> 
        </div>          
      </div>


<section class="foto-cynthia" >
      <img src="<?= get_template_directory_uri(); ?>/assets/img/foto_cynthia.png">

  </div>
  
  
</section>


<section class=" roda_pe_novo">
   <img src="<?= get_template_directory_uri(); ?>/assets/img/barra_novomenor.png">
    
</section>


</body>

</html>



		