<HTML>
<HEAD>
 <LINK rel="stylesheet" type="text/css" href="Text.css">
 <LINK rel="stylesheet" type="text/css" href="Links.css">
 <SCRIPT type="text/javascript" src="Child.js"></SCRIPT>
</HEAD>
<BODY onload="contentLoaded();">
<DIV id="contentId">
 <TABLE>
  <TR><TD colspan="3"><p class="header1Text">CONTACT FORM</p></TD></TR>
  <TR><TD colspan="3" style="padding-top: 0px;"><HR/></TD></TR>
 </TABLE>
 <TABLE>
  <TR>
   <TD colspan="3">
    <p class="bodyText">

<?php
if(isset($_POST['email'])) {
 
    // EDIT THE LINES BELOW AS REQUIRED
    ini_set('SMTP', 'smtp.reyreyanimation.com');
    ini_set('auth_username', 'visitor@reyreyanimation.com');
    ini_set('auth_password', 'reyAni20!8');
    $email_from = "visitor@reyreyanimation.com";
    $email_to = "webAdmin@reyreyanimation.com";
    $email_subject = "ReyReyAnimation.com Visitor Contact";
 
    function died($error) {
        // your error code can go here
        echo "I am very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['company']) ||
        !isset($_POST['comments'])) {
        died('I am sorry, but there appears to be a problem with the form you submitted.');       
    }
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $company = $_POST['company']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
    if(!preg_match($email_exp,$email)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
    if(!preg_match($string_exp,$first_name)) {
        $error_message .= 'The Given Name you entered does not appear to be valid.<br />';
    }
 
    if(!preg_match($string_exp,$last_name)) {
        $error_message .= 'The Family Name you entered does not appear to be valid.<br />';
    }
 
    if(strlen($comments) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br />';
    }
 
    if(strlen($error_message) > 0) {
        died($error_message);
    }
 
    $email_message = "Form details below.\n\n";
      
    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }
 
    $email_message .= "Given Name: ".clean_string($first_name)."\n";
    $email_message .= "Family Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Company: ".clean_string($company)."\n";
    $email_message .= "Message: ".clean_string($comments)."\n";
 
    // create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($email_to, $email_subject, $email_message, $headers);
 
?>
 
<!-- include your own success html here -->
 
<p class="bodyLink" style="text-align: center;">Thank you for contacting me. I will be in touch with you very soon.</p>
 
<?php
 
}
?>

    </p>
   </TD>
  </TR>
  <TR>
   <TD colspan="3" align="center">
    <img src="images/Illustration/my one piece.jpg" height="350" width="350"></img>
   </TD>
  </TR>
  <TR>
   <TD colspan="3">
    <div onmousedown="newContent('PictureMenu.html');" href="#">
     <p class="bodyLink" style="text-align: center;"><u>Close</u></p>
    </div>
   </TD>
  </TR>
 </TABLE>
</DIV>
</BODY>
</HTML>
