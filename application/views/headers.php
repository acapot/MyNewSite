<!DOCTYPE html>
<html lang="en">
<? error_reporting(E_ALL); ?>
<head>
	<meta charset="utf-8">
	<title>This is my controller home</title>   
    <script src="<? echo base_url(); ?>assets/js/lib/jquery-1.11.1.min.js"></script>
    <script src="<? echo base_url(); ?>assets/js/lib/underscore-min.js"></script>
    <script src="<? echo base_url(); ?>assets/js/lib/backbone-min.js"></script>
    <script src="<? echo base_url(); ?>assets/js/lib/handlebars.js"></script> 
    <script src="<? echo base_url(); ?>assets/js/lib/moviedata.js"></script>
    <script src="<? echo base_url(); ?>assets/js/lib/bootstrap.js"></script> 
    <script src="<? echo base_url(); ?>assets/js/startBackbone.js"></script>

    
    <script src="<? echo base_url(); ?>assets/js/models/modelPortfolio.js"></script>
    <script src="<? echo base_url(); ?>assets/js/models/modelAdmin.js"></script>
    <script src="<? echo base_url(); ?>assets/js/collections/collectionsPortfolio.js"></script>
    <script src="<? echo base_url(); ?>assets/js/collections/collectionsAdmin.js"></script>
    <script src="<? echo base_url(); ?>assets/js/views/templates/viewModalInsert.js"></script>
    <script src="<? echo base_url(); ?>assets/js/views/admin/viewAdmin.js"></script>
    <script src="<? echo base_url(); ?>assets/js/views/admin/viewAdminRow.js"></script>
    <script src="<? echo base_url(); ?>assets/js/views/portfolio/viewPortfolio.js"></script>
    <script src="<? echo base_url(); ?>assets/js/views/index/viewIndex.js"></script>
    
    <script src="<? echo base_url(); ?>assets/js/routers/app.js"></script>
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/bootstrap.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<? echo base_url(); ?>assets/css/portfolio.css">
</head>
<body>
    <nav>
            <ul class="nav nav-pills" >
                <li><a href="<?= base_url() ?>">Hem</a></li>
                <li><a href="<?= base_url() ?>portfolio">Portfolio</a></li>
                <li><a href="<?= base_url() ?>admin/adminPortfolio/#/app/adminPortfolio">Testa Admin</a></li>
            </ul>
            <hr/>
    </nav>