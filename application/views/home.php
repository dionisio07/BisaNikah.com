        <!-- Start Slider Area -->
        <div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2><?= $new['namaPaket'] ?></h2>
                                        <h1>Rp.<?= $new['harga'] ?></h1>
                                        <div class="cr__btn">
                                            <a href="cart.html">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="<?= base_url("upload/".$new['gambar']) ?>" alt="slider images"width="290px" height="370px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2><?= $new['namaPaket'] ?></h2>
                                        <h1><?= $new['harga'] ?></h1>
                                        <div class="cr__btn">
                                            <a href="cart.html">Show Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="<?= base_url("upload/".$new['gambar']) ?>" alt="slider images" width="290px" height="370px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- Start Slider Area -->
        <!-- Start Category Area -->
        <section class="htc__category__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Recommendation</h2>
                            <p>Recommendation For You</p>
                        </div>
                    </div>
                </div>
                <div class="htc__product__container">
                        <div class="row">
                            <div class="product__list clearfix mt--30">

                                <?php foreach($paket as $p){?>
                                <!-- Start Single Category -->
                                <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                    <div class="category">
                                        <div class="ht__cat__thumb">
                                            <a href="<?= base_url("customer/detailPaket/".$p['idPaket']) ?>">
                                                <img src="<?= base_url("upload/".$p['gambar']) ?>" alt="product images" width="290px" height="370px">
                                            </a>
                                        </div>
                                        <div class="fr__hover__info">
                                        </div>
                                        <div class="fr__product__inner">
                                            <h4><a href="<?= base_url("customer/detailPaket/".$p['idPaket']) ?>"><?= $p['namaPaket'] ?></a></h4>
                                            <ul class="fr__pro__prize">
                                                <li><?= $p['harga'] ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                
                                </div>
                                <?php }?>  
                                <!-- End Single Category -->
                            </div>
                        </div>
                    </div>
                               
            </div>
        </section>
        <!-- End Category Area -->
        
        <!-- End Banner Area -->
 