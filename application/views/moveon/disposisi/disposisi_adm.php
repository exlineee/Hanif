<?php $this->load->view('frame/header_view')?>


       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Data Disposisi</h3>
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
                      <th>No</th>
                      <th>Nomor Surat</th>
                      <th>Tanggal SUrat</th>
					            <th>Sifat</th>
                      <th>Diteruskan Kepada</th>
                      <th>Tindakan</th>
                      <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($disposisi as $u){?>
                  <tr class="gradeX">
                  	  <td><?php echo $u->id_disposisi?></td>
                      <td><?php echo $u->nomor_surat?></td>
                      <td><?php echo $u->tanggal_surat?></td>
                      <td><?php echo $u->sifat?></td>
                      <td><?php echo $u->diteruskan_kepada?><br/><?php echo $u->diteruskan_kepada1?><br/><?php echo $u->diteruskan_kepada2?><br/><?php echo $u->diteruskan_kepada3?></td>
                      <td><?php echo $u->tindakan?></td>
                      <td class="center" width="150"> 
                        <a href="<?php echo base_url();?>letter/<?php echo $u->surat_masuk?>" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></div></a> |
                        <?php echo anchor('admin/disposisi/detail_disposisi/'.$u->id_disposisi,'<div class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></div>'); ?> | 
                        <?php echo anchor('admin/disposisi/edit_disposisiadm/'.$u->id_disposisi,'<div class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></div>'); ?> |
                        <a href="<?php echo site_url()?>/admin/disposisi/hapus_disposisi1/<?php echo $u->id_disposisi.'/'.$u->id_disposisi?>" onClick="return confirm('anda yakin?')"><div class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></div></a> 
                         <!--<form class="btn btn-success btn-xs" class="fa fa-send" method="POST" action="<?php //echo site_url('admin/disposisi/distribusi')?>">
<input name="nomor_agenda" value="<?php //echo $u->nomor_agenda?>" type="hidden">
<input name="surat_dari" value="<?php //echo $u->surat_dari?>" type="hidden">
<input name="nomor_surat" value="<?php //echo $u->nomor_surat?>" type="hidden">
<input name="tanggal_surat" value="<?php //echo $u->tanggal_surat?>" type="hidden">
<input name="diterima_tgl" value="<?php //echo $u->diterima_tgl?>" type="hidden">
<input name="diteruskan_kepada" value="<?php //echo $u->diteruskan_kepada?>" type="hidden">
<input name="diteruskan_kepada1" value="<?php //echo $u->diteruskan_kepada1?>" type="hidden">
<input name="diteruskan_kepada2" value="<?php //echo $u->diteruskan_kepada2?>" type="hidden">
<input name="diteruskan_kepada3" value="<?php //echo $u->diteruskan_kepada3?>" type="hidden">
<input name="perihal" value="<?php //echo $u->perihal?>" type="hidden">
<input name="catatan" value="<?php //echo $u->catatan?>" type="hidden">
<input name="surat_masuk" value="<?php //echo $u->surat_masuk?>" type="hidden">
<input name="sifat" value="<?php //echo $u->sifat?>" type="hidden">
<input name="keterangan" value="<?php //echo $u->keterangan?>" type="hidden">

                        <input class="btn btn-success btn-xs" class="fa fa-send" type="submit"></div>
                      </form> !-->

                      </td>
                  </tr>
                  <?php }?>
                  </tfoot>
                </table>
                <div class="col-lg-12" style="position:fixed;bottom: 5%;left: 88%; width: 150px;text-align: center;border-radius: 100%;"><a href="<?php echo site_url();?>admin/disposisi/tambah_disposisi"  class="btn btn-success">
                        <img class="add_user" src="<?=base_url()?>assets/images/add.png" data-toggle="modal" data-target="#addUser" />
                </div></a>
            </div>
      </div>
  </section>
</div>
</div>

<?php $this->load->view('frame/footer_view')?>
<script src="<?=base_url()?>assets/js/view/user_list.js"></script>