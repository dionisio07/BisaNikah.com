
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
                                                        <?php echo form_open_multipart('admin/addPaket'); ?>
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
                                                            <div class="form-group">
                                                                <label for="sel1">Lokasi:</label>
                                                                    <select class="form-control" name="lokasi" >
                                                                        <?php foreach($lokasi as $l){ ?>
                                                                            <option value="<?php echo $l['idLokasi'];?>"><?php echo $l['kota']; ?></option>
                                                                        <?php } ?>       
                                                                    </select>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="Gedung" name="gedung" >Gedung
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="Decoration" name="decoration">Decoration
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="Catering" name="catering">Catering
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="Wedding Cake" name="cake">Wedding Cake
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="Band" name="band">Band
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="Wedding Organizer" name="wo">Wedding Organizer
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="Master of Ceremony" name="mc">Master of Ceremony
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="Documentation" name="dokumentation">Documentation
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="Makeup" name="makeup">Makeup
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="comment">Deskripsi:</label>
                                                                <textarea class="form-control" rows="5" name="deskripsi"><?= set_value('deskripsi') ?></textarea>
                                                                <?=form_error('deskripsi','<small class="text-danger">','</small>');?>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>
                                                                <?php echo form_upload('foto', set_value('foto')); ?>
                                                                    <?=form_error('foto','<small class="text-danger">','</small>');?>
                                                                </label>
                                                            </div>
				                                            <p class="require">* Required fields</p>
                                                            <div class="dark-btn">
																<center><button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button></center>
                                                            </div>	
                                                        <?php echo form_close() ?>
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