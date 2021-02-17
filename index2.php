<?php

$username="root";
$password ="";
$server ='localhost';

$db='banking';

$con=mysqli_connect($server,$username,$password,$db);

$database=mysqli_select_db($con,$db);

if($con)
{
    echo "sucess";
}
else{
    echo "ni";
}


if(isset($_POST['submit1'])){
   
$nam=$_POST['customer'];

$pass1=$_POST['pass'];
echo $pass1;

 
$q="INSERT INTO `reg`(`name` ,`password`) VALUES('$nam','$pass1')";
   
$c = mysqli_query($con,$q);

if($c){
    echo "connected";
}

else{
    echo "no".$c;
}
   
         }



else{


    echo "no";
}




?>






