<?php $this->load->view('frame/header_view')?>
<?php $this->load->view('frame/sidebar_nav_view')?>

       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">BackRest</h3>
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

<form action="<?php echo base_url();?>home/backup" method="post">
    <select required="" name="backrest">
        <?php
           foreach ($backrest as $u) {  ?>
            <option value="<?php echo $u->datafile; ?>"><?php echo $u->datafile; ?></option>
        <?php } ?>
    </select>
    <button type="submit" >Backup Database</button>
</form>


<?php echo form_open_multipart('home/restore');?>
    <input type="file" name="datafile" id="datafile" />
    <button type="submit" >Upload Database</button>
</form>

<?php $this->load->view('frame/footer_view')?>
<script src="<?=base_url()?>assets/js/view/user_list.js"></script>