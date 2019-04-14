<?php $this->load->view('frame/header_view')?>



<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Edit Data Jadwal</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

<?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
                </div>
            <?php elseif($this->session->flashdata('error')):?>
                <div class="alert alert-warning">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong><?php echo $this->session->flashdata('error'); ?></strong>
                </div>
            <?php endif;?>
                    <div class="panel-body">
                      <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url();?>admin/jadwal/update_jadwaladm">
                      <?php foreach ($jadwal as $u){?>
                      <input type="hidden" name="id_jadwal" class="form-control" value="<?php echo $u->id_jadwal?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No</label>
                              <div class="col-sm-10">
                                  <input type="text" name="id_jadwal" class="form-control" value="<?php echo $u->id_jadwal?>">
                              </div>
                          </div>
                           <div class="form-group row">
                            <label class="col-sm-2 col-sm-2 control-label">ID Disposisi</label>
                            <div class="col-sm-10">
                            <select name="id_disposisi" id="disposisi" class="form-control selectpicker">
                                <option value="" selected="selected">--- Pilih ID Disposisi ---</option>
                                <?php foreach ($disposisi as $a) {?>
                                <option value="<?php echo $a->id_disposisi; ?>" <?php if ($u->id_disposisi== $a->id_disposisi){ echo "selected"; }?>><?php echo $a->id_disposisi;?></option>
                                <?php } ?> </optgroup>
                                </select>
                           </div>
                           </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Acara</label>
                              <div class="col-sm-10">
                                  <input type="text" name="acara" id="acara" class="form-control" value="<?php echo $u->acara?>" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                              <div class="col-sm-10">
                                  <input name="tanggal" id="tanggal" class=" form-control" value="<?php echo $u->tanggal?>" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Waktu</label>
                              <div class="col-sm-10">
                                  <input name="waktu" id="waktu" class="form-control" value="<?php echo $u->waktu?>" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tempat</label>
                              <div class="col-sm-10">
                                  <input name="tempat" id="tempat" class="form-control" value="<?php echo $u->tempat?>" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Yang Menghadiri</label>
                              <div class="col-sm-10">
                                  <input name="nama_yang_hadir" id="nama_yang_hadir" class="form-control" value="<?php echo $u->nama_yang_hadir?>" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input name="nama_yang_hadir1" id="nama_yang_hadir1" class="form-control" value="<?php echo $u->nama_yang_hadir1?>" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input name="nama_yang_hadir2" id="nama_yang_hadir2" class="form-control" value="<?php echo $u->nama_yang_hadir2?>" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input name="nama_yang_hadir3" id="nama_yang_hadir3" class="form-control" value="<?php echo $u->nama_yang_hadir3?>" readonly>
                              </div>
                          </div>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Hari</label>
                              <div class="col-sm-10">
                               <select name="hari" class="form-control selectpicker">
                                    <option value="" selected="selected">--- Pilih Hari ---</option>
                                    <option value="Senin" <?php if ($u->hari=="Senin"){ echo "selected"; }?>>Senin</option>
                                    <option value="Selasa" <?php if ($u->hari=="Selasa"){ echo "selected"; }?>>Selasa</option>
                                    <option value="Rabu" <?php if ($u->hari=="Rabu"){ echo "selected"; }?>>Rabu</option>
                                    <option value="Kamis" <?php if ($u->hari=="Kamis"){ echo "selected"; }?>>Kamis</option>
                                    <option value="Jumat" <?php if ($u->hari=="Jumat"){ echo "selected"; }?>>Jumat</option>
                                    <option value="Sabtu" <?php if ($u->hari=="Sabtu"){ echo "selected"; }?>>Sabtu</option>
                                    <option value="Minggu" <?php if ($u->hari=="Minggu"){ echo "selected"; }?>>Minggu</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                              <div class="col-sm-10">
                                   <select name="keterangan" class="form-control selectpicker">
                                    <option value="" selected="selected">--- Pilih Keterangan ---</option>
                                    <option value="Belum" <?php if ($u->keterangan=="Belum"){ echo "selected"; }?>>Belum</option>
                                    <option value="Tidak Hadir" <?php if ($u->keterangan=="Tidak Hadir"){ echo "selected"; }?>>Tidak Hadir</option>
                                    <option value="Hadir" <?php if ($u->keterangan=="Hadir"){ echo "selected"; }?>>Hadir</option>
                                    <option value="Sakit" <?php if ($u->keterangan=="Sakit"){ echo "selected"; }?>>Sakit</option>
                                    <option value="Izin" <?php if ($u->keterangan=="Izin"){ echo "selected"; }?>>Izin</option>
                                  </select>
                              </div>
                          </div>
                          
                          <button type="submit" class="btn btn-info">Simpan</button>
                          <?php }?>
                      </form>
                    </div>
                </section>
            </div>
        </div>
      </section>
    </div>
</div>

<?php $this->load->view('frame/footer_view')?>
