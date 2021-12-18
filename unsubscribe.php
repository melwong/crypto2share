<?php

    //If the HTTPS is not found to be "on"
    if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") {
        //Tell the browser to redirect to the HTTPS URL.
        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
        
        //Prevent the rest of the script from executing.
        exit;
    }

    //To prevent direct access of this page
    // if ( !isset($_SERVER['HTTP_REFERER'] ) ) {

    //     // redirect them to your homepage
    //     header('location: /');
    //     exit;
    // }

   require '../vendor/autoload.php';
 
   use PHPMailer\PHPMailer\PHPMailer;

    if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {

        if ( isset( $_GET['email'] ) && filter_var($_GET['email'], FILTER_VALIDATE_EMAIL) ) {
            $email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);

            //Begin emailing process
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host = 'ecngx300.inmotionhosting.com';
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Username = 'noreply@crypto2share.com';
            $mail->Password = '';
            $mail->setFrom('noreply@crypto2share.com', 'Crypto2Share');
            $mail->addAddress('hey@crypto2share.com', 'Crypto2Share Admin');
            $mail->Subject = 'Unsubscribe request';
            $mail->Body = $email. ' wishes to unsubscribe';
            //$mail->msgHTML($html_body);
            if (!$mail->send()) {
                $output_message  = "Mailer Error: " . $mail->ErrorInfo;
                echo $output_message;

            } else {
                $output_message = "Unsubscribe email has been sent to admin.";
                echo $output_message;
            }
            //End emailing process
            
        } else {
            
            // redirect them to your homepage
            header('location: /');
            exit;
        }

    } else {
        
        // redirect them to your homepage
        header('location: /');
        exit;
    }
   
            

            
        

?>