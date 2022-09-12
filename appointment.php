<?php

$connection = mysqli_connect('localhost', 'root', '', 'login_register');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $request = "insert into appoinentment(name,email,number,subject,message) values('$name','$email','$number','$subject','$message')";

   if (mysqli_query($connection, $request)){
    echo "<script>alert('Wow! Your Appointment Successfully Submited.')</script>";
    
   }
   else{
        "<script>alert('Try Again')</script>";
   }
  
    
} else {
    echo "Something went wrong";
}
  header('location:welcome.php');
