<?php 
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

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

        $isSuccess = $crud->insert($gfname,$gmname,$glname,$gdob,$gage,$gstatus,$goccupation,$gaddress,$gtown,$gparish,$gffname,
        $gfmname,$gflname,$bfname,$bmname,$blname,$bdob,$bage,$bstatus,$boccupation,$baddress,$btown,
        $bparish,$bffname,$bfmname,$bflname,$contact,$email);

        if($isSuccess){
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
            <div class="card">
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
                <?php echo  $_POST['g_Status'];?></p>    
            
            <p class="card-text"> Address: 
                <?php echo  $_POST['g_Address'] . " , " . $_POST['g_Town'];?></p>

            <p class="card-text"> Parish: 
                <?php echo  $_POST['g_Parish'];?></p>
                
            <p class="card-text"> Father's name: 
                <?php echo $_POST['g_FatherFirstName'] . " " . $_POST['g_FatherMiddleName'] . " " . $_POST['g_FatherLastName']; ?></p>    
            </div>
            </div>
            <div class="card">
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
                <?php echo  $_POST['b_Status'];?></p>    
            
            <p class="card-text"> Address: 
                <?php echo  $_POST['b_Address'] . " , " . $_POST['b_Town'];?></p>

            <p class="card-text"> Parish: 
                <?php echo  $_POST['b_Parish'];?></p>
                
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
<button type="submit" name = "submit" class="btn btn-primary">Confirm</button>
    <br>
    <br>
    <br>

<?php require_once 'includes/footer.php'?>