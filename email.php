<?php


$to = "roopamjha@ndiit.org"."\r\n";
$subject ="your account is created"."\r\n";
$body =" hello sir your account "."\r\n";
$re ="rupamjha323@gmail.com"."\r\n";

$status = mail($to, $subject, $body);
echo $status."<br>";
if($status)
{
    echo '<p>Your mail has been sent!</p>';
} 
else {
    echo error_log($status);
}


?>