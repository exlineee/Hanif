<?php $this->load->view('frame/header_view')?>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Edit Data Agenda</h3>
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
                      <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url();?>admin/agenda/update_agenda">
                      <?php foreach ($agenda as $u){?>
                      <input type="hidden" name="nomor_urut" class="form-control" value="<?php echo $u->nomor_urut?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nomor_urut" class="form-control" value="<?php echo $u->nomor_urut?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Surat Masuk</label>
                              <div class="col-sm-10">
                                  <input type="date" name="tanggal_surat_masuk" class="form-control" value="<?php echo $u->tanggal_surat_masuk?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nomor Surat Masuk</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nomor_surat_masuk" class="form-control" value="<?php echo $u->nomor_surat_masuk?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Pengirim</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama_pengirim" class="form-control" value="<?php echo $u->nama_pengirim?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pekerjaan Pengirim</label>
                              <div class="col-sm-10">
                                  <input type="text" name="pekerjaan_pengirim" class="form-control" value="<?php echo $u->pekerjaan_pengirim?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat Pengirim</label>
                              <div class="col-sm-10">
                                  <input type="text" name="alamat_pengirim" class="form-control" value="<?php echo $u->alamat_pengirim?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Perihal Surat</label>
                              <div class="col-sm-10">
                                  <input type="text" name="perihal_surat" class="form-control" value="<?php echo $u->perihal_surat?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Diselenggarakan</label>
                              <div class="col-sm-10">
                                  <input type="date" name="tgl_diselenggarakan" class="form-control" value="<?php echo $u->tgl_diselenggarakan?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Waktu</label>
                              <div class="col-sm-10">
                                  <input type="text" name="waktu" class="form-control" value="<?php echo $u->waktu?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tempat</label>
                              <div class="col-sm-10">
                                  <input type="text" name="tempat" class="form-control" value="<?php echo $u->tempat?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tujuan Surat</label>
                              <div class="col-sm-10">
                                 <select name="tujuan_surat" class="form-control selectpicker">
                                    <option value="" selected="selected">--- Pilih Tujuan Surat ---</option>
                                    <option value="Sekcam" <?php if ($u->tujuan_surat=="Sekcam"){ echo "selected"; }?>>Sekcam</option>
                                    <option value="Kasi Pemerintah" <?php if ($u->tujuan_surat=="Kasi Pemerintah"){ echo "selected"; }?>>Kasi Pemerintah</option>
                                    <option value="Kasi Ekbang-LH" <?php if ($u->tujuan_surat=="Kasi Ekbang-LH"){ echo "selected"; }?>>Kasi Ekbang-LH</option>
                                    <option value="Kasi Kesos" <?php if ($u->tujuan_surat=="Kasi Kesos"){ echo "selected"; }?>>Kasi Kesos</option>
                                    <option value="Kasi Pemberdayaan" <?php if ($u->tujuan_surat=="Kasi Pemberdayaan"){ echo "selected"; }?>>Kasi Pemberdayaan</option>
                                    <option value="Kasi Trantib" <?php if ($u->tujuan_surat=="Kasi Trantib"){ echo "selected"; }?>>Kasi Trantib</option>
                                    <option value="Kasubag Umum & Kepegawaian" <?php if ($u->tujuan_surat=="Kasubag Umum & Kepegawaian"){ echo "selected"; }?>>Kasubag Umum & Kepegawaian</option>
                                    <option value="Kasubag Keuangan & Program" <?php if ($u->tujuan_surat=="Kasubag Keuangan & Program"){ echo "selected"; }?>>Kasubag Keuangan & Program</option>
                                    <option value="Pertanahan" <?php if ($u->tujuan_surat=="Pertanahan"){ echo "selected"; }?>>Pertanahan</option>
                                    </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                 <select name="tujuan_surat1" class="form-control selectpicker">
                                    <option value="" selected="selected">--- Pilih Tujuan Surat ---</option>
                                    <option value="Sekcam" <?php if ($u->tujuan_surat1=="Sekcam"){ echo "selected"; }?>>Sekcam</option>
                                    <option value="Kasi Pemerintah" <?php if ($u->tujuan_surat1=="Kasi Pemerintah"){ echo "selected"; }?>>Kasi Pemerintah</option>
                                    <option value="Kasi Ekbang-LH" <?php if ($u->tujuan_surat1=="Kasi Ekbang-LH"){ echo "selected"; }?>>Kasi Ekbang-LH</option>
                                    <option value="Kasi Kesos" <?php if ($u->tujuan_surat1=="Kasi Kesos"){ echo "selected"; }?>>Kasi Kesos</option>
                                    <option value="Kasi Pemberdayaan" <?php if ($u->tujuan_surat1=="Kasi Pemberdayaan"){ echo "selected"; }?>>Kasi Pemberdayaan</option>
                                    <option value="Kasi Trantib" <?php if ($u->tujuan_surat1=="Kasi Trantib"){ echo "selected"; }?>>Kasi Trantib</option>
                                    <option value="Kasubag Umum & Kepegawaian" <?php if ($u->tujuan_surat1=="Kasubag Umum & Kepegawaian"){ echo "selected"; }?>>Kasubag Umum & Kepegawaian</option>
                                    <option value="Kasubag Keuangan & Program" <?php if ($u->tujuan_surat1=="Kasubag Keuangan & Program"){ echo "selected"; }?>>Kasubag Keuangan & Program</option>
                                    <option value="Pertanahan" <?php if ($u->tujuan_surat1=="Pertanahan"){ echo "selected"; }?>>Pertanahan</option>
                                    </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                 <select name="tujuan_surat2" class="form-control selectpicker">
                                   <option value="" selected="selected">--- Pilih Tujuan Surat ---</option>
                                    <option value="Sekcam" <?php if ($u->tujuan_surat2=="Sekcam"){ echo "selected"; }?>>Sekcam</option>
                                    <option value="Kasi Pemerintah" <?php if ($u->tujuan_surat2=="Kasi Pemerintah"){ echo "selected"; }?>>Kasi Pemerintah</option>
                                    <option value="Kasi Ekbang-LH" <?php if ($u->tujuan_surat2=="Kasi Ekbang-LH"){ echo "selected"; }?>>Kasi Ekbang-LH</option>
                                    <option value="Kasi Kesos" <?php if ($u->tujuan_surat2=="Kasi Kesos"){ echo "selected"; }?>>Kasi Kesos</option>
                                    <option value="Kasi Pemberdayaan" <?php if ($u->tujuan_surat2=="Kasi Pemberdayaan"){ echo "selected"; }?>>Kasi Pemberdayaan</option>
                                    <option value="Kasi Trantib" <?php if ($u->tujuan_surat2=="Kasi Trantib"){ echo "selected"; }?>>Kasi Trantib</option>
                                    <option value="Kasubag Umum & Kepegawaian" <?php if ($u->tujuan_surat2=="Kasubag Umum & Kepegawaian"){ echo "selected"; }?>>Kasubag Umum & Kepegawaian</option>
                                    <option value="Kasubag Keuangan & Program" <?php if ($u->tujuan_surat2=="Kasubag Keuangan & Program"){ echo "selected"; }?>>Kasubag Keuangan & Program</option>
                                    <option value="Pertanahan" <?php if ($u->tujuan_surat2=="Pertanahan"){ echo "selected"; }?>>Pertanahan</option>
                                    </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                 <select name="tujuan_surat3" class="form-control selectpicker">
                                    <option value="" selected="selected">--- Pilih Tujuan Surat ---</option>
                                    <option value="Sekcam" <?php if ($u->tujuan_surat3=="Sekcam"){ echo "selected"; }?>>Sekcam</option>
                                    <option value="Kasi Pemerintah" <?php if ($u->tujuan_surat3=="Kasi Pemerintah"){ echo "selected"; }?>>Kasi Pemerintah</option>
                                    <option value="Kasi Ekbang-LH" <?php if ($u->tujuan_surat3=="Kasi Ekbang-LH"){ echo "selected"; }?>>Kasi Ekbang-LH</option>
                                    <option value="Kasi Kesos" <?php if ($u->tujuan_surat3=="Kasi Kesos"){ echo "selected"; }?>>Kasi Kesos</option>
                                    <option value="Kasi Pemberdayaan" <?php if ($u->tujuan_surat3=="Kasi Pemberdayaan"){ echo "selected"; }?>>Kasi Pemberdayaan</option>
                                    <option value="Kasi Trantib" <?php if ($u->tujuan_surat3=="Kasi Trantib"){ echo "selected"; }?>>Kasi Trantib</option>
                                    <option value="Kasubag Umum & Kepegawaian" <?php if ($u->tujuan_surat3=="Kasubag Umum & Kepegawaian"){ echo "selected"; }?>>Kasubag Umum & Kepegawaian</option>
                                    <option value="Kasubag Keuangan & Program" <?php if ($u->tujuan_surat3=="Kasubag Keuangan & Program"){ echo "selected"; }?>>Kasubag Keuangan & Program</option>
                                    <option value="Pertanahan" <?php if ($u->tujuan_surat=="Pertanahan"){ echo "selected"; }?>>Pertanahan</option>
                                    </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Keterangan Surat</label>
                              <div class="col-sm-10">
                                  <input type="text" name="keterangan_surat" class="form-control" value="<?php echo $u->keterangan_surat?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Dokumen Surat</label>
                              <div class="col-sm-10">
                                  <input type="file" name="dokumen_surat" value=href="<?php echo base_url('letter/'.$u->dokumen_surat)?>" id="file">
                                  <div class="dokumen_suratPreview"><img src="<?php echo base_url('letter/'.$u->dokumen_surat) ?>" width="200px" height="150px"></div>
                              </div>
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