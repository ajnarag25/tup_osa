<?php 
    use PHPMailer\PHPMailer\PHPMailer;

    require_once "PHPMailer.php";
    require_once "SMTP.php";
    require_once "Exception.php";

    $mail = new PHPMailer;

    $email = $emails;
    $names = "SUCCESSFULLY REGISTERED YOUR ACCOUNT";

    //SMTP Settings
    $mail->SMTPDebug = 0; 

    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "tupc.osasystem@gmail.com";
    $mail->Password = "jrviwuloefrntmmh";
    $mail->Port = 587; //465 for ssl and 587 for tls
    $mail->SMTPSecure = "tls";

    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom($email, $names);
    $mail->addAddress($emails);
    $mail->Subject = "TUPC OSA SERVICES";
    $mail->Body = nl2br('Good day,'."\n".' You have successfully registered your account. For now your account is UNVERIFIED.'."\n" .' Please wait for your verification of account. Thank you and have a nice day.'."\n \n" .'TUPC OSA SERVICES');


    if ($mail->send())
        echo "Mail Sent";

    else
        // echo('Error sending the email');

?>