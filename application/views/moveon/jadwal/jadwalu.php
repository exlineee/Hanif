<?php $this->load->view('frame/header_view')?>


       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Data Jadwal</h3>
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
                      <th>Acara</th>
                      <th>Hari</th>
                      <th>Tanggal</th>
                      <th>waktu</th>
                      <th>Tempat</th>
                      <th>Nama Yang Menghadiri</th>
                      <th>Keterangan</th>
                      <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($jadwal as $u){?>
                  <tr class="gradeX">
                      <td><?php echo $u->id_jadwal?></td>
                      <td><?php echo $u->acara?></td>
                      <td><?php echo $u->hari?></td>
                      <td><?php echo $u->tanggal?></td>
                      <td><?php echo $u->waktu?></td>
                      <td><?php echo $u->tempat?></td>
                      <td><?php echo $u->nama_yang_hadir?><br/><?php echo $u->nama_yang_hadir1?><br/><?php echo $u->nama_yang_hadir2?><br/><?php echo $u->nama_yang_hadir3?></td>
                      <td><?php echo $u->keterangan?></td>
                      <td class="center">
                          <?php echo anchor('admin/jadwal/edit_jadwal/'.$u->id_jadwal,'<div class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></div>'); ?> |
                          <!--<a href="<?php echo site_url()?>/admin/jadwal/hapus_jadwal/<?php echo $u->id_jadwal.'/'.$u->id_jadwal?>" onClick="return confirm('anda yakin?')"><div class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></div></a> |!--> 
                          <a href="<?php echo site_url()?>/admin/pelaporan/pelaporan"><div class="btn btn-primary btn-xs"><i class="fa fa-file-text"></i></div></a>
                  </td>
                  </tr>
                  <?php }?>
                  </tfoot>
                </table>
                <!--<div class="col-lg-12" style="position:fixed;bottom: 5%;left: 88%; width: 150px;text-align: center;border-radius: 100%;"><a href="<?php echo site_url();?>admin/jadwal/tambah_jadwal"  class="btn btn-success">
                        <img class="add_user" src="<?=base_url()?>assets/images/add.png" data-toggle="modal" data-target="#addUser" />
                </div></a>!-->
            </div>
      </div>
  </section>
</div>
</div>

<?php $this->load->view('frame/footer_view')?>
<script src="<?=base_url()?>assets/js/view/user_list.js"></script>