<?php
session_start();
include("ligacao.php");
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Galeria Supermercado Lismar">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Supermercado Lismar</title>
    <link rel="stylesheet" href="css/geral.css" media="screen">
    <link rel="stylesheet" href="css/Sobre.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="geral.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "SitePAP",
		"logo": "images/SUPERMERCADO-2-revs.png",
		"sameAs": [
				"https://www.facebook.com/Supermercado-Lismar-107891188120284",
				"mailto:luis.gonzaga72@hotmail.com"
		]
}</script>
    <meta property="og:title" content="Sobre">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-ef04"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Index.php" data-page-id="3094710891" class="u-image u-image-default u-logo u-image-1" data-image-width="1500" data-image-height="1100" title="Página Inicial">
          <img src="images/SUPERMERCADO-2-revs.png" class="u-logo-image u-logo-image-1" data-image-width="249">
        </a><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="-42 0 512 512.001" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7789"></use></svg><svg class="u-svg-content" viewBox="-42 0 512 512.001" id="svg-7789"><path d="m210.351562 246.632812c33.882813 0 63.21875-12.152343 87.195313-36.128906 23.96875-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.128906 87.195312 23.980469 23.96875 53.316406 36.125 87.191406 36.125zm-65.972656-189.292968c18.394532-18.394532 39.972656-27.335938 65.972656-27.335938 25.996094 0 47.578126 8.941406 65.976563 27.335938 18.394531 18.398437 27.339844 39.980468 27.339844 65.972656 0 26-8.945313 47.578125-27.339844 65.976562-18.398437 18.398438-39.980469 27.339844-65.976563 27.339844-25.992187 0-47.570312-8.945312-65.972656-27.339844-18.398437-18.394531-27.34375-39.976562-27.34375-65.976562 0-25.992188 8.945313-47.574219 27.34375-65.972656zm0 0"></path><path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.3125-10.339844-7.808594-20.550781-13.375-30.335938-5.769532-10.15625-12.550782-19-20.160157-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.042969 5.339844-10.96875 0-22.085937-1.796876-33.042968-5.339844-11.210938-3.621094-20.300782-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.753906-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.609375 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.0625 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.777344-1.023438 19.953125-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.4375 23.730469 65.066406 23.730469h246.53125c26.621094 0 48.511719-7.984375 65.0625-23.730469 16.757813-15.945312 25.253906-37.589843 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm-44.90625 72.828125c-10.933594 10.40625-25.449218 15.464844-44.378906 15.464844h-246.527344c-18.933594 0-33.449218-5.058594-44.378906-15.460938-10.722656-10.207031-15.933594-24.140625-15.933594-42.585937 0-9.59375.316406-19.066407.949219-28.160157.617187-8.921874 1.878906-18.722656 3.75-29.136718 1.847656-10.285156 4.199219-19.9375 6.996094-28.675782 2.683593-8.378906 6.34375-16.675781 10.882812-24.667968 4.332031-7.617188 9.316407-14.152344 14.816407-19.417969 5.144531-4.925781 11.628906-8.957031 19.269531-11.980469 7.066406-2.796875 15.007812-4.328125 23.628906-4.558594 1.050781.558594 2.921875 1.625 5.953125 3.601563 6.167969 4.019531 13.277344 8.605469 21.136719 13.625 8.859375 5.648437 20.273437 10.75 33.910156 15.152344 13.941406 4.507812 28.160156 6.796875 42.273437 6.796875 14.113282 0 28.335938-2.289063 42.269532-6.792969 13.648437-4.410156 25.058594-9.507813 33.929687-15.164063 8.042969-5.140624 14.953125-9.59375 21.121094-13.617187 3.03125-1.972656 4.902344-3.042969 5.953125-3.601563 8.625.230469 16.566406 1.761719 23.636719 4.558594 7.636719 3.023438 14.121093 7.058594 19.265625 11.980469 5.5 5.261719 10.484375 11.796875 14.816406 19.421875 4.542969 7.988281 8.207031 16.289062 10.886719 24.660156 2.800781 8.75 5.15625 18.398438 7 28.675782 1.867187 10.433593 3.132812 20.238281 3.75 29.144531v.007812c.636719 9.058594.957031 18.527344.960937 28.148438-.003906 18.449219-5.214844 32.378906-15.9375 42.582031zm0 0"></path></svg></span>
        <nav class="u-align-left u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 500;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-border-radius u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-gradient u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="background-image: linear-gradient(#478ac9, black);">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-0 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-grey-5 u-border-2 u-border-active-palette-1-base u-border-grey-75 u-border-hover-palette-1-base u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="folhetos.php" style="padding: 10px;">Folhetos e Campanhas</a>
</li><li class="u-nav-item"><a class="u-active-grey-5 u-border-2 u-border-active-palette-1-base u-border-grey-75 u-border-hover-palette-1-base u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="Sobre.php" style="padding: 10px;">Sobre</a>
</li><li class="u-nav-item"><a class="u-active-grey-5 u-border-2 u-border-active-palette-1-base u-border-grey-75 u-border-hover-palette-1-base u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="Contactos.php" style="padding: 10px;">Contactos</a>
</li><li class="u-nav-item"><a class="u-active-grey-5 u-border-2 u-border-active-palette-1-base u-border-grey-75 u-border-hover-palette-1-base u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="Ajuda.php" style="padding: 10px;">Ajuda</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="folhetos.php" style="padding: 10px;">Folhetos e Campanhas</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Sobre.php" style="padding: 10px;">Sobre</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contactos.php" style="padding: 10px;">Contactos</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Ajuda.php" style="padding: 10px;">Ajuda</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <?php 
        if (isset($_SESSION["loggedin"]) == false){?>
          <div class="" style = "position:absolute; right: 10px; margin-top: -6.3%;">
          <a href="login.php" class="u-button-style u-none u-text-active-black u-text-hover-black u-text-palette-1-base" data-page-id="32795972" ><b>LOGIN</b></a>
          <a><b>|</b></a>
          <a href="criarconta.php" class="u-button-style u-none u-text-active-black u-text-hover-black u-text-palette-1-base" data-page-id="275700447" ><b>CRIAR CONTA</b></a>
          </div>
          <?php  
        }else{
          if (isset($_SESSION["nome"])){ ?>
          <div class="" style = "position:absolute; left: 950px; margin-top: -6.3%;">
          <a> Bem-vindo <?php echo $_SESSION["nome"]?></a>
          </div>
          <div class="" style = "position:absolute; right: -90px; margin-top: -6.3%;">
          <a href="logout.php"  class="u-button-style u-none u-text-active-black u-text-hover-black u-text-palette-1-base" tite="Logout"><b> (Terminar Sessão)</b></a>
          </div>
          <?php
          }
          ?>
          <?php
          if(($_SESSION["email"]) != "admin@admin.com"){?>
          <?php
          }else{
          ?>
          <div class="" style = "position:absolute; right: 20px; margin-top: -3.8%;">
          <a href="admintickets.php" class="u-button-style u-none u-text-active-black u-text-hover-black u-text-palette-1-base" ><b>Ver tickets</b></a>
         </div>
          <?php
           }
          ?>
          <?php
          }
          ?>
      </div></header>
    <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="sec-a691">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-1">Galeria de fotos</h1>
        <div class="u-align-center u-carousel u-expanded-width-xs u-gallery u-layout-thumbnails u-lightbox u-no-transition u-show-text-always u-gallery-1" id="carousel-e131" data-interval="5000" data-u-ride="carousel">
          <div class="u-carousel-inner u-gallery-inner" role="listbox">
            <div class="u-active u-carousel-item u-gallery-item u-carousel-item-1">
              <div class="u-back-slide" data-image-width="1380" data-image-height="998">
                <img class="u-back-image u-expanded" src="images/WhatsAppImage2021-06-22at21.06.521.jpeg">
              </div>
              <div class="u-align-left u-over-slide u-over-slide-1">
                <h3 class="u-gallery-heading" style="margin-left: 0px; margin-right: auto;">Sample Title</h3>
                <p class="u-gallery-text" style="margin-left: 0px; margin-right: auto;">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-2">
              <div class="u-back-slide" data-image-width="1600" data-image-height="1443">
                <img class="u-back-image u-expanded" src="images/entrada.jpg">
              </div>
              <div class="u-align-left u-over-slide u-over-slide-2">
                <h3 class="u-gallery-heading" style="margin-left: 0px; margin-right: auto;">Sample Title</h3>
                <p class="u-gallery-text" style="margin-left: 0px; margin-right: auto;">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-3" data-image-width="2836" data-image-height="1875">
              <div class="u-back-slide" data-image-width="1600" data-image-height="1484">
                <img class="u-back-image u-expanded" src="images/padaria.jpg">
              </div>
              <div class="u-align-left u-over-slide u-over-slide-3">
                <h3 class="u-gallery-heading" style="margin-left: 0px; margin-right: auto;">Sample Title</h3>
                <p class="u-gallery-text" style="margin-left: 0px; margin-right: auto;">Sample Text</p>
              </div>
              <style data-mode="XL" data-visited="true"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-4" data-image-width="1535" data-image-height="1600">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/all.jpg">
              </div>
              <div class="u-align-left u-over-slide u-over-slide-4">
                <h3 class="u-gallery-heading" style="margin-left: 0px; margin-right: auto;"></h3>
                <p class="u-gallery-text" style="margin-left: 0px; margin-right: auto;"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-5" data-image-width="1520" data-image-height="1600">
              <div class="u-back-slide" data-image-width="1520" data-image-height="1600">
                <img class="u-back-image u-expanded" src="images/prateleiras.jpg">
              </div>
              <div class="u-align-left u-over-slide u-over-slide-5">
                <h3 class="u-gallery-heading" style="margin-left: 0px; margin-right: auto;"></h3>
                <p class="u-gallery-text" style="margin-left: 0px; margin-right: auto;"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-6" data-image-width="1600" data-image-height="1586">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/parteleiras1.jpg">
              </div>
              <div class="u-align-left u-over-slide u-over-slide-6">
                <h3 class="u-gallery-heading" style="margin-left: 0px; margin-right: auto;"></h3>
                <p class="u-gallery-text" style="margin-left: 0px; margin-right: auto;"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-7" data-image-width="1600" data-image-height="1244">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/loll.jpg">
              </div>
              <div class="u-align-left u-over-slide u-over-slide-7">
                <h3 class="u-gallery-heading" style="margin-left: 0px; margin-right: auto;"></h3>
                <p class="u-gallery-text" style="margin-left: 0px; margin-right: auto;"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-8" data-image-width="1600" data-image-height="1556">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/parteleiras2.jpg">
              </div>
              <div class="u-align-left u-over-slide u-over-slide-8">
                <h3 class="u-gallery-heading" style="margin-left: 0px; margin-right: auto;"></h3>
                <p class="u-gallery-text" style="margin-left: 0px; margin-right: auto;"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-9" data-image-width="1556" data-image-height="1600">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/congelados.jpg">
              </div>
              <div class="u-align-left u-over-slide u-over-slide-9">
                <h3 class="u-gallery-heading" style="margin-left: 0px; margin-right: auto;"></h3>
                <p class="u-gallery-text" style="margin-left: 0px; margin-right: auto;"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-10" data-image-width="1600" data-image-height="1402">
              <div class="u-back-slide" data-image-width="1600" data-image-height="1402">
                <img class="u-back-image u-expanded" src="images/fruta.jpg">
              </div>
              <div class="u-align-left u-over-slide u-over-slide-10">
                <h3 class="u-gallery-heading" style="margin-left: 0px; margin-right: auto;"></h3>
                <p class="u-gallery-text" style="margin-left: 0px; margin-right: auto;"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-11" data-image-width="1600" data-image-height="1343">
              <div class="u-back-slide" data-image-width="1600" data-image-height="1343">
                <img class="u-back-image u-expanded" src="images/fruta1.jpg">
              </div>
              <div class="u-align-left u-over-slide u-over-slide-11">
                <h3 class="u-gallery-heading" style="margin-left: 0px; margin-right: auto;"></h3>
                <p class="u-gallery-text" style="margin-left: 0px; margin-right: auto;"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="#carousel-e131" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="#carousel-e131" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
          <ol class="u-carousel-thumbnails u-spacing-10 u-carousel-thumbnails-1">
            <li class="u-active u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="0">
              <img class="u-carousel-thumbnail-image u-image" src="images/WhatsAppImage2021-06-22at21.06.521.jpeg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-2" data-u-target="#carousel-e131" data-u-slide-to="1">
              <img class="u-carousel-thumbnail-image u-image" src="images/entrada.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-3" data-u-target="#carousel-e131" data-u-slide-to="2">
              <img class="u-carousel-thumbnail-image u-image" src="images/padaria.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="3">
              <img class="u-carousel-thumbnail-image u-image" src="images/all.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="4">
              <img class="u-carousel-thumbnail-image u-image" src="images/prateleiras.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="5">
              <img class="u-carousel-thumbnail-image u-image" src="images/parteleiras1.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="6">
              <img class="u-carousel-thumbnail-image u-image" src="images/loll.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="7">
              <img class="u-carousel-thumbnail-image u-image" src="images/parteleiras2.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="8">
              <img class="u-carousel-thumbnail-image u-image" src="images/congelados.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="9">
              <img class="u-carousel-thumbnail-image u-image" src="images/fruta.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e131" data-u-slide-to="10">
              <img class="u-carousel-thumbnail-image u-image" src="images/fruta1.jpg">
            </li>
          </ol>
        </div>
      </div>
    </section>
    
    
    <footer class="u-clearfix u-footer u-grey-80" id="sec-704a"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-center-sm u-align-center-xs u-align-left-md u-align-left-xl u-container-style u-layout-cell u-left-cell u-size-20 u-size-20-md u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1"><!--position-->
                  <div data-position="" class="u-position u-position-1"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text"><!--block_header_content--><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text u-text-2"><!--block_content_content--><!--/block_content_content--></div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position--><!--position-->
                  <div data-position="" class="u-position u-position-2"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text"><!--block_header_content--> Métodos de Pagamento<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text u-text-4"><!--block_content_content--><!--/block_content_content--></div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                  <img class="u-image u-image-default u-image-1" src="images/Visa_Inc._logo.svg.png" alt="" data-image-width="2560" data-image-height="829">
                  <img class="u-image u-image-default u-image-2" src="images/master-card-logo-update.png" alt="" data-image-width="633" data-image-height="422">
                </div>
              </div>
              <div class="u-align-center-sm u-align-right-md u-container-style u-layout-cell u-size-20 u-size-20-md u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <a href="index.php" class="u-image u-logo u-image-3" data-image-width="1194" data-image-height="512">
                    <img src="images/logocontorno.png" class="u-logo-image u-logo-image-1" data-image-width="222.0225">
                  </a>
                </div>
              </div>
              <div class="u-align-center-sm u-align-center-xs u-align-left-md u-align-right-lg u-align-right-xl u-container-style u-layout-cell u-right-cell u-size-20 u-size-20-md u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3">
                  <div class="u-social-icons u-spacing-10 u-social-icons-1">
                    <a class="u-social-url" target="_blank" title="Facebook" href="https://www.facebook.com/Supermercado-Lismar-107891188120284"><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4743"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-4743"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" title="Custom" href="mailto:luis.gonzaga72@hotmail.com"><span class="u-icon u-icon-circle u-social-custom u-social-icon u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-00c3"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-00c3" style="enable-background:new 0 0 512 512;"><path style="fill:#1976D2;" d="M496,112.011H272c-8.832,0-16,7.168-16,16s7.168,16,16,16h177.376l-98.304,76.448l-70.496-44.832  l-17.152,27.008l80,50.88c2.592,1.664,5.6,2.496,8.576,2.496c3.456,0,6.944-1.12,9.824-3.36L480,160.715v207.296H272  c-8.832,0-16,7.168-16,16s7.168,16,16,16h224c8.832,0,16-7.168,16-16v-256C512,119.179,504.832,112.011,496,112.011z"></path><path style="fill:#2196F3;" d="M282.208,19.691c-3.648-3.04-8.544-4.352-13.152-3.392l-256,48C5.472,65.707,0,72.299,0,80.011v352  c0,7.68,5.472,14.304,13.056,15.712l256,48c0.96,0.192,1.952,0.288,2.944,0.288c3.712,0,7.328-1.28,10.208-3.68  c3.68-3.04,5.792-7.584,5.792-12.32v-448C288,27.243,285.888,22.731,282.208,19.691z"></path><path style="fill:#FAFAFA;" d="M144,368.011c-44.096,0-80-43.072-80-96s35.904-96,80-96s80,43.072,80,96  S188.096,368.011,144,368.011z M144,208.011c-26.464,0-48,28.704-48,64s21.536,64,48,64s48-28.704,48-64  S170.464,208.011,144,208.011z"></path></svg></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <img class="u-image u-image-default u-image-4" src="images/MB-Net-removebg-preview.png" alt="" data-image-width="600" data-image-height="315">
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
    </section>
  <section class="u-align-center u-clearfix u-cookies-consent u-grey-80 u-cookies-consent" id="sec-73a6">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-43-md u-size-43-sm u-size-43-xs u-size-46-lg u-size-46-xl u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h3 class="u-text u-text-1">Cookies &amp; Privacidade</h3>
                  <p class="u-text u-text-2">Este website usa cookies para garantir que você obtenha a melhor experiência em nosso site.</p>
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-14-lg u-size-14-xl u-size-17-md u-size-17-sm u-size-17-xs u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-top-sm u-valign-top-xs u-container-layout-2">
                  <a href="###" class="u-btn u-button-confirm u-button-style u-palette-1-base u-btn-1">Confirmar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <style>.u-cookies-consent {
  background-image: none;
}

.u-cookies-consent .u-sheet-1 {
  min-height: 172px;
}

.u-cookies-consent .u-layout-wrap-1 {
  margin-top: 21px;
  margin-bottom: 32px;
}

.u-cookies-consent .u-layout-cell-1 {
  min-height: 119px;
}

.u-cookies-consent .u-container-layout-1 {
  padding: 18px 60px 0;
}

.u-cookies-consent .u-text-1 {
  margin: 0 447px 0 0;
}

.u-cookies-consent .u-text-2 {
  margin: 0 158px 0 0;
}

.u-cookies-consent .u-layout-cell-2 {
  min-height: 119px;
}

.u-cookies-consent .u-container-layout-2 {
  padding: 30px;
}

.u-cookies-consent .u-btn-1 {
  margin: 0 auto 0 0;
}

@media (max-width: 1199px) {
  .u-cookies-consent .u-sheet-1 {
    min-height: 131px;
  }

  .u-cookies-consent .u-layout-cell-1 {
    min-height: 98px;
  }

  .u-cookies-consent .u-text-1 {
    margin-right: 294px;
  }

  .u-cookies-consent .u-text-2 {
    margin-right: 5px;
  }

  .u-cookies-consent .u-layout-cell-2 {
    min-height: 98px;
  }
}

@media (max-width: 991px) {
  .u-cookies-consent .u-sheet-1 {
    min-height: 106px;
  }

  .u-cookies-consent .u-layout-cell-1 {
    min-height: 100px;
  }

  .u-cookies-consent .u-container-layout-1 {
    padding-left: 30px;
    padding-right: 30px;
  }

  .u-cookies-consent .u-text-1 {
    margin-right: 149px;
  }

  .u-cookies-consent .u-text-2 {
    margin-right: 0;
  }

  .u-cookies-consent .u-layout-cell-2 {
    min-height: 100px;
  }
}

@media (max-width: 767px) {
  .u-cookies-consent .u-sheet-1 {
    min-height: 225px;
  }

  .u-cookies-consent .u-layout-cell-1 {
    min-height: 154px;
  }

  .u-cookies-consent .u-container-layout-1 {
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 20px;
  }

  .u-cookies-consent .u-layout-cell-2 {
    min-height: 65px;
  }

  .u-cookies-consent .u-container-layout-2 {
    padding: 10px;
  }
}

@media (max-width: 575px) {
  .u-cookies-consent .u-sheet-1 {
    min-height: 121px;
  }

  .u-cookies-consent .u-layout-cell-1 {
    min-height: 100px;
  }

  .u-cookies-consent .u-text-1 {
    margin-right: 0;
  }

  .u-cookies-consent .u-layout-cell-2 {
    min-height: 15px;
  }
}</style></section></body>
</html>