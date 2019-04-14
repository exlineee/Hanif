
<html>
<head>
<style type="text/css" media="print">
    table {border: solid 1px #000; border-collapse: collapse; width: 100%}
    tr { border: solid 1px #000}
    td { padding: 7px 5px}
    h3 { margin-bottom: -17px }
    h2 { margin-bottom: 0px }
</style>
<style type="text/css" media="screen">
    table {border: solid 1px #000; border-collapse: collapse; width: 60%}
    tr { border: solid 1px #000}
    td { padding: 7px 5px}
    h3 { margin-bottom: -17px }
    h2 { margin-bottom: 0px }
</style>
</head>

<body onload="window.print()">
<table>
    <tr>
    <h2><td colspan="4" align="center" style="padding: 15px 0"><b style="font-size: 21px;"> PEMERINTAH KECAMATAN SUKASARI </b></td></h2>
    </td>
    </tr>
    
    <tr><td colspan="4" align="center" style="padding: 15px 0"><b style="font-size: 21px;">LEMBAR DISPOSISI</b></td></tr>

    <tr>
<ol>
    <td width="15%"><b>Surat dari</b></td><td width="25%">: <?php echo $disposisi->nama_pengirim; ?></td><td><b>Diterima Tgl : </b><?php echo $disposisi->diterima_tgl; ?></td></tr>
    <br/>
    <td width="15%"><b></b></td><td width="25%"></td><td><b>No. Agenda : </b><?php echo $disposisi->nomor_agenda; ?></td></tr>
    <td width="15%"><b>No. Surat</b></td><td width="25%">: <?php echo $disposisi->nomor_surat; ?></td><td><b>Sifat : </b></br>
                <input type="checkbox"> Sangat Segera  
                <input type="checkbox"> Segera <br/>
                <input type="checkbox"> Rahasia
            </td></tr>
    </br>
    <td width="15%"><b>Tgl Surat</b></td><td width="25%">: <?php echo $disposisi->tanggal_surat; ?></td><td></td></tr>
    <br/>
    <td width="15%"><b>Perihal</b></td><td width="25%">: <?php echo $disposisi->perihal; ?></td><td style="padding: 30px 0"></td></tr>
    </tr></br>
    <td width="25%"><b>Diteruskan Kepada Sdr. </b>:</br><p>
                1. Sekcam<br/>
                2. Kasi Pemerintahan<br/>
                3. Kasi Ekbang-LH<br/>
                4. Kasi Kesos<br/>
                5. Kasi Pemberdayaan<br/>
                6. Kasi Trantib<br/>
                7. Kasubag Umum & Kepegawaian<br/>
                8. Kasubag Keuangan & Program<br/>
                9. Pertanahan<br/></td></p><br/>
    <td>&nbsp;</td><td><b>Dengan Hormat Harap : </b><br/><p>
                <input type="checkbox"> Tanggapan dan Saran<br/>
                <input type="checkbox"> Proses Lebih Lanjut<br/>
                <input type="checkbox"> Koordinasi/Konfirmasi<br/>
                <input type="checkbox"> .............................................................<br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                
    </td></p></tr>
    <br/>
    <td width="15%"><b>Catatan</b>: <?php echo $disposisi->catatan; ?><br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/><br/></td>
    <td>&nbsp;</td><br/><td align="center"><b>CAMAT SUKASARI </b><br/>
<img src="<?=base_url()?>assets/images/img092.jpg" width="35%" align="center"><br/><br/>
    HANIFA SHABATINI
    </td></td></td></ol></tr></table></body></html>
