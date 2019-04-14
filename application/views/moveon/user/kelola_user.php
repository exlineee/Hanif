<?php $this->load->view('frame/header_view')?>


       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Data User</h3>
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
                      <th>Username</th>
                      <th>Nama</th>
                      <th>Password</th>
                      <th>Email</th>
                      <th>Aksi</th>
                      
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($user as $u){?>
                  <tr class="gradeX">
                      <td><?php echo $u->id_user?></td>
                      <td><?php echo $u->username?></td>
                      <td><?php echo $u->nama?></td>
                      <td><?php echo $u->password?></td>
                      <td><?php echo $u->email?></td>
                      
                      <td class="center" width="60">
                          <?php echo anchor('admin/user/edit_user/'.$u->id_user,'<div class="btn btn-warning btn-xs"><i class="fa fa-edit"></div></i>'); ?> |
                          <a href="<?php echo site_url()?>/admin/user/hapus_user/<?php echo $u->id_user.'/'.$u->id_user?>" onClick="return confirm('anda yakin?')"><div class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></div></a>
                      </td>
                  </tr>

                    

                  <?php }?>
                  </tfoot>
                </table>
                <div class="col-lg-12" style="position:fixed;bottom: 5%;left: 88%; width: 150px;text-align: center;border-radius: 100%;"><a href="<?php echo site_url();?>admin/user/tambah_user"  class="btn btn-success">
                        <img class="add_user" src="<?=base_url()?>assets/images/add.png" data-toggle="modal" data-target="#addUser" />
                </div></a>
            </div>
      </div>
  </section>
</div>
</div>

<?php $this->load->view('frame/footer_view')?>
<script src="<?=base_url()?>assets/js/view/user_list.js"></script>