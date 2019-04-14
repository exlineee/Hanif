   
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script type="text/javascript" src="<?=base_url()?>assets/jquery-3.3.1.min.js"></script>
    <!--<script src="<?=base_url()?>assets/js/jquery.min.js"></script>-->
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery-ui-1.11.4.custom/jquery-ui.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url()?>assets/js/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?=base_url()?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/js/dataTables.bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap-editable.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap-editable.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url()?>assets/js/sb-admin-2.js"></script>

    <script type="text/javascript">
      $("#agenda").change(function() {
        var nomor = $("#agenda").val();
        var url = "<?php echo base_url('admin/agenda/get_agenda')?>/"+nomor;
        // console.log(url);
        $.ajax({
            url:"<?php echo base_url('admin/agenda/get_agenda');?>/"+nomor,
            type:"POST",
            dataType:"json",
            success: function(result){
                console.log(result);
                $.each(result, function(index, element) {
                   console.log(element.nama_pengirim);
                   $("#surat_dari").val(element.nama_pengirim);
                   $("#nomor_surat").val(element.nomor_surat_masuk);
                   $("#diterima_tgl").val(element.tanggal_surat_masuk);
                   $("#perihal").val(element.perihal_surat);
                   $("#surat_masuk").val(element.dokumen_surat);
                   $("#acara").val(element.perihal_surat);
                   $("#tanggal").val(element.tgl_diselenggarakan);
                   $("#waktu").val(element.waktu);
                   $("#tempat").val(element.tempat);
                   $("#nama_yang_hadir").val(element.tujuan_surat);
                   $("#nama_yang_hadir1").val(element.tujuan_surat1);
                   $("#nama_yang_hadir2").val(element.tujuan_surat2);
                   $("#nama_yang_hadir3").val(element.tujuan_surat3);
                   
                  
                });
            }
        });
      });
    </script>

    <script type="text/javascript">
      $("#disposisi").change(function() {
        var id = $("#disposisi").val();
        var url = "<?php echo base_url('admin/disposisi/get_disposisi')?>/"+id;
        // console.log(url);
        $.ajax({
            url:"<?php echo base_url('admin/disposisi/get_disposisi');?>/"+id,
            type:"POST",
            dataType:"json",
            success: function(result){
                console.log(result);
                $.each(result, function(index, element) {
                   console.log(element.perihal);
                   $("#perihal").val(element.perihal)
                   $("#tanggal").val(element.tanggal);
                   $("#waktu").val(element.waktu);
                   $("#tempat").val(element.tempat);
                   $("#nama_yang_hadir").val(element.diteruskan_kepada);
                   $("#nama_yang_hadir1").val(element.diteruskan_kepada1);
                   $("#nama_yang_hadir2").val(element.diteruskan_kepada2);
                   $("#nama_yang_hadir3").val(element.diteruskan_kepada3);
                   
                  
                });
            }
        });
      });
    </script>




</body>

</html>