<?php $this->load->view('frame/header_view')?>



<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Tambah Data Agenda</h3>
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
                      <form class="form-horizontal tasi-form" method="post" action="entry_agenda" enctype="multipart/form-data">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">No</label>
                              <div class="col-sm-10">
                                <?php
                                  $sql = $this->db->query("select * from agenda")->result_array();
                                  $nomor_urut = ''.(count(@$sql) + 1);
                                ?>
                                <input type="text" class="form-control" name="nomor_urut" placeholder="Nomor Urut" value="<?php echo $nomor_urut;?>" required>
                              </div>
                          </div> 
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Surat Masuk</label>
                              <div class="col-sm-10">
                              <?php 
                                $sql = $this->db->query("select * from agenda")->result_array();
                                $tanggal_surat_masuk =''.(date('Y-m-d'));
                              ?>
                                  <input type="text" name="tanggal_surat_masuk" class="form-control" placeholder="Tanggal SUrat Masuk" value="<?php echo $tanggal_surat_masuk;?>" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nomor Surat Masuk</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nomor_surat_masuk" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Pengirim</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama_pengirim" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pekerjaan Pengirim</label>
                              <div class="col-sm-10">
                                  <input type="text" name="pekerjaan_pengirim" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat Pengirim</label>
                              <div class="col-sm-10">
                                  <input type="text" name="alamat_pengirim" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Perihal Surat</label>
                              <div class="col-sm-10">
                                  <input type="text" name="perihal_surat" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Diselenggarakan</label>
                              <div class="col-sm-10">
                                  <input type="date" name="tgl_diselenggarakan" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Waktu</label>
                              <div class="col-sm-10">
                                  <input type="text" name="waktu" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tempat</label>
                              <div class="col-sm-10">
                                  <input type="text" name="tempat" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tujuan Surat</label>
                              <div class="col-sm-10">
                                  <select name="tujuan_surat" class="form-control selectpicker">
                                    <option value="" selected="selected">--- Pilih Tujuan Surat ---</option>
                                    <option value="Sekcam">Sekcam</option>
                                    <option value="Kasi Pemerintah">Kasi Pemerintah</option>
                                    <option value="Kasi Ekbang-LH">Kasi Ekbang-LH</option>
                                    <option value="Kasi Kesos">Kasi Kesos</option>
                                    <option value="Kasi Pemberdayaan">Kasi Pemberdayaan</option>
                                    <option value="Kasi Trantib">Kasi Trantib</option>
                                    <option value="Kasubag Umum & Kepegawaian">Kasubag Umum & Kepegawaian</option>
                                    <option value="Kasubag Keuangan & Program">Kasubag Keuangan & Program</option>
                                    <option value="Pertanahan">Pertanahan</option>
                                    </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <select name="tujuan_surat1" class="form-control selectpicker">
                                    <option value="" selected="selected">--- Pilih Tujuan Surat ---</option>
                                    <option value="Sekcam">Sekcam</option>
                                    <option value="Kasi Pemerintah">Kasi Pemerintah</option>
                                    <option value="Kasi Ekbang-LH">Kasi Ekbang-LH</option>
                                    <option value="Kasi Kesos">Kasi Kesos</option>
                                    <option value="Kasi Pemberdayaan">Kasi Pemberdayaan</option>
                                    <option value="Kasi Trantib">Kasi Trantib</option>
                                    <option value="Kasubag Umum & Kepegawaian">Kasubag Umum & Kepegawaian</option>
                                    <option value="Kasubag Keuangan & Program">Kasubag Keuangan & Program</option>
                                    <option value="Pertanahan">Pertanahan</option>
                                    </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <select name="tujuan_surat2" class="form-control selectpicker">
                                    <option value="" selected="selected">--- Pilih Tujuan Surat ---</option>
                                    <option value="Sekcam">Sekcam</option>
                                    <option value="Kasi Pemerintah">Kasi Pemerintah</option>
                                    <option value="Kasi Ekbang-LH">Kasi Ekbang-LH</option>
                                    <option value="Kasi Kesos">Kasi Kesos</option>
                                    <option value="Kasi Pemberdayaan">Kasi Pemberdayaan</option>
                                    <option value="Kasi Trantib">Kasi Trantib</option>
                                    <option value="Kasubag Umum & Kepegawaian">Kasubag Umum & Kepegawaian</option>
                                    <option value="Kasubag Keuangan & Program">Kasubag Keuangan & Program</option>
                                    <option value="Pertanahan">Pertanahan</option>
                                    </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <select name="tujuan_surat3" class="form-control selectpicker">
                                    <option value="" selected="selected">--- Pilih Tujuan Surat ---</option>
                                    <option value="Sekcam">Sekcam</option>
                                    <option value="Kasi Pemerintah">Kasi Pemerintah</option>
                                    <option value="Kasi Ekbang-LH">Kasi Ekbang-LH</option>
                                    <option value="Kasi Kesos">Kasi Kesos</option>
                                    <option value="Kasi Pemberdayaan">Kasi Pemberdayaan</option>
                                    <option value="Kasi Trantib">Kasi Trantib</option>
                                    <option value="Kasubag Umum & Kepegawaian">Kasubag Umum & Kepegawaian</option>
                                    <option value="Kasubag Keuangan & Program">Kasubag Keuangan & Program</option>
                                    <option value="Pertanahan">Pertanahan</option>
                                    </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Keterangan Surat</label>
                              <div class="col-sm-10">
                                  <input type="text" name="keterangan_surat" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Dokumen Surat</label>
                              <div class="col-sm-10">
                                  <input type="file" name="dokumen_surat"> 
                              </div>
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