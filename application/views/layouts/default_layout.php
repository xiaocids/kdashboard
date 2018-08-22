<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard | <?php echo$title?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/favicon.png')?>"/>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="<?php echo base_url()?>" class="site_title"><img class="icon_logo" src="<?php echo base_url('assets/favicon.png') ?>"/> <img class="logo" src="<?php echo base_url('assets/images/logo.png')?>" width="180px;"/></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="<?php echo base_url('assets/images/logo_bireun.jpg')?>" alt="..." class="img-thumbnail profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Kecamatan</span>
                        <h2><?php echo $this->config->item('nama_kecamatan'); ?></h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-line-chart"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo base_url('dashboard/profil') ?>">Profil</a></li>
                                    <li><a href="<?php echo base_url('dashboard/kependudukan'); ?>">Kependudukan</a></li>
                                    <li><a href="<?php echo base_url('dashboard/kesehatan') ?>">Kesehatan</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-info-circle"></i> Informasi <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo base_url('informasi/'); ?>">Prosedur</a></li>
                                    <li><a href="<?php echo base_url('informasi/regulasi'); ?>">Regulasi</a></li>
                                    <li><a href="<?php echo base_url('informasi/layanan'); ?>">Layanan</a></li>
                                    <li><a href="<?php echo base_url('informasi/potensi'); ?>">Potensi</a></li>
                                    <li><a href="<?php echo base_url('informasi/event'); ?>">Event</a></li>
                                    <li><a href="<?php echo base_url('informasi/faq'); ?>">FAQ</a></li>
                                    <li><a href="<?php echo base_url('informasi/form-dokumen')?>">Form Dokumen</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url('sikoma/index'); ?>"><i class="fa fa-comments"></i> SIKOMA</span></a></li>
                        </ul>
                    </div>
                    <?php if($this->session->userdata('access_level') == 1): ?>
                    <div class="menu_section">
                        <h3>Administrator</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-clone"></i>Settings <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?php echo base_url('settings/index'); ?>">Application</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Total Pengunjung">
                        Total Pengunjung
                    </a>
                
                    <a class="pull-right" data-toggle="tooltip" data-placement="top" title="Total Pengunjung" href="">
                        <span class="badge bg-red" aria-hidden="true">266.341.123</span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <!-- Authentic menu start -->                    
                    <ul class="nav navbar-nav navbar-right">
                        <?php if($this->session->userdata('login')): ?>
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="<?php echo base_url('assets/images/img.jpg')?>" alt=""> <?php echo ucfirst($this->session->userdata('ses_id')); ?> 
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <?php if($this->session->userdata('access_level') == 1){ ?>
                                <li>
                                    <a href="<?php echo base_url('settings/index'); ?>">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <?php } ?>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="<?php echo base_url('assets/images/img.jpg')?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="<?php echo base_url('assets/images/img.jpg')?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="<?php echo base_url('assets/images/img.jpg')?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="<?php echo base_url('assets/images/img.jpg')?>" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <?php else: ?>
                        <li style="background: #E74C3C !important; color: #FFF;">
                            <a href="<?php echo base_url('login'); ?>" class="user-profile" aria-expanded="false">
                                <i class="fa fa-sign-in"></i> Login
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>                    
                    <!-- Authentic menu end -->
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <?php echo $contents; ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Copyright &copy; 2018 by <a href="https://rawaludin.com">R Awaludin</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/vendors/fastclick/lib/fastclick.js') ?>"></script>
<!-- NProgress -->
<script src="<?php echo base_url('assets/vendors/nprogress/nprogress.js') ?>"></script>
<!-- Chart.js -->
<script src="<?php echo base_url('assets/vendors/Chart.js/dist/Chart.min.js') ?>"></script>
<!-- gauge.js -->
<script src="<?php echo base_url('assets/vendors/gauge.js/dist/gauge.min.js') ?>"></script>
<!-- bootstrap-progressbar -->
<script src="<?php echo base_url('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/vendors/iCheck/icheck.min.js') ?>"></script>
<!-- Skycons -->
<script src="<?php echo base_url('assets/vendors/skycons/skycons.js') ?>"></script>
<!-- Flot -->
<script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.pie.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.time.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.stack.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.resize.js') ?>"></script>
<!-- Flot plugins -->
<script src="<?php echo base_url('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/flot-spline/js/jquery.flot.spline.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/flot.curvedlines/curvedLines.js') ?>"></script>
<!-- DateJS -->
<script src="<?php echo base_url('assets/vendors/DateJS/build/date.js') ?>"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('assets/vendors/jqvmap/dist/jquery.vmap.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo base_url('assets/vendors/moment/min/moment.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
<!-- morris.js -->
<script src="<?php echo base_url('assets/vendors/raphael/raphael.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/morris.js/morris.min.js') ?>"></script>
<!-- ECharts -->
<script src="<?php echo base_url('assets/vendors/echarts/dist/echarts.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/echarts/map/js/world.js') ?>"></script>
<!-- PNotify -->
<script src="<?php echo base_url('assets/vendors/pnotify/dist/pnotify.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/pnotify/dist/pnotify.buttons.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/pnotify/dist/pnotify.nonblock.js')?>"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
<?php $sesval = $this->session->flashdata('msg'); ?>
<script type="text/javascript">
    $( document ).ready(function() {
        var varval = '<?php echo $sesval; ?>';
        console.log(varval);
        if (! varval == '') {
            console.log('ada');
        }
    });
</script>
</body>
</html>