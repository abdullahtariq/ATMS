<?php

include '../common-sql.php';
session_start();
?>
<!doctype html>


<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<link rel="icon" type="ico" href="../favicon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    
    <meta name="description" content="">
    <meta name="author" content="WebThemez">
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
       <![endif]-->
       <!-- Libraries CSS -->
       <link rel="stylesheet" href="../css/bootstrap.min-3.css" />
       <link href="../fonts/font-awesome.min.css" rel="stylesheet"/>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css"/>
       <link rel="stylesheet" type="text/css" href="../css/datepicker.css">
       <!-- Custom CSS -->
       <link rel="stylesheet" type="text/css" href="../css/style.css">
   </head>

   <body>
    <header class="header">
        <div class="container">
		<a href="index.php"><img src="../logo.png"style="margin-top:10px;margin-bottom:10px;margin-left:5px;"title="ATRMS"alt="ATRMS"></a>
		
		<nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                  <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> 
               
			   <a href="#" class="navbar-brand scroll-top logo"><b>ATRMS</b></a>
            </div>
            <!--/.navbar-header-->
            <div id="main-nav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="mainNav">
                    <li class="active"><a href="#home" class="scroll-link">Home</a></li>
                    
                    <li><a href="index.php?act=hubsu" class="scroll-link"> Users</a></li>
                </ul>
                <ul class="nav navbar-nav right-nav" id="mainav">
                   
                    <li><a href='../logout.php' class="glyphicon glyphicon-log-out" data-toggle="tooltip" data-placement="bottom" title="Logout"> </a></li>
                </ul>
                
            </div>
            <!--/.navbar-collapse-->
        </nav>
        <!--/.navbar-->
    </div>
    <!--/.container-->
</header>
<!--/.header-->

<script type="text/javascript">
    
//     $(function () {
    
//   $('[data-toggle="tooltip"]').tooltip()
// })
</script>
