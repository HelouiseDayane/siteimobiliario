<?php
$cidade = $_GET['cidade'];
$bairro = $_GET['bairro'];
$ocasiao = $_GET['ocasiao'];
$padrao = $_GET['padrao'];
$tipos = $_GET['tipos'];
$qtd_quartos = $_GET['qtd_quartos'];
$garagem = $_GET['garagem'];
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
    <link rel="stylesheet" href="../css/style1.css" type="text/css">
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
                                <li><a href="property.php">Imóveis</a></li>
                                <li><a href="about.php">Contato</a></li>
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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Imóveis</h4>
                        <div class="bt-option">
                            <a href="../index.php"><i class="fa fa-home"></i> Home</a>
                            <span>Imóveis</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Property Section Begin -->
    <section class="property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4>Propriedades</h4>
                    </div>
                </div>
            </div>
            <div class="row">
          <? 
          if()
          $query = $pdo->query("SELECT imoveis.id id, 
            imoveis.titulo tit, 
            imoveis.imoveis_bairro bairro_id,
            imoveis.cidade_id cidade_id,
            imoveis.imoveis_tipo tipo_id, 
            imoveis.padrao pad,
            imoveis.qtd_quartos qtd,
            imoveis.valor valor,
            imoveis.garagem gar,
            imoveis.descricao descri,
            bairros.nome bai,
            bairros.id,
            tipos.id tipos_id, 
            tipos.tipo_imoveis tip,
            cidades.id, 
            cidades.nome cid,
            imoveis.ocasiao oca
            FROM $tabela
            inner join tipos on tipos.id = imoveis.imoveis_tipo 
            inner join bairros on bairros.id  = imoveis.imoveis_bairro
            inner join cidades on cidades.id = imoveis.cidade_id
            ORDER BY imoveis.id desc");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $total_reg = @count($res);
            if($total_reg > 0)
            for($i=0; $i < $total_reg; $i++){
                foreach ($res[$i] as $key => $value){} 
                $titulo = $res[$i]['tit'];
                 $valor = $res[$i]['valor'];
                 $bairro = $res[$i]['bai']; 
                 $quarto = $res[$i]['qtd'] ;
                 $garagem = $res[$i]['garagem'];  ?>
                <div class="col-lg-4 col-md-6">
                    <div class="property-item">
                        <div class="pi-pic set-bg">
                      <!--  <img src='../pagina/verImg.php?itemCod=\".$cod.\"' w> -->
                        </div>
                            <div class="label"></div>
                        </div>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price">$ 289.0<span>/month</span></div>
                            <h5><a href="#">Home in Merrick Way</a></h5>
                            <p><span class="icon_pin_alt"></span> 3 Middle Winchendon Rd, Rindge, NH 03461</p>
                            <ul>
                                <li><i class="fa fa-object-group"></i> 2, 283</li>
                                <li><i class="fa fa-bathtub"></i> 03</li>
                                <li><i class="fa fa-bed"></i> 05</li>
                                <li><i class="fa fa-automobile"></i> 01</li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="property-item">
                        <div class="pi-pic set-bg" data-setbg="img/property/property-2.jpg">
                            <div class="label c-red">For rent</div>
                        </div>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price">$ 289.0</div>
                            <h5><a href="#">Unimont Aurum</a></h5>
                            <p><span class="icon_pin_alt"></span> Gut No.102, Opp. HP Petrol Pump, Karjat</p>
                            <ul>
                                <li><i class="fa fa-object-group"></i> 2, 283</li>
                                <li><i class="fa fa-bathtub"></i> 03</li>
                                <li><i class="fa fa-bed"></i> 05</li>
                                <li><i class="fa fa-automobile"></i> 01</li>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-info">
                                        <img src="img/property/posted-by/pb-1.jpg" alt="">
                                        <h6>Ashton Kutcher</h6>
                                    </div>
                                    <div class="pa-text">
                                        123-455-688
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- Property Section End -->

        <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="fs-about">
                        <div class="fs-logo">
                            <a href="#">
                                <img src="img/f-logo.png" alt="">
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua ut aliquip ex ea</p>
                        <div class="fs-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="fs-widget">
                        <h5>Help</h5>
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Support</a></li>
                            <li><a href="#">Knowledgebase</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="fs-widget">
                        <h5>Links</h5>
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Create Property</a></li>
                            <li><a href="#">My Properties</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h5>Newsletter</h5>
                        <p>Deserunt mollit anim id est laborum.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Email">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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