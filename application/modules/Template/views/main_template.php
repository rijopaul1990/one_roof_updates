<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Electric Hub</title>
        <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/colors.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/components.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/themes/dark-layout.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/themes/semi-dark-layout.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/core/menu/menu-types/vertical-menu.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/pages/authentication.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/datatables.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->


<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon bx bx-envelope"></i></a></li>
                            <!--<li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon bx bx-chat"></i></a></li>-->
                        <!--    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon bx bx-check-circle"></i></a></li>-->
                        <!--    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon bx bx-calendar-alt"></i></a></li>-->
                        </ul>
                        <ul class="nav navbar-nav">
                            <!--<li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a>-->
                            <!--    <div class="bookmark-input search-input">-->
                            <!--        <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>-->
                            <!--        <input class="form-control input" type="text" placeholder="Explore Frest..." tabindex="0" data-search="template-search">-->
                            <!--        <ul class="search-list"></ul>-->
                            <!--    </div>-->
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <!--<li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>-->
                        <!--    <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us mr-50"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr mr-50"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de mr-50"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt mr-50"></i> Portuguese</a></div>-->
                        <!--</li>-->
                        <!--<li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>-->
                        <!--<li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>-->
                        <!--    <div class="search-input">-->
                        <!--        <div class="search-input-icon"><i class="bx bx-search primary"></i></div>-->
                        <!--        <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="template-search">-->
                        <!--        <div class="search-input-close"><i class="bx bx-x"></i></div>-->
                        <!--        <ul class="search-list"></ul>-->
                        <!--    </div>-->
                        <!--</li>-->
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span class="notification-title">7 new Notification</span><span class="text-bold-400 cursor-pointer">Mark all as read</span></div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="<?php echo base_url(); ?>assets/images/avatar-s-11.jpg" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Congratulate Socrates Itumay</span> for work anniversaries</h6><small class="notification-text">Mar 15 12:32pm</small>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-flex justify-content-between read-notification cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="<?php echo base_url(); ?>assets/img/avatar-s-11.jpg" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">New Message</span> received</h6><small class="notification-text">You have 18 unread messages</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center py-0">
                                            <div class="media-left pr-0"><img class="mr-1" src="<?php echo base_url(); ?>assets/images/avatar-s-11.jpg" alt="avatar" height="39" width="39"></div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Updates Available</span></h6><small class="notification-text">Sketch 50.2 is currently newly added</small>
                                            </div>
                                            <div class="media-right pl-0">
                                                <div class="row border-left text-center">
                                                    <div class="col-12 px-50 py-75 border-bottom">
                                                        <h6 class="media-heading text-bold-500 mb-0">Update</h6>
                                                    </div>
                                                    <div class="col-12 px-50 py-75">
                                                        <h6 class="media-heading mb-0">Close</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar bg-primary bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content text-primary font-medium-2">LD</span></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">New customer</span> is registered</h6><small class="notification-text">1 hrs ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cursor-pointer">
                                        <div class="media d-flex align-items-center justify-content-between">
                                            <div class="media-left pr-0">
                                                <div class="media-body">
                                                    <h6 class="media-heading">New Offers</h6>
                                                </div>
                                            </div>
                                            <div class="media-right">
                                                <div class="custom-control custom-switch">
                                                    <input class="custom-control-input" type="checkbox" checked id="notificationSwtich">
                                                    <label class="custom-control-label" for="notificationSwtich"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar bg-danger bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content"><i class="bx bxs-heart text-danger"></i></span></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Application</span> has been approved</h6><small class="notification-text">6 hrs ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between read-notification cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="../../../app-assets/images/portrait/small/avatar-s-4.jpg" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">New file</span> has been uploaded</h6><small class="notification-text">4 hrs ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar bg-rgba-danger m-0 mr-1 p-25">
                                                    <div class="avatar-content"><i class="bx bx-detail text-danger"></i></div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Finance report</span> has been generated</h6><small class="notification-text">25 hrs ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center border-0">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="../../../app-assets/images/portrait/small/avatar-s-16.jpg" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">New customer</span> comment recieved</h6><small class="notification-text">2 days ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name">Xavier</span><span class="user-status text-muted">Available</span></div><span><img class="round" src="<?php echo base_url(); ?>assets/images/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="page-user-profile.html"><i class="bx bx-user mr-50"></i> Edit Profile</a>
                                <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="auth-login.html"><i class="bx bx-power-off mr-50"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo base_url();?>dashboard">
                        <div class="brand-logo"><img class="logo" src="<?php echo base_url();?>assets/images/logo.png" /></div>
                        <h2 class="brand-text mb-0">ONE ROOF</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
                <li class=" nav-item"><a href=""><i class="bx bx-right-arrow-alt" data-icon="desktop"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge-light-danger badge-pill badge-round float-right mr-2">2</span></a>
                    <ul class="menu-content">
                        <li class="nav-item"><a href=""><i class="bx bx-right-arrow-alt" data-icon="desktop"></i><span class="menu-item" data-i18n="eCommerce">Products</span></a>
                            <ul class="menu-content">
                                <li><a href="<?php echo base_url(); ?>product"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Analytics">Manage Product</span></a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>manageCategory"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Analytics">Manage Category</span></a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>manageSubCategory"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Analytics">Manage Sub-Cat</span></a>
                                </li>
                            </ul>
                        </li>
                        <!--<li class="active"><a href="dashboard-analytics.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>-->
                        <!--</li>-->
                        <li class="active"><a href="dashboard-analytics.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Analytics">Invoice</span></a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                
                <h3><?php echo $title; ?></h3>
                
                <?php $this->load->view($content_view); ?>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- demo chat-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; CNC</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">CrustNCore</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    

</body>
<!-- END: Body-->

</html>

<script src="<?php echo base_url();?>assets/js/vendors.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/LivIconsEvo.tools.js"></script>
    <script src="<?php echo base_url();?>assets/js/LivIconsEvo.defaults.js"></script>
    <script src="<?php echo base_url();?>assets/js/LivIconsEvo.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vertical-menu-light.js"></script>
    <script src="<?php echo base_url();?>assets/js/app-menu.js"></script>
    <script src="<?php echo base_url();?>assets/js/app.js"></script>
    <script src="<?php echo base_url();?>assets/js/components.js"></script>
    <script src="<?php echo base_url();?>assets/js/footer.js"></script>   
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <script src="<?php echo base_url();?>assets/js/datatables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/pdfmake.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>assets/js/datatable.js"></script>
  </body>
</html>