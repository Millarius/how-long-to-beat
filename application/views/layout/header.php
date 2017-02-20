<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    ?>
    <html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/scripts.js">
    </head>
    <body>
    <nav class="navbar navbar-default">
        <div class="container">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url(); ?>index.php/home">Home</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/search">Search</a></li>
                <li><a href="#">Forums</a></li>
                <li><a href="#">Stats</a></li>
                <li><a href="#">Submit</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/login"><?php echo isset($username) ? $username : 'Login'; ?></a></li>
            </ul>
        </div>
    </nav>
    <div id="content">

