<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SLIIT | Coursemash</title>

    <!-- Bootstrap Core CSS -->
    <link href="views/header/css/bootstrap.min.css" rel="stylesheet">
	<link href="views/about/index.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="views/header/css/simple-sidebar.css" rel="stylesheet">
    <link href="views/header/powerange.css" rel="stylesheet">
    <script type="text/javascript" src="views/header/js/jquery.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       	<label id="logo">Coursemash<sup>BETA</sup></logo>
                    </a>
                </li>
                <li>
                    <a href="<?php echo URL?>answers">Answers</a>
                </li>
                <li>
                    <a href="<?php echo URL?>upload">Upload</a>
                </li>
                <li>
                    <a href="#">Past papers</a>
                </li>
                <li>
                    <a href="<?php echo URL?>profile">Profile</a>
                </li>
                <li>
                    <a href="<?php echo URL?>about">About</a>
                </li>
                <li>
                    <a href="<?php echo URL ?>index/logOut">Log out</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid" style="float:right">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        
        <!-- /#page-content-wrapper -->

    
    <!-- /#wrapper -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- jQuery -->
    <script src="views/header/js/jquery.js"></script>
        <script src="views/header/powerange.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="views/header/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>