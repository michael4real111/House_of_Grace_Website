<?php 
    $title = 'Edit';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    $groomstatusresults =$crud->getGroomsStatus();
    $bridestatusresults =$crud->getBridesStatus();
    $groomparishresults =$crud->getGroomsParish();
    $brideparishresults =$crud->getBridesParish();
    
    if(!isset($_GET['coupleid'])){
       // echo "<h1 class ='text-danger'> Please check details </h1>"; 
       include 'includes/errormessage.php';
      
    }
    else{
        $id = $_GET['coupleid'];
        $result = $crud->getWeddingDetails($id);       
?>

    <h1 class = "text-center" >Edit Applicant</h1>
    <h2 class = "text-center" >Groom's Details</h2>
    <form method ="post" action = "editpost.php">
        <input type="hidden" name="coupleid" value="<?php echo $result['couple_id'] ?>" />
       
        <div class="form-group">
            <label for="g_FirstName">Groom's First Name</label>
            <input required type="text" class="form-control" value ="<?php echo $result['g_firstname'] ?>" id="g_FirstName" name ="g_FirstName">
            <small id="FNameHelp" class="form-text text-muted">Please enter groom's first name.</small>
        </div>

        <div class="form-group">
            <label for="g_MiddleName">Groom's Middle Name</label>
            <input required type="text" class="form-control" value ="<?php echo $result['g_middlename'] ?>" id="g_MiddleName" name ="g_MiddleName">
            <small id="MNameHelp" class="form-text text-muted">Please enter groom's middle name.</small>
        </div>

        <div class="form-group">
        <label for="g_LastName">Groom's Last Name</label>
            <input required type="text" class="form-control" value ="<?php echo $result['g_lastname'] ?>"id="g_LastName" name="g_LastName">
            <small id="LNameHelp" class="form-text text-muted">Please enter groom's last name.</small>
        </div>

        <div class="form-group">
            <label for="g_Dob">Groom's Date of Birth</label>
            <input required type="text" class="form-control" value ="<?php echo $result['g_dateofbirth'] ?>" id="g_Dob" name="g_Dob">
            <small id="dateofbirthHelp" class="form-text text-muted">Please enter groom's date of birth.</small>
        </div>

        <div class="form-group">
            <label for="g_Age">Groom's Age</label>
            <input required type="text" class="form-control" value ="<?php echo $result['g_age'] ?>" id="g_Age" name="g_Age">
            <small id="gageHelp" class="form-text text-muted">Please enter groom's current age.</small>
        </div>

        <div class="form-group">
            <label for="g_Status">Groom's Marrital Status / Condition</label>
            <select class="form-control" id="g_Status" name="g_Status">
            <?php while($r = $groomstatusresults->fetch(PDO::FETCH_ASSOC)){ ?>
                <option value ="<?php echo $r['status_id'] ?>"
                <?php if ($r['marrital_status'] == $result['marrital_status']) echo 'selected' ?>><?php echo $r['marrital_status'];?></option>
                <?php } ?>
    </select>
            <small id="gstatusHelp" class="form-text text-muted">Please select Marrital Status.</small>
            </div>   

        <div class="form-group">
            <label for="g_Occupation">Groom's Occupation</label>
            <input required type="text" class="form-control"value ="<?php echo $result['g_occupation'] ?>" id="g_Occupation" 
            aria-describedby="occHelp" placeholder="Enter Occupation (eg. College Student, Registered Nurse)" name="g_Occupation">
            <small id="emailHelp" class="form-text text-muted">Please enter groom's occupation.</small>
        </div>

        <div class="form-group">
        <label for="g_Address">Address</label>
            <input required type="text" class="form-control" value ="<?php echo $result['g_address'] ?>" id="g_Address" name="g_Address">
            <small id="AddressHelp" class="form-text text-muted">Please enter groom's street address including Lot # and Street Name.</small>
        </div>

        <div class="form-group">
        <label for="g_Town">Town</label>
            <input required type="text" class="form-control" value ="<?php echo $result['g_town'] ?>" id="g_Town" name="g_Town">
            <small id="TownHelp" class="form-text text-muted">Please enter groom's Town. PS If in St. Andrew or Kingston, please state (eg. Kgn 1, Kgn 6, Kgn 8).</small>
        </div>


        <div class="form-group">
            <label for="g_Parish">Parish</label>
            <select class="form-control" id="g_Parish" name="g_Parish">
            <?php while($r = $groomparishresults->fetch(PDO::FETCH_ASSOC)){ ?>
                <option value ="<?php echo $r['parish_id'] ?>"
                <?php if ($r['parish_name'] == $result['parish_name']) echo 'selected' ?>><?php echo $r['parish_name'];?></option>
                <?php } ?>
    </select>
            <small id="parishHelp" class="form-text text-muted">Please select Parish.</small>
        </div>

        <div class="form-group">
        <label for="g_FatherFirstName">Groom's Fathers First Name</label>
            <input required type="text" class="form-control" value ="<?php echo $result['g_father_fname'] ?>" id="g_FatherFirstName" name="g_FatherFirstName">
            <small id="LNameHelp" class="form-text text-muted">Please enter groom's fathers first name.</small>
        </div>

        <div class="form-group">
        <label for="g_FatherMiddleName">Groom's Fathers Middle Name</label>
            <input required type="text" class="form-control" value ="<?php echo $result['g_father_mname'] ?>" id="g_FatherMiddleName" name="g_FatherMiddleName">
            <small id="LNameHelp" class="form-text text-muted">Please enter groom's fathers middle name "IF ANY".IF NOT ENTER N/A.</small>
        </div>

        <div class="form-group">
        <label for="g_FatherLastName">Groom's Fathers Last Name</label>
            <input required type="text" class="form-control" value ="<?php echo $result['g_father_lname'] ?>" id="g_FatherLastName" name="g_FatherLastName">
            <small id="LNameHelp" class="form-text text-muted">Please enter groom's fathers last name.</small>
        </div>

        <br/>
        <br/>
        <br/>
        <br/>


        <h2 class = "text-center" >Bride's Details</h2>

        <div class="form-group">
            <label for="b_FirstName">Bride's First Name</label>
            <input required type="text" class="form-control" value ="<?php echo $result['b_firstname'] ?>" id="b_FirstName" name ="b_FirstName">
            <small id="FNameHelp" class="form-text text-muted">Please enter Bride's first name.</small>
        </div>

        <div class="form-group">
            <label for="b_MiddleName">Bride's Middle Name</label>
            <input required type="text" class="form-control" value ="<?php echo $result['b_middlename'] ?>" id="b_MiddleName" name ="b_MiddleName">
            <small id="FNameHelp" class="form-text text-muted">Please enter Bride's middle name.</small>
        </div>

        <div class="form-group">
        <label for="b_LastName">Bride's Last Name</label>
            <input required type="text" class="form-control" value ="<?php echo $result['b_lastname'] ?>" id="b_LastName" name="b_LastName">
            <small id="LNameHelp" class="form-text text-muted">Please enter Bride's last name.</small>
        </div>

        <div class="form-group">
            <label for="b_Dob">Bride's Date of Birth</label>
            <input required type="text" class="form-control" value ="<?php echo $result['b_dateofbirth'] ?>" id="b_Dob" name="b_Dob">
            <small id="dateofbirthHelp" class="form-text text-muted">Please enter Bride's date of birth.</small>
        </div>

        <div class="form-group">
            <label for="b_Age">Bride's Age</label>
            <input required type="text" class="form-control" value ="<?php echo $result['b_age'] ?>" id="b_Age" name="b_Age">
            <small id="gageHelp" class="form-text text-muted">Please enter Bride's current age.</small>
        </div>

        <div class="form-group">
            <label for="b_Status">Bride's Marrital Status / Condition</label>
            <select class="form-control" id="b_Status" name="b_Status">
            <?php while($r = $bridestatusresults->fetch(PDO::FETCH_ASSOC)){ ?>
                <option value ="<?php echo $r['status_id'] ?>"
                <?php if ($r['marrital_status'] == $result['marrital_status']) echo 'selected' ?>><?php echo $r['marrital_status'];?></option>
                <?php } ?>
       </select>
            <small id="bstatusHelp" class="form-text text-muted">Please select Marrital Status.</small>
        </div>

        <div class="form-group">
            <label for="b_Occupation">Bride's Occupation</label>
            <input required type="text" class="form-control" value ="<?php echo $result['b_occupation'] ?>" id="b_Occupation" 
            aria-describedby="occHelp" placeholder="Enter Occupation (eg. College Student, Registered Nurse)" name="b_Occupation">
            <small id="emailHelp" class="form-text text-muted">Please enter bride's occupation.</small>
        </div>

        <div class="form-group">
        <label for="b_Address">Address</label>
            <input required type="text" class="form-control" value ="<?php echo $result['b_address'] ?>" id="b_Address" name="b_Address">
            <small id="AddressHelp" class="form-text text-muted">Please enter Bride's street address including Lot # and Street Name.</small>
        </div>

        <div class="form-group">
        <label for="b_Town">Town</label>
            <input required type="text" class="form-control" value ="<?php echo $result['b_town'] ?>" id="b_Town" name="b_Town">
            <small id="TownHelp" class="form-text text-muted">Please enter bride's Town. PS If in St. Andrew or Kingston, please state (eg. Kgn 1, Kgn 6, Kgn 8).</small>
        </div>


        <div class="form-group">
            <label for="b_Parish">Parish</label>
            <select class="form-control" id="b_Parish" name="b_Parish">
            <?php while($r = $brideparishresults->fetch(PDO::FETCH_ASSOC)){ ?>
                <option value ="<?php echo $r['parish_id'] ?>"
                <?php if ($r['parish_name'] == $result['parish_name']) echo 'selected' ?>>
                    <?php echo $r['parish_name'];?></option>
                <?php } ?>
    </select>
            <small id="parishHelp" class="form-text text-muted">Please select Parish.</small>
        </div>

        <div class="form-group">
        <label for="b_FatherFirstName">Bride's Fathers First Name</label>
            <input required type="text" class="form-control" value ="<?php echo $result['b_father_fname'] ?>" id="b_FatherFirstName" name="b_FatherFirstName">
            <small id="LNameHelp" class="form-text text-muted">Please enter Bride's fathers first name.</small>
        </div>

        <div class="form-group">
        <label for="b_FatherMiddleName">Groom's Fathers Middle Name</label>
            <input required type="text" class="form-control" value ="<?php echo $result['b_father_mname'] ?>" id="b_FatherMiddleName" name="b_FatherMiddleName">
            <small id="LNameHelp" class="form-text text-muted">Please enter bride's fathers middle name "IF ANY". IF NOT ENTER N/A.</small>
        </div>

        <div class="form-group">
        <label for="b_FatherLastName">Bride's Fathers Last Name</label>
            <input required type="text" class="form-control" value ="<?php echo $result['b_father_lname'] ?>" id="b_FatherLastName" name="b_FatherLastName">
            <small id="LNameHelp" class="form-text text-muted">Please enter bride's fathers last name.</small>

        <div class="form-group">
            <label for="Email1">Email address</label>
            <input type="email" class="form-control" value ="<?php echo $result['email'] ?> "id="Email1" 
            aria-describedby="emailHelp" placeholder="Enter email" name="Email1">
            <small id="emailHelp" class="form-text text-muted">Please enter your email address.</small>
        </div>

        <div class="form-group">
            <label for="contactnumber">Contact Number</label>
            <input type="text" class="form-control" value ="<?php echo $result['contactnumber'] ?>" id="contactnumber" name="contactnumber">
            <small id="contactHelp" class="form-text text-muted">Please enter your contact number.</small>
        </div>
        <br>

        <a href ="viewrecords.php" class="btn btn-default">Back to List</a>
        <button type="submit" name = "submit" class="btn btn-success btn">Save Changes</button>
        <br>
      <br>
      <br>
      <br>
      <br>
    </form>

    <?php } ?>
       <br>
       <br>
       <br>

<?php require_once 'includes/footer.php'; ?>