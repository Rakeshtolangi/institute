<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Institue </title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?php echo e(asset('assets/js/plugin/webfont/webfont.min.js')); ?>"></script>
    <script>
    WebFont.load({
        google: {
            families: ["Public Sans:300,400,500,600,700"]
        },
        custom: {
            families: [
                "Font Awesome 5 Solid",
                "Font Awesome 5 Regular",
                "Font Awesome 5 Brands",
                "simple-line-icons",
            ],
            urls: ["<?php echo e(asset('assets/css/fonts.min.css')); ?>"],
        },
        active: function() {
            sessionStorage.fonts = true;
        },
    });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/kaiadmin.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/customCss.css')); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .form-control {
        border-color: #d0d0d0e3 !important;
    }

    .sub-item::before {

        font-family: 'FontAwesome';
        content: "\f178" !important;
        display: inline-block;
        top: 0 !important;
        background: none !important;


    }

    .sidebar .nav-collapse li a {
        padding: 1px 25px !important;
    }

    .sidebar .nav-collapse,
    .sidebar[data-background-color=white] .nav-collapse {
        margin-top: 0;
        margin-bottom: 5px;
        padding-bottom: 5px;
        padding-top: 0px;
        padding-left: 40px !important;
    }
    </style>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="<?php echo e(url('/')); ?>" class="logo">
                        <!-- <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                            height="20" /> -->
                        <p class="text-white">IMS</p>
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">

                        <li class="nav-item active">
                            <a href="<?php echo e(route('home')); ?>" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLayoutsEnquiries">
                                <i class="far fa-lightbulb"></i>
                                <p>Manage Enquires</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="sidebarLayoutsEnquiries">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="<?php echo e(route('enquiries.index')); ?>">
                                            <span class="sub-item">List Enquires</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('enquiries.create')); ?>">
                                            <span class="sub-item">Add Enquires</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLayouts">
                                <i class="fas fa-users"></i>
                                <p>Manage Students</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="nav nav-collapse">

                                    <li>
                                        <a href="<?php echo e(route('students.index')); ?>">
                                            <span class="sub-item">List Students</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('students.create')); ?>">
                                            <span class="sub-item">Add Student</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#forms">
                                <i class="fas fa-book-open"></i>
                                <p>Manage Batches</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="forms">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="<?php echo e(route('batches.index')); ?>">
                                            <span class="sub-item">List Batches</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('shifts.index')); ?>">
                                            <span class="sub-item">List Shifts</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#tables">
                                <i class="fas fa-graduation-cap"></i>
                                <p>Manage Courses</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="tables">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="<?php echo e(route('courses.index')); ?>">
                                            <span class="sub-item">List Courses</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('courses.create')); ?>">
                                            <span class="sub-item">Add Course</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('categories.index')); ?>">
                                            <span class="sub-item">Course Category</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#maps">
                                <i class="fas fa-user"></i>
                                <p>Teachers</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="maps">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="<?php echo e(route('teachers.index')); ?>">
                                            <span class="sub-item">List Teachers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('teachers.create')); ?>">
                                            <span class="sub-item">Add Teacher</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a href="<?php echo e(route('attendance.index')); ?>">
                                <i class="fas fa-book"></i>
                                <p>Attendences</p>
                            </a>
                        </li>


                        <!-- HRM dropdown -->
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLayoutsHRM">
                                <i class="fas fa-sitemap"></i>
                                <p>HRM</p>
                            </a>
                            <div class="collapse" id="sidebarLayoutsHRM">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="<?php echo e(route('payrolls.create')); ?>">
                                            <span class="sub-item">Payroll</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!--Fees dropdown -->
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLayoutsfees">

                                <!-- <i class="bi bi-currency-rupee"></i> -->
                                <i class='fas fa-rupee-sign'></i>
                                <p>Collect Fees</p>
                                <span class="caret"></span>

                            </a>
                            <div class="collapse" id="sidebarLayoutsfees">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="<?php echo e(route('fees.index')); ?>">
                                            <span class="sub-item">Fees</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('fees-categories.create')); ?>">
                                            <span class="sub-item">Fees Category</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <!-- Expenses dropdown -->
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLayoutsCategories">
                                <i class="fas fa-pencil-alt"></i>
                                <p>Expenses</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="sidebarLayoutsCategories">
                                <ul class="nav nav-collapse">
                                    <li class="nav-item">
                                        <a href="<?php echo e(route('expenses.index')); ?>">
                                            <span class="sub-item">Expenses</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo e(route('expense-categories.index')); ?>">
                                            <span class="sub-item">Expense Category</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Designations -->
                        <li class="nav-item">
                            <a href="<?php echo e(route('designations.index')); ?>">
                                <i class="fas fa-desktop"></i>
                                <span class="">Designation</span>
                            </a>
                        </li>

                        <!-- Settings -->
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLayoutsSetting">
                                <i class="fas fa-gear"></i>
                                <p>Settings</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="sidebarLayoutsSetting">
                                <ul class="nav nav-collapse">
                                    <li class="nav-item">
                                        <a href="">
                                            <span class="sub-item">System Settings</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo e(route('users.index')); ?>">
                                            <span class="sub-item">Users</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo e(route('roles.index')); ?>">
                                            <span class="sub-item">Role</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                    <a href="<?php echo e(route('permissions.index')); ?>">
                                            <span class="sub-item">Permission</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                                height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">
                       

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                     
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <span class="notification">4</span>
                                </a>
                                <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                    <li>
                                        <div class="dropdown-title">
                                            You have 4 new notification
                                        </div>
                                    </li>
                                    <li>
                                        <div class="notif-scroll scrollbar-outer">
                                            <div class="notif-center">
                                                <a href="#">
                                                    <div class="notif-icon notif-primary">
                                                        <i class="fa fa-user-plus"></i>
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block"> New user registered </span>
                                                        <span class="time">5 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-icon notif-success">
                                                        <i class="fa fa-comment"></i>
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block">
                                                            Rahmad commented on Admin
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-img">
                                                        <img src="assets/img/profile2.jpg" alt="Img Profile" />
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block">
                                                            Reza send messages to you
                                                        </span>
                                                        <span class="time">12 minutes ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="notif-icon notif-danger">
                                                        <i class="fa fa-heart"></i>
                                                    </div>
                                                    <div class="notif-content">
                                                        <span class="block"> Farrah liked Admin </span>
                                                        <span class="time">17 minutes ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="see-all" href="javascript:void(0);">See all notifications<i
                                                class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a class="nav-link" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                                    <i class="fas fa-layer-group"></i>
                                </a>
                                <div class="dropdown-menu quick-actions animated fadeIn">
                                    <div class="quick-actions-header">
                                        <span class="title mb-1">Quick Actions</span>
                                        <span class="subtitle op-7">Shortcuts</span>
                                    </div>
                                    <div class="quick-actions-scroll scrollbar-outer">
                                        <div class="quick-actions-items">
                                            <div class="row m-0">
                                                <a class="col-6 col-md-4 p-0" href="<?php echo e(route('enquiries.index')); ?>">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-danger rounded-circle">
                                                            <i class="far fa-lightbulb"></i>
                                                        </div>
                                                        <span class="text">Add Enquries</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="<?php echo e(route('students.index')); ?>">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-warning rounded-circle">
                                                            <i class="fas fa-users"></i>
                                                        </div>
                                                        <span class="text">Add Students</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="<?php echo e(route('batches.index')); ?>">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-info rounded-circle">
                                                            <i class="fas fa-book-open"></i>
                                                        </div>
                                                        <span class="text">Add Batch</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="<?php echo e(route('courses.index')); ?>">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-success rounded-circle">
                                                            <i class="fas fa-graduation-cap"></i>
                                                        </div>
                                                        <span class="text">Add Course</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="<?php echo e(route('payrolls.index')); ?>">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-primary rounded-circle">
                                                            <i class="fas fa-sitemap"></i>
                                                        </div>
                                                        <span class="text">Payroll</span>
                                                    </div>
                                                </a>
                                                <a class="col-6 col-md-4 p-0" href="<?php echo e(route('fees.index')); ?>">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-secondary rounded-circle">
                                                            <i class="fas fa-rupee-sign"></i>
                                                        </div>
                                                        <span class="text">Collect Fee</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                                    aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle" />
                                    </div>
                                    <span class="profile-username">
                                        <span class="fw-bold"><?php echo e(Auth::user()->name); ?></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    <img src="assets/img/profile.jpg" alt="image profile"
                                                        class="avatar-img rounded" />
                                                </div>
                                                <div class="u-text">
                                                    <h4><?php echo e(Auth::user()->name); ?></h4>
                                                    <p class="text-muted"><?php echo e(Auth::user()->roles->pluck('name')); ?></p>
                                                    <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">My Profile</a>
                                            <a class="dropdown-item" href="#">My Balance</a>
                                            <a class="dropdown-item" href="#">Inbox</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Account Setting</a>
                                            <div class="dropdown-divider"></div>

                                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <?php echo e(__('Logout')); ?>

                                            </a>

                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                                class="d-none">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
            <?php echo $__env->yieldContent('content'); ?>
            <footer class="footer">
                <div class="container-fluid d-flex justify-content-between">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('/')); ?>">
                                © 2024 IMS | All Rigth Reserved. 
                                </a>
                            </li>
                        
                        </ul>
                    </nav>
                    <div class="copyright">
                         Designed & Developed By
                        <a href="http://creativecanvas.info" target="_blank">CC Group Of Comapny Pvt. Ltd.</a>
                    </div>
                    
                </div>
            </footer>
        </div>


    </div>
    <!--   Core JS Files   -->
    <script src="<?php echo e(asset('assets/js/core/jquery-3.7.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/core/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/core/bootstrap.min.js')); ?>"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?php echo e(asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')); ?>"></script>

    <!-- Chart JS -->
    <script src="<?php echo e(asset('assets/js/plugin/chart.js/chart.min.js')); ?>"></script>

    <!-- jQuery Sparkline -->
    <script src="<?php echo e(asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')); ?>"></script>

    <!-- Chart Circle -->
    <script src="<?php echo e(asset('assets/js/plugin/chart-circle/circles.min.js')); ?>"></script>

    <!-- Datatables -->
    <script src="<?php echo e(asset('assets/js/plugin/datatables/datatables.min.js')); ?>"></script>

    <!-- Bootstrap Notify -->
    <script src="<?php echo e(asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')); ?>"></script>

    <!-- jQuery Vector Maps -->
    <script src="<?php echo e(asset('assets/js/plugin/jsvectormap/jsvectormap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugin/jsvectormap/world.js')); ?>"></script>

    <!-- Sweet Alert -->
    <script src="<?php echo e(asset('assets/js/plugin/sweetalert/sweetalert.min.js')); ?>"></script>

    <!-- Kaiadmin JS -->
    <script src="<?php echo e(asset('assets/js/kaiadmin.min.js')); ?>"></script>

    <script>
    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
    });

    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
    });

    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
    });
    </script>

    <script>
    $(document).ready(function() {
        $(".datatables").DataTable({

        });
    });
    </script>
<!-- <script>
    (function ($) {
  $.fn.uploader = function (options) {
    var settings = $.extend(
      {
        MessageAreaText: "No files selected.",
        MessageAreaTextWithFiles: "File List:",
        DefaultErrorMessage: "Unable to open this file.",
        BadTypeErrorMessage: "We cannot accept this file type at this time.",
        acceptedFileTypes: [
          "pdf"
        ]
      },
      options
    );

    var uploadId = 1;
    //update the messaging
    $(".file-uploader__message-area p").text(
      options.MessageAreaText || settings.MessageAreaText
    );

    //create and add the file list and the hidden input list
    var fileList = $('<ul class="file-list"></ul>');
    var hiddenInputs = $('<div class="hidden-inputs hidden"></div>');
    $(".file-uploader__message-area").after(fileList);
    $(".file-list").after(hiddenInputs);

    //when choosing a file, add the name to the list and copy the file input into the hidden inputs
    $(".file-chooser__input").on("change", function () {
      var files = document.querySelector(".file-chooser__input").files;

      for (var i = 0; i < files.length; i++) {
        console.log(files[i]);

        var file = files[i];
        var fileName = file.name.match(/([^\\\/]+)$/)[0];

        //clear any error condition
        $(".file-chooser").removeClass("error");
        $(".error-message").remove();

        //validate the file
        var check = checkFile(fileName);
        if (check === "valid") {
          // move the 'real' one to hidden list
          $(".hidden-inputs").append($(".file-chooser__input"));

          //insert a clone after the hiddens (copy the event handlers too)
          $(".file-chooser").append(
            $(".file-chooser__input").clone({ withDataAndEvents: true })
          );

          //add the name and a remove button to the file-list
          $(".file-list").append(
            '<li style="display: none;"><span class="file-list__name">' +
              fileName +
              '</span><button class="removal-button" data-uploadid="' +
              uploadId +
              '"></button></li>'
          );
          $(".file-list").find("li:last").show(800);

          //removal button handler
          $(".removal-button").on("click", function (e) {
            e.preventDefault();

            //remove the corresponding hidden input
            $(
              '.hidden-inputs input[data-uploadid="' +
                $(this).data("uploadid") +
                '"]'
            ).remove();

            //remove the name from file-list that corresponds to the button clicked
            $(this)
              .parent()
              .hide("puff")
              .delay(10)
              .queue(function () {
                $(this).remove();
              });

            //if the list is now empty, change the text back
            if ($(".file-list li").length === 0) {
              $(".file-uploader__message-area").text(
                options.MessageAreaText || settings.MessageAreaText
              );
            }
          });

          //so the event handler works on the new "real" one
          $(".hidden-inputs .file-chooser__input")
            .removeClass("file-chooser__input")
            .attr("data-uploadId", uploadId);

          //update the message area
          $(".file-uploader__message-area").text(
            options.MessageAreaTextWithFiles ||
              settings.MessageAreaTextWithFiles
          );

          uploadId++;
        } else {
          //indicate that the file is not ok
          $(".file-chooser").addClass("error");
          var errorText =
            options.DefaultErrorMessage || settings.DefaultErrorMessage;

          if (check === "badFileName") {
            errorText =
              options.BadTypeErrorMessage || settings.BadTypeErrorMessage;
          }

          $(".file-chooser__input").after(
            '<p class="error-message">' + errorText + "</p>"
          );
        }
      }
    });

    var checkFile = function (fileName) {
      var accepted = "invalid",
        acceptedFileTypes =
          this.acceptedFileTypes || settings.acceptedFileTypes,
        regex;

      for (var i = 0; i < acceptedFileTypes.length; i++) {
        regex = new RegExp("\\." + acceptedFileTypes[i] + "$", "i");

        if (regex.test(fileName)) {
          accepted = "valid";
          break;
        } else {
          accepted = "badFileName";
        }
      }

      return accepted;
    };
  };
})($);

//init
$(document).ready(function () {
  console.log("hi");
  $(".fileUploader").uploader({
    MessageAreaText: "No files selected. Please select a file."
  });
});

</script> -->
</body>

</html><?php /**PATH C:\xampp\htdocs\institute\institute-management\resources\views/layouts/backend.blade.php ENDPATH**/ ?>