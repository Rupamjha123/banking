<!DOCTYPE html>
<?php  session_start();
?>


<head>


    <meta charset="UTF-8">
   

    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   <title>BANK</title>
  
  
  
</head>
<body>


<?php
//include 'conn_crete.php';


$username="root";
$password ="";
$server ='localhost';

$db='banking';

$con=mysqli_connect($server,$username,$password,$db);

$database=mysqli_select_db($con,$db);

if($con)
{?>
    <script>
        alert("successfully connection ");

    </script>
    <?php
}
else{
    ?>
        <script>
            alert("not connected");

        </script>
        <?php
}


if(isset($_POST['submit1']))
{
   
$nam=$_POST['customer'];

$pass1=$_POST['pass'];
$info ="SELECT * FROM registeration WHERE name='$nam'";
$query =mysqli_query($con,$info);

$result =mysqli_fetch_array($query);

    if($nam !=$result['name'])
    {

        ?>
        <script>
        alert("name not match with account creation name fill originl name");

        </script>
        <?php
    
     }

     
    else{

        $q="INSERT INTO `reg`(`name` ,`password`) VALUES('$nam','$pass1')";
  
        $c = mysqli_query($con,$q);
       

        if($c){
            ?>
             <script>
                alert("your account is r3egistered");

            </script>
            <div class="div1">
   
                <h1>YOUR REGISTERED INFORMATION</h1>


                <div class="div2">

                <h3><br>Name Should Be Same Which You Entered In Prevous Create Account</h3>
            <?php

                 echo "<br><h5>NAME -><h5>";echo $result['name'];
                 echo "<br><h5>PASSWORD -> <br>$pass1 </h5>";

                 echo "<br><h4>Dont't Forget Your Password !!!</h4>";


            ?>
                 <br>
                <table>
                    <tr>
                        <td>
                        <a href="index1.php" class="a1"><button>Want to login</button></a>
                        </td>
                        <td>
                         <a href="conn_crete.php" class="a2"><button>back to previous</button></a>
                        </td>
                    </tr>
                </table>
            </div>

   
                </div>
            <?php

  

//email code
/*
$to = "roopamjha@ndiit.org"."\r\n";
$subject ="your account is created"."\r\n";
$body =" hello sir your account "."\r\n";
$re ="rupamjha323@gmail.com"."\r\n";

$status=mail($to,$re, $subject, $body);
echo $status."<br>";
if($status)
{
   echo '<p>Your mail has been sent!</p>';
} 
else {
   echo error_log($status);
}
*/

                }

            else{
                 ?>
                 <script>
                   alert("not registered try again");

                </script>
                 <?php
                }

            }

  

}



else{


    echo "no";
}




?>

</body>
</html>




