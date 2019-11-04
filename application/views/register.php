
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
                                                            <center><h5 class="checkout-method__title">Register</h5></center>
															<?php echo $this->session->flashdata('message'); ?>
															<div class="single-input">
															<label for="user-text">Username</label>
                                                                <input type="text" name="username" value="<?= set_value('username') ?>">
																<?=form_error('username','<small class="text-danger">','</small>');?>
                                                            </div>
                                                            <div class="single-input">
                                                                <label for="user-email">Email Address</label>
                                                                <input type="email" id="user-email" name="email" value="<?= set_value('email') ?>">
																<?=form_error('email','<small class="text-danger">','</small>');?>
                                                            </div>
															<div class="single-input">
																<label for="user-text">First Name</label>
                                                                <input type="text" name="fname" value="<?= set_value('fname') ?>">
																<?=form_error('fname','<small class="text-danger">','</small>');?>
                                                            </div>
															<div class="single-input">
																<label for="user-text">Last Name</label>
                                                                <input type="text" name="lname" value="<?= set_value('lname') ?>">
																<?=form_error('lname','<small class="text-danger">','</small>');?>
                                                            </div>
															<div class="single-input">
                                                                <label for="user-pass">Password</label>
                                                                <input type="password" id="user-pass" name="password">
																<?=form_error('password','<small class="text-danger">','</small>');?>
                                                            </div>
															<div class="single-input">
                                                                <label for="user-pass">Re Password</label>
                                                                <input type="password" name ="repassword" id="re-pass">
																<?=form_error('repassword','<small class="text-danger">','</small>');?>
                                                            </div>
															<div class="single-input">
															<label for="user-text">Jenis Kelamin</label>
																<div class="form-check form-check-inline">
  																	<input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin" value="Laki-Laki">
  																	<label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
																	<input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin" value="Perempuan">
  																	<label class="form-check-label" for="inlineRadio1">Perempuan</label>
																</div>
                                                                <?=form_error('jenisKelamin','<small class="text-danger">','</small>');?>
															</div>
                                                            <p class="require">* Required fields</p>
                                                            <div class="dark-btn">
																<center><button type="submit" class="btn btn-success btn-lg btn-block">Register</button></center>
                                                            </div>	
                                                        </form>
                                                        <div class="dark-btn">
																<center><a href="<?= base_url('Welcome/login') ?>" class="btn btn-primary btn-lg btn-block" >Login</a></center>
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
        </div>
        <!-- cart-main-area end -->