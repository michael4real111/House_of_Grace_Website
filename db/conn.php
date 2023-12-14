<?php
    //Development connection
    $host = '127.0.0.1';
    $db = 'weddings_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    //$host = 'sql302.infinityfree.com';
    //$db = 'if0_35614255_db_houseofgrace';
    //$user = 'if0_35614255';
    //$pass = 'dOUNPCJTrJ';  
    //$charset = 'utf8mb4'; 

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        throw new PDOException($e->getMessage());
    } 

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);

    $user->insertUser("admin","password");

?>