<?php 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    
    if(!isset($_GET['coupleid'])){
        include 'includes/errormessage.php';
        header("Location:viewrecords.php");
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