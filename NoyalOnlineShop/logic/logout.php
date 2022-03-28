<?php
include('../includes/sessions.inc.php');
// empty the array
session_destroy();
//destroy the session
header("location:../index.html"); //to redirect

?>