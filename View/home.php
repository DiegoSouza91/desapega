<?php 
    use App\Controller\CategoriaController\CategoriaController;

    $categoriaController = new CategoriaController;

    $listaCategoria = $categoriaController->RetornarTodos();

 ?>

<!-- Service Area Start Here -->
<section class="service-layout1 bg-accent s-space-custom2">
    <div class="container">
        <div class="section-title-dark">
            <h1>Bem vindo(a) ao Desapega</h1>
            <p>Navegue em nossas principais categorias</p>
        </div>
        <div class="row">

            <?php 
                foreach ($listaCategoria as $categoria) {

             ?>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12 item-mb">
                <div class="service-box1 bg-body text-center">
                    <img src="img/service/<?= $categoria->getThumb(); ?>" alt="service" class="img-fluid">
                    <h3 class="title-medium-dark mb-none">
                        <a href="?p=anuncios"><?= $categoria->getNome(); ?></a>
                    </h3>
                    <div class="view">(19,805)</div>
                </div>
            </div>

            <?php 

                }

             ?>

        </div>
    </div>
</section>
<!-- Service Area End Here -->
<!-- Products Area Start Here -->
<section class="bg-body s-space-default">
    <div class="container">
        <div class="section-title-dark">
            <h2>Compra &amp; Venda Online de Produtos</h2>
            <p>Encontre os melhores produtos</p>
        </div>
    </div>
    <div class="container" id="isotope-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="isotope-classes-tab isotop-btn">
                    <a href="#" data-filter=".new" class="current">Novos</a>
                    <a href="#" data-filter=".featured">Destaque</a>
                    <a href="#" data-filter=".random">Aleatórios</a>
                </div>
            </div>
        </div>
        <div id="category-view" class="category-grid-layout2">
            <div class="row featuredContainer">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 new featured">
                    <div class="product-box item-mb zoom-gallery">
                        <div class="item-mask-wrapper">
                            <div class="item-mask bg-box"><img src="img/product/product1.png" alt="categories" class="img-fluid">
                                <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                <div class="title-ctg">Clothing</div>
                                <ul class="info-link">
                                    <li><a href="img/product/product1.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                    <li><a href="single-product-layout1.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="symbol-featured"><img src="img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="title-ctg">Clothing</div>
                            <h3 class="short-title"><a href="single-product1.html">Cotton T-Shirt</a></h3>
                            <h3 class="long-title"><a href="single-product1.html">Men's Basic Cotton T-Shirt</a></h3>
                            <ul class="upload-info">
                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                            </ul>
                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                            <div class="price">$15</div>
                            <a href="single-product-layout1.html" class="product-details-btn">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 featured random">
                    <div class="product-box item-mb zoom-gallery">
                        <div class="item-mask-wrapper">
                            <div class="item-mask bg-box"><img src="img/product/product2.png" alt="categories" class="img-fluid">
                                <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                <div class="title-ctg">Electronics</div>
                                <ul class="info-link">
                                    <li><a href="img/product/product2.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                    <li><a href="single-product-layout2.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="symbol-featured"><img src="img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="title-ctg">Clothing</div>
                            <h3 class="short-title"><a href="single-product2.html">Patriot Phone</a></h3>
                            <h3 class="long-title"><a href="single-product2.html">HTC Desire Patriot Mobile Smart Phone</a></h3>
                            <ul class="upload-info">
                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                            </ul>
                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                            <div class="price">$250</div>
                            <a href="single-product-layout2.html" class="product-details-btn">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 random new">
                    <div class="product-box item-mb zoom-gallery">
                        <div class="item-mask-wrapper">
                            <div class="item-mask bg-box"><img src="img/product/product3.png" alt="categories" class="img-fluid">
                                <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                <div class="title-ctg">Electronics</div>
                                <ul class="info-link">
                                    <li><a href="img/product/product3.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                    <li><a href="single-product-layout3.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="symbol-featured"><img src="img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="title-ctg">Clothing</div>
                            <h3 class="short-title"><a href="single-product3.html">Smart LED TV</a></h3>
                            <h3 class="long-title"><a href="single-product3.html">TCL 55-Inch 4K Ultra HD Roku Smart LED TV</a></h3>
                            <ul class="upload-info">
                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                            </ul>
                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                            <div class="price">$800</div>
                            <a href="single-product-layout3.html" class="product-details-btn">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 featured new random">
                    <div class="product-box item-mb zoom-gallery">
                        <div class="item-mask-wrapper">
                            <div class="item-mask bg-box"><img src="img/product/product4.png" alt="categories" class="img-fluid">
                                <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                <div class="title-ctg">Clothing</div>
                                <ul class="info-link">
                                    <li><a href="img/product/product4.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                    <li><a href="single-product-layout1.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="symbol-featured"><img src="img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="title-ctg">Clothing</div>
                            <h3 class="short-title"><a href="single-product1.html">Headphones</a></h3>
                            <h3 class="long-title"><a href="single-product1.html">Basics Lightweight On-Ear Headphones</a></h3>
                            <ul class="upload-info">
                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                            </ul>
                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                            <div class="price">$15</div>
                            <a href="single-product-layout1.html" class="product-details-btn">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 new">
                    <div class="product-box item-mb zoom-gallery">
                        <div class="item-mask-wrapper">
                            <div class="item-mask bg-box"><img src="img/product/product5.png" alt="categories" class="img-fluid">
                                <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                <div class="title-ctg">Clothing</div>
                                <ul class="info-link">
                                    <li><a href="img/product/product5.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                    <li><a href="single-product-layout2.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="symbol-featured"><img src="img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="title-ctg">Clothing</div>
                            <h3 class="short-title"><a href="single-product2.html">Handbags</a></h3>
                            <h3 class="long-title"><a href="single-product2.html">MMK collection Women Fashion Matching Satchel handbags</a></h3>
                            <ul class="upload-info">
                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                            </ul>
                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                            <div class="price">$15</div>
                            <a href="single-product-layout2.html" class="product-details-btn">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 featured new">
                    <div class="product-box item-mb zoom-gallery">
                        <div class="item-mask-wrapper">
                            <div class="item-mask bg-box"><img src="img/product/product6.png" alt="categories" class="img-fluid">
                                <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                <div class="title-ctg">Clothing</div>
                                <ul class="info-link">
                                    <li><a href="img/product/product6.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                    <li><a href="single-product-layout3.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="symbol-featured"><img src="img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="title-ctg">Clothing</div>
                            <h3 class="short-title"><a href="single-product3.html">Classic Watch</a></h3>
                            <h3 class="long-title"><a href="single-product3.html">Men's Classic Sport Watch with Black Band</a></h3>
                            <ul class="upload-info">
                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                            </ul>
                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                            <div class="price">$15</div>
                            <a href="single-product-layout3.html" class="product-details-btn">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 random new">
                    <div class="product-box item-mb zoom-gallery">
                        <div class="item-mask-wrapper">
                            <div class="item-mask bg-box"><img src="img/product/product7.png" alt="categories" class="img-fluid">
                                <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                <div class="title-ctg">Clothing</div>
                                <ul class="info-link">
                                    <li><a href="img/product/product7.png" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                    <li><a href="single-product-layout1.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="symbol-featured"><img src="img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="title-ctg">Clothing</div>
                            <h3 class="short-title"><a href="single-product1.html">V-Neck T-Shirt</a></h3>
                            <h3 class="long-title"><a href="single-product1.html">Men's Threadborne Streaker V-Neck T-Shirt</a></h3>
                            <ul class="upload-info">
                                <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i>Sydney, Australia</li>
                                <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i>Clothing</li>
                            </ul>
                            <p>Eimply dummy text of the printing and typesetting industrym has been the industry's standard dummy.</p>
                            <div class="price">$15</div>
                            <a href="single-product-layout1.html" class="product-details-btn">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-center item-mt">
            <h2 class="title-bold-dark mb-none">Você tem algo para vender?</h2>
            <p>Anuncie no desapega</p>
            <a href="#" class="cp-default-btn direction-img">Anunciar</a>
        </div>
    </div>
</section>
<!-- Products Area End Here -->

<!-- Selling Process Area Start Here -->
<section class="bg-accent s-space-regular">
    <div class="container">
        <div class="section-title-dark">
            <h2>Como começar a vender seus produtos</h2>
            <p>É muito simples escolher o preço &amp; nível de exposição na página de preços</p>
        </div>
        <ul class="process-area">
            <li>
                <img src="img/banner/process1.png" alt="process" class="img-fluid">
                <h3>Envie seus produtos</h3>
                <p> Informe os dados do seu produto.</p>
            </li>
            <li>
                <img src="img/banner/process2.png" alt="process" class="img-fluid">
                <h3>Defina seu preço</h3>
                <p> Defina o preço que para o produto que será vendido.</p>
            </li>
            <li>
                <img src="img/banner/process3.png" alt="process" class="img-fluid">
                <h3>Comece seu negócio</h3>
                <p> E comece a vender seus produtos anunciados.</p>
            </li>
        </ul>
    </div>
</section>
<!-- Selling Process Area End Here -->