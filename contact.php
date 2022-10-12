<?php
// Variable setting
$name = $_REQUEST ['Name'];
$email = $_REQUEST ['Email'];
$subject = $_REQUEST ['Subject'];
$message = $_REQUEST ['Message'];

// check input fields
if(empty($name) || empty($mail) || empty($subject) || empty($message))
{
    echo "Please fill all the Fields";
}
else{
    mail("http://formspree.io/info.krishnapp@gmail.com", "Website message", $subject , $message , "From: $name <$email>");
    echo "<script type='text/javascript'>alert('Your message sent successfully');
    window.history.log(-1);
    </script>";
}
?>