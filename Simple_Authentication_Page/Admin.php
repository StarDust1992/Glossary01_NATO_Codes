<link rel="stylesheet" href="style.css">
<?php 
session_start() ; 
require_once("./Functions.php");
require_once("./Config.php") ; 


user_authentication();
 ?>


<h2 class="username"><?="Welcome"." ".$_SESSION["email"];?>  </h2>
<a href="Logout_Page.php">
<input class="button_logout" type="button" value="LOG OUT">
