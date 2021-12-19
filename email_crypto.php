<?php

    //If the HTTPS is not found to be "on"
    if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") {
        //Tell the browser to redirect to the HTTPS URL.
        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
        
        //Prevent the rest of the script from executing.
        exit;
    }

    //To prevent direct access of this page
    if ( !isset($_SERVER['HTTP_REFERER'] ) ) {

        // redirect them to your homepage
        header('location: /');
        exit;
    }

   require '../vendor/autoload.php';
 
   use PHPMailer\PHPMailer\PHPMailer;
   
   if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['submit'] ) ) {

        //Check with Google reCAPTCHA
        if ( isset( $_POST['g-recaptcha-response'] ) ) {
            $secret = '';
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if ($responseData->success) {
                $recaptcha_pass = true;
            } else {
                $recaptcha_pass = false;
            }
        }

        if ( isset( $_POST['crypto-name'] ) && filter_var($_POST['crypto-name'], FILTER_SANITIZE_STRING) ) {
            $crypto_name = filter_var($_POST['crypto-name'], FILTER_SANITIZE_STRING);
        } else {
            $crypto_name = false;
        }

        if ( isset( $_POST['symbol'] ) && filter_var($_POST['symbol'], FILTER_SANITIZE_STRING) ) {
            $symbol = filter_var($_POST['symbol'], FILTER_SANITIZE_STRING);
        } else {
            $symbol = false;
        }

        if ( isset( $_POST['crypto-explorer'] ) && filter_var($_POST['crypto-explorer'], FILTER_SANITIZE_STRING) ) {
            $crypto_explorer = filter_var($_POST['crypto-explorer'], FILTER_SANITIZE_STRING);
        } else {
            $crypto_explorer = false;
        }

        if ( isset( $_POST['crypto-explorer-url'] ) && filter_var($_POST['crypto-explorer-url'], FILTER_VALIDATE_URL) ) {
            $crypto_explorer_url = filter_var($_POST['crypto-explorer-url'], FILTER_SANITIZE_URL);
        }

        if ( isset( $_POST['crypto-amount'] ) && filter_var($_POST['crypto-amount'], FILTER_VALIDATE_FLOAT) ) {
            $crypto_amount = filter_var(floatval($_POST['crypto-amount']), FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        } else {
            $crypto_amount = false;
        }

        if ( isset( $_POST['sender-name'] ) && filter_var($_POST['sender-name'], FILTER_SANITIZE_STRING) ) {
            $sender_name = filter_var($_POST['sender-name'], FILTER_SANITIZE_STRING);
        } else {
            $sender_name = false;
        }

        if ( isset( $_POST['sender-email'] ) && filter_var($_POST['sender-email'], FILTER_VALIDATE_EMAIL) ) {
            $sender_email = filter_var($_POST['sender-email'], FILTER_SANITIZE_EMAIL);
        } else {
            $sender_email = false;
        }

        if ( isset( $_POST['receiver-name'] ) && filter_var($_POST['receiver-name'], FILTER_SANITIZE_STRING) ) {
            $receiver_name = filter_var($_POST['receiver-name'], FILTER_SANITIZE_STRING);
        } else {
            $receiver_name = false;
        }

        if ( isset( $_POST['receiver-email'] ) && filter_var($_POST['receiver-email'], FILTER_VALIDATE_EMAIL) ) {
            $receiver_email = filter_var($_POST['receiver-email'], FILTER_SANITIZE_EMAIL);
        } else {
            $receiver_email = false;
        }

        if ( isset( $_POST['message'] ) ) { //Message is an optonal field
            $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        } else {
            $message = false;
        }
        
        if ( isset( $_POST['pub-key'] ) && filter_var($_POST['pub-key'], FILTER_SANITIZE_STRING) ) {
            $pub_key = filter_var($_POST['pub-key'], FILTER_SANITIZE_STRING);
        } else {
            $pub_key = false;
        }

        if ( isset( $_POST['priv-key'] ) && filter_var($_POST['priv-key'], FILTER_SANITIZE_STRING) ) {
            $priv_key = filter_var($_POST['priv-key'], FILTER_SANITIZE_STRING);
        } else {
            $priv_key = false;
        }

        if ($recaptcha_pass === FALSE) {
            $output_message = "Error. You must tick the reCAPTCHA checkbox indicating you are not a robot.";
            
        } elseif ($crypto_name === FALSE || $symbol === FALSE || $crypto_explorer === FALSE || $crypto_explorer_url === FALSE || $pub_key === FALSE || $priv_key === FALSE) {
            $output_message = "There's an error in the form";

        } elseif ($crypto_amount === FALSE) {
            $output_message = "There's an error in the Amount Given field.";

        } elseif ($sender_name === FALSE) {
            $output_message = "There's an error in the Sender Name field.";

        } elseif ($sender_email === FALSE) {
            $output_message = "There's an error in the Sender Email field.";

        } elseif ($receiver_name === FALSE) {
            $output_message = "There's an error in the Receiver Name field.";

        } elseif ($receiver_email === FALSE) {
            $output_message = "There's an error in the Receiver Email field.";

        } elseif ($message === FALSE) {
            $output_message = "There's an error in the Message field.";

        } else {
            
            $url = 'https://api.binance.com/api/v3/ticker/price';
            $trade_pair = strtoupper($symbol) . 'USDT';
            $parameters = array ( 'symbol' => $trade_pair );

            // query string encode the parameters
            $qs = http_build_query($parameters);

            // create the request URL
            $request = "{$url}?{$qs}";

            // Get cURL resource
            $curl = curl_init();

            // Set cURL options
            curl_setopt_array($curl, array(
                CURLOPT_URL => $request,      // set the request URL
                CURLOPT_RETURNTRANSFER => 1     // ask for raw response instead of bool
            ));

            // Send the request, save the response
            $response = curl_exec($curl);

            //Get response as array
            $responseArray = (json_decode($response, true));
            
            if ( isset ($responseArray['price']) ) {

                //Get crypto current market price
                $crypto_usdprice = $responseArray['price'];
            
                //Convert to USD value in two decimal places
                $crypto_usdvalue = number_format((float)$crypto_amount * $crypto_usdprice, 2, '.', '');

            } else {
                $crypto_usdvalue = 'N/A';
                /*echo "Binance API returns an error.";
                echo '<pre>';
                print_r(json_decode($response, true)); 
                echo '</pre>';*/
            }

            // print json decoded response (here as an array)
            /*echo '<pre>';
            print_r(json_decode($response, true)); 
            print_r( $crypto_usdvalue );
            echo '</pre>';*/

            // Close request
            curl_close($curl);

            //Read the email template
            ob_start();
            include 'email_template.html';
            $html_body = ob_get_clean();
            
            //Begin emailing process
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host = '';
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Username = '';
            $mail->Password = '';
            $mail->AddCustomHeader("List-Unsubscribe: <mailto:you@yourdomain.com?subject=Unsubscribe>, <https://yourdomain.com/unsubscribe.php?email=" . $receiver_email.">");
            $mail->setFrom('you@yourdomain.com', 'Crypto2Share');
            //$mail->addReplyTo($sender_email, $sender_name);
            $mail->addAddress($receiver_email, $receiver_name);
            $mail->Subject = $sender_name . ' sends you a surprise';
            $mail->msgHTML($html_body);
            if (!$mail->send()) {
                $output_message  = "Mailer Error: " . $mail->ErrorInfo;
            } else {
                $output_message = "The crypto is on the way to their inbox. Remember to ask them to check their Junk Box too!";
            }
            //End emailing process
            
        }
    }

    //Display the thank you HTML page
    include('thank_you.php');
    

?>