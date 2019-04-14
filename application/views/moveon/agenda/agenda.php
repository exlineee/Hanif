<?php $this->load->view('frame/header_view')?>


       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Data Agenda</h3>
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
                      <th>Tanggal Surat Masuk</th>
                      <th>Nomor Surat Masuk</th>
                      <th>Nama Pengirim</th>
                      <th>Pekerjaan Pengirim</th>
                      <th>Alamat Pengirim</th>
                      <th>Perihal</th>
                      <th>aksi</th>
                  </tr>
                  </thead>

                  <tbody>
                  <?php foreach ($agenda as $u){?>
                  <tr class="gradeX">
                  	  <td><?php echo $u->nomor_urut?></td> 
                      <td><?php echo $u->tanggal_surat_masuk?></td>
                      <td><?php echo $u->nomor_surat_masuk?></td>
                      <td><?php echo $u->nama_pengirim?></td>
                      <td><?php echo $u->pekerjaan_pengirim?></td>
                      <td><?php echo $u->alamat_pengirim?></td>
                      <td><?php echo $u->perihal_surat?></td>
                      <td class="center" width="100">
                          <?php echo anchor('admin/agenda/detail_agenda/'.$u->nomor_urut,'<div class="btn btn-primary btn-xs"><i class="fa fa-eye"></div></i>');?> | 
                          <?php echo anchor('admin/agenda/edit_agenda/'.$u->nomor_urut, '<div class="btn btn-warning btn-xs" tittle="Edit"><i class="fa fa-edit"></div></i>'); ?> |
                          <a href="<?php echo site_url()?>/admin/agenda/hapus_agenda/<?php echo $u->nomor_urut.'/'.$u->nomor_urut?>" onClick="return confirm('anda yakin?')"><div class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></div></a>
                      </td>
                 </tr>
                  <?php }?>
                  </tfoot>
                </table>
                
                <div class="col-lg-12" style="position:fixed;bottom: 5%;left: 88%; width: 150px;text-align: center;border-radius: 100%;"><a href="<?php echo site_url();?>admin/agenda/tambah_agenda"  class="btn btn-success">
                        <img class="add_user" src="<?=base_url()?>assets/images/add.png" data-toggle="modal" data-target="#addUser" />
                </div></a>
            </div>
      </div>
  </section>
</div>
</div>

<?php $this->load->view('frame/footer_view')?>
<script src="<?=base_url()?>assets/js/view/user_list.js"></script>