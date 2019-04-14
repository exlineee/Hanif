<?php $this->load->view('frame/header_view')?>


       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><center>Grafik Laporan Surat Masuk di Kecamatan Sukasari</h3></center>
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

      <style>
 #chart{
   z-index:-10;} 
</style>
<body>
 <div id="chart">
</div>
<script src="<?php echo base_url();?>assets/highcharts/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/highcharts/highcharts.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/highcharts/modules/exporting.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/highcharts/modules/offline-exporting.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'chart',
   type: 'line',
  },
  title: {
   text: 'Grafik Surat Masuk',
   x: -20
  },
  subtitle: {
   text: 'Count visitor',
   x: -20
  },
  xAxis: {
   categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
  },
  yAxis: {
   title: {
    text: 'Total surat Masuk'
   }
  },
  series: [{
   name: 'Data dalam Bulan',
   data: <?php echo json_encode($grafik); ?>
  }]
 });
}); 
</script>
</body>
<?php $this->load->view('frame/footer_view')?>