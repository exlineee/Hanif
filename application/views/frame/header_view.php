<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Surat Masuk dan Penjadwalan di Kecamatan Sukasari</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=base_url()?>assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?=base_url()?>assets/css/dataTables.bootstrap.css" rel="stylesheet">

    <link href="<?=base_url()?>assets/css/bootstrap-editable.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/javascripts/admin/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/javascripts/admin/bootstrap-fileupload/bootstrap-fileupload.css" />
    <!-- Custom tab icons -->
    
    <link href="<?=base_url()?>assets/js/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/js/jquery-ui-1.11.4.custom/jquery-ui-custom-datepicker.css" rel="stylesheet" type="text/css" />
    
    
    <input type="hidden"  id="base-url" value="<?=base_url()?>"/>

    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/Chart.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/Chart.js"></script>




</head>

<body>
    <div class="overlay"></div>
    <!--<audio src="<?=base_url()?>assets/images/LoveScenario.mp3" autoplay="autoplay" hidden="hidden"></audio>!-->
    <img id="loading"  width="250px" src="<?=base_url()?>assets/images/load.gif" alt="Loading...">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">#</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <link rel="shortcut icon" href="<?=base_url()?>assets/images/logo.png" type="">
                <a class="navbar-brand" href="#">
                    <div class="inline"><img src="<?php echo base_url('assets/images/logo.png');?>" width="35px" align="center">Sistem Informasi Surat Masuk dan Penjadwalan di Kecamatan Sukasari </div>
                </a>

            </div>
            <!-- /.navbar-header -->
            
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a  id="header-dropdown" class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i id="header-icon" class="fa fa-user fa-fw"></i>  <i id="header-icon" class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                    
                        <li class="divider"></li>

                        <li><a href="<?=base_url();?>admin/home/do_logout"><i class="fa fa-power-off fa-fw"></i> Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <div class=" navbar-brand navbar-right navbar-access-level"> 
                <?=ucfirst($this->session->userdata('nama'));?>
                &nbsp;
            </div>
            <!-- /.navbar-top-links -->


<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                    
                        <li>
                            <?php echo '<p class="welcome"><b> <text style="font-size:200%;">&#9786</text> <i>Selamat Datang </i>' . $this->session->userdata('nama') . "!</b></p>"; ?>
                        </li>
                        <?php if($this->session->userdata('id_user')=='1'){?>
                        <li>
                      <a class="<?php if (!empty($main_menu)){ if ($main_menu=="dash") {echo "active";}}?>" href="<?php echo site_url()?>admin/home">
                          <i class="fa fa-dashboard fa-fw"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                        <li>
                      <a class="<?php if (!empty($main_menu)){ if ($main_menu=="kelola_user") {echo "active";}}?>" href="<?php echo site_url()?>admin/user/kelola_user">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>User</span>
                      </a>
                  </li>
                        <li>
                      <a class="<?php if (!empty($main_menu)){ if ($main_menu=="agenda") {echo "active";}}?>" href="<?php echo site_url()?>admin/agenda/agenda">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Agenda</span>
                      </a>
                  </li>
                        <li>
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="disposisi") {echo "active";}}?>" href="<?php echo site_url()?>admin/disposisi/disposisi_adm">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Disposisi</span>
                          </a>
                        </li>
                        <li>
                        <!--<li>
                            <a class="<?php //if (!empty($main_menu)){ if ($main_menu=="distribusi") {echo "active";}}?>" href="<?php //echo site_url()?>admin/distribusi/distribusi">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Distribusi</span>
                          </a>
                        </li>!-->
                        <li>
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="jadwal") {echo "active";}}?>" href="<?php echo site_url()?>admin/jadwal/jadwal">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Jadwal</span>
                          </a>
                        </li>
                             <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo (@$main_menu=="laporan" ? "active" : "")?>">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Laporan</span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo (@$menu=="laporan" ? "active" : "")?>"><a href="<?php echo site_url()?>admin/laporan2">Laporan Tabel</a></li>  
                      </ul>
                      <ul class="sub">
                          <li class="<?php echo (@$menu=="laporan" ? "active" : "")?>"><a href="<?php echo site_url()?>admin/laporan">Laporan Grafik</a></li>  
                      </ul>
                      </li>
                      

                        <?php } else if ($this->session->userdata('id_user')=='2'){?>
                        <li>
                      <a class="<?php if (!empty($main_menu)){ if ($main_menu=="dash") {echo "active";}}?>" href="<?php echo site_url()?>admin/home">
                          <i class="fa fa-dashboard fa-fw"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                        <li>
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="disposisi") {echo "active";}}?>" href="<?php echo site_url()?>admin/disposisi/disposisi1">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Disposisi</span>
                          </a>
                        </li>
                        <li>              
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="jadwal") {echo "active";}}?>" href="<?php echo site_url()?>admin/jadwal/jadwal1">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Jadwal</span>
                          </a>
                        </li>

                        <?php } else if ($this->session->userdata('id_user')=='3'){?>
                        <li>
                      <a class="<?php if (!empty($main_menu)){ if ($main_menu=="dash") {echo "active";}}?>" href="<?php echo site_url()?>admin/home">
                          <i class="fa fa-dashboard fa-fw"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                        <li>
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="disposisi") {echo "active";}}?>" href="<?php echo site_url()?>admin/disposisi/disposisi2">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Disposisi</span>
                          </a>
                        </li>
                        <li>              
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="jadwal") {echo "active";}}?>" href="<?php echo site_url()?>admin/jadwal/jadwal2">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Jadwal</span>
                          </a>
                        </li>

                        <?php } else if ($this->session->userdata('id_user')=='4'){?>
                        <li>
                      <a class="<?php if (!empty($main_menu)){ if ($main_menu=="dash") {echo "active";}}?>" href="<?php echo site_url()?>admin/home">
                          <i class="fa fa-dashboard fa-fw"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                        <li>
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="disposisi") {echo "active";}}?>" href="<?php echo site_url()?>admin/disposisi/disposisi3">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Disposisi</span>
                          </a>
                        </li>
                        <li>              
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="jadwal") {echo "active";}}?>" href="<?php echo site_url()?>admin/jadwal/jadwal3">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Jadwal</span>
                          </a>
                        </li>

                        <?php } else if ($this->session->userdata('id_user')=='5'){?>
                        <li>
                      <a class="<?php if (!empty($main_menu)){ if ($main_menu=="dash") {echo "active";}}?>" href="<?php echo site_url()?>admin/home">
                          <i class="fa fa-dashboard fa-fw"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                        <li>
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="disposisi") {echo "active";}}?>" href="<?php echo site_url()?>admin/disposisi/disposisi4">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Disposisi</span>
                          </a>
                        </li>
                        <li>              
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="jadwal") {echo "active";}}?>" href="<?php echo site_url()?>admin/jadwal/jadwal4">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Jadwal</span>
                          </a>
                        </li>

                        <?php } else if ($this->session->userdata('id_user')=='6'){?>
                        <li>
                      <a class="<?php if (!empty($main_menu)){ if ($main_menu=="dash") {echo "active";}}?>" href="<?php echo site_url()?>admin/home">
                          <i class="fa fa-dashboard fa-fw"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                        <li>
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="disposisi") {echo "active";}}?>" href="<?php echo site_url()?>admin/disposisi/disposisi5">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Disposisi</span>
                          </a>
                        </li>
                        <li>              
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="jadwal") {echo "active";}}?>" href="<?php echo site_url()?>admin/jadwal/jadwal5">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Jadwal</span>
                          </a>
                        </li>

                        <?php } else if ($this->session->userdata('id_user')=='7'){?>
                        <li>
                      <a class="<?php if (!empty($main_menu)){ if ($main_menu=="dash") {echo "active";}}?>" href="<?php echo site_url()?>admin/home">
                          <i class="fa fa-dashboard fa-fw"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                        <li>
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="disposisi") {echo "active";}}?>" href="<?php echo site_url()?>admin/disposisi/disposisi6">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Disposisi</span>
                          </a>
                        </li>
                        <li>              
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="jadwal") {echo "active";}}?>" href="<?php echo site_url()?>admin/jadwal/jadwal6">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Jadwal</span>
                          </a>
                        </li>

                        <?php } else if ($this->session->userdata('id_user')=='8'){?>
                        <li>
                      <a class="<?php if (!empty($main_menu)){ if ($main_menu=="dash") {echo "active";}}?>" href="<?php echo site_url()?>admin/home">
                          <i class="fa fa-dashboard fa-fw"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                        <li>
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="disposisi") {echo "active";}}?>" href="<?php echo site_url()?>admin/disposisi/disposisi7">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Disposisi</span>
                          </a>
                        </li>
                        <li>              
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="jadwal") {echo "active";}}?>" href="<?php echo site_url()?>admin/jadwal/jadwal7">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Jadwal</span>
                          </a>
                        </li>

                        <?php } else if ($this->session->userdata('id_user')=='9'){?>
                        <li>
                      <a class="<?php if (!empty($main_menu)){ if ($main_menu=="dash") {echo "active";}}?>" href="<?php echo site_url()?>admin/home">
                          <i class="fa fa-dashboard fa-fw"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                        <li>
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="disposisi") {echo "active";}}?>" href="<?php echo site_url()?>admin/disposisi/disposisi8">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Disposisi</span>
                          </a>
                        </li>
                        <li>              
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="jadwal") {echo "active";}}?>" href="<?php echo site_url()?>admin/jadwal/jadwal8">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Jadwal</span>
                          </a>
                        </li>

                        <?php } else if ($this->session->userdata('id_user')=='10'){?>
                        <li>
                      <a class="<?php if (!empty($main_menu)){ if ($main_menu=="dash") {echo "active";}}?>" href="<?php echo site_url()?>admin/home">
                          <i class="fa fa-dashboard fa-fw"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                        <li>
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="disposisi") {echo "active";}}?>" href="<?php echo site_url()?>admin/disposisi/disposisi9">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Disposisi</span>
                          </a>
                        </li>
                        <li>              
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="disposisi") {echo "active";}}?>" href="<?php echo site_url()?>admin/jadwal/jadwal9">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Jadwal</span>
                          </a>
                        </li>

                        <?php } else if ($this->session->userdata('id_user')=='11'){?>
                        <li>
                      <a class="<?php if (!empty($main_menu)){ if ($main_menu=="dash") {echo "active";}}?>" href="<?php echo site_url()?>admin/home">
                          <i class="fa fa-dashboard fa-fw"></i>
                          <span>Dashboard</span>
                      </a>
                      </li>
                      <li>
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="disposisi") {echo "active";}}?>" href="<?php echo site_url()?>admin/disposisi/disposisi">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Disposisi</span>
                          </a>
                        </li>
                        <!--<li>
                            <a class="<?php //if (!empty($main_menu)){ if ($main_menu=="distribusi") {echo "active";}}?>" href="<?php //echo site_url()?>admin/distribusi/distribusi">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Distribusi</span>
                          </a>
                        </li>!-->
                        <li>
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="jadwal") {echo "active";}}?>" href="<?php echo site_url()?>admin/jadwal/jadwalu">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Jadwal</span>
                          </a>
                        </li>
                         <li>
                            <li class="sub-menu">
                      <a href="javascript:;" class="<?php echo (@$main_menu=="laporan" ? "active" : "")?>">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Laporan</span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo (@$menu=="laporan" ? "active" : "")?>"><a href="<?php echo site_url()?>admin/laporan2">Laporan Tabel</a></li>  
                      </ul>
                      <ul class="sub">
                          <li class="<?php echo (@$menu=="laporan" ? "active" : "")?>"><a href="<?php echo site_url()?>admin/laporan">Laporan Grafik</a></li>  
                      </ul>
                      </li>

                        <?php } ?>
                       <li class="sub-menu">
                      <a href="<?php echo base_url()?>admin/home/do_logout">
                          <i class="fa fa-power-off fa-fw"></i>
                          <span>Logout</span>
                      </a>
                  </li>
                  <p>
                  <div class="col-lg-12 text-center" style="padding:5px;"><p> Copyright &copy;<?php echo date("Y");?> By Hanifa</p></div>
                     </p>   
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        </nav></div></body></html>
