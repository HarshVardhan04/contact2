<?php
   $name = $_POST['name']
   $visitor_email = $_POST['email'];
   $messsage = $_POST['message'];
   
   
   
   
   $email_from = 'immense.dutta@gmail.com';
   
   $email_subject = "New Form Submission";
   
   $email_body = "User Name: $name./n". 
                 "Your Email: $visitors_email./n".
                 "Your Message: $messsage./n";
                 
   
   
   $to = "harshvardhandutta327@gmail.com";
   $headers = "From: $email_from /r/n";
   $headers .= "Reply-To: $visitors_email /r/n";
   mail ($to,$email_subject,$email_body,$headers);
   header("Location: index.html") 
?>