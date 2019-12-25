<?php
if(isset($_POST['email'])) {
 

    $email_to = "laizgamalira@gmail.com";
    $email_subject = "Contato pelo site";
 
  //   // validation expected data exists
  //   if(!isset($_POST['fname']) ||
  //       !isset($_POST['lname']) ||
  //       !isset($_POST['email']) ||
  //       !isset($_POST['message'])) {
  //       died('Desculpe, houve um problema com o envio.');       
  //   }
 
     
 
  //   $fname = $_POST['fname']; // required
  //   $lname = $_POST['lname']; // required
  //   $email_from = $_POST['email']; // required
  //   $message = $_POST['message']; // required
 
  //   $error_message = "";
  //   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  // if(!preg_match($email_exp,$email_from)) {
  //   $error_message .= 'Esse e-mail não é válido.<br />';
  // }
 
  //   $string_exp = "/^[A-Za-z .'-]+$/";
 
  // if(!preg_match($string_exp,$fname)) {
  //   $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  // }
 
  // if(!preg_match($string_exp,$lname)) {
  //   $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  // }
 
  // if(strlen($message) < 2) {
  //   $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  // }
 
  // if(strlen($error_message) > 0) {
  //   died($error_message);
  // }
 
  //   $email_message = "Form details below.\n\n";
 
     
  //   function clean_string($string) {
  //     $bad = array("content-type","bcc:","to:","cc:","href");
  //     return str_replace($bad,"",$string);
  //   }
 
     
 
  //   $email_message .= "First Name: ".clean_string($fname)."\n";
  //   $email_message .= "Last Name: ".clean_string($lname)."\n";
  //   $email_message .= "Email: ".clean_string($email_from)."\n";
  //   $email_message .= "Mensagem: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>