<?php 
    $title = 'View Applications';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    
    $result = $crud ->getWeddings();

?>
<br>
<br>

<table class="table">
  <thead class="thead-dark">
<tr>
    <th>#</th>
    <th>Groom's First Name</th>
    <th>Groom's Last Name</th>
    <th>Bride's First Name</th>
    <th>Bride's Last Name</th>
    <th>Actions</th>

</tr>
    <?php while($r = $result->fetch(PDO::FETCH_ASSOC)){ ?>
        
        <tr>
            <td><?php echo $r['couple_id'] ?></td>
            <td><?php echo $r['g_firstname'] ?></td>
            <td><?php echo $r['g_lastname'] ?></td>
            <td><?php echo $r['b_firstname'] ?></td>
            <td><?php echo $r['b_lastname'] ?></td>
            <td>
                <a href ="view.php?coupleid=<?php echo $r['couple_id'] ?>" class="btn btn-dark">View</a>
                <a href ="edit.php?coupleid=<?php echo $r['couple_id'] ?>" class="btn btn-primary">Edit</a>
                <a onclick="return confirm('Are you sure you want to delete record?');"
                href ="delete.php?coupleid=<?php echo $r['couple_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
        </tr>


        <?php }?>
</table>

        <br>
        <br>
        <br>

<?php require_once 'includes/footer.php'; ?>
