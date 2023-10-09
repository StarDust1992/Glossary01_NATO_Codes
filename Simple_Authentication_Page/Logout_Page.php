<?php 
session_start();
session_unset() ;
session_destroy() ;

require_once("Functions.php");
redirect("Login_Page.php") ;
die () ;

?>
