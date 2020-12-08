<?php
include "../lang/config.php";

if(isset($_POST['submit'])) {

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $firm = $_POST['firm'];
  $email = $_POST['mail'];
  $msg = $_POST['msg'];

  require '../PHPMailer/PHPMailerAutoload.php';
  
  //we need to create an instance of PHPMailer
    $mail = new PHPMailer();

    //set where we are sending email
    $mail->addAddress('fminzenjering@gmail.com');

    //set who is sending an email
    $mail->setFrom('info@fminzenjering.com', $firstName);

    //set subject
    $mail->Subject = "Poruka sa stranice!";

    //type of email
    $mail->isHTML(true);

    //write email
    $mail->Body = "<p>Poruka od: ".$firstName." ".$lastName."<br><br>Mail: ".$email."<br><br>Firma: ".$firm."<br><br>Poruka:<br><br>$msg</p>";

    //send an email
    if (!$mail->send())
        echo "Error!";
    else
        echo $lang['poslano'];
} else {
  header('location: ../index.php');
  die();
}