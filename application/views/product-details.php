        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="<?= base_url() ?>">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <a class="breadcrumb-item" href="">Products</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active"><?= $paket['namaPaket'] ?></span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Product Details Area -->
        <section class="htc__product__details bg__white ptb--100">
            <!-- Start Product Details Top -->
            <div class="htc__product__details__top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                            <div class="htc__product__details__tab__content">
                                <!-- Start Product Big Images -->
                                <div class="product__big__images">
                                    <div class="portfolio-full-image tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                                            <img src="<?= base_url("upload/".$paket['gambar']) ?>" alt="full-image" width="510px" height="667px">
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="img-tab-2">
                                            <img src="<?= base_url("assets/images/product-2/big-img/2.jpg") ?>" alt="full-image">
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="img-tab-3">
                                            <img src="<?= base_url("assets/images/product-2/big-img/3.jpg") ?>" alt="full-image">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Big Images -->
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                            <div class="ht__product__dtl">
                                <h2><?= $paket['namaPaket'] ?></h2>
                                <h2> Harga : <?= $paket['harga'] ?></h2>
                                <h6>Lokasi: <span><?= $lokasi['kota'] ?></span></h6>
                                <ul  class="pro__prize">
                                    <li><?= $paket['namaPaket'] ?></li>
                                </ul>
                                <p>Fasilitas:  </p>
                                <p class="pro__info"><?= $paket['gedung'] ?>,<?= $paket['decoration'] ?>,<?= $paket['catering'] ?>,<?= $paket['cake'] ?>,<?= $paket['band'] ?>,
                                    <?= $paket['wo'] ?>,<?= $paket['mc'] ?>,<?= $paket['dokumentasi'] ?>,<?= $paket['decoration'] ?>,<?= $paket['makeup'] ?>
                                </p>
                            </div>
                            <br>
                            <form method ="post" action="<?= base_url('customer/addPesanan/'.$paket['idPaket']) ?>" >
                                <div class="single-input">
                                    <label for="user-text">Tanggal Pernikahan</label>
                                    <input type="date" name="tgl" value="<?= set_value('tgl') ?>">
                                    <?=form_error('tgl','<small class="text-danger">','</small>');?>
                                </div>
                                <div>
                                <br>
                                    <button type="submit" class="btn btn-success btn-lg btn-block">Pesan</button>
                                    <?php if ($this->session->userdata('idRole')==2) {?>
                                        <a href="<?= base_url('admin/editPaketView/'.$paket['idPaket']) ?>" class="btn btn-danger btn-lg btn-block">Edit </a>
                                    <?php }?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Details Top -->
        </section>
        <!-- End Product Details Area -->
        <!-- Start Product Description -->
        <section class="htc__produc__decription bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Start List And Grid View -->
                        <!-- End List And Grid View -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ht__pro__details__content">
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">
                                <div class="pro__tab__content__inner">
                                    <h4 class="ht__pro__title">Description</h4>
                                    <p> <?= $paket['deskripsi'] ?> </p>
                                </div>
                            </div>
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Description -->