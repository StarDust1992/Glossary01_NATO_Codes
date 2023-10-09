
<?php 
require_once("Functions.php");
$title = "Login Page" ; 
if(isset($_SESSION["email"])){
    $title = "Welcome"." ".$_SESSION["email"] ; 
    
}else{
    $title = "Login Page" ; 
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>