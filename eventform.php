<?php 
    $title = 'Event';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    $eventsvenueresults =$crud -> getEventsVenue();
?>

    <h1 class = "text-center" >House of Grace Event Registration Form</h1>
    <br/>
    <br/>
    <h2 class = "text-center" >Please enter event details</h2>
    <form  class="row g-3" method ="post" action = "successevent.php" enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="e_FirstName">First Name</label>
            <input required type="text" class="form-control" id="e_FirstName" name ="e_FirstName">
            <small id="FNameHelp" class="form-text text-muted">Please enter groom's first name.</small>
        </div>

        <div class="col-md-6">
        <label for="e_LastName">Last Name</label>
            <input required type="text" class="form-control" id="e_LastName" name="e_LastName">
            <small id="LNameHelp" class="form-text text-muted">Please enter groom's last name.</small>
        </div>

        <div class="col-md-4">
            <label for="Doe"><br>Event Date of Event</label>
            <input required type="text" class="form-control" id="Doe" name="Doe">
            <small id="dateofeventHelp" class="form-text text-muted">Please enter event date.</small>
        </div>

        <div class="col-md-3">
            <label for="Toe"><br>Event time</label>
            <input required type="text" class="form-control" id="Toe" name="Toe">
            <small id="TimeofeventHelp" class="form-text text-muted">Please enter time of event event.</small>
        </div>

        <div class="col-md-3">
            <label for="e_Amount"><br>Amount of Guest Extected</label>
            <input required type="text" class="form-control" id="e_Amount" name="e_Amount">
            <small id="gageHelp" class="form-text text-muted">Please enter the amount of guest.</small>
        </div>

        <div class="col-md-6">
            <label for="e_Type"><br>Type of event</label>
            <input required type="text" class="form-control" id="e_Type" name="e_Type">
            <small id="gageHelp" class="form-text text-muted">Please enter type of event(eg. Birthday party, Reception, Dinner, Staff Party, etc).</small>
        </div>


        <div class="col-md-6">
            <label for="e_Venue"><br>Rental Space</label>
            <select class="form-control" id="e_Venue" name="e_Venue">
            <?php while($r = $eventsvenueresults->fetch(PDO::FETCH_ASSOC)){ ?>
                <option value ="<?php echo $r['venue_id'] ?>"><?php echo $r['name'];?></option>
                <?php } ?>
         </select>
        
            <small id="gstatusHelp" class="form-text text-muted">Please select rental space.</small>
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

        <div class="col-12">
            <label for="e_service"><br>Additional services needed</label>
            <input required type="text" class="form-control" id="e_service" name="e_service">
            <small id="gageHelp" class="form-text text-muted">Please enter type of event(eg. Birthday party, Reception, Dinner, Staff Party, etc).</small>
        </div>
        
        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
            <label class="form-check-label" for="invalidCheck3">
            I, hereby agree with Terms and Conditions.<br><br>
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