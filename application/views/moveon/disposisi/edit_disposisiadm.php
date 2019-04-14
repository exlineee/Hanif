<?php $this->load->view('frame/header_view')?>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Edit Data Disposisi</h3>
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
                      <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url();?>admin/disposisi/update_disposisiadm">
                      <?php foreach ($disposisi as $u){?>
                      <input type="hidden" name="id_disposisi" class="form-control" value="<?php echo $u->id_disposisi?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No</label>
                              <div class="col-sm-10">
                                  <input type="text" name="id_disposisi" class="form-control" value="<?php echo $u->id_disposisi?>">
                              </div>
                          </div>
                           
                         
                           <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nomor Agenda</label>
                            <div class="col-sm-10">
                            <select name="nomor_agenda" id="agenda" class="form-control selectpicker">
                                <option value="" selected="selected">--- Pilih Nomor Agenda ---</option>
                                <?php foreach ($agenda as $a) {?>
                                <option value="<?php echo $a->nomor_urut; ?>"  <?php if ($u->nomor_agenda==$a->nomor_urut){ echo "selected"; }?>><?php echo $a->nomor_urut;?></option>
                                <?php } ?> </optgroup>
                                </select>
                           </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Surat Dari</label>
                              <div class="col-sm-10">
                                  <input type="text" name="surat_dari" id="surat_dari" class="form-control" value="<?php echo $u->surat_dari?>" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nomor Surat</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nomor_surat" id="nomor_surat" class="form-control" value="<?php echo $u->nomor_surat?>" readonly>
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Diterima Tanggal</label>
                              <div class="col-sm-10">
                                  <input type="date" name="diterima_tgl" id="diterima_tgl" class="form-control" value="<?php echo $u->diterima_tgl?>" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Perihal</label>
                              <div class="col-sm-10">
                                  <input type="text" name="perihal" id="perihal" class="form-control" value="<?php echo $u->perihal?>" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Surat Masuk</label>
                              <div class="col-sm-10">
                                  <input type="text" name="surat_masuk" id="surat_masuk" class="form-control" value="<?php echo $u->surat_masuk?>" readonly>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="tanggal" id="tanggal" value="<?php echo $u->tanggal?>" readonly>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label">Waktu</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="waktu" id="waktu" value="<?php echo $u->waktu?>" readonly>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label">Tempat</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="tempat" id="tempat" value="<?php echo $u->tempat?>" readonly>
                              </div>
                          </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label">Diteruskan Kepada</label>
                              <div class="col-sm-10">
                                 <select name="diteruskan_kepada" class="form-control selectpicker" disabled="">
                                    <option value="" selected="selected">--- Pilih Diteruskan Kepada ---</option>
                                    <option value="Sekcam" <?php if ($u->diteruskan_kepada=="Sekcam"){ echo "selected"; }?>>Sekcam</option>
                                    <option value="Kasi Pemerintah" <?php if ($u->diteruskan_kepada=="Kasi Pemerintah"){ echo "selected"; }?>>Kasi Pemerintah</option>
                                    <option value="Kasi Ekbang-LH" <?php if ($u->diteruskan_kepada=="Kasi Ekbang-LH"){ echo "selected"; }?>>Kasi Ekbang-LH</option>
                                    <option value="Kasi Kesos" <?php if ($u->diteruskan_kepada=="Kasi Kesos"){ echo "selected"; }?>>Kasi Kesos</option>
                                    <option value="Kasi Pemberdayaan" <?php if ($u->diteruskan_kepada=="Kasi Pemberdayaan"){ echo "selected"; }?>>Kasi Pemberdayaan</option>
                                    <option value="Kasi Trantib" <?php if ($u->diteruskan_kepada=="Kasi Trantib"){ echo "selected"; }?>>Kasi Trantib</option>
                                    <option value="Kasubag Umum & Kepegawaian" <?php if ($u->diteruskan_kepada=="Kasubag Umum & Kepegawaian"){ echo "selected"; }?>>Kasubag Umum & Kepegawaian</option>
                                    <option value="Kasubag Keuangan & Program" <?php if ($u->diteruskan_kepada=="Kasubag Keuangan & Program"){ echo "selected"; }?>>Kasubag Keuangan & Program</option>
                                    <option value="Pertanahan" <?php if ($u->diteruskan_kepada=="Pertanahan"){ echo "selected"; }?>>Pertanahan</option>
                                    </select>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                 <select name="diteruskan_kepada1" class="form-control selectpicker" disabled="">
                                   <option value="" selected="selected">--- Pilih Diteruskan Kepada ---</option>
                                    <option value="Sekcam" <?php if ($u->diteruskan_kepada1=="Sekcam"){ echo "selected"; }?>>Sekcam</option>
                                    <option value="Kasi Pemerintah" <?php if ($u->diteruskan_kepada1=="Kasi Pemerintah"){ echo "selected"; }?>>Kasi Pemerintah</option>
                                    <option value="Kasi Ekbang-LH" <?php if ($u->diteruskan_kepada1=="Kasi Ekbang-LH"){ echo "selected"; }?>>Kasi Ekbang-LH</option>
                                    <option value="Kasi Kesos" <?php if ($u->diteruskan_kepada1=="Kasi Kesos"){ echo "selected"; }?>>Kasi Kesos</option>
                                    <option value="Kasi Pemberdayaan" <?php if ($u->diteruskan_kepada1=="Kasi Pemberdayaan"){ echo "selected"; }?>>Kasi Pemberdayaan</option>
                                    <option value="Kasi Trantib" <?php if ($u->diteruskan_kepada1=="Kasi Trantib"){ echo "selected"; }?>>Kasi Trantib</option>
                                    <option value="Kasubag Umum & Kepegawaian" <?php if ($u->diteruskan_kepada1=="Kasubag Umum & Kepegawaian"){ echo "selected"; }?>>Kasubag Umum & Kepegawaian</option>
                                    <option value="Kasubag Keuangan & Program" <?php if ($u->diteruskan_kepada1=="Kasubag Keuangan & Program"){ echo "selected"; }?>>Kasubag Keuangan & Program</option>
                                    <option value="Pertanahan" <?php if ($u->diteruskan_kepada=="Pertanahan"){ echo "selected"; }?>>Pertanahan</option>
                                    </select>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                 <select name="diteruskan_kepada2" class="form-control selectpicker" disabled="">
                                    <option value="" selected="selected">--- Pilih Diteruskan Kepada ---</option>
                                    <option value="Sekcam" <?php if ($u->diteruskan_kepada2=="Sekcam"){ echo "selected"; }?>>Sekcam</option>
                                    <option value="Kasi Pemerintah" <?php if ($u->diteruskan_kepada2=="Kasi Pemerintah"){ echo "selected"; }?>>Kasi Pemerintah</option>
                                    <option value="Kasi Ekbang-LH" <?php if ($u->diteruskan_kepada2=="Kasi Ekbang-LH"){ echo "selected"; }?>>Kasi Ekbang-LH</option>
                                    <option value="Kasi Kesos" <?php if ($u->diteruskan_kepada2=="Kasi Kesos"){ echo "selected"; }?>>Kasi Kesos</option>
                                    <option value="Kasi Pemberdayaan" <?php if ($u->diteruskan_kepada2=="Kasi Pemberdayaan"){ echo "selected"; }?>>Kasi Pemberdayaan</option>
                                    <option value="Kasi Trantib" <?php if ($u->diteruskan_kepada2=="Kasi Trantib"){ echo "selected"; }?>>Kasi Trantib</option>
                                    <option value="Kasubag Umum & Kepegawaian" <?php if ($u->diteruskan_kepada2=="Kasubag Umum & Kepegawaian"){ echo "selected"; }?>>Kasubag Umum & Kepegawaian</option>
                                    <option value="Kasubag Keuangan & Program" <?php if ($u->diteruskan_kepada2=="Kasubag Keuangan & Program"){ echo "selected"; }?>>Kasubag Keuangan & Program</option>
                                    <option value="Pertanahan" <?php if ($u->diteruskan_kepada2=="Pertanahan"){ echo "selected"; }?>>Pertanahan</option>
                                    </select>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                 <select name="diteruskan_kepada3" class="form-control selectpicker" disabled="">
                                    <option value="" selected="selected">--- Pilih Diteruskan Kepada ---</option>
                                    <option value="Sekcam" <?php if ($u->diteruskan_kepada3=="Sekcam"){ echo "selected"; }?>>Sekcam</option>
                                    <option value="Kasi Pemerintah" <?php if ($u->diteruskan_kepada3=="Kasi Pemerintah"){ echo "selected"; }?>>Kasi Pemerintah</option>
                                    <option value="Kasi Ekbang-LH" <?php if ($u->diteruskan_kepada3=="Kasi Ekbang-LH"){ echo "selected"; }?>>Kasi Ekbang-LH</option>
                                    <option value="Kasi Kesos" <?php if ($u->diteruskan_kepada3=="Kasi Kesos"){ echo "selected"; }?>>Kasi Kesos</option>
                                    <option value="Kasi Pemberdayaan" <?php if ($u->diteruskan_kepada3=="Kasi Pemberdayaan"){ echo "selected"; }?>>Kasi Pemberdayaan</option>
                                    <option value="Kasi Trantib" <?php if ($u->diteruskan_kepada3=="Kasi Trantib"){ echo "selected"; }?>>Kasi Trantib</option>
                                    <option value="Kasubag Umum & Kepegawaian" <?php if ($u->diteruskan_kepada3=="Kasubag Umum & Kepegawaian"){ echo "selected"; }?>>Kasubag Umum & Kepegawaian</option>
                                    <option value="Kasubag Keuangan & Program" <?php if ($u->diteruskan_kepada3=="Kasubag Keuangan & Program"){ echo "selected"; }?>>Kasubag Keuangan & Program</option>
                                    <option value="Pertanahan" <?php if ($u->diteruskan_kepada3=="Pertanahan"){ echo "selected"; }?>>Pertanahan</option>
                                    </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Surat</label>
                              <div class="col-sm-10">
                                  <input type="date" name="tanggal_surat" class="form-control" value="<?php echo $u->tanggal_surat?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Sifat</label>
                              <div class="col-sm-10">
                                  <input type="checkbox" name="sifat" value="Sangat Segera" <?php if ($u->sifat=="Sangat Segera"){ echo "checked"; }?>> Sangat Segera <br/>
                                  <input type="checkbox" name="sifat" value="Segera" <?php if ($u->sifat=="Segera"){ echo "checked"; }?>> Segera <br/>
                                  <input type="checkbox" name="sifat" value="Rahasia" <?php if ($u->sifat=="Rahasia"){ echo "checked"; }?>> Rahasia
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Catatan</label>
                              <div class="col-sm-10">
                                  <input type="text" name="catatan" class="form-control" value="<?php echo $u->catatan?>" readonly>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Dengan hormat harap</label>
                              <div class="col-sm-10">
                                  <input type="checkbox" name="keterangan" value="Tanggapan dan Saran" <?php if ($u->keterangan=="Tanggapan dan Saran"){ echo "checked"; }?> disabled> Tanggapan dan Saran<br/>
                                  <input type="checkbox" name="keterangan" value="Proses Lebih Lanjut" <?php if ($u->keterangan=="Proses Lebih Lanjut"){ echo "checked"; }?> disabled> Proses Lebih Lanjut<br/>
                                  <input type="checkbox" name="keterangan" value="Koordinasi/Konfirmasi" <?php if ($u->keterangan=="Koordinasi/Konfirmasi"){ echo "checked"; }?> disabled> Koordinasi/Konfirmasi<br/>
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