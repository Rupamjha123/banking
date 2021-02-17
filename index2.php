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




?>






