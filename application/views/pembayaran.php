
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="<?= base_url()?>">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Invoice</span>
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
                                    
                                    <tbody>
                                    
                                        <tr>
                                           <td class="product-name">Nama Paket </td> 
                                           <td class="product-name">: </td> 
                                           <td class="product-name"><?= $data["namaPaket"] ?> </td>
                                        </tr>
                                        <tr>
                                           <td class="product-name">Harga </td> 
                                           <td class="product-name">: </td> 
                                           <td class="product-name"><?= $data['harga'] ?> </td>
                                        </tr>
                                        <tr>
                                           <td class="product-name">Tanggal Pernikahan</td> 
                                           <td class="product-name">: </td> 
                                           <td class="product-name"><?= $data['tglAcara'] ?> </td>
                                        </tr>
                                        <tr>
                                           <td class="product-name">Status pembayaran</td> 
                                           <td class="product-name">: </td> 
                                           <td class="product-name">Berhasil </td>
                                        </tr>
                                   
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                </div>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->
  