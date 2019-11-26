
	   <!-- cart-main-area start -->
	   <div class="checkout-wrap ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="checkout__inner">
                            <div class="accordion-list">
                                <div class="accordion">
                                    <div class="accordion__body">
                                        <div class="accordion__body__form">
                                            <div class="row">
                                                <div class="col-md-7-center">
                                                    <div class="checkout-method__login">
                                                        <form method = 'post' action='<?= base_url("admin/addPaket") ?>'>
                                                            <center><h5 class="checkout-method__title">Create Paket</h5></center>
															<?php echo $this->session->flashdata('message'); ?>
															<div class="single-input">
															    <label for="user-text">Nama Paket</label>
                                                                <input type="text" name="namaPaket" value="<?= set_value('namaPaket') ?>">
																<?=form_error('namaPaket','<small class="text-danger">','</small>');?>
                                                            </div>
															<div class="single-input">
                                                                <label for="user-text">Harga</label>
                                                                <input type="number" class="form-control" name="harga" value="<?= set_value('harga') ?>">
																<?=form_error('harga','<small class="text-danger">','</small>');?>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="decoration">Decoration
                                                                </label>
                                                                </div>
                                                                <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="catering">Catering
                                                                </label>
                                                                </div>
                                                                <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="music" >Music
                                                                </label>
                                                            </div>
				                                            <p class="require">* Required fields</p>
                                                            <div class="dark-btn">
																<center><button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button></center>
                                                            </div>	
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->