
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
                                                        <form method = 'post' action='<?= base_url('customer/register') ?>'>
                                                            <center><h5 class="checkout-method__title">Login</h5></center>
															<?php echo $this->session->flashdata('message'); ?>
															<div class="single-input">
															<label for="user-text">Username</label>
                                                                <input type="text" name="username" value="<?= set_value('username') ?>">
																<?=form_error('username','<small class="text-danger">','</small>');?>
                                                            </div>
															<div class="single-input">
                                                                <label for="user-pass">Password</label>
                                                                <input type="password" id="user-pass" name="password">
																<?=form_error('password','<small class="text-danger">','</small>');?>
                                                            </div>
				                                            <p class="require">* Required fields</p>
                                                            <div class="dark-btn">
																<center><button type="submit" class="btn btn-primary btn-lg btn-block">Login</button></center>
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