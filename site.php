<!DOCTYPE html>
<meta charset="UTF-8">
<head>
<title>Email Textbox</title>
</head>
<body>
<?php
$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != ''){

if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "cornelius.p.allison@gmail.com";
$body = "";

$body .= "From: ".$userName. "\r\n";
$body .= "Email: ".$userEmail. "\r\n";
$body .= "Message: ".$message. "\r\n";

mail($to, $subject, $body);

$message_sent = true;
}
else{
    $invalid = "form-invalid";
}
}
?>

<?php 
if($message_sent):
?>

    <h3>Message Sent</h3>



<?php
else:
?>


<form action="/www/site.php" style="display: grid; grid-template-columns: 100px;">
<label for="name">
Name:
    <input type="text" name="name" placeholder="Enter the Full Name">
    </label>
    
    <label for="email">
Email:
    <input type="email" name="email" placeholder="Enter your Email">
    </label>
    <label for="textbox">

<label for="Subject">
Subject:
    <input type="text" name="subject" placeholder="Enter a Subject">
    </label>

<label for="Message">
Message:
<input type="text" name="textbox" placeholder="Enter a Message">
<input type="submit" value="Submit">
    </label>

</form>
<?php
endif;
?>
</body>
</html>