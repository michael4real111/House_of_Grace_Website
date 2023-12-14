<?php 
   
    require_once 'db/conn.php';

    if (isset($_POST['submit'])){

        $id = $_POST['coupleid'];
        $gfname = $_POST['g_FirstName'];
        $gmname = $_POST['g_MiddleName'];
        $glname = $_POST['g_LastName'];
        $gdob = $_POST['g_Dob'];
        $gage = $_POST['g_Age'];
        $gstatus = $_POST['g_Status'];
        $goccupation = $_POST['g_Occupation'];
        $gaddress = $_POST['g_Address'];
        $gtown = $_POST['g_Town'];
        $gparish = $_POST['g_Parish'];
        $gffname = $_POST['g_FatherFirstName'];
        $gfmname = $_POST['g_FatherMiddleName'];
        $gflname = $_POST['g_FatherLastName'];
        $bfname = $_POST['b_FirstName'];
        $bmname = $_POST['b_MiddleName'];
        $blname = $_POST['b_LastName'];
        $bdob = $_POST['b_Dob'];
        $bage = $_POST['b_Age'];
        $bstatus = $_POST['b_Status'];
        $boccupation = $_POST['b_Occupation'];
        $baddress = $_POST['b_Address'];
        $btown = $_POST['b_Town'];
        $bparish = $_POST['b_Parish'];
        $bffname = $_POST['b_FatherFirstName'];
        $bfmname = $_POST['b_FatherMiddleName'];
        $bflname = $_POST['b_FatherLastName'];
        $contact = $_POST['contactnumber'];
        $email = $_POST['Email1'];

        
        $result =$crud->edit($id,$gfname,$gmname,$glname,$gdob,$gage,$gstatus,$goccupation,$gaddress,$gtown,$gparish,$gffname,
        $gfmname,$gflname,$bfname,$bmname,$blname,$bdob,$bage,$bstatus,$boccupation,$baddress,$btown,
        $bparish,$bffname,$bfmname,$bflname,$contact,$email);

        if($result){
            header("Location: viewrecords.php");
    }else{
        include 'includes/errormessage.php';
    }
    }
    else{
        include 'includes/errormessage.php';
    }
?>


