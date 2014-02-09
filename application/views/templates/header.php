<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Admin Home Page</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url(); ?>/assets/styles.css" rel="stylesheet" media="screen">
        <!-- Bootstrap-Switch -->
        <link href="<?php echo base_url(); ?>/bootstrap/css/bootstrap-switch.min.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo base_url(); ?>/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <!-- Morris Chart -->
        <link href="<?php echo base_url(); ?>/vendors/morris.css" rel="stylesheet">
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="<?php echo site_url('dashboard');?>">{ SUVI }</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><?php echo $full_name; ?><i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="<?php echo site_url('login/logout');?>">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li <?php if($page == 'dashboard') echo "class=\"active\"";?>>
                                <a href="<?php echo site_url('dashboard');?>">Dashboard</a>
                            </li>
                            <li <?php if($page == 'add') echo "class=\"active\"";?>>
                                <a href="<?php echo site_url('add');?>">Add Device</a>
                            </li>
                            <li <?php if($page == 'about') echo "class=\"active\"";?>>
                                <a href="<?php echo site_url('about');?>">About</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>

<div class="container-fluid">
    <div class="row-fluid">