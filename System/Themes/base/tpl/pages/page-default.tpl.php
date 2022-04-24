<?php
use Acabits\System\Template;
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enlink - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<body>
<div class="app">
    <div class="layout">
        <!-- Header START -->
        <?php Template::loadComponent('header','base');?>
        <!-- Header END -->

        <!-- Side Nav START -->
        <?php Template::loadComponent('side-nav','base');?>
        <!-- Side Nav END -->

        <!-- Page Container START -->
        <div class="page-container">

            <!-- Content Wrapper START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Title</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                            <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
                            <span class="breadcrumb-item active">Breadcrumb 2</span>
                        </nav>
                        <h1>Welcome to Acabits</h1>
                    </div>
                </div>
                <!-- Content goes Here -->
            </div>
            <!-- Content Wrapper END -->

            <!-- Footer START -->
            <footer class="footer">
                <div class="footer-content">
                    <p class="m-b-0">Copyright © <?php echo date('Y');?> Redes Sociales CR. All rights reserved.</p>
                    <span>
                            <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                            <a href="" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                </div>
            </footer>
            <!-- Footer END -->

        </div>
        <!-- Page Container END -->

        <!-- Search Start-->
        <div class="modal modal-left fade search" id="search-drawer">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-between align-items-center">
                        <h5 class="modal-title">Search</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="anticon anticon-close"></i>
                        </button>
                    </div>
                    <div class="modal-body scrollable">
                        <div class="input-affix">
                            <i class="prefix-icon anticon anticon-search"></i>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <!-- Content goes Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End-->

        <!-- Quick View START -->
        <div class="modal modal-right fade quick-view" id="quick-view">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-between align-items-center">
                        <h5 class="modal-title">Quick View</h5>
                    </div>
                    <div class="modal-body scrollable">
                        <!-- Content goes Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick View END -->
    </div>
</div>


<!-- Core Vendors JS -->
<script src="/assets/js/vendors.min.js"></script>

<!-- page js -->

<!-- Core JS -->
<script src="/assets/js/app.min.js"></script>

</body>

</html>