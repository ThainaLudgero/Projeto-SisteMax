<!DOCTYPE html><!-- This site was created in Webflow. http://www.webflow.com -->
<!-- Last Published: Fri Apr 29 2022 13:46:12 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="projeto-sistemax.webflow.io" data-wf-page="626bc227a90327d84cec690e"
    data-wf-site="626bc226a903276931ec6905">

<head>
    <meta charset="utf-8" />
    <title>Dispositivos</title>
    <meta content="View all of our most recent blog posts, and learn how you can hire us for your next project."
        name="description" />
    <meta content="Blog" property="og:title" />
    <meta content="View all of our most recent blog posts, and learn how you can hire us for your next project."
        property="og:description" />
    <meta content="Blog" property="twitter:title" />
    <meta content="View all of our most recent blog posts, and learn how you can hire us for your next project."
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
                        <input type="email" class="text-field w-input" maxlength="256" name="email" data-name="Email" placeholder="Insira seu endereço de email" id="email" required="" />
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
    <div class="hero-section blog-hero wf-section">
        <div class="hero-overlay"></div>
        <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease"
            role="banner" class="nav w-nav">
            <div class="w-container"><a href="index.html" class="w-nav-brand">
                    <div class="logo-text">Siste<strong data-new-link="true">MAX</strong></div>
                </a>
                <nav role="navigation" class="nav-menu w-nav-menu"><a href="index.html" class="nav-link w-nav-link">Home</a>
                    <a href="dispositivos.php" aria-current="page" class="nav-link w-nav-link w--current">dispositivos<br />‍</a>
                    <a href="anuncio.html" class="nav-link w-nav-link">Anúncios</a>
                    <a href="agendamentos.html" class="nav-link w-nav-link">agendamentos</a>
                    <a href="#" data-w-id="c66b3b9e-8533-cf7e-3626-5291fef080a4" class="nav-link contact w-nav-link">Admin</a>
                </nav>
                <div class="menu-button w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
            </div>
        </div>
        <h1>Cadastro do Cliente</h1>
    </div>
    <div class="section wf-section">
        <div class="w-container">
            <div class="w-dyn-list">
                <div role="list" class="w-dyn-items w-row">
                    <div class="form-wrapper">
                        <div class="editar-heading">Informações de cadastro</div>
                        <div class="small-divider"></div>
                        <!--<div class="contact-text">Obrigado pelo interesse! Por favor preencha o formulário abaixo se desejar trabalhar junto.</div>-->
                        <div class="w-form">
                            <?php
                            include_once('config/conexao.php');
                            $id=$_GET['idUp'];
                            $select = "SELECT * FROM tb_cardio WHERE id_cardio = :id ";
                            try{
                                $resultSel = $conect->prepare($select);
                                $resultSel->bindParam(':id',$id,PDO::PARAM_INT);
                                $resultSel->execute();
            
                                $contar=$resultSel->rowCount();
                                if($contar>0){
                                    while($show = $resultSel->FETCH(PDO::FETCH_OBJ)){
                                        $id = $show->id_cardio;
                                        $nome = $show->cliente_cardio;
                                        $doutor = $show->prof_cardio;
                                        $preco = $show->preco_cardio;
                                        $data = $show->data_cardio;
                                        $andar = $show->andar_cardio;
                                    }  
                                }else{
                                    echo 'Contato não inserido!';
                                }
                            }catch(PDOException $e){
                              echo "<strong>ERRO DE SELECT NO PDO: </strong>".$e->getMessage();
                            }
                            
                            ?>
                            <form action="" enctype="multipart/form-data" id="email-form" name="email-form" data-name="Email Form" method="post">
                                <div class="label-float">
                                <input type="text" class="text-field w-input" maxlength="256" value="<?php echo $nome;?>" name="nome" data-name="Name" placeholder="" id="name" >
                                <label>Nome</label>
                                </div>

                                <div class="label-float">
                                 <input type="text" class="text-field w-input" maxlength="256" value="<?php echo $doutor; ?>" name="doutor" data-name="Text" 
                                 placeholder="" id="email" />
                                 <label>Doutor(a)</label>
                                </div>
                                
                                <div class="label-float">
                                    <input type="text" class="text-field w-input" maxlength="256" value="<?php echo $preco; ?>" name="preco" data-name="Text" 
                                    placeholder="" id="email" />
                                    <label>Preço</label>
                                </div>       
                                 
                                <div class="label-float">
                                <input type="datetime-local" value="2022-05-17T08:49" value="<?php echo $data; ?>" name="data" id="consultadata">
                                <label>Horário</label>
                                </div>    
                                
                                <br>
                                <br>
                                  <select class="select-drop" name="andar" id="Andar">
                                      <option value="Pandar" selected>1 Andar</option>
                                      <option value="Sandar">2 Andar</option>
                                      <option value="Tandar">3 Andar</option>
                                      <option value="Qandar">4 Andar</option>
                                  </select>
                                
                                <input name="btnEditar" type="submit" value="Salvar" data-wait="Por favor espere..." class="submit-button w-button" />
                            </form>
                            <?php
                                              if(isset($_POST['btnEditar'])){
                                                $nomeCl = $_POST['nome'];
                                                $doutorCl= $_POST['doutor'];
                                                $precoCl = $_POST['preco'];
                                                $dataCl = $_POST['data'];
                                                $andarCl = $_POST['andar'];

                                                $editar = "UPDATE tb_cardio SET cliente_cardio=:nomeCl,prof_cardio=
                                                :doutorCl,preco_cardio=:precoCl,data_cardio=:dataCl,andar_cardio=:andarCl, WHERE 
                                                id_cardio=:id";
                                                try{
                                                  $result = $conect->prepare($editar);
                                                  $result->bindParam(':id',$id,PDO::PARAM_STR);
                                                  $result->bindParam(':nomeCl',$nomeCl,PDO::PARAM_STR);
                                                  $result->bindParam(':doutorCl',$doutorCl,PDO::PARAM_STR);
                                                  $result->bindParam(':precoCl',$precoCl,PDO::PARAM_STR);
                                                  $result->bindParam(':dataCl',$dataCl,PDO::PARAM_STR);
                                                  $result->bindParam(':andarCl',$andarCl,PDO::PARAM_STR);


                                                  $result->execute();
                          
                                                  $contar = $result->rowCount();
                                                  if($contar > 0){
                                                    echo 'Contato inserido com sucesso !!!';
                                                  }else{
                                                    echo 'Contato não cadastrados !!!';
                                                  }
                                                }catch(PDOException $e){
                                                  echo "<strong>ERRO DE CADASTRO PDO = </strong>".$e->getMessage();
                                                }
                          
                          
                          
                          
                          
                          
                          
                          
                                                
                          
                                                
                                            }
                          

                            ?>
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
        </div>
    </div>
    </div>
    <div class="footer-section wf-section">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-3"><a href="index.html" class="logo-footer w-nav-brand">
                        <div class="logo-text footer-logo">Siste<strong data-new-link="true">MAX</strong></div>
                    </a></div>
                <div class="footer-link-col w-clearfix w-col w-col-9"><a href="#" data-ix="show-contact-overlay"
                        class="nav-link footer-link contact">Contact</a>
                        <a href="agendamentos.html" aria-current="page" class="nav-link footer-link">Agendamentos</a>
                        <a href="anuncio.html" class="nav-link footer-link">Anúncios</a>
                        <a href="dispositivos.php" class="nav-link footer-link w--current">Dispositivos</a>
                        <a href="index.html" class="nav-link footer-link">Home</a></div>
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