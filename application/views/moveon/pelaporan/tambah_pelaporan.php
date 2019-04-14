
<?php $this->load->view('frame/header_view')?>




 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Tambah Data Pelaporan</h3>
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
                      <form class="form-horizontal tasi-form" method="post" action="entry_pelaporan">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">No</label>
                              <div class="col-sm-10">
                                <?php
                                  $sql = $this->db->query("select * from pelaporan")->result_array();
                                  $id_pel = ''.(count(@$sql) + 1);
                                ?>
                                <input type="text" class="form-control" name="id_pel" placeholder="ID Pelaporan" value="<?php echo $id_pel;?>" required>
                              </div>
                          </div> 
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pelaporan</label>
                              <div class="col-sm-10">
                                  <select name="pelaporan" class="form-control selectpicker">
                                    <option value="" selected="selected">--- Pilih Pelaporan ---</option>
                                    <option value="Tidak Hadir">Tidak Hadir</option>
                                    <option value="Hadir">Hadir</option>
                                    <option value="Sakit">Sakit</option>
                                    <option value="Izin">Izin</option>
                                  </select>
                          </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Bukti</label>
                              <div class="col-sm-10">
                                  <input type="file" name="bukti">
                              </div>
                          </div>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Catatan</label>
                              <div class="col-sm-10">
                                  <input type="text" name="catatan" class="form-control">
                              </div>
                          </div>
                          
                          <button type="submit" class="btn btn-info">Simpan</button>
                      </form>
                    </div>
                </section>
            </div>
        </div>
      </section>
    </div>
</div>

<?php $this->load->view('frame/footer_view')?>