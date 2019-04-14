<?php $this->load->view('frame/header_view')?>


       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Detail Data Disposisi</h3>
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

          <div class="row">
                <div class="col-lg-12">      
                    <table class="table table-striped table-bordered table-hover" id="dataTables-user-list">
                        <thead>

              <tr>
                  <td>No</td><td><?php echo $detail_disposisi->id_disposisi?></td>
                </tr>
                <tr>
                  <td>Surat Dari</td><td><?php echo $detail_disposisi->surat_dari?></td>
                </tr>
                <tr>
                  <td>Nomor Surat</td><td><?php echo $detail_disposisi->nomor_surat?></td>
                </tr>
                <tr>
                  <td>Tanggal Surat</td><td><?php echo $detail_disposisi->tanggal_surat?></td>
                </tr>
                <tr>
                  <td>Diterima Tgl</td><td><?php echo $detail_disposisi->diterima_tgl?></td>
                </tr>
                <tr>
                  <td>Nomor Agenda</td><td><?php echo $detail_disposisi->nomor_agenda?></td>
                </tr>
                <tr>
                  <td>Sifat</td><td><?php echo $detail_disposisi->sifat?></td>
                </tr>
                <tr>
                  <td>Perihal</td><td><?php echo $detail_disposisi->perihal?></td>
                </tr>
                <tr>
                  <td>Surat Masuk</td><td><a href="<?php echo base_url();?>letter/<?php echo $detail_disposisi->surat_masuk?>"><?php echo $detail_disposisi->surat_masuk?></a></td>
                </tr>
                <tr>
                  <td>Diteruskan Kepada</td><td><?php echo $detail_disposisi->diteruskan_kepada?><br/><?php echo $detail_disposisi->diteruskan_kepada1?><br/><?php echo $detail_disposisi->diteruskan_kepada2?><br/><?php echo $detail_disposisi->diteruskan_kepada3?></td>
                </tr>
                <tr>
                  <td>Dengan Hormat Harap</td><td><?php echo $detail_disposisi->keterangan?></td>
                </tr>
                <tr>
                  <td>Catatan</td><td><?php echo $detail_disposisi->catatan?></td>
                </tr>
                <tr>
                  <td>Tindakan</td><td><?php echo $detail_disposisi->tindakan?></td>
                </tr>
                <tr>
                  <td>Aksi</td>
                    <td class="center">
                        <?php echo anchor('admin/disposisi/edit_disposisiadm/'.$detail_disposisi->id_disposisi,'<div class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></div>'); ?> &nbsp; | &nbsp; 
                        <a href="<?php echo site_url()?>/admin/disposisi/hapus_disposisi/<?php echo $detail_disposisi->id_disposisi.'/'.$detail_disposisi->id_disposisi?>" onClick="return confirm('anda yakin?')"><div class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></div></a>
                    </td> 
                </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>

<?php $this->load->view('frame/footer_view')?>