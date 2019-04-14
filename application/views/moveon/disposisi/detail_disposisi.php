
<?php $this->load->view('frame/header_view')?>

<html>
<head>
<style type="text/css">
    table {border: solid 1px #000; border-collapse: collapse; width: 100%}
    tr { border: solid 1px #000}
    td { padding: 3px 5px}
    h3 { margin-bottom: -17px }
    h2 { margin-bottom: 0px }
</style>
<style type="text/css" media="screen">
    table {border: solid 1px #000; border-collapse: collapse; width: 75%}
    tr { border: solid 1px #000}
    td { padding: 7px 5px}
    h3 { margin-bottom: -17px }
    h2 { margin-bottom: 0px }
</style>
</head>
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

       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Data Disposisi</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<table align="center" style="background-color: white">
    <tr>
    <h2><td colspan="4" align="center" style="padding: 0px 0"><b style="font-size: 21px;"> PEMERINTAH KECAMATAN SUKASARI </b></td></h2>
    </td>
    </tr>
    
    <tr><td colspan="4" align="center" style="padding: 15px 0"><b style="font-size: 21px;">LEMBAR DISPOSISI</b></td></tr>

    <tr>
<ol>
    <td width="23%"><b>Surat dari</b></td><td width="25%">: <?php echo $detail_disposisi->surat_dari; ?></td><td><b>Diterima Tgl </b></td><td width="40%">: <?php echo $detail_disposisi->diterima_tgl; ?></td></tr>
    <br/>
    <td width="23%"><b></b></td><td width="25"></td><td><b>No. Agenda </b></td><td width="40%">: <?php echo $detail_disposisi->nomor_agenda; ?></td></tr>
    <td width="23%"><b>No. Surat</b></td><td width="25%">: <?php echo $detail_disposisi->nomor_surat; ?></td><td><b>Sifat </b></td><td width="40%">: <?php echo $detail_disposisi->sifat; ?></td></tr>
    </br>
    <td width="23%"><b>Tgl Surat</b></td><td width="25%">: <?php echo $detail_disposisi->tanggal_surat; ?></td><td></td></tr>
    <br/>
    <td width="23%"><b>Perihal</b></td><td width="25%">: <?php echo $detail_disposisi->perihal; ?></td><td style="padding: 30px 0"></td></tr>
    </tr></br>
    <td width="23%"><b>Diteruskan Kepada</b></td><td width="25%">: <?php echo $detail_disposisi->diteruskan_kepada; ?><br/><?php echo $detail_disposisi->diteruskan_kepada1?><br/><?php echo $detail_disposisi->diteruskan_kepada2?><br/><?php echo $detail_disposisi->diteruskan_kepada3?></td>
    <br/>
    <td width="23%"><b>Dengan Hormat Harap</b></td><td width="40%">: <?php echo $detail_disposisi->keterangan; ?></td><td style="padding: 30px 0"></td></tr>
    </br>
    <br/>
    <td width="23%"><b>Catatan</b>: <?php echo $detail_disposisi->catatan; ?><br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/><br/></td>
    <td>&nbsp;</td><br/><td></td><td align="center"><b>CAMAT SUKASARI </b><br/>
<img src="<?=base_url()?>assets/images/img092.jpg" width="50%" align="center"><br/>
    HANIFA SHABATINI
    </td></td></td></ol></tr></table></html></div>

<?php $this->load->view('frame/footer_view')?>