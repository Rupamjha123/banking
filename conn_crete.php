<?php


$username="root";
$password ="";
$server ='localhost';

$db='project';

$con=mysqli_connect($server,$username,$password,$db);

$database=mysqli_select_db($con,$db);

if(isset($_POST['submit2'])){
   


    $name=$_POST['user'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $pan=$_POST['pan'];
    $adhar=$_POST['adhar'];
    $contact=$_POST['contact'];
   

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
            alert("address filed is empty");

        </script>
        <?php
    }


    else if(empty($email)){

        ?>
        <script>
            alert("email filed is empty");

        </script>
        <?php
    }

    else if(empty($pan)){

        ?>
        <script>
            alert("pan no must be enter");

        </script>
        <?php
    }

    else if(empty($adhar)){

        ?>
        <script>
            alert("adhare name is necessary");

        </script>
        <?php
    }


    else if(empty($contact)){

        ?>
        <script>
            alert("phone  no is necessary");

        </script>
        <?php
    }

    else{
        $insert_q= "insert into `registeration`(`name`, `address`, `email`, `adhaar`, `pan`, `contact no`) VALUES ('$name','$address','$email','$adhar','$pan','$contact')";
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