<?php 
    $title = 'User Login';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];
        $new_password = md5($password.$username);

        $result = $user->getUser($username,$new_password);
        if(!$result){
            echo '<div class = "alert alert-danger"> Username or Password is incorrect! Please try again. </div>';
        }else{
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $result['id'];
            header("Location: viewrecords.php");
        }

    }
        
?>
<br/><br/><br/><br/>
<h1 class= "text-center"><?php echo $title ?> </h1>
<br/><br/>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <table class="table table-sm">
            <tr>
                <td><lable for="username">Username: * </lable></td>
                <td><input type= "text" name= "username" class="form-control" id="username" value="<?php if ($_SERVER['REQUEST_METHOD']=='POST') echo $_POST['username']; ?>">
                <?php if (empty($username) && $_SERVER['REQUEST_METHOD'] == 'POST') echo "<p class='text-danger'>$username_error</p>"; ?>
                </td>
            </tr>
            <tr>
                <td><lable for="password">Password: * </lable></td>
                <td><input type= "password" name= "password" class="form-control" id="password">
                <?php if (empty($password) && isset($password_error)) echo "<p class='text-danger'>$password_error</p>"; ?>
                </td>
            </tr>
        </table><br/><br/>
        <input type="submit" value="Login" class="btn btn-primary btn-block" style="background-color: #6f42c1;"><br/>
        <a href="#"> Forget Password </a>
    </form><br/><br/><br/><br/>

<?php include_once 'includes/footer.php'?>