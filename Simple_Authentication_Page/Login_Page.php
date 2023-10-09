
<link rel="stylesheet" href="style.css">
<?php 
session_start() ; 
require("Functions.php") ; 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL) ;
    $password  = $_POST["password"]; 

$upper_case = preg_match("@[A-Z]@" , $password) ;
$lower_case = preg_match("@[a-z]@", $password) ;
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$upper_case || !$lower_case || !$number || strlen($specialChars) < 8){
  echo "<h2 class='result'>Password should be at least 8 characters in length and should include 
  at least one upper case letter, one number, and one special character.</h2>";
}else { 
   redirect("admin.php"); 
   die() ;
} ;

     if(validate_email($email,$password)){
      $_SESSION["email"] =$email ;
      $_SESSION["password"] ; 
       redirect("Admin.php") ; 
       die() ;

     } else {
        $result = "<h2>The Provided Credentials Didn't Work!</h2>";
    }
if(!$password && $email){

    $result = "<h2>The Provided Password Didn't Work!</2>" ; 

};
     if(!$email && $password){
        $result = "<h2>Please Enter a Valid Email Adress!</2>" ;
     }

}


require("header.php");
?>
<link rel="stylesheet" href="style.css">
<body>
    <div calss = "row">
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Please Enter You'r Email Adress:</label><br>
                <input class = "form-control"  type="text" name="email" id="email"><br>
                <label for="password">Please Enter You'r Password:</label><br>
                <input class = "form-control"  type="password" name="password" id="password"><br>
                <input class="button" type="submit" value="Login"><br>
            </div>
        </form>
        <div class="result">
        <?php 
        
        if(isset($result)){
            echo $result ; 
        }
        
        ?>
        </div>
      
    </div>
</body>
</html>
