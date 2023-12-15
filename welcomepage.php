<?php 
    $title = 'Welcome';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

?>
<img src="img/logo.png" class ="rounded mx-auto d-block" style="width: 35%; height: 35%"/>
<h1 class = "text-center" >Welcome to House of Grace</h1>
    <br/>
    <br/>
<a href ="viewrecords.php" class="btn btn-primary btn-block" style="background-color: #6f42c1;">Login</a>


<?php require_once 'includes/footer.php'; ?>