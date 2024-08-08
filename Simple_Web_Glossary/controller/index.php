<?php 
require("functions.php");


$names = ["ALPHA", "BRAVO", "CHARLIE", "DELTA", "ECHO", "FOXTROT", "GOLF",
 "HOTEL", "INDIANA", "JULIET","KILO","LIMA","MIKE","NOVEMBER","OSCAR",
 "PAPA","QUEBEC","ROMEO","SIERRA","TANGO","UNIFORM",
 "VECTOR","WHISKEY","X-RAY","YANKEE","ZOLO"];

$symbol = ["a","b","c","d","e","f","g","h","i","j",
"k","l","m","n","o","p","q","r","s","t","u","v","x","y","z"] ;


$view_bag = [];
$view_bag["title"] = " SIMPLE WEB GLOSSARY PAGE USING HTML, CSS, PHP !" ;
$view_bag["type"] = "FOR DISPLAYING THE TYPE OF ELEMENT";
$view_bag["contact"] = "CONTACT INFORMATION" ; 
$view_bag["about"]="ABOUT US !" ;
$view_bag["galley"] = "GALLERY" ;

$morse_code = [" ● ▬ " , " ▬ ● ● ● " , " ▬ ● ▬ ● " ,
" ▬ ● ● " , ".● " , " ● ● ▬ ● " , " ▬ ▬ ● " ,
" ● ● ● ● " , " ● ● " ," ● ▬ ▬ ▬ "," ▬ ● ▬ " ,
" ● ▬ ● ● "," ▬ ▬ ", " ▬ ●" , " ▬ ▬ ▬ " , " ● ▬ ▬ ● " ,
" ▬ ▬ ● ▬ " , " ● ▬ ● " , " ● ● ● " , " ▬ " , " ● ● ▬ " ,
" ● ● ● ▬ " , " ● ▬ ▬ " , " ▬ ● ● ▬  " , " ▬ ▬ ● ● " , " ▬ ▬ ▬ ▬ ▬ "] ;


$pronounce = [" AL FAH " , " BRAH VOH " , " CHAR LEE " , " DELL TAH " , " ECK OH " ,
" FOKS TROT " , " GOLF " , " HOH TELL " , " N DEE AH " , " JEW LEE ETT " , " KEY LOH " , 
" LEE MAH " , " MIKE " , " NO VEMBER " , " OSS CAH " , " PAH PAH " , " KEH BECK " , 
" ROW ME OH " , " SEE AIRRAH " , " TANG OH " , " YOU NEE FORM " , " VIK TAH " ,
" WISS KEY " , " ECKS RAY " , " YANG KEY " , " ZOO LOO "];

$title ="Alphabetic Codes";

view("index", $title);


?>
