<?php    

    $to = "bitwebjr@gmail.com";
    $from = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";

    $fields = array();
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"subject"} = "subject";
    $fields{"message"} = "message";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);    
    
                
      /*
$siteOwnersEmail = 'ingrydmoura1994@gmail.com';


if($_POST) {

   $name = trim(stripslashes($_POST['contactName']));
   $email = trim(stripslashes($_POST['contactEmail']));
   $subject = trim(stripslashes($_POST['contactSubject']));
   $contact_message = trim(stripslashes($_POST['contactMessage']));
   $error="";
   $message="";
   // Check Name
	if (strlen($name) < 2) {
		$error['name'] = "Digite o nome.";
	}
	// Check Email
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
		$error['email'] = "Digite um e-mail v�lido.";
	}
  if (strlen($contact_message) < 2) {
		$error['subject'] = "Digite o assunto";
	}
	// Check Message          
	if (strlen($contact_message) < 15) {
		$error['message'] = "Digite sua mensagem";
	}
   // Subject
	if ($subject == '') { $subject = "Participantes do Hackathon"; }


   // Set Message
   $message .= "Nome: " . $name . "<br />";
	$message .= "Email: " . $email . "<br />";
   $message .= "Mensagem: <br />";
   $message .= $contact_message;
   $message .= "<br /> ----- <br /> Este e-mail foi enviado por BitwebJr Web <br />";

   // Set From: header
   $from =  $name . " <" . $email . ">";

   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


   if (!$error) {

      ini_set("sendmail_from", $siteOwnersEmail); // for windows server
      $mail = mail($siteOwnersEmail, $subject, $message, $headers);

		if ($mail) { echo "OK"; }
      else { echo "Ocorreu um erro. Tente novamente!"; }
		
	} # end if - no validation error

	else {

		$response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
		$response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
		$response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
		
		echo $response;

	} # end if - there was a validation error

}                 */

?>