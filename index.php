<?php
require_once('conexao.php');

        //*-- -------------------------------------------------------
        //-- lista de imoveis
        //-- --------------------------------------------------------
        //-- --------------------------------------
        $sql = "SELECT * FROM `imoveis`;";
        $statment = $pdo->prepare($sql); $statment->execute(); 
        $IMOVEIS_DB = $statment->fetchAll(PDO::FETCH_ASSOC);
        //FOREACH($IMOVEIS_DB as $LIST_IEM):            echo "{$LIST_IEM['titulo']} \r\n";      ENDFOREACH;
        //while($n_contrato = $statment->fetch(PDO::FETCH_ASSOC)){          echo $n_contrato['titulo'] . "\r\n";         }
        //echo "IMOVEIS: ";print_r($IMOVEIS_DB); echo "\r\n-------------------------------------\r\n";
        //-- -------------------------------------- /**/

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>Pedrosa Soluções Imobiliárias</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css"> 
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style1.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Wrapper Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <span class="icon_close"></span>
        </div>
        <div class="logo">
            <a href="./index.php">
                <img src="img/icon_Pedrosa.png" alt="">
            </a>
        <!--/div>
        <div id="mobile-menu-wrap"></div>
        <div class="om-widget">
            <ul>
                <li><i class="icon_mail_alt"></i> Aler.support@gmail.com</li>
                <li><i class="fa fa-mobile-phone"></i> 125-711-811 <span>125-668-886</span></li>
            </ul-->
            <a href="#" class="btn btn-primary btn-custom">Submit property</a>
        </div>
        <div class="om-social">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Wrapper End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="hs-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="./index.php"><img src="img/logo_Pedrosa.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="ht-widget">
                            <ul>
                                <!--li><i class="icon_mail_alt"></i> Aler.support@gmail.com</li>
                                <li><i class="fa fa-mobile-phone"></i> 125-711-811 <span>125-668-886</span></li-->
                            </ul>
                            <a href="login.php" class="hw-btn">ADICIONAR IMÓVEL</a>
                        </div>
                    </div>
                </div>
                <div class="canvas-open">
                    <span class="icon_menu"></span>
                </div>
            </div>
        </div>
        <div class="hs-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <nav class="nav-menu">
                            <ul>
                                <li class="active"><a href="../index.php">Home</a></li>
                                <li><a href="./sitefront/property.php">Imóveis</a></li>
                                <li><a href="./sitefront/about.php">Contato</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="hn-social">
                             
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
    <div class="container">
        <div class="hs-slider owl-carousel">
            <?
        FOREACH($IMOVEIS_DB as $ATRIBUTO):        
            echo "

            <div class=\"hs-item set-bg\" data-setbg=\"img/hero/hero-1.jpg\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"hc-inner-text\">
                            <div class=\"hc-text\">
                                <h4>{$ATRIBUTO['id']} {$ATRIBUTO['titulo']} - NOVO PREDIO COM 15 ANDARES</h4>
                                <p><span class=\"icon_pin_alt\"></span> Local do Imóvel</p>
                                <div class=\"label\">Comprar</div>
                                <h5>R$ 500.000,00<span>/Mês</span></h5>
                            </div>
                            <div class=\"hc-widget\">
                                <ul>
                                    <li><i class=\"fa fa-object-group\"></i> 380m²</li>
                                    <li><i class=\"fa fa-bathtub\"></i> 03</li>
                                    <li><i class=\"fa fa-bed\"></i> 05</li>
                                    <li><i class=\"fa fa-automobile\"></i> 01</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        ENDFOREACH;

            ?>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hc-inner-text">
                            <div class="hc-text">
                                <h4>CASA COM 5 QUARTOS</h4>
                                <p><span class="icon_pin_alt"></span> Local do Imóvel</p>
                                <div class="label">Comprar</div>
                                <h5>R$ 500.000,00<span>/Mês</span></h5>
                            </div>
                            <div class="hc-widget">
                                <ul>
                                    <li><i class="fa fa-object-group"></i> 380m²</li>
                                    <li><i class="fa fa-bathtub"></i> 03</li>
                                    <li><i class="fa fa-bed"></i> 05</li>
                                    <li><i class="fa fa-automobile"></i> 01</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hc-inner-text">
                            <div class="hc-text">
                                <h4>APARTAMENTO 3 QUARTOS</h4>
                                <p><span class="icon_pin_alt"></span> Local do Imóvel</p>
                                <div class="label">Alugar</div>
                                <h5>R$ 1000,00<span>/Mês</span></h5>
                            </div>
                            <div class="hc-widget">
                                <ul>
                                    <li><i class="fa fa-object-group"></i> 380m²</li>
                                    <li><i class="fa fa-bathtub"></i> 03</li>
                                    <li><i class="fa fa-bed"></i> 05</li>
                                    <li><i class="fa fa-automobile"></i> 01</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hc-inner-text">
                            <div class="hc-text">
                                <h4>CASA COM 3 QUARTOS</h4>
                                <p><span class="icon_pin_alt"></span> Local do Imóvel</p>
                                <div class="label">Comprar</div>
                                <h5>R$ 250.000,00<span>/Mês</span></h5>
                            </div>
                            <div class="hc-widget">
                                <ul>
                                    <li><i class="fa fa-object-group"></i> 280m²</li>
                                    <li><i class="fa fa-bathtub"></i> 02</li>
                                    <li><i class="fa fa-bed"></i> 03</li>
                                    <li><i class="fa fa-automobile"></i> 01</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
<!-- Final do Slideshow -->

<!--Filtro por Imóveis -->
<section class="search-section spad">
    <div class="container">
    
 
        <div class="search-form-content">
        <form action="./sitefront/property.php" method="get" class="filter-form">
            <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h4>Qual imóvel está Procurando?</h4>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="change-btn">
                    <div class="cb-item">
                        <label for="cb-rent" class="active">
                            Compra
                            <input type="radio" name="ocasiao" value="Venda"id="cb-rent">
                        </label>
                    </div>
                    <div class="cb-item">
                        <label for="cb-sale">
                            Aluguel
                            <input type="radio" name="ocasiao" value="Aluguel" id="cb-sale">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <select  class="sm-width" aria-label="Default select example" name="cidade" id="cidade">
              
                    <option value="">Cidade</option>
                    <?php
                                                            
                        $query = $pdo->query("SELECT * FROM cidades");
                        $cidades = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ( $cidades as $cidade) { ?>
                            <option > <?php echo $cidade['nome']?></option>
                    <?php } ?>
                </select>
                <select class="sm-width" name="bairro" id="bairro" >
                <option> Bairro</option>
                    <?php
                                                            
                        $query = $pdo->query("SELECT * FROM bairros");
                        $bairros = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ( $bairros as $bairro) { ?>
                            <option > <?php echo $bairro['nome']?></option>
                    <?php } ?>
                </select>
                <select class="sm-width" name="padrao" id="padrao" >
                <option> Status</option>
                <?php
                                                            
                    $query = $pdo->query("SELECT * FROM imoveis");
                    $padrao_imoveis = $query->fetchAll(PDO::FETCH_ASSOC);
                    foreach ( $padrao_imoveis as $padrao) { ?>
                        <option > <?php echo $padrao['padrao']?></option>
                <?php } ?>
                </select>
                <select class="sm-width"name="tipos" id="tipos" >
                   
                    <?php
                                                            
                        $query = $pdo->query("SELECT * FROM tipos");
                        $tipos = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ( $tipos as $tipo) { ?>
                            <option value="<?php echo $tipo['id']?>" > <?php echo $tipo['tipo_imoveis']?></option>
                    <?php } ?>
                </select>
                <select class="sm-width" name="qtd_quartos" id="qtd_quartos"  >
                    <option value="">Número de Quartos</option>
                   
                    <?php
                                                            
                        $query = $pdo->query("SELECT * FROM imoveis");
                        $quartos = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ( $quartos as $quarto) { ?>
                            <option > <?php echo $quarto['qtd_quartos']?></option>
                    <?php } ?>
                </select>
                <select class="sm-width" name="garagem" id="garagem" >
                    <option value="">Vagas de Garagem</option>
                    <?php
                                                            
                        $query = $pdo->query("SELECT * FROM imoveis");
                        $garagens = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ( $garagens as $garagem) { ?>
                            <option > <?php echo $garagem['garagem']?></option>
                    <?php } ?>
                </select>
               
                <button type="submit" class="search-btn sm-width">Buscar</button>
            
        </div>
        </form>             
    </div>
</section>
<!-- Search Section End -->

<!-- Property Section Begin -->
<section class="property-section latest-property-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title">
                    <h4>IMÓVEIS EM DESTAQUE</h4>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="property-controls">
                    <ul>    
                        <li id="listarTodos" data-filter="all">Todos</li>
                        
                        <li data-filter=".Apartamento">Apartamentos</li>
                        <li data-filter="Casa">Casas</li>
                        <li data-filter="Escritório">Coberturas</li>
                        <li data-filter="Lotes">Lotes</li>
                        <li data-filter="Sitios">Sitios</li>
                    </ul>
                </div>
            </div>
        </div>

        

        <div class="row property-filter">
            
            <!-- Início dos cards -->
            
            <div class="col-lg-4 col-md-6 mix all house">
                <div class="property-item">
                    <a href="imovel-detalhes.jsp">
                    <div class="pi-pic set-bg" data-setbg="img/property/property-1.jpg">
                        <div class="label">Para Alugar</div>
                    </div>
                    </a>
                    <div class="pi-text">
                        <a title="Enviar Mensagem" href="" data-toggle="modal" data-target="#modalMensagemImovel" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <div class="pt-price">R$ 889.0<span>/mês</span></div>
                        <h5><a href="imovel-detalhes.jsp">Apartamento 3 Quartos</a></h5>
                        <p><span class="icon_pin_alt"></span> Endereço do Imóvel</p>
                        <ul>
                            <li><i class="fa fa-object-group"></i> 120 m²</li>
                            <li><i class="fa fa-bathtub"></i> 03</li>
                            <li><i class="fa fa-bed"></i> 05</li>
                            <li><i class="fa fa-automobile"></i> 01</li>
                        </ul>
                        <div class="pi-agent">
                            <div class="pa-item">
                                <!--div class="pa-info">
                                    <img src="img/property/posted-by/pb-1.jpg" alt="">
                                    <h6>Nome do Corretor</h6>
                                </div-->
                                <!--div class="pa-text">
                                    <a class="cor-verde-template-link" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=5531975275084"><i class="fa fa-whatsapp"></i> (31)97527-5084 </a>
                                </div-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mix all house">
                <div class="property-item">
                    <div class="pi-pic set-bg" data-setbg="img/property/property-2.jpg">
                        <div class="label c-red">Para Comprar</div>
                    </div>
                    <div class="pi-text">
                        <a title="Enviar Mensagem" href="" data-toggle="modal" data-target="#modalMensagemImovel" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <div class="pt-price">R$ 500.000<span></span></div>
                        <h5><a href="#">Apartamento 3 Quartos</a></h5>
                        <p><span class="icon_pin_alt"></span> Endereço do Imóvel</p>
                        <ul>
                            <li><i class="fa fa-object-group"></i> 120 m²</li>
                            <li><i class="fa fa-bathtub"></i> 03</li>
                            <li><i class="fa fa-bed"></i> 05</li>
                            <li><i class="fa fa-automobile"></i> 01</li>
                        </ul>
                        <div class="pi-agent">
                            <div class="pa-item">
                                <!--div class="pa-info">
                                    <img src="img/property/posted-by/pb-1.jpg" alt="">
                                    <h6>Nome do Corretor</h6>
                                </div-->
                                <!--div class="pa-text">
                                    <a class="cor-verde-template-link" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=5531975275084"><i class="fa fa-whatsapp"></i> (31)97527-5084 </a>
                                </div-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mix all house">
                <div class="property-item">
                    <div class="pi-pic set-bg" data-setbg="img/property/property-2.jpg">
                        <div class="label c-red">Para Comprar</div>
                    </div>
                    <div class="pi-text">
                        <a title="Enviar Mensagem" href="" data-toggle="modal" data-target="#modalMensagemImovel" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <div class="pt-price">R$ 500.000<span></span></div>
                        <h5><a href="#">Apartamento 3 Quartos</a></h5>
                        <p><span class="icon_pin_alt"></span> Endereço do Imóvel</p>
                        <ul>
                            <li><i class="fa fa-object-group"></i> 120 m²</li>
                            <li><i class="fa fa-bathtub"></i> 03</li>
                            <li><i class="fa fa-bed"></i> 05</li>
                            <li><i class="fa fa-automobile"></i> 01</li>
                        </ul>
                        <div class="pi-agent">
                            <div class="pa-item">
                                <!--div class="pa-info">
                                    <img src="img/property/posted-by/pb-1.jpg" alt="">
                                    <h6>Nome do Corretor</h6>
                                </div-->
                                <!--div class="pa-text">
                                    <a class="cor-verde-template-link" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=5531975275084"><i class="fa fa-whatsapp"></i> (31)97527-5084 </a>
                                </div-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fim dos Cards com os Imóveis -->   

        </div>
    </div>
</section>
<!-- Property Section End -->

<!-- Chooseus Section Begin -->
<section class="chooseus-section spad set-bg" data-setbg="img/natal.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="chooseus-text">
                    <div class="section-title">
                        <h4>Invista no seu futuro!</h4>
                    </div>
                
                </div>
                <div class="chooseus-features">
                    <div class="cf-item">
                        <div class="cf-pic">
                            <img src="img/chooseus/chooseus-icon-5.png" alt="">
                        </div>
                        <div class="cf-text">
                            <h5>Os Melhores Imóveis</h5>
                            
                        </div>
                    </div>
                 
                    <div class="cf-item">
                        <div class="cf-pic">
                            <img src="img/chooseus/chooseus-icon-6.png" alt="">
                        </div>
                        <div class="cf-text">
                            <h5>As Melhores Localizações</h5>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Chooseus Section End -->

    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="fs-about">
                        <div class="fs-logo">  
                            <a href="#">
                                <img src="img/logo_Pedrosa1.png" alt="">
                            </a>
                        </div>
                        <div class="fs-widget">
                        <h5>Atendimento</h5>
                        </div>
                        <div class="om-widget">
                        <ul>
                        <spam><a class="text-white" target="_blank" href="https://criarmeulink.com.br/u/1681609222"><i class="img/chooseus/chooseus-icon-8.png"></i> contato@pedrosaseuimovel.com< </a></spam>
                    
                        <span><a class="text-white" target="_blank" href="https://api.whatsapp.com/send?phone=5584988561986&text=ol%C3%A1"><i class="fa fa-whatsapp"></i>84 98856.1986</a></span>
                        <ul>
                        </div>
                        <div class="fs-social">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="fs-widget">
                        <h5>Institucional</h5>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Sobre</a></li>
                            <li><a href="#">Fale Conosco</a></li>
                            <li><a href="#">Politica de Privacidade</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="fs-widget">
                        <h5>Imóveis</h5>
                        <ul>
                            <li><a href="#">Destaques</a></li>
                            <li><a href="#">Lançamentos</a></li>
                            <li><a href="#">Alugar</a></li>
                            <li><a href="#">Comprar</a></li>
                            <li><a href="#">Adicionar Imóvel</a></li>
                        </ul>
                    </div>
                </div>
                <!--div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h5>Newsletter</h5>
                        <p>Deserunt mollit anim id est laborum.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Email">
                            <button type="submit" class="site-btn">Enviar</button>
                        </form>
                    </div-->
                </div>
            </div>
            <div class="copyright-text">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
   Pedrosa Soluções Imobiliárias &copy;<script>document.write(new Date().getFullYear());</script> - Todos os direitos reservados. <i class="fa" aria-hidden="true"></i> Design by <a href="https://www.instagram.com/studioidearcom/" target="_blank">Studio Idear</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.richtext.min.js"></script>
    <script src="js/image-uploader.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>