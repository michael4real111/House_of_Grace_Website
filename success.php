<?php 
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    require_once 'sendemail.php';

    if (isset($_POST['submit'])){
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

        $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($_FILES["avatar"]["tmp_name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $profile_pic = "$target_dir$contact.$ext";
        move_uploaded_file($orig_file,$profile_pic);

        $orig_file = $_FILES["gidentification"]["tmp_name"];
        $ext = pathinfo($_FILES["gidentification"]["tmp_name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $g_identification = "$target_dir$gfname$contact.$ext";
        move_uploaded_file($orig_file,$g_identification);

        $orig_file = $_FILES["bidentification"]["tmp_name"];
        $ext = pathinfo($_FILES["bidentification"]["tmp_name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $b_identification = "$target_dir$bfname$contact.$ext";
        move_uploaded_file($orig_file,$b_identification);

        $orig_file = $_FILES["gbirthcert"]["tmp_name"];
        $ext = pathinfo($_FILES["gbirthcert"]["tmp_name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $g_birthcert = "$target_dir$glname$contact.$ext";
        move_uploaded_file($orig_file,$g_birthcert);

        $orig_file = $_FILES["bbirthcert"]["tmp_name"];
        $ext = pathinfo($_FILES["bbirthcert"]["tmp_name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $b_birthcert = "$target_dir$blname$contact.$ext";
        move_uploaded_file($orig_file,$b_birthcert);

        $orig_file = $_FILES["ministerslicence"]["tmp_name"];
        $ext = pathinfo($_FILES["ministerslicence"]["tmp_name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $ministerslicence = "$target_dir$gmname$contact.$ext";
        move_uploaded_file($orig_file,$ministerslicence);

        $orig_file = $_FILES["other"]["tmp_name"];
        $ext = pathinfo($_FILES["other"]["tmp_name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $other = "$target_dir$bmname$contact.$ext";
        move_uploaded_file($orig_file,$other);


        $isSuccess = $crud->insert($gfname,$gmname,$glname,$gdob,$gage,$gstatus,$goccupation,$gaddress,$gtown,$gparish,$gffname,
        $gfmname,$gflname,$bfname,$bmname,$blname,$bdob,$bage,$bstatus,$boccupation,$baddress,$btown,
        $bparish,$bffname,$bfmname,$bflname,$contact,$email,$profile_pic,$g_identification,$b_identification,
        $g_birthcert,$b_birthcert,$ministerslicence,$other);
        $gStatusName= $crud->getStatusById($gstatus);
        $bStatusName= $crud->getStatusById($bstatus);
        $gParishName= $crud->getParishById($gparish);
        $bParishName= $crud->getParishById($bparish);


        if($isSuccess){
            SendEmail::SendMail($email,'Wedding Details for House of Grace', 'You have successfully submitted your marriage details, we will contact soon');
            include 'includes/successmessage.php';
        }
        else{
            include 'includes/errormessage.php';

        }
    }
?>
    <br>
    <br>
    <br>
    <br>
    <h1 class = "text-center text-success" >Your Application was Submitted!</h1>


<!-- THIS WAS USING THE "POST" METHOD -->  

<img src="<?php echo $profile_pic; ?>" class ="rounded-circle" style="width: 20%; height: 20%"/>
            
            <br>
            <br>
            <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title"> 
                <p class="card-text"> Groom's Details</p>
                <?php echo $_POST['g_FirstName'] . " " . $_POST['g_MiddleName'] . " " . $_POST['g_LastName']; ?>
                </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $_POST['g_Occupation'];?></h6>

            <p class="card-text"> Date of Birth: 
                <?php echo  $_POST['g_Dob'];?></p>

            <p class="card-text"> Age: 
                <?php echo  $_POST['g_Age'];?></p>

            <p class="card-text"> Marital Status: 
                <?php echo  $gStatusName['marrital_status'];?></p>    
            
            <p class="card-text"> Address: 
                <?php echo  $_POST['g_Address'] . " , " . $_POST['g_Town'];?></p>

            <p class="card-text"> Parish: 
                <?php echo  $gParishName['parish_name'];?></p>
                
            <p class="card-text"> Father's name: 
                <?php echo $_POST['g_FatherFirstName'] . " " . $_POST['g_FatherMiddleName'] . " " . $_POST['g_FatherLastName']; ?></p>    
            </div>
            </div>
            <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title"> 
            <p class="card-text"> Bride's Details</p>
                <?php echo $_POST['b_FirstName'] . " " . $_POST['b_MiddleName'] . " " . $_POST['b_LastName']; ?>
                </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $_POST['b_Occupation'];?></h6>

            <p class="card-text"> Date of Birth: 
                <?php echo  $_POST['b_Dob'];?></p>

            <p class="card-text"> Age: 
                <?php echo  $_POST['b_Age'];?></p>

            <p class="card-text"> Marital Status: 
                <?php echo  $bStatusName['marrital_status'];?></p>    
            
            <p class="card-text"> Address: 
                <?php echo  $_POST['b_Address'] . " , " . $_POST['b_Town'];?></p>

            <p class="card-text"> Parish: 
                <?php echo  $bParishName['parish_name'];?></p>
            
            <p class="card-text"> Father's name: 
                <?php echo $_POST['b_FatherFirstName'] . " " . $_POST['b_FatherMiddleName'] . " " . $_POST['b_FatherLastName']; ?></p>    
            </div>
            </div>
            <div class="card" style="width: 18rem;">
            <div class="card-body">  
            <p class="card-text"> Contact Number: 
                <?php echo  $_POST['contactnumber'];?></p>

            <p class="card-text"> Email Address: 
                <?php echo  $_POST['Email1'];?></p>  
            </div>
            </div>
            <br>
            <img src="<?php echo $g_identification; ?>"style="width: 20%; height: 20%"/>
            <img src="<?php echo $b_identification; ?>"style="width: 20%; height: 20%"/><br>
            <img src="<?php echo $g_birthcert; ?>"style="width: 20%; height: 20%"/>
            <img src="<?php echo $b_birthcert; ?>"style="width: 20%; height: 20%"/><br>
            <img src="<?php echo $ministerslicence; ?>"style="width: 20%; height: 20%"/>
            <img src="<?php echo $other; ?>"style="width: 20%; height: 20%"/>


<br>
<br>
<a href ="index.php" class="btn btn-primary">Confirm</a>

    <br>
    <br>
    <br>
    <br>
      <br>
      <br>
      <br>
      <br>

<?php require_once 'includes/footer.php'?>