<jsp:include page="cabecalho.jsp" />

<!--SlideShow Carroussel -->
<section class="hero-section">
    <div class="container">
        <div class="hs-slider owl-carousel">
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
        <div class="row">
            <div class="col-lg-7">
                <div class="section-title">
                    <h4>Qual imóvel está Procurando?</h4>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="change-btn">
                    <div class="cb-item">
                        <label for="cb-rent" class="active">
                            Compra
                            <input type="radio" id="cb-rent">
                        </label>
                    </div>
                    <div class="cb-item">
                        <label for="cb-sale">
                            Aluguel
                            <input type="radio" id="cb-sale">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-form-content">
            <form action="#" class="filter-form">
                <select class="sm-width">
                    <option value="">Cidade</option>
                </select>
                <select class="sm-width">
                    <option value="">Bairro</option>
                </select>
                <select class="sm-width">
                    <option value="">Imóvel Status</option>
                    <option value="Novo">Novo</option>
                    <option value="Planta">Planta</option>
                    <option value="Usado">Usado</option>
                </select>
                <select class="sm-width">
                    <option value="">Tipo de Imóvel</option>
                </select>
                <select class="sm-width">
                    <option value="">Número de Quartos</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="mais">Mais de 5</option>
                </select>
                <select class="sm-width">
                    <option value="">Vagas de Garagem</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="mais">Mais de 5</option>
                </select>
                <div class="room-size-range-wrap sm-width">
                    <div class="price-text">
                        <label for="roomsizeRange">Tamanho m²:</label>
                        <input type="text" id="roomsizeRange" readonly>
                    </div>
                    <div id="roomsize-range" class="slider"></div>
                </div>
                <div id="priceCompra" class="price-range-wrap sm-width">
                    <div class="price-text">
                        <label for="priceRange">Valor:</label>
                        <input type="text" id="priceRange" readonly>
                    </div>
                    <div id="price-range" class="slider"></div>
                </div>

                <div id="priceAluguel" class="price-range-wrap sm-width">
                    <div class="price-text">
                        <label for="priceRange">Valor:</label>
                        <input type="text" id="priceRangeAluguel" readonly>
                    </div>
                    <div id="price-range-aluguel" class="slider"></div>
                </div>
                <button type="button" class="search-btn sm-width">Buscar</button>
            </form>
        </div>

    </div>
</section>
<!-- Search Section End -->

<!-- Property Section Begin -->
<section class="property-section latest-property-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title">
                    <h4>ULTIMOS IMÓVEIS</h4>
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
                        <div class="pt-price">R$ 889.0<span>/mes</span></div>
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
                                <div class="pa-info">
                                    <img src="img/property/posted-by/pb-1.jpg" alt="">
                                    <h6>Nome do Corretor</h6>
                                </div>
                                <div class="pa-text">
                                    <a class="cor-verde-template-link" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=5531975275084"><i class="fa fa-whatsapp"></i> (31)97527-5084 </a>
                                </div>
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
                                <div class="pa-info">
                                    <img src="img/property/posted-by/pb-1.jpg" alt="">
                                    <h6>Nome do Corretor</h6>
                                </div>
                                <div class="pa-text">
                                    <a class="cor-verde-template-link" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=5531975275084"><i class="fa fa-whatsapp"></i> (31)97527-5084 </a>
                                </div>
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
<section class="chooseus-section spad set-bg" data-setbg="img/chooseus/chooseus-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="chooseus-text">
                    <div class="section-title">
                        <h4>Invista no seu futuro!</h4>
                    </div>
                    <p>Lorem Ipsum has been the industry?s standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="chooseus-features">
                    <div class="cf-item">
                        <div class="cf-pic">
                            <img src="img/chooseus/chooseus-icon-1.png" alt="">
                        </div>
                        <div class="cf-text">
                            <h5>Os Melhores Imóveis</h5>
                            <p>We help you find a new home by offering a smart real estate.</p>
                        </div>
                    </div>
                    <div class="cf-item">
                        <div class="cf-pic">
                            <img src="img/chooseus/chooseus-icon-2.png" alt="">
                        </div>
                        <div class="cf-text">
                            <h5>Sua compra Facilitada</h5>
                            <p>Millions of houses and apartments in your favourite cities</p>
                        </div>
                    </div>
                    <div class="cf-item">
                        <div class="cf-pic">
                            <img src="img/chooseus/chooseus-icon-3.png" alt="">
                        </div>
                        <div class="cf-text">
                            <h5>Corretores Especializados</h5>
                            <p>Find an agent who knows your market best</p>
                        </div>
                    </div>
                    <div class="cf-item">
                        <div class="cf-pic">
                            <img src="img/chooseus/chooseus-icon-4.png" alt="">
                        </div>
                        <div class="cf-text">
                            <h5>Melhores Localizações</h5>
                            <p>Sign up now and sell or rent your own properties</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Chooseus Section End -->

<!-- Feature Property Section Begin -->
<section class="feature-property-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="feature-property-left">
                    <div class="section-title">
                        <h4>Categorias</h4>
                    </div>
                    <ul>
                        <li>Apartamento</li>
                        <li>Casa</li>
                        <li>Cobertura</li>
                        <li>Sítios</li>
                        <li>Coberturas</li>
                        <li>Imóvel Comercial</li>
                    </ul>
                    <a href="imoveis.jsp">Ver Todos Imóveis</a>
                </div>
            </div>
            <div class="col-lg-8 p-0">
                <div class="fp-slider owl-carousel">
                    
                    <!-- Inicio do Carrousel -->
                    <div class="fp-item set-bg" data-setbg="img/feature-property/fp-1.jpg">
                        <div class="fp-text">
                            <h5 class="title">Casa com 4 Quartos</h5>
                            <p><span class="icon_pin_alt"></span> Localização do Imóvel</p>
                            <div class="label">Para Alugar</div>
                            <h5>R$ 989.0<span>/mes</span></h5>
                            <ul>
                                <li><i class="fa fa-object-group"></i> 2, 283</li>
                                <li><i class="fa fa-bathtub"></i> 03</li>
                                <li><i class="fa fa-bed"></i> 04</li>
                                <li><i class="fa fa-automobile"></i> 01</li>
                            </ul>
                        </div>
                    </div>
                    
                       <div class="fp-item set-bg" data-setbg="img/feature-property/fp-2.jpg">
                        <div class="fp-text">
                            <h5 class="title">Casa com 4 Quartos</h5>
                            <p><span class="icon_pin_alt"></span> Localização do Imóvel</p>
                            <div class="label">Para Alugar</div>
                            <h5>R$ 989.0<span>/mes</span></h5>
                            <ul>
                                <li><i class="fa fa-object-group"></i> 200 m²</li>
                                <li><i class="fa fa-bathtub"></i> 03</li>
                                <li><i class="fa fa-bed"></i> 04</li>
                                <li><i class="fa fa-automobile"></i> 01</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Final do Carrousel -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature Property Section End -->

<!-- Team Section Begin -->
<section class="team-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="section-title">
                    <h4>Corretores Destaques</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="team-btn">
                    <a href="corretores.jsp"><i class="fa fa-user"></i> Ver Todos</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="ts-item">
                    <div class="ts-text">
                        <img src="img/team/team-1.jpg" alt="">
                        <h5>Ashton Kutcher</h5>
                       <span><i class="fa fa-whatsapp mr-1"></i>(31)97527-5084</span>
                        <p>Ipsum dolor amet, consectetur adipiscing elit, eiusmod tempor incididunt lorem.</p>
                        <div class="ts-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                             <a target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=5531975275084"><i class="fa fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ts-item">
                    <div class="ts-text">
                        <img src="img/team/team-2.jpg" alt="">
                        <h5>Ashton Kutcher</h5>
                         <span><a class="text-white" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone="><i class="fa fa-whatsapp"></i>(31)97527-5084</a></span>
                        <p>Ipsum dolor amet, consectetur adipiscing elit, eiusmod tempor incididunt lorem.</p>
                        <div class="ts-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ts-item">
                    <div class="ts-text">
                        <img src="img/team/team-3.jpg" alt="">
                        <h5>Ashton Kutcher</h5>
                         <span><a class="text-white" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone="><i class="fa fa-whatsapp"></i>(31)97527-5084</a></span>
                        <p>Ipsum dolor amet, consectetur adipiscing elit, eiusmod tempor incididunt lorem.</p>
                        <div class="ts-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->

<!-- Categories Section Begin -->
<section class="categories-section">
    <div class="cs-item-list">
        <div class="cs-item set-bg" data-setbg="img/categories/cat-1.jpg">
            <div class="cs-text">
                <h5>Apartamento</h5>
                <span>230 imóveis</span>
            </div>
        </div>
        <div class="cs-item set-bg" data-setbg="img/categories/cat-2.jpg">
            <div class="cs-text">
                <h5>Cobertura</h5>
                <span>230 imóveis</span>
            </div>
        </div>
        <div class="cs-item set-bg" data-setbg="img/categories/cat-3.jpg">
            <div class="cs-text">
                <h5>Casa</h5>
                <span>230 imóveis</span>
            </div>
        </div>
        <div class="cs-item set-bg" data-setbg="img/categories/cat-4.jpg">
            <div class="cs-text">
                <h5>Comercial</h5>
                <span>230 imóveis</span>
            </div>
        </div>
        <div class="cs-item set-bg" data-setbg="img/categories/cat-5.jpg">
            <div class="cs-text">
                <h5>Escritórios</h5>
                <span>230 imóveis</span>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Testimonial Section Begin -->
<section class="testimonial-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h4>Alguns de nossos Clientes</h4>
                </div>
            </div>
        </div>
        <div class="row testimonial-slider owl-carousel">
            <div class="col-lg-6">
                <div class="testimonial-item">
                    <div class="ti-text">
                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit, seiusmod tempor incididunt ut labore
                            magna aliqua. Quis ipsum suspendisse ultrices gravida accumsan lacus vel facilisis.</p>
                    </div>
                    <div class="ti-author">
                        <div class="ta-pic">
                            <img src="img/testimonial-author/ta-1.jpg" alt="">
                        </div>
                        <div class="ta-text">
                            <h5>Arise Naieh</h5>
                            <span>Designer</span>
                            <div class="ta-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-item">
                    <div class="ti-text">
                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit, seiusmod tempor incididunt ut labore
                            magna aliqua. Quis ipsum suspendisse ultrices gravida accumsan lacus vel facilisis.</p>
                    </div>
                    <div class="ti-author">
                        <div class="ta-pic">
                            <img src="img/testimonial-author/ta-2.jpg" alt="">
                        </div>
                        <div class="ta-text">
                            <h5>Arise Naieh</h5>
                            <span>Designer</span>
                            <div class="ta-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-item">
                    <div class="ti-text">
                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit, seiusmod tempor incididunt ut labore
                            magna aliqua. Quis ipsum suspendisse ultrices gravida accumsan lacus vel facilisis.</p>
                    </div>
                    <div class="ti-author">
                        <div class="ta-pic">
                            <img src="img/testimonial-author/ta-1.jpg" alt="">
                        </div>
                        <div class="ta-text">
                            <h5>Arise Naieh</h5>
                            <span>Designer</span>
                            <div class="ta-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->




<jsp:include page="rodape.jsp" />    




<!-- Modal Mensagem Imovel-->
<div class="modal fade" data-backdrop="static" id="modalMensagemImovel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enviar Mensagem</h5>
                <button id="btn-cancelar-dismiss" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="cc-form">
                    <div class="group-input">
                        <input type="text" placeholder="Nome">
                        <input id="telefone" type="text" placeholder="Telefone">
                        <input type="email" placeholder="Email">
                        
                    </div>
                    <textarea placeholder="Comentário"></textarea>
                    <div align="right">
                    <button id="btn-enviar" type="submit" class="site-btn">Enviar</button>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
</div>




<!-- Script para mostrar div do slider aluguel/compra -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#priceAluguel').hide();
        $('#priceCompra').show();

        $('#cb-rent').click(function (event) {
            $('#priceAluguel').hide();
            $('#priceCompra').show();
        })

        $('#cb-sale').click(function (event) {
            $('#priceAluguel').show();
            $('#priceCompra').hide();
        })

    })
</script>



<!-- Listar todos os imoveis apos abrir modal -->
<script type="text/javascript">


    $('#btn-cancelar-dismiss').click(function (event) {
        $('#listarTodos').click();
    })

   
    $('#btn-enviar').click(function (event) {
        $('#listarTodos').click();
    })



</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script src="js/mascara.js"></script>
