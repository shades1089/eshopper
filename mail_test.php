
<?php
session_start();

$email = $_POST['email'];
    $subject = $_POST['subject'];
$msg = $_POST['msg'];

	require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
	require 'PHPMailer/src/Exception.php';
	
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

						$send_to=$email;		// here $send_to variable holding the email of that user whome u want to sent the mail.
						$mail=new PHPMailer();
							$mail->isSmtp();
							$mail->SMTPDebug=1;
							$mail->SMTPAuth=true;
							$mail->SMTPSecure='tls';
							$mail->Host="smtp.gmail.com";
							$mail->Port=587;//587
							$mail->isHTML(true);
							$mail->Username="shikhar.991979@gmail.com";//this is ur email id from which u want to send mail
							$mail->Password="Shigupta@28";//and this is its password 
							$mail->SetFrom("shikhar.991979@gmail.com");//again enter the same email id
							$mail->Subject=$subject;//this is SUBJECT of the email..as we did in GMAIL while sending mail
							$mail->Body=$msg;// $msg holding the message which u wwant to send
							$mail->AddAddress($send_to);
							if($mail->Send())
								{
                                    echo "successfully sent";
                                header("Location: http://127.0.0.1/shoppingportal/index.php");
                                alert("mail sent");
                                exit();
								}
								else 
								echo "no";
                            $mail->smtpClose();
?>

							