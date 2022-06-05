<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>STT Terpadu Nurul Fikri</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

        <!-- Custom style from this template -->
        <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/assets/logo_sttnf.png') ?>" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">E - Learning Nurul Fikri</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo base_url("index.php/mahasiswa/index")?>">Mahasiswa</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo base_url("index.php/dosen/index")?>">Dosen</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo base_url("index.php/matakuliah/index")?>">Matakuliah</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url("index.php/login/logout")?>">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>