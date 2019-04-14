<?php $this->load->view('frame/header_view')?>




 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Tambah Data User</h3>
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
                      <form class="form-horizontal tasi-form" method="post" action="entry_user">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">No</label>
                              <div class="col-sm-10">
                                <?php
                                  $sql = $this->db->query("select * from user")->result_array();
                                  $id_user = ''.(count(@$sql) + 1);
                                ?>
                                <input type="text" class="form-control" name="id_user" placeholder="ID User" value="<?php echo $id_user;?>" required>
                              </div>
                          </div> 
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Username</label>
                              <div class="col-sm-10">
                                  <input type="text" name="username" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <input type="text" name="password" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  <input type="text" name="email" class="form-control">
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