<?php $this->load->view('frame/header_view')?>



<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Tambah Data Disposisi</h3>
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
                      <form class="form-horizontal tasi-form" method="post" action="entry_disposisi">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">No</label>
                              <div class="col-sm-10">
                                <?php
                                  $sql = $this->db->query("select * from disposisi")->result_array();
                                  $id_disposisi = ''.(count(@$sql) + 1);
                                ?>
                                <input type="text" class="form-control" name="id_disposisi" placeholder="ID Disposisi" value="<?php echo $id_disposisi;?>" required>
                              </div>
                          </div> 
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nomor Agenda</label>
                            <div class="col-sm-10">
                            <select name="nomor_agenda" id="agenda" class="form-control selectpicker">
                                <option value="" selected="selected">--- Pilih Nomor Agenda ---</option>
                                <?php foreach ($agenda as $u) {?>
                                <option value="<?php echo $u->nomor_urut; ?>"><?php echo $u->nomor_urut;?></option>
                                <?php } ?> </optgroup>
                                </select>
                              
                            </div>
                           </div>
                          
                          <div id="showAgenda">
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label">Surat Dari</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="surat_dari" id="surat_dari" value="" readonly>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label">Nomor Surat</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nomor_surat" id="nomor_surat" value="" readonly>
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label">Diterima Tanggal</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="diterima_tgl" id="diterima_tgl" value="" readonly>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label">Perihal</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="perihal" id="perihal" value="" readonly>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label">Surat Masuk</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="surat_masuk" id="surat_masuk" readonly>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="tanggal" id="tanggal" value="" readonly>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label">Waktu</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="waktu" id="waktu" value="" readonly>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label">Tempat</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="tempat" id="tempat" readonly>
                              </div>
                          </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label">Diteruskan Kepada</label>
                              <div class="col-sm-10">
                                 <select name="diteruskan_kepada" class="form-control selectpicker" disabled>
                                    <option value="" selected="selected">--- Pilih Diteruskan Kepada ---</option>
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
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                 <select name="diteruskan_kepada1" class="form-control selectpicker" disabled>
                                    <option value="" selected="selected">--- Pilih Diteruskan Kepada ---</option>
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
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                 <select name="diteruskan_kepada2" class="form-control selectpicker" disabled>
                                    <option value=" " selected="selected">--- Pilih Diteruskan Kepada ---</option>
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
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                 <select name="diteruskan_kepada3" class="form-control selectpicker" disabled >
                                    <option value="" selected="selected">--- Pilih Diteruskan Kepada ---</option>
                                    <option value="Sekcam" >Sekcam</option>
                                    <option value="Kasi Pemerintah" >Kasi Pemerintah</option>
                                    <option value="Kasi Ekbang-LH" >Kasi Ekbang-LH</option>
                                    <option value="Kasi Kesos" >Kasi Kesos</option>
                                    <option value="Kasi Pemberdayaan">Kasi Pemberdayaan</option>
                                    <option value="Kasi Trantib">Kasi Trantib</option>
                                    <option value="Kasubag Umum & Kepegawaian">Kasubag Umum & Kepegawaian</option>
                                    <option value="Kasubag Keuangan & Program">Kasubag Keuangan & Program</option>
                                    <option value="Pertanahan">Pertanahan</option>
                                    </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Surat</label>
                              <div class="col-sm-10">
                                  <input type="date" name="tanggal_surat" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Sifat</label>
                              <div class="col-sm-10">
                                  <input type="checkbox" name="sifat" value="Sangat Segera"> Sangat Segera <br/>
                                  <input type="checkbox" name="sifat" value="Segera"> Segera <br/>
                                  <input type="checkbox" name="sifat" value="Rahasia"> Rahasia
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Dengan Hormat Harap</label>
                              <div class="col-sm-10">
                                  <input type="checkbox" name="keterangan" value="Tanggapan dan Saran" disabled=""> Tanggapan dan Saran<br/>
                                  <input type="checkbox" name="keterangan" value="Proses Lebih Lanjut" disabled=""> Proses Lebih Lanjut<br/>
                                  <input type="checkbox" name="keterangan" value="Koordinasi/Konfirmasi" disabled=""> Koordinasi/Konfirmasi<br/>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Catatan</label>
                              <div class="col-sm-10">
                                  <input type="text" name="catatan" class="form-control" readonly="">
                              </div>
                          </div>
                           <!--<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tindakan</label>
                              <div class="col-sm-10">
                               <select name="tindakan" class="form-control selectpicker">
                                    <option value="" selected="selected">--- Pilih Tindakan ---</option>
                                    <option value="Belum">Belum</option>
                                    <option value="Sudah">Sudah</option>
                                  </select>
                              </div>
                          </div>!-->
                          
                          <button type="submit" class="btn btn-info">Simpan</button>
                      </form>
                    </div> 
                  </div>
<?php $this->load->view('frame/footer_view')?>