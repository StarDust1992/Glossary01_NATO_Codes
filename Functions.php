<?php 
require("Config.php");
require("header.php");
$random_names = [
    ["name" =>"PHP" , "role" => "Hypertext Preprocessor"],
    ["name" =>"JAVA SCRIPT" , "role" => "A Client-Side Scripting Language"],
    ["name" =>"HTML" , "role" => "The HyperText Markup Language"] 
];

function sum($a,$b){
    $result = $a + $b ; 
    return $result ; 
}

function output($value){
    echo "<pre>" ; 
    echo "</h3>" ; 
print_r($value) ;
    echo "</h3>" ; 
    echo "</pre>" ; 
};

function pluck($arr,$key){
    $result = array_map(function($item)use($key){
        echo $item[$key] ; 
    },$arr);
    return $result ; 
};



function validate_email($email,$password){
    if($email == USER_NAME && $password == PASSWORD){
      return true  ;
    }
}


function redirect($url){
    header("location: $url");
}

// checking The Authentication

function is_user_authenticated(){

 return  isset($_SESSION["email"]);
  
}
                            
function user_authentication(){
    if(!is_user_authenticated()){
        redirect("Login_Page.php") ;
       die() ;
    }
}

?>