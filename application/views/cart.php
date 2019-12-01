
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">shopping cart</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">products</th>
                                            <th class="product-name">Nama Paket</th>
                                            <th class="product-price">Harga</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($pesanan as $p) {?>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="<?= base_url("upload/".$p['gambar']);?>" alt="product img" /></a></td>
                                            <td class="product-name"><a href="#"><?= $p['namaPaket'] ?></a>
                                            </td>
                                            <td class="product-price"><span class="amount"><?= $p['harga'] ?></span></td>
                                            <td class="product-remove"><a href="<?= base_url('customer/deletePesanan/'.$p['idPesanan']) ?>"><i class="icon-trash icons"></i></a></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                </div>
                                
                                        <ul class="payment__btn">
                                            <li class="active"><a href="<?= base_url('customer/infoPembayaran') ?>">payment</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->
  