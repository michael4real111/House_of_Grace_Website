<?php 
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    require_once 'sendemail.php';

    if (isset($_POST['submit'])){
        $efname = $_POST['e_FirstName'];
        $elname = $_POST['e_LastName'];
        $doe = $_POST['Doe'];
        $toe = $_POST['Toe'];
        $eamount = $_POST['e_Amount'];
        $etype = $_POST['e_Type'];
        $evenue = $_POST['e_Venue'];
        $contact = $_POST['contactnumber'];
        $email = $_POST['Email1'];

      //  $orig_file = $_FILES["avatar"]["tmp_name"];
      //  $ext = pathinfo($_FILES["avatar"]["tmp_name"], PATHINFO_EXTENSION);
      //  $target_dir = 'uploads/';
      //  $profile_pic = "$target_dir$contact.$ext";
      //  move_uploaded_file($orig_file,$profile_pic);

        


        $isSuccess = $crud->insertevent($efname,$elname,$doe,$toe,$eamount,$etype,$evenue,$contact,$email);
        $venueName= $crud->getvenueById($evenue);


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

<!--<img src="<?php //echo $profile_pic; ?>" class ="rounded-circle" style="width: 20%; height: 20%"/> -->
            
            <br>
            <br>
            <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title"> 
                <p class="card-text"> Applicant's Details</p>
                <?php echo $_POST['e_FirstName'] . " " . $_POST['e_LastName']; ?>
                </h5>

            <p class="card-text"> Date of Event: 
                <?php echo  $_POST['Doe'];?></p>

            <p class="card-text"> Time: 
                <?php echo  $_POST['Toe'];?></p>

            <p class="card-text"> Amount of Persons attending: 
                <?php echo  $_POST['e_Amount'];?></p>    

            <p class="card-text"> Venue Location: 
                <?php echo  $venueName['name'];?></p>    
            
            <p class="card-text"> Type of Event: 
                <?php echo  $_POST['e_Type'];?></p>

            <p class="card-text"> Parish: 
                <?php echo  $bParishName['parish_name'];?></p>
            
            <p class="card-text"> Father's name: 
                <?php echo $_POST['b_FatherFirstName'] . " " . $_POST['b_FatherMiddleName'] . " " . $_POST['b_FatherLastName']; ?></p>    
             
            <p class="card-text"> Contact Number: 
                <?php echo  $_POST['contactnumber'];?></p>

            <p class="card-text"> Email Address: 
                <?php echo  $_POST['Email1'];?></p>  
            </div>
            </div>
            <br>


<br>
<br>
<a href ="welcomepage.php" class="btn btn-primary">Continue</a>

    <br>
    <br>
    <br>
    <br>
      <br>
      <br>
      <br>
      <br>

<?php require_once 'includes/footer.php'?>