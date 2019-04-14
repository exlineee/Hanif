<?php $this->load->view('frame/header_view')?>


       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><center>Laporan Surat Masuk di Kecamatan Sukasari</h3></center>
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

<!--state overview end-->

     <div class="row">
                <div class="col-lg-12">      
                    <table class="table table-striped table-bordered table-hover" id="dataTables-user-list">
                        <thead>
                  <tr>
                      <th>Nomor Urut</th>
                      <th>Nama Pengirim</th>
                      <th>Nomor Surat Masuk</th>
                      <th>Perihal Surat</th>
                      <th>Tanggal Diselenggarkan</th>
                      <th>Surat Masuk</th>
                      
				  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($laporan as $u){?>
                  <tr class="gradeX">
                  	  <td><?php echo $u->nomor_urut?></td>
                      <td><?php echo $u->nama_pengirim?></td>
                      <td><?php echo $u->nomor_surat_masuk?></td>
                      <td><?php echo $u->perihal_surat?></td>
                      <td><?php echo $u->tgl_diselenggarakan?></td>
                      <td><a href="<?php echo base_url();?>letter/<?php echo $u->dokumen_surat?>"><?php echo $u->dokumen_surat?></a></td>
                      
                  </tr>
                  <?php }?>
                  
                  </tfoot>
      </table>
            </div>
      </div>
  </section>
</div>
</div>
<?php $this->load->view('frame/footer_view')?>
<script src="<?=base_url()?>assets/js/view/user_list.js"></script>