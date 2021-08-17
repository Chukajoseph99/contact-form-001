
<?php
//  if(isset($_POST["submit"])) {
//      $name = $_POST["name"];
//      $subject = $_POST["subject"];
//      $mailFrom = $_POST["email"];
//      $message = $_POST["message"];
    
//      $mailTo = "chukajoseph99@zohonmail.com";
//      $headers = "From: ".$mailFrom;
//      $txt = "You have received an e-mail from ".$name.".\n\n".$message;
    
//      mail($mailTo, $subject, $txt, $headers);
//      header("Location: index.html?mailsend");
//      }

 $name = $_POST["name"];
 $email_subject = $_POST["subject"];
 $visitor_email = $_POST["email"];
 $message = $_POST["message"];

 $to = "chukajoseph99@zohomail.com";
 $headers = "Reply-To: $visitor_email \r\n";
 $email_body = "User Name: $name.\n".
                "User Subject: $email_subject.\n".
                "User Email: $visitor_email.\n".
                "User Message: $message.\n";

 mail($to,$email_subject,$email_body,$headers);

 header("Location: index.html"); 
?>



