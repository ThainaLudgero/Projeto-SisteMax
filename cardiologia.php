<!DOCTYPE html><!-- This site was created in Webflow. http://www.webflow.com -->
<!-- Last Published: Fri Apr 29 2022 13:46:12 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="projeto-sistemax.webflow.io" data-wf-page="626bc227a903272737ec6915"
    data-wf-site="626bc226a903276931ec6905">

<head>
    <meta charset="utf-8" />
    <title>Agendamentos</title>
    <meta content="View all of our most recent projects, and learn how you can hire us for your next project."
        name="description" />
    <meta content="Portfolio" property="og:title" />
    <meta content="View all of our most recent projects, and learn how you can hire us for your next project."
        property="og:description" />
    <meta content="Portfolio" property="twitter:title" />
    <meta content="View all of our most recent projects, and learn how you can hire us for your next project."
        property="twitter:description" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="projeto-sistemax.webflow.4d56010e9.css"
        rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]
            }
        });
    </script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
        ! function (o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>
    <link href="https://uploads-ssl.webflow.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="https://uploads-ssl.webflow.com/img/webclip.png" rel="apple-touch-icon" />
</head>

<body>
    <div class="contact-overlay wf-section">
        <div class="w-container"><a href="#" data-w-id="53a7664c-23a9-741b-01d1-3dbb83626754" class="close-link">FECHAR
                ✕</a>
            <div class="form-wrapper">
                <div class="contact-heading">Login de administrador</div>
                <div class="small-divider"></div>
                <div class="contact-text">Obrigado pelo interesse! Por favor preencha o formulário abaixo se desejar trabalhar junto.</div>
                <div class="w-form">
                <form id="email-form" name="email-form" data-name="Email Form" method="get">
                        <input type="text" class="text-field w-input" maxlength="256" name="name" data-name="Name" placeholder="Insira seu nome" id="name" />
                        <input type="email" class="text-field w-input" maxlength="256" name="email" data-name="Email" placeholder="Insira seu endereço id" id="email" required="" />
                        <input type="submit" value="Entrar" data-wait="Por favor espere..." class="submit-button w-button" />
                    </form>
                    <div class="success-message w-form-done">
                        <p class="success-text">Obrigado! Seu pedido foi enviado!</p>
                    </div>
                    <div class="w-form-fail">
                        <p>Oops! Algo errado aconteceu no envio do formulário</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="hero-section portfolio-hero1 wf-section">
        <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease"
            role="banner" class="nav w-nav">
            <div class="w-container"><a href="index.html" class="w-nav-brand">
                    <div class="logo-text">Siste<strong data-new-link="true">MAX</strong></div>
                </a>
                <nav role="navigation" class="nav-menu w-nav-menu"><a href="index.html" class="nav-link w-nav-link">Home</a>
                    <a href="dispositivos.php" class="nav-link w-nav-link">dispositivos<br />‍</a>
                    <a href="anuncio.html" aria-current="page" class="nav-link w-nav-link">Anúncios</a>
                    <a href="agendamentos.html" class="nav-link w-nav-link w--current">agendamentos</a>
                    <a href="#" data-w-id="c66b3b9e-8533-cf7e-3626-5291fef080a4" class="nav-link contact w-nav-link">Admin</a>
                </nav>
                <div class="menu-button w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
            </div>
        </div>
        <h1>Setores</h1>
        <div class="hero-overlay"></div>
    </div>
    <!-- SECTION WF-SECTION -->
    <br><br>
    <div>
        <div class="w-container">
            <div class="w-dyn-list">
                 <?php
                    include_once('config/conexao.php');
                      $select = "SELECT * FROM tb_cardio ORDER BY id_cardio ASC";
                      try{
                        $resultado = $conect->prepare($select);
                        $resultado->execute();
                        $contar = $resultado->rowCount();
                        if($contar > 0){
                          while($show = $resultado->FETCH(PDO::FETCH_OBJ)){   
                    ?>
                <div role="list" class="w-clearfix w-dyn-items w-row">
                    <div role="listitem" class="project-block w-dyn-item w-col w-row-4"><a
                            href="cadastrarcardio.php?idUp=<?php echo $show->id_cardio;?>"  class="project-link w-inline-block">
                            <div class="project-image"><img src="./assets/fundoavatar2.jpg" alt="fotocliente"></div>
                            <div style="background-color:#ff3029" class="project-tag">Esperando</div>
                            <div class="project-title"><?php echo $show->cliente_cardio;?></div>
                        </a>
                    </div>
            </div>
            <br><br>
            <?php
                      }
                    }else{
                      echo 'Não há contatos cadastrados !!!';
                    }
                  }catch(PDOException $e){
                    echo '<strong>ERRO DE PDO= </strong>'.$e->getMessage();
                  }
            
                    ?>
        </div>
    </div>
  
    <div class="footer-section wf-section">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-3"><a href="index.html" class="logo-footer w-nav-brand">
                        <div class="logo-text footer-logo">Siste<strong data-new-link="true">MAX</strong></div>
                    </a></div>
                <div class="footer-link-col w-clearfix w-col w-col-9">
                    <a href="#" data-ix="show-contact-overlay" class="nav-link footer-link contact">Contact</a>
                    <a href="agendamentos.html" aria-current="page" class="nav-link footer-link w--current">Agendamentos</a>
                    <a href="anuncio.html" class="nav-link footer-link">Anúncios</a>
                    <a href="dispositivos.php" class="nav-link footer-link">Dispositivos</a>
                    <a href="index.html" class="nav-link footer-link">Home</a>
                    </div>
            </div>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=626bc226a903276931ec6905"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="webflow.38f149819.js"
        type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>

</html>