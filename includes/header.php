<?php
include_once 'includes/session.php'?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    
    <link rel="stylesheet" hrel= "css/site.css"/>

    <title>House of Grace - <?php echo $title ?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #6f42c1;">
      <a class="navbar-brand" href="welcomepage.php">
      <img src="img/HG.png" width="40" height="30" class="d-inline-block align-top" alt="">ouse of Grace</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
            <a class="nav-item nav-link active" href="index.php">Application Form <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="viewrecords.php">View Wedding Applicatons</a>
        </div>
      <div class="navbar-nav ml-auto">
        <?php 
          if (!isset($_SESSION['userid'])){ ?>
            <a class="nav-item nav-link " href="login.php">Login <span class="sr-only">(current)</span></a>

            <?php }else{ ?>
              <a class="nav-item nav-link active" href="#"><span> Hello <?php echo $_SESSION['username'] ?>!</span> <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
              <?php } ?>
      </div>
      </div>
    </nav>
  <div class = "container">
    <br/>