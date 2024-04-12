<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];

      $email_from = "mercymary958@gmail.com";
      $email_subject = "New Message Form";
      $email_body = "Name : $name.\n".
       "email:$email.\n".
       "message:$message.\n";

       $to = "mercymary958@gmail.com";
       $headers = "From: $email_from\r\n";
       $headers .="Reply-To: $email\r\n";

      mail($to,$email_subject,$email_body,$headers);
      headers("Location: contact.html");
      echo"Thank You";
}
?>
   