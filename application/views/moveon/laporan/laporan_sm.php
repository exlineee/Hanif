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

<canvas id="grafik"  width="600" height="500"></canvas>


<script>
$(document).ready(function(){
  //var mandor = $('#mandor').val();
  var tahun = $('#thn').val();
  
  $.getJSON('<?php echo base_url();?>admin/laporan/getData/'+tahun, function(result){
        var datax=[];
        var datay=[];
        var len = result.length;
        for(var i=0;i<len;i++){
          datax.push(result[i]['datax']);
          datay.push(result[i]['datay']);
        };
        //console.log(datay);
        
        var tempData = {
          labels : datax,
          datasets : [{
            fillColor : "rgba(49, 112, 143,0.4)",
            strokeColor : "#ACC26D",
            pointColor : "#fff",
            pointStrokeColor : "#9DB86D",
            data : datay
          }]
        };
        var ctx = $("#grafik").get(0).getContext("2d");
        var myNewChart = new Chart(ctx).Line(tempData);
  });
});
</script><br />

                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                 <form class="form-inline" method="post" action="<?php echo base_url();?>admin/laporan/carilaporan">
                                  <?php
                    $bln = array(
                      '01' => 'Januari',
                      '02' => 'Februari',
                      '03' => 'maret',
                      '04' => 'April',
                      '05' => 'Mei',
                      '06' => 'Juni',
                      '07' => 'Juli',
                      '08' => 'Agustus',
                      '09' => 'September',
                      '10' => 'Oktober',
                      '11' => 'November',
                      '12' => 'Desember',
                    );
                  ?>
                                    
                                    
                                    <input type="text" class="form-control" id="thn" name="thn" value="<?php echo (@$tahun?$tahun:date('Y'));?>"/>
                                    
                                    <input type="submit" name="submit" class="btn btn-default" value="Cari"/>
                                 </form>

 
     
<?php $this->load->view('frame/footer_view')?>
<script src="<?=base_url()?>assets/js/view/user_list.js"></script>