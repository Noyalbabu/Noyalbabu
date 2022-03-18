<?php
ini_set ('display_errors', 1);
require ('../includes/conn.inc.php');
require ('../includes/functions.inc.php');
// add your includes for connections and functions
// make sure the path is correct
// sanitize user variables
// build prepare statement


  if (!filter_input(INPUT_POST, 'username')){  
     header("Location:../fixture.php"); 
}else {

$susername = safeString($_POST['username']);

$spassword =  safeString($_POST['password']);
$hashedpassword = password_hash($spassword, PASSWORD_DEFAULT);

// prepare SQL

$sql = "INSERT INTO register(username, password) VALUES ('$susername',  '$hashedpassword' )";
$stmt = $pdo->query($sql);
include ('includes/sessions.inc.php');
$_SESSION['login'] = 1;
 header("Location:../basket.php");
// redirect browser
exit; // make sure no other code executed

}
?> 