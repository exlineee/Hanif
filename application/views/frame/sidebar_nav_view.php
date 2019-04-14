
<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                    
                        <li>
                            <?php echo '<p class="welcome"><b> <text style="font-size:200%;">&#9786</text> <i>Selamat Datang </i>' . $this->session->userdata('nama') . "!</b></p>"; ?>
                        </li>
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
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="disposisi") {echo "active";}}?>" href="<?php echo site_url()?>admin/disposisi/disposisi">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Disposisi</span>
                          </a>
                        </li>
                        
                        <li>
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="distribusi") {echo "active";}}?>" href="<?php echo site_url()?>admin/distribusi/distribusi">
                          <i class="fa fa-file-text fa-fw"></i>
                          <span>Distribusi</span>
                          </a>
                        </li>
                        <li>
                        
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="disposisi") {echo "active";}}?>" href="<?php echo site_url()?>admin/jadwal/jadwal">
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
                          <li class="<?php echo (@$menu=="laporan" ? "active" : "")?>"><a href="<?php echo site_url()?>admin/laporan">
                          <i class="fa fa-file-text fa-fw"></i>Laporan Kehadiran</a></li>  
                      </ul>
                      <ul class="sub">
                          <li class="<?php echo (@$menu=="laporan" ? "active" : "")?>"><a href="<?php echo site_url()?>admin/laporan1">
                          <i class="fa fa-file-text fa-fw"></i>Laporan Surat Masuk</a></li>  
                      </ul>
                        </li>
                        <li>
                            <a class="<?php if (!empty($main_menu)){ if ($main_menu=="user") {echo "active";}}?>" href="<?php echo site_url()?>admin/user/edit">
                            <i class="fa fa-cogs fa-fw"></i> 
                            <span>Setting</span>
                            </a>
                        </li>
                        
                       <li class="sub-menu">
                      <a href="<?php echo base_url()?>admin/home/do_logout">
                          <i class="fa fa-power-off fa-fw"></i>
                          <span>Logout</span>
                      </a>
                  </li>
                  
                  <div class="col-lg-12 text-center" style="padding:5px;"><p> Copyright &copy;<?php echo date("Y");?> By Hanifa</p></div>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>