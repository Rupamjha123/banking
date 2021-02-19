<!DOCTYPE html>
<?php  session_start();
?>


<head>


    <meta charset="UTF-8">
   

    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   <title>BANK</title>
  
  
  
</head>
<body>

<?php



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


if(isset($_POST['submit3']))
{
   
$nam=$_POST['customer'];

$pass1=$_POST['pass'];
$user_email=$_POST['email'];
$info ="SELECT * FROM reg WHERE name='$nam'";

$query =mysqli_query($con,$info);

$result =mysqli_fetch_array($query);

$info2 ="SELECT * FROM registeration WHERE name='$nam'";
$query2 =mysqli_query($con,$info2);

$result2 =mysqli_fetch_array($query2);

    if($user_email == $result2['email'])
    {


            if($nam == $result['name'])
            {

                if($pass1 == $result['password'])
                {

                    ?>
                            <script>
                            alert("successfulluy login");

                            </script>
                            <?php


                }
                else
                {
                    ?>
                    
                    <script>
                    alert("password is not matching");

                </script>
                <?php

                }

            }

        else{

            ?>

            
                <script>
                alert("username is incorrect");

            </script>
            <?php
            }
    }
    else
    {

        ?>

            
        <script>
        alert("email is not exists");

    </script>
    <?php


    }
   
}



else{


    echo "no";
}




?>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><?php echo "<h2>$nam</h2>"; ?></a>
  </div>
</nav>
<div class="container1">

</div>









</body>
</html>




