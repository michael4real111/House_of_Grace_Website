<?php 
    $title = 'Index';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    $groomstatusresults =$crud -> getGroomsStatus();
    $bridestatusresults =$crud -> getBridesStatus();
    $groomparishresults =$crud -> getGroomsParish();
    $brideparishresults =$crud -> getBridesParish();
?>

    <h1 class = "text-center" >House of Grace Registration Form</h1>
    <br/>
    <br/>
    <h2 class = "text-center" >Please enter Groom's details</h2>
    <form  class="row g-3" method ="post" action = "success.php" enctype="multipart/form-data">
        <div class="col-md-4">
            <label for="g_FirstName">Groom's First Name</label>
            <input required type="text" class="form-control" id="g_FirstName" name ="g_FirstName">
            <small id="FNameHelp" class="form-text text-muted">Please enter groom's first name.</small>
        </div>

        <div class="col-md-4">
            <label for="g_MiddleName">Groom's Middle Name</label>
            <input required type="text" class="form-control" id="g_MiddleName" name ="g_MiddleName">
            <small id="MNameHelp" class="form-text text-muted">Please enter groom's middle name.</small>
        </div>

        <div class="col-md-4">
        <label for="g_LastName">Groom's Last Name</label>
            <input required type="text" class="form-control" id="g_LastName" name="g_LastName">
            <small id="LNameHelp" class="form-text text-muted">Please enter groom's last name.</small>
        </div>

        <div class="col-md-4">
            <label for="g_Dob"><br>Groom's Date of Birth</label>
            <input required type="text" class="form-control" id="g_Dob" name="g_Dob">
            <small id="dateofbirthHelp" class="form-text text-muted">Please enter groom's date of birth.</small>
        </div>

        <div class="col-md-2">
            <label for="g_Age"><br>Groom's Age</label>
            <input required type="text" class="form-control" id="g_Age" name="g_Age">
            <small id="gageHelp" class="form-text text-muted">Please enter groom's current age.</small>
        </div>

        <div class="col-md-6">
            <label for="g_Status"><br>Groom's Marrital Status / Condition</label>
            <select class="form-control" id="g_Status" name="g_Status">
            <?php while($r = $groomstatusresults->fetch(PDO::FETCH_ASSOC)){ ?>
                <option value ="<?php echo $r['status_id'] ?>"><?php echo $r['marrital_status'];?></option>
                <?php } ?>
         </select>
        
            <small id="gstatusHelp" class="form-text text-muted">Please select Marrital Status.</small>
            </div>
        <div class="col-12">
            <label for="g_Occupation"><br>Groom's Occupation</label>
            <input required type="text" class="form-control" id="g_Occupation" 
            aria-describedby="occHelp" placeholder="Enter Occupation (eg. College Student, Registered Nurse)" name="g_Occupation">
            <small id="emailHelp" class="form-text text-muted">Please enter groom's occupation.</small>
        </div>

        <div class="col-12">
        <label for="g_Address"><br>Address</label>
            <input required type="text" class="form-control" id="g_Address" name="g_Address">
            <small id="AddressHelp" class="form-text text-muted">Please enter groom's street address including Lot # and Street Name.</small>
        </div>

        <div class="col-md-6">
        <label for="g_Town">Town</label>
            <input required type="text" class="form-control" id="g_Town" name="g_Town">
            <small id="TownHelp" class="form-text text-muted">Please enter groom's Town. PS If in St. Andrew or Kingston, please state (eg. Kgn 1, Kgn 6, Kgn 8).</small>
        </div>


        <div class="col-md-6">
            <label for="Parish">Parish</label>
            <select class="form-control" id="g_Parish" name="g_Parish">
            <?php while($r = $groomparishresults->fetch(PDO::FETCH_ASSOC)){ ?>
                <option value ="<?php echo $r['parish_id'] ?>"><?php echo $r['parish_name'];?></option>
                <?php } ?>
    </select>
            <small id="parishHelp" class="form-text text-muted">Please select Parish.</small>
        </div>

        <div class="col-md-4">
        <label for="g_FatherFirstName"><br>Groom's Fathers First Name</label>
            <input required type="text" class="form-control" id="g_FatherFirstName" name="g_FatherFirstName">
            <small id="LNameHelp" class="form-text text-muted">Please enter groom's fathers first name.</small>
        </div>

        <div class="col-md-4">
        <label for="g_FatherMiddleName"><br>Groom's Fathers Middle Name</label>
            <input required type="text" class="form-control" id="g_FatherMiddleName" name="g_FatherMiddleName">
            <small id="LNameHelp" class="form-text text-muted">Please enter groom's fathers middle name "IF ANY".</small>
        </div>

        <div class="col-md-4">
        <label for="g_FatherLastName"><br>Groom's Fathers Last Name</label>
            <input required type="text" class="form-control" id="g_FatherLastName" name="g_FatherLastName">
            <small id="LNameHelp" class="form-text text-muted">Please enter groom's fathers last name.</small>
        </div>

        <h2 class = "container text-center" ><br><br>Please enter Bride's details<br><br></h2>
       
        <div class="col-md-4">
            <label for="b_FirstName">Bride's First Name</label>
            <input required type="text" class="form-control" id="b_FirstName" name ="b_FirstName">
            <small id="FNameHelp" class="form-text text-muted">Please enter Bride's first name.</small>
        </div>

        <div class="col-md-4">
            <label for="b_MiddleName">Bride's Middle Name</label>
            <input required type="text" class="form-control" id="b_MiddleName" name ="b_MiddleName">
            <small id="FNameHelp" class="form-text text-muted">Please enter Bride's middle name.</small>
        </div>

        <div class="col-md-4">
        <label for="b_LastName">Bride's Last Name</label>
            <input required type="text" class="form-control" id="b_LastName" name="b_LastName">
            <small id="LNameHelp" class="form-text text-muted">Please enter Bride's last name.</small>
        </div>

        <div class="col-md-6">
            <label for="b_Dob"><br>Bride's Date of Birth</label>
            <input required type="text" class="form-control" id="b_Dob" name="b_Dob">
            <small id="dateofbirthHelp" class="form-text text-muted">Please enter Bride's date of birth.</small>
        </div>

        <div class="col-md-2">
            <label for="b_Age"><br>Bride's Age</label>
            <input required type="text" class="form-control" id="b_Age" name="b_Age">
            <small id="gageHelp" class="form-text text-muted">Please enter Bride's current age.</small>
        </div>

        <div class="col-md-4">
            <label for="b_Status"><br>Bride's Marrital Status / Condition</label>
            <select class="form-control" id="b_Status" name="b_Status">
            <?php while($r = $bridestatusresults->fetch(PDO::FETCH_ASSOC)){ ?>
                <option value ="<?php echo $r['status_id'] ?>"><?php echo $r['marrital_status'];?></option>
                <?php } ?>
    </select>
            <small id="bstatusHelp" class="form-text text-muted">Please select Marrital Status.</small>
            </div>
        <div class="col-12">
            <label for="b_Occupation"><br>Bride's Occupation</label>
            <input required type="text" class="form-control" id="b_Occupation" 
            aria-describedby="occHelp" placeholder="Enter Occupation (eg. College Student, Registered Nurse)" name="b_Occupation">
            <small id="emailHelp" class="form-text text-muted">Please enter bride's occupation.</small>
        </div>

        <div class="col-12">
        <label for="b_Address"><br>Address</label>
            <input required type="text" class="form-control" id="b_Address" name="b_Address">
            <small id="AddressHelp" class="form-text text-muted">Please enter Bride's street address including Lot # and Street Name.</small>
        </div>

        <div class="col-md-6">
        <label for="b_Town">Town</label>
            <input required type="text" class="form-control" id="b_Town" name="b_Town">
            <small id="TownHelp" class="form-text text-muted">Please enter bride's Town. PS If in St. Andrew or Kingston, please state (eg. Kgn 1, Kgn 6, Kgn 8).</small>
        </div>


        <div class="col-md-6">
            <label for="Parish">Parish</label>
            <select class="form-control" id="b_Parish" name="b_Parish">
            <?php while($r = $brideparishresults->fetch(PDO::FETCH_ASSOC)){ ?>
                <option value ="<?php echo $r['parish_id'] ?>"><?php echo $r['parish_name'];?></option>
                <?php } ?>
    </select>
            <small id="parishHelp" class="form-text text-muted">Please select Parish.</small>
        </div>

        <div class="col-md-4">
        <label for="b_FatherFirstName"><br>Bride's Fathers First Name</label>
            <input required type="text" class="form-control" id="b_FatherFirstName" name="b_FatherFirstName">
            <small id="LNameHelp" class="form-text text-muted">Please enter Bride's fathers first name.</small>
        </div>

        <div class="col-md-4">
        <label for="b_FatherMiddleName"><br>Bride's Fathers Middle Name</label>
            <input required type="text" class="form-control" id="b_FatherMiddleName" name="b_FatherMiddleName">
            <small id="LNameHelp" class="form-text text-muted">Please enter bride's fathers middle name "IF ANY".</small>
        </div>

        <div class="col-md-4">
        <label for="b_FatherLastName"><br>Bride's Fathers Last Name</label>
            <input required type="text" class="form-control" id="b_FatherLastName" name="b_FatherLastName">
            <small id="LNameHelp" class="form-text text-muted">Please enter bride's fathers last name.</small>
        </div>
        

        <div class="col-md-8">
            <label for="Email1"><br><br>Email address</label>
            <input required type="email" class="form-control" id="Email1" 
            aria-describedby="emailHelp" placeholder="Enter email" name="Email1">
            <small id="emailHelp" class="form-text text-muted">Please enter your email address.</small>
        </div>

        <div class="col-md-4">
            <label for="contactnumber"><br><br>Contact Number</label>
            <input required type="text" class="form-control" id="contactnumber" name="contactnumber">
            <small id="contactHelp" class="form-text text-muted">Please enter your contact number.</small>
        </div> 
       <!-- </form>

        <form  method ="post" action = "success.php" enctype="multipart/form-data"> -->
        
        <div class="col-12">  
            
            <label for="avatar" class ="form-lable"><br>Profile Picture</label>  
            <input type="file" accept="image/*" class="form-control" id="avatar" name="avatar">
             <small id="avatar" class="form-text text-danger">Please upload a Profile Picture.<br></small>
        </div>
        
        <div class="col-md-4">  
            <label for="gidentification" class ="form-lable"><br>Groom's ID</label> 
            <input type="file" accept="image/*" class="form-control" id="gidentification" name="gidentification">
             <small id="gidentification" class="form-text text-danger">Please upload a government isssued ID for GROOM (Driver's Licence, National ID, Passport, Voter's ID).</small>
             
        </div>
        <div class="col-md-4">
        <label for="bidentification" class ="form-lable"><br>Bride's ID</label>   
            <input type="file" accept="image/*" class="form-control" id="bidentification" name="bidentification">
             <small id="bidentification" class="form-text text-danger">Please upload a government isssued ID for BRIDE (Driver's Licence, National ID, Passport, Voter's ID).</small>
             
        </div>
        <div class="col-md-4">
        <label for="gbirthcert" class ="form-lable"><br>Groom's Birth Certificate</label> 
            <input type="file" accept="image/*" class="form-control" id="gbirthcert" name="gbirthcert">
             <small id="gbirthcert" class="form-text text-danger">Please upload Groom's Birth Certificate.</small>
             
        </div>
        <div class="col-md-4">  
        <label for="bbirthcert" class ="form-lable"><br>Bride's Birth Certificate</label> 
            <input type="file" accept="image/*" class="form-control" id="bbirthcert" name="bbirthcert">
             <small id="bbirthcert" class="form-text text-danger">Please upload Bride's Birth Certificate.</small>
             <br><br>
        </div>
        <div class="col-md-4"> 
        <label for="ministerslicence" class ="form-lable"><br>Minister's Licence</label> 
            <input type="file" accept="image/*" class="form-control" id="ministerslicence" name="ministerslicence">
             <small id="ministerslicence" class="form-text text-danger">Please upload the Minister's Licence.</small>
             <br><br>
        </div>
        <div class="col-md-4"> 
        <label for="other" class ="form-lable"><br>Other Supporting Docuemnts</label> 
            <input type="file" accept="image/*" class="form-control" id="other" name="other">
             <small id="other" class="form-text text-danger">Please upload any addition documents (Final Divorce Decree / Deed Poll / Previous Marriage & Death Certificate if Widow/Widower).</small>
             <br>
        </div>
        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
            <label class="form-check-label" for="invalidCheck3">
            I, hereby declare and affirm that the information provided by me in the above form is true, accurate, and complete to the best of my<br>
            knowledge. I understand that any false statements or omissions may result in the rejection of my application or other adverse<br>
            consequences.<br><br>

            I acknowledge that the information submitted in this form may be used by House of Grace for the purposes specified in the form and for<br> 
            internal business operations. I agree to notify House of grace promptly of any changes to the information provided in the form.<br><br>

            I understand that the information submitted is subject to the terms and conditions outlined by House of Grace, and I agree to comply<br> 
            with these terms.<br><br>

            I further acknowledge that House of Grace may use the information provided for processing and communicating with me regarding the<br>
            matter referenced in the form.<br><br>

            By selecting the box, I affirm my understanding of and agreement to the above statements.<br>
            </label>
            </div>
        </div>

        <button type="submit" name = "submit" class="btn btn-primary btn-block" style="background-color: #6f42c1;">Submit</button>
      <br> 
</form>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>  
       

<?php require_once 'includes/footer.php'; ?>