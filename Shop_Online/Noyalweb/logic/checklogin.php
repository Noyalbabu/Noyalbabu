<?php
require('../includes/conn.inc.php');
include('../includes/sessions.inc.php');
ini_set('display_errors', 1);

if(isset($_POST['Submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];


    if (!filter_input(INPUT_POST, 'username')){  
     header("Location:../login.php"); 
}else {  

    $sql = "SELECT * FROM register WHERE username = '$username'";
    $stmt = $pdo->query($sql);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $hashedPassword = password_verify ($password,$row['password']);

    
    if($hashedPassword == true)
    {
        header("Location:../basket.php");
        $_SESSION['login'] = 1;
    }   
    else
    {
    header("Location:../login.php");
    }
    exit;
}
} 

?>