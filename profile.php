<!DOCTYPE html>



<head>


    <meta charset="UTF-8">
   

    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   <title>BANK</title>



   <style>

    .bu{

            text-align: center;
            background-color:#660033;
            }

    .container1{
            background-color: white;
            width:100%;
            height: 100vh;
            }


    .inner-left{

            width:40%;
            height:400px;
            margin-left:2%;
            box-shadow: 5px 10px 8px 10px #663366;
            background-color:#00CCFF;
           
         
            float:left;
            }

    .inner-right{

            width:50%;
            height:400px;
            margin-left:5%;
            float:left;
            box-shadow: 5px 10px 8px 10px #663366;
            background-color:#00CCFF;
            padding-left:10%;
            }

    .rounded{

       
        width:150px; 
        height:150px;
       clip-path:circle(50% at 50% 50%);
      
       border:2px solid red;
       margin-top:5px;
       margin-left:70px;
    }


    .wave{
        position:absolute;
        bottom:0px;
        left:0px;
    }

    .info{

        width:75%;
        border-radius:10px 10px;
        margin-left:20%;
        padding-left:7%;
        padding-top:2%;
        height:200px;
       

    }

    .fa-spin:hover {
        animation: fa-stop ;
        


    }
    button{

       background:blue;
       color:white;


    }



  </style>
  
  
  
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
$_SESSION['address']=$result2['address'];
$_SESSION['contact']=$result2['contact no'];
$_SESSION['pic']=$result2['profile'];
$_SESSION['pan']=$result2['pan'];

    if($user_email == $result2['email'])
    {
        $_SESSION['email']=$result2['email'];

            if($nam == $result['name'])
            {
                $_SESSION['username']=$result2['name'];

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
                    location.replace("index1.php");

                </script>
                <?php

                }

            }

        else{

            ?>

            
                <script>
                alert("username is incorrect");
                location.replace("index1.php");

            </script>
            <?php
            }
    }
    else
    {

            ?>

                
            <script>
            alert("email is not exists");
            location.replace("index1.php");

        </script>
        <?php


    }
   
}



else{


    echo "no";
}




?>




<div class="container1">
<nav class=" bu navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><?php echo "<h4>$nam</h4>"; ?></a>
   
  </div>
  <a href="logout.php"><button>LOGOUT<button></a>
</nav>

        <div class="inner-left"><img src="<?php echo $_SESSION['pic']; ?>" 
        class="rounded">

        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#330033" fill-opacity="1" d="M0,0L20,0C40,0,80,0,120,53.3C160,107,200,213,240,224C280,235,320,149,360,133.3C400,117,440,171,480,165.3C520,160,560,96,600,90.7C640,85,680,139,720,154.7C760,171,800,149,840,128C880,107,920,85,960,74.7C1000,64,1040,64,1080,101.3C1120,139,1160,213,1200,234.7C1240,256,1280,224,1320,192C1360,160,1400,128,1420,112L1440,96L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
        
        <div class="info">
            <p><i class="	fas fa-phone-alt fa-x" style="color:#660033;"aria-hidden="true"></i>:<?php echo $_SESSION['contact']; ?></p>
            <p><i class="far fa-map-marker-alt fa-x " style="color:#660033;"aria-hidden="true"></i>:<?php echo $_SESSION['address']; ?></p>
            <p><a href=""><i class="fab fa-facebook-square fa-2x fa-spin" style="color:#000099;"></i></a> &nbsp;<a href=""><i class="fab fa-twitter-square fa-2x fa-spin " style="color:#000099;"></i></a> &nbsp;<a href=""><i class="fab fa-whatsapp-square fa-2x fa-spin" style="color:#00CC00;"></i></a>
            &nbsp;<a href=""><i class="fab fa-instagram-square fa-2x" style="color:#0033FF";></i></a></p>
   
            </div>
        
        </div>
        <div class="inner-right">

            <h1><?php echo $nam; ?></h1>

            
            <p><i class="fas fa-envelope-open-text fa-x " style="color:#660033;"aria-hidden="true">:</i><?php echo $_SESSION['email']; ?></p>
            <p><i class="far fa-address-card  fa-x" style="color:#660033;"aria-hidden="true"></i>:<?php echo $_SESSION['pan']; ?></p>
            <p<i class="fas fa-rupee-sign"> </i>Balance:0</p>   
        </div>

</div>










</body>
</html>




