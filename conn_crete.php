<!DOCTYPE html>
<?php  session_start();
?>


<head>


<style>


div{

width:50%;
height:300px;
margin-left:25%;
margin-top:15%;
background:#B0E0E6;
align-items:center;
}
.btn{
    margin-left:20%;
}
h1{
    text-align:center;
    width:100%;
   color:white;
    background-color:#00008B;
}

form{
    margin-left:20%;
}
.a1{
    margin-left:5%;
   
}
</style>


    <meta charset="UTF-8">
   

    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   <title>BANK</title>
  
  
  
</head>
<body>

<div>

<h1>Register YourSelf</h1>

    <form action="index2.php" method="POST">
                    
    <br><i class="fas fa-user-tie fa-2x" style="color:#00008B;"></i>
         <input type="text" name="customer" placeholder="Your  Name" >

    <br><i class="fas fa-lock fa-2x" style="color:#00008B;"></i>
         <input type="password" name="pass" placeholder="Password"  >
                        
				
    <br><br><input type="submit" class="btn btn-danger" name="submit1">

    <br><br><a href="index1.php" class="a1"><button>Back To Previous Page</button></a>
   
	     
    </form>

</div>    
                   



<?php


$username="root";
$password ="";
$server ='localhost';

$db='banking';

$con=mysqli_connect($server,$username,$password,$db);

$database=mysqli_select_db($con,$db);
$email;

if(isset($_POST['submit2'])){
   


    $username=$_POST['user'];
    $addre=$_POST['address'];
    $ema=$_POST['email'];
    $pan_no=$_POST['pan'];
    $adhar=$_POST['adhar'];
    $phone=$_POST['contact'];
    $profile_pic=$_FILES['pic1'];

    $email_search ="SELECT * FROM registeration Where email ='$ema' ";
    $email_query=mysqli_query($con, $email_search);
    echo  $email_query;

    if(empty($username))
    {

        ?>
        <script>
            alert("name filed is empty");

        </script>
        <?php
    }


    
    else if(empty($addre))
    {

        ?>
        <script>
            alert("address filed is empty");

        </script>
        <?php
    }


    else if(empty($ema))
    {
        
        ?>
        <script>
            alert("email filed is empty");

        </script>
        <?php
    }

    else if(empty($pan_no))
    {

        ?>
        <script>
            alert("pan no must be enter");

        </script>
        <?php
    }

    else if(empty($adhar))
    {

        ?>
        <script>
            alert("adhare name is necessary");

        </script>
        <?php
    }


    else if(empty($phone))
    {

        ?>
        <script>
            alert("phone  no is necessary");

        </script>
        <?php
    }

    else if( $email_query != "")
        {
            ?>
        <script>
            alert("email id already exists");

        </script>
        <?php
        }


    else{

        $filename =$profile_pic['name'];
        $filepath =$profile_pic['tmp_name'];
        $fileerror =$profile_pic['error'];

        if($fileerror ==0){
            $destfile ='upload/'.$filename;

            move_uploaded_file( $filepath, $destfile);

           
        }


        $que= "INSERT INTO `registeration` (`name`, `address`, `email`, `adhaar`, `pan`, `contact no`, `profile`) VALUES ('$username','$addre','$ema','$adhar','$pan_no','$phone' ,' $destfile')";
        
        $check = mysqli_query($con,$que);
    
        if($check)
             {
                 ?>
                 <script>
                   alert("data inserted");
    
                 </script>
                 <?php
              }
        else{
    
        ?>
        <script>
            alert("data not inserted");
    
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