<?php

$username="root";
$password ="";
$server ='localhost';

$db='project';

$con=mysqli_connect($server,$username,$password,$db);

$database=mysqli_select_db($con,$db);


if(isset($_POST['submit'])){
   


    $name=$_POST['user'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $pan=$_POST['pan'];
    $adhar=$_POST['adhar'];
    $profile_img=$_FILES['pic1'];
    $contact=$_POST['contact'];

    print_r( $profile_img);

   
    
    if(empty($name)){

        ?>
        <script>
            alert("name filed is empty");

        </script>
        <?php
    }


    
    else if(empty($address)){

        ?>
        <script>
            alert("address filed cant be empty");

        </script>
        <?php
    }


    else if(empty($contact)){

        ?>
        <script>
            alert("contact no needed");

        </script>
        <?php
    }

    else if(empty($email)){

        ?>
        <script>
            alert("email required for updates");

        </script>
        <?php
    }

    else if(empty($pan)){

        ?>
        <script>
            alert("pan number required ");

        </script>
        <?php
    }


    
    else if(empty($adhar)){

        ?>
        <script>
            alert("adhaar number required ");

        </script>
        <?php
    }


  
    else{

         $filename= $profile_img['name'];
         $filepath= $profile_img['tmp_name'];
         $fileerror=$profile_img['error'];

         if($fileerror ==0){


            $destfile='upload/'.$filename;

             move_uploaded_file( $filename,$destfile);
             }

         $insert_q= " insert into  `registeration`( name, address, pan, adhaar, email, contact, profile_pic) VALUES (`$name`,`$address`,`$pan`,`$adhar`,`$email`,`$contact`,`$profile_img`) ";
         $ch = mysqli_query($con,$insert_q);
    
         if($ch){
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






