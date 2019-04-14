<?php $this->load->view('frame/header_view')?>
<div class="row">
  <div class="col-lg-12">
      <ul class="breadcrumb">
      	<li>
            <i class="icon-cogs"></i>
            &nbsp; Setting Aplikasi
        </li>
      </ul>
  </div>    
</div>

<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        Ubah data dibawah ini sesuai dengan kebutuhan
      </header>
      <div class="panel-body">

      <?php if (@$errors):?>
        <div class="alert alert-block alert-danger fade in">
          <button data-dismiss="alert" class="close close-sm" type="button">
            <i class="icon-remove"></i>
          </button>
          <strong>Ada Kesalahan</strong><br />
          <?php echo validation_errors()?>
          <?php echo @$error_upload['error']?>
        </div>
      <?php endif?>
      <?php $success = $this->session->flashdata('success');?>
      <?php if (@$success):?>
        <div class="alert alert-success fade in">
          <button data-dismiss="alert" class="close close-sm" type="button">
            <i class="icon-remove"></i>
          </button>
          <strong>Sukses!</strong> data berita berhasil dengan sukses.
          </div>
          <?php endif?>

          <form class="form-horizontal tasi-form" method="post" action="#" enctype="multipart/form-data">
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Device ID *</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" name="nama" value="<?php if (@$detail){ echo @$detail->nama;} else { echo set_value('nama');}?>">
                </div>
            </div>
            
            
              <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <input type="submit" class="btn btn-info" name="submit" value="Simpan">
                </div>
              </div>
            </form>
          </div>
      </section>
    </div>
</div>

<?php $this->load->view('frame/footer_view')?>