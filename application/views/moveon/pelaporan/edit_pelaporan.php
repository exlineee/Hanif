<?php $this->load->view('frame/header_view')?>



 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Edit Data User</h3>
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
                      <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url();?>admin/pelaporan/update_pelaporan">
                      <?php foreach ($pelaporan as $u){?>
                      <input type="hidden" name="id_pel" class="form-control" value="<?php echo $u->id_pel?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No</label>
                              <div class="col-sm-10">
                                  <input type="text" name="id_pel" class="form-control" value="<?php echo $u->id_pel?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pelaporan</label>
                              <div class="col-sm-10">
                                  <select name="pelaporan" class="form-control selectpicker">
                                    <option value="" selected="selected">--- Pilih Pelaporan ---</option>
                                    <option value="Belum" <?php if ($u->pelaporan=="Belum"){ echo "selected"; }?>>Belum</option>
                                    <option value="Hadir" <?php if ($u->pelaporan=="Hadir"){ echo "selected"; }?>>Hadir</option>
                                    <option value="Sakit" <?php if ($u->pelaporan=="Sakit"){ echo "selected"; }?>>Sakit</option>
                                    <option value="Izin" <?php if ($u->pelaporan=="Izin"){ echo "selected"; }?>>Izin</option>
                                  </select>
                          </div>
                          </div>
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Bukti</label>
                              <div class="col-sm-10">
                                  <input type="file" name="bukti" value="<?php echo $u->bukti?>">
                              </div>
                          </div>
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Catatan</label>
                              <div class="col-sm-10">
                                  <input type="text" name="catatan" class="form-control" value="<?php echo $u->catatan?>">
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