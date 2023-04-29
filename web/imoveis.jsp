<jsp:include page="cabecalho.jsp" />



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
<section class="property-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h4>IMÓVEIS RECENTES</h4>
                </div>
            </div>
        </div>
        <div class="row">

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


            <div class="col-lg-12">
                <div class="loadmore-btn">
                    <a href="#">Paginação</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Property Section End -->

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