<?php $this->load->view('frame/header_view')?>



 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Edit Data User</h3>
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
                      <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url();?>admin/user/update_user">
                      <?php foreach ($user as $u){?>
                      <input type="hidden" name="id_user" class="form-control" value="<?php echo $u->id_user?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No</label>
                              <div class="col-sm-10">
                                  <input type="text" name="id_user" class="form-control" value="<?php echo $u->id_user?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Username</label>
                              <div class="col-sm-10">
                                  <input type="text" name="username" class="form-control" value="<?php echo $u->username?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama" class="form-control" value="<?php echo $u->nama?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <input type="text" name="password" class="form-control" value="<?php echo md5($u->password);?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  <input type="text" name="email" class="form-control" value="<?php echo $u->email?>">
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