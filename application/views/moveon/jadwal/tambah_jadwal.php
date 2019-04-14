<?php $this->load->view('frame/header_view')?>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Tambah Data Jadwal</h3>
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
                      <form class="form-horizontal tasi-form" method="post" action="entry_jadwal">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">No</label>
                              <div class="col-sm-10">
                                <?php
                                  $sql = $this->db->query("select * from jadwal")->result_array();
                                  $id_jadwal = ''.(count(@$sql) + 1);
                                ?>
                                <input type="text" class="form-control" name="id_jadwal" placeholder="ID Jadwal" value="<?php echo $id_jadwal;?>" required>
                              </div>
                          </div> 
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">ID Disposisi</label>
                              <div class="col-sm-10">
                                  <select name="id_disposisi" id="disposisi" class="form-control selectpicker">
                                <option value="" selected="selected">--- Pilih ID Disposisi---</option>
                                <?php foreach ($disposisi as $u) {?>
                                <option value="<?php echo $u->id_disposisi; ?>"><?php echo $u->id_disposisi;?></option>
                                <?php } ?> </optgroup>
                                </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Acara</label>
                              <div class="col-sm-10">
                                  <input type="text" name="acara" id="perihal" class="form-control" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                              <div class="col-sm-10">
                                  <input type="date" name="tanggal" id="tanggal" class="form-control" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Waktu</label>
                              <div class="col-sm-10">
                                  <input type="text" name="waktu" id="waktu" class="form-control" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tempat</label>
                              <div class="col-sm-10">
                                  <input type="text" name="tempat" id="tempat" class="form-control" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Yang Hadir</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama_yang_hadir" id="nama_yang_hadir" class="form-control" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama_yang_hadir1" id="nama_yang_hadir1" class="form-control" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama_yang_hadir2" id="nama_yang_hadir2" class="form-control" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama_yang_hadir3" id="nama_yang_hadir3" class="form-control" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Hari</label>
                              <div class="col-sm-10">
                                  <select name="hari" class="form-control selectpicker">
                                    <option value="" selected="selected">--- Pilih Hari ---</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                  </select>
                          </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                              <div class="col-sm-10">
                                  <select name="keterangan" class="form-control selectpicker">
                                    <option value="" selected="selected">--- Pilih Keterangan ---</option>
                                    <option value="Belum">Belum</option>
                                    <option value="Tidak Hadir">Tidak Hadir</option>
                                    <option value="Hadir">Hadir</option>
                                    <option value="Sakit">Sakit</option>
                                    <option value="Izin">Izin</option>
                                  </select>
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