<?php
if (isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $mobile =$_POST['mobile'];
    $message =$_POST['message'];



    $mailTo = "jayaprakkash21@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have received an e-mail from". $name. "\n" . "Phone".$mobile ."\n\n".$message;

    if(mail($mailTo, $headers, $txt)){
       echo " <h1>Sent Successfully! Thank You"." ".$name", We will contact you soon!</h1>";
       else{
           echo "Something went wrong!";
       }
    }
}

?>