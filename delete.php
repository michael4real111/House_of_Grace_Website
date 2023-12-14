<?php 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    
    if(!isset($_GET['coupleid'])){
        echo "<h1 class ='text-danger'> Please check details </h1>"; 
    }
    else{
        $id = $_GET['coupleid'];

        $result = $crud->deleteApplicant($id);       
    }
        if($result){
            header("Location: viewrecords.php");
    }else{
        include 'includes/errormessage.php';
    }
?>