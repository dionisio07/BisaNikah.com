       <head> 
        <style>
            .post img:hover { -o-transition: all 0.3s;  -moz-transition: all 0.3s;
            -webkit-transition: all 0.3s; -moz-transform: scale(1.2);
            -o-transform: scale(1.2);  -webkit-transform: scale(1.2); }
        </style>
     </head>
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
                                            <th class="product-name">Foto</th>
                                            <th class="product-thumbnail">Nama Paket</th>
                                            <th class="product-price">Harga</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($paket as $p) {?>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="<?= base_url("upload/".$p['gambar']);?>" alt="product img" width="385px" height="260px"></a></td>
                                            <td class="product-name"><a href="<?= base_url("admin/detailPaket/".$p['idPaket']) ?>"><?= $p['namaPaket'] ?></a></td>
                                            <td class="product-price"><span class="amount">Rp.<?= $p['harga'] ?></span></td>
                                            <td class="product-remove"><a href="#"><i class="icon-trash icons"></i></a></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>