<?php 
    $title = 'View Record';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    if(!isset($_GET['coupleid'])){

        include 'includes/errormessage.php'; 
    }
    else{

        $id = $_GET['coupleid'];
        $result = $crud->getWeddingDetails($id);
   
?>

<img src="<?php echo empty($result['avatar_path']) ? "uploads/blank.png" : $result['avatar_path'] ; ?>" 
class ="rounded-cicle" style="width: 20%; height: 20%"/>

            <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title"> <br/>
                <p class="card-text"> Groom's Details</p>
                <?php echo $result['g_firstname'] . " " . $result['g_middlename'] . " " . $result['g_lastname']; ?>
                </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $result['g_occupation'];?></h6>

            <p class="card-text"> Date of Birth: 
                <?php echo  $result['g_dateofbirth'];?></p>

            <p class="card-text"> Age: 
                <?php echo  $result['g_age'];?></p>

            <p class="card-text"> Marital Status: 
                <?php echo  $result['marrital_status'];?></p>    
            
            <p class="card-text"> Address: 
                <?php echo  $result['g_address'] . " , " . $result['g_town'];?></p>

            <p class="card-text"> Parish: 
                <?php echo  $result['parish_name'];?></p>
                
            <p class="card-text"> Father's name: 
                <?php echo $result['g_father_fname'] . " " . $result['g_father_mname'] . " " . $result['g_father_lname']; ?></p>    
            </div>
            </div>
            <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title"><br/>
            <p class="card-text"> Bride's Details</p>
                <?php echo $result['b_firstname'] . " " . $result['b_middlename'] . " " . $result['b_lastname']; ?>
                </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $result['b_occupation'];?></h6>

            <p class="card-text"> Date of Birth: 
                <?php echo  $result['b_dateofbirth'];?></p>

            <p class="card-text"> Age: 
                <?php echo  $result['b_age'];?></p>

            <p class="card-text"> Marital Status: 
                <?php echo  $result['marrital_status'];?></p>    
            
            <p class="card-text"> Address: 
                <?php echo  $result['b_address'] . " , " . $result['b_town'];?></p>

            <p class="card-text"> Parish: 
                <?php echo  $result['parish_name'];?></p>
                
            <p class="card-text"> Father's name: 
                <?php echo $result['b_father_fname'] . " " . $result['b_father_mname'] . " " . $result['b_father_lname']; ?></p>    
            </div>
            </div>
            
                <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title"><br/>
            <p class="card-text"> Contact Number: 
                <?php echo  $result['contactnumber'];?></p>

            <p class="card-text"> Email Address: 
                <?php echo  $result['email'];?></p>  
            </div>
            </div>
            <br/>
            <img src="<?php echo empty($result['g_identification']) ? "uploads/blank.png" : $result['g_identification'] ; ?>" 
            style="width: 20%; height: 20%"/>
            <img src="<?php echo empty($result['b_identification']) ? "uploads/blank.png" : $result['b_identification'] ; ?>" 
            style="width: 20%; height: 20%"/><br>
            <img src="<?php echo empty($result['g_birthcert']) ? "uploads/blank.png" : $result['g_birthcert'] ; ?>" 
            style="width: 20%; height: 20%"/>
            <img src="<?php echo empty($result['b_birthcert']) ? "uploads/blank.png" : $result['b_birthcert'] ; ?>" 
            style="width: 20%; height: 20%"/><br>
            <img src="<?php echo empty($result['ministers_licence']) ? "uploads/blank.png" : $result['ministers_licence'] ; ?>" 
            style="width: 20%; height: 20%"/>
            <img src="<?php echo empty($result['other']) ? "uploads/blank.png" : $result['other'] ; ?>" 
            style="width: 20%; height: 20%"/><br>


                <a href ="viewrecords.php" class="btn btn-info">Back to List</a>
                <a href ="edit.php?coupleid=<?php echo $result['couple_id'] ?>" class="btn btn-primary">Edit</a>
                <a onclick="return confirm('Are you sure you want to delete record?');"
                href ="delete.php?coupleid=<?php echo $result['couple_id'] ?>" class="btn btn-danger">Delete</a>
                
            <?php }?>

    <br>
    <br>
    <br>
    <br>
      <br>
      <br>
      <br>
      <br>

<?php require_once 'includes/footer.php'; ?>