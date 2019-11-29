
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
                                                        <?php echo form_open_multipart('admin/editPaket/'.$paket['idPaket']); ?>
                                                            <center><h5 class="checkout-method__title">Edit Paket</h5></center>
															<?php echo $this->session->flashdata('message'); ?>
															<div class="single-input">
															    <label for="user-text">Nama Paket</label>
                                                                <input type="text" name="namaPaket" value="<?= $paket['namaPaket'] ?>">
																<?=form_error('namaPaket','<small class="text-danger">','</small>');?>
                                                            </div>
															<div class="single-input">
                                                                <label for="user-text">Harga</label>
                                                                <input type="number" class="form-control" name="harga" value="<?= $paket['harga'] ?>">
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
                                                                    <?php if ($paket['gedung']) {?>
                                                                        <input type="checkbox" class="form-check-input" value="Gedung" name="gedung" checked >Gedung
                                                                    <?php }else { ?>
                                                                        <input type="checkbox" class="form-check-input" value="Gedung" name="gedung" >Gedung
                                                                    <?php } ?>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                <?php if ($paket['decoration']) {?>
                                                                    <input type="checkbox" class="form-check-input" value="Decoration" name="decoration" checked>Decoration
                                                                <?php }else { ?>
                                                                    <input type="checkbox" class="form-check-input" value="Decoration" name="decoration">Decoration
                                                                <?php } ?>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                <?php if ($paket['catering']) {?>
                                                                    <input type="checkbox" class="form-check-input" value="Catering" name="catering" checked>Catering
                                                                <?php }else { ?> 
                                                                    <input type="checkbox" class="form-check-input" value="Catering" name="catering">Catering
                                                                <?php } ?> 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                <?php if ($paket['cake']) {?>
                                                                    <input type="checkbox" class="form-check-input" value="Wedding Cake" name="cake" checked>Wedding Cake
                                                                <?php }else { ?>
                                                                    <input type="checkbox" class="form-check-input" value="Wedding Cake" name="cake">Wedding Cake
                                                                <?php } ?>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                <?php if ($paket['band']) {?>
                                                                    <input type="checkbox" class="form-check-input" value="Band" name="band" checked>Band
                                                                <?php }else { ?>
                                                                    <input type="checkbox" class="form-check-input" value="Band" name="band">Band
                                                                <?php } ?>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                <?php if ($paket['wo']) {?>
                                                                    <input type="checkbox" class="form-check-input" value="Wedding Organizer" name="wo" checked>Wedding Organizer
                                                                </label>
                                                                <?php }else { ?>
                                                                    <input type="checkbox" class="form-check-input" value="Wedding Organizer" name="wo">Wedding Organizer
                                                                <?php } ?>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                <?php if ($paket['mc']) {?>
                                                                    <input type="checkbox" class="form-check-input" value="Master of Ceremony" name="mc"checked>Master of Ceremony
                                                                </label>
                                                            <?php }else { ?>
                                                                <input type="checkbox" class="form-check-input" value="Master of Ceremony" name="mc">Master of Ceremony
                                                            <?php } ?>   
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                <?php if ($paket['dokumentasi']) {?>
                                                                    <input type="checkbox" class="form-check-input" value="Documentation" name="dokumentasi" checked >Documentation
                                                                <?php }else { ?>
                                                                    <input type="checkbox" class="form-check-input" value="Documentation" name="dokumentasi">Documentation
                                                                <?php } ?>   
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                <?php if ($paket['makeup']) {?>
                                                                    <input type="checkbox" class="form-check-input" value="Makeup" name="makeup"checked>Makeup
                                                                <?php }else { ?>
                                                                    <input type="checkbox" class="form-check-input" value="Makeup" name="makeup">Makeup
                                                                <?php } ?>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="comment">Deskripsi:</label>
                                                                <textarea class="form-control" rows="5" name="deskripsi"><?= $paket['deskripsi'] ?></textarea>
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