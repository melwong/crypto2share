<?php

    //If the HTTPS is not found to be "on"
    if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") 
    {
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

    if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {

        if ( isset( $_GET['symbol'] ) && filter_var($_GET['symbol'], FILTER_SANITIZE_STRING) ) {
            $crypto = filter_var($_GET['symbol'], FILTER_SANITIZE_STRING);
            
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

    switch ($crypto) {
        case "btc":
            $crypto_filename = 'bitcoin.html';
            $crypto_name = 'Bitcoin';
            $symbol = 'BTC';
            break;

        case "eth":
            $crypto_filename = 'ethereum.html';
            $crypto_name = 'Ethereum';
            $symbol = 'ETH';
            break;

        case "xrp":
            $crypto_filename = 'ripple.html';
            $crypto_name = 'Ripple';
            $symbol = 'XRP';
            break;

        case "ltc":
            $crypto_filename = 'litecoin.html';
            $crypto_name = 'Litecoin';
            $symbol = 'LTC';
            break;

        case "bch":
            $crypto_filename = 'bitcoincash.html';
            $crypto_name = 'Bitcoin Cash';
            $symbol = 'BCH';
            break;

        case "doge":
            $crypto_filename = 'dogecoin.html';
            $crypto_name = 'Dogecoin';
            $symbol = 'DOGE';
            break;

        case "wdc":
            $crypto_filename = 'worldcoin.html';
            $crypto_name = 'Worldcoin';
            $symbol = 'WDC';
            break;

        case "xlm":
            $crypto_filename = 'stellar.html';
            $crypto_name = 'Stellar';
            $symbol = 'XLM';
            break;

        case "xmr":
            $crypto_filename = 'monero.html';
            $crypto_name = 'Monero';
            $symbol = 'XMR';
            break;

        case "dash":
            $crypto_filename = 'dash.html';
            $crypto_name = 'Dash';
            $symbol = 'DASH';
            break;

        case "zec":
            $crypto_filename = 'zcash.html';
            $crypto_name = 'Zcash';
            $symbol = 'ZEC';
            break;

        case "mona":
            $crypto_filename = 'monacoin.html';
            $crypto_name = 'Monacoin';
            $symbol = 'MONA';
            break;

        case "dgb":
            $crypto_filename = 'digibyte.html';
            $crypto_name = 'DigiByte';
            $symbol = 'DGB';
            break;

        case "btg":
            $crypto_filename = 'bitcoingold.html';
            $crypto_name = 'Bitcoin Gold';
            $symbol = 'BTG';
            break;

        case "qtum":
            $crypto_filename = 'qtum.html';
            $crypto_name = 'Qtum';
            $symbol = 'QTUM';
            break;

        case "rdd":
            $crypto_filename = 'reddcoin.html';
            $crypto_name = 'ReddCoin';
            $symbol = 'RDD';
            break;

        case "dem":
            $crypto_filename = 'deutsche-emark.html';
            $crypto_name = 'Deutsche eMark';
            $symbol = 'DEM';
            break;

        case "lbry":
            $crypto_filename = 'lbry.html';
            $crypto_name = 'LBRY Credits';
            $symbol = 'LBRY';
            break;

        case "mint":
            $crypto_filename = 'mintcoin.html';
            $crypto_name = 'Mintcoin';
            $symbol = 'MINT';
            break;

        case "xvg":
            $crypto_filename = 'vergecoin.html';
            $crypto_name = 'Vergecoin';
            $symbol = 'XVG';
            break;

        case "uno":
            $crypto_filename = 'unobtanium.html';
            $crypto_name = 'Unobtanium';
            $symbol = 'UNO';
            break;
             
        case "ppc":
            $crypto_filename = 'peercoin.html';
            $crypto_name = 'Peercoin';
            $symbol = 'PPC';
            break;  

        case "dime":
            $crypto_filename = 'dimecoin.html';
            $crypto_name = 'Dimecoin';
            $symbol = 'DIME';
            break; 

        case "emd":
            $crypto_filename = 'emerald.html';
            $crypto_name = 'Emerald Crypt';
            $symbol = 'EMD';
            break; 

        case "ftc":
            $crypto_filename = 'feathercoin.html';
            $crypto_name = 'Feathercoin';
            $symbol = 'FTC';
            break; 

        case "nlg":
            $crypto_filename = 'gulden.html';
            $crypto_name = 'Gulden';
            $symbol = 'NLG';
            break; 

        case "anc":
            $crypto_filename = 'anoncoin.html';
            $crypto_name = 'Anoncoin';
            $symbol = 'ANC';
            break;

        case "via":
            $crypto_filename = 'viacoin.html';
            $crypto_name = 'Viacoin';
            $symbol = 'VIA';
            break; 

        case "blk":
            $crypto_filename = 'blackcoin.html';
            $crypto_name = 'Blackcoin';
            $symbol = 'BLK';
            break; 

        case "grlc":
            $crypto_filename = 'garlicoin.html';
            $crypto_name = 'Garlicoin';
            $symbol = 'GRLC';
            break; 

        case "ban":
            $crypto_filename = 'banano.html';
            $crypto_name = 'Banano';
            $symbol = 'BAN';
            break;

        case "zla":
            $crypto_filename = 'ethereum.html';
            $crypto_name = 'Zilla';
            $symbol = 'ZLA';
            break;

        case "erc20":

            $crypto_filename = 'ethereum.html';
            
            if ( isset( $_GET['name'] ) && filter_var($_GET['name'], FILTER_SANITIZE_STRING) ) {
                $crypto_name = filter_var($_GET['name'], FILTER_SANITIZE_STRING);
            
            } else {
            
                // redirect them to your homepage
                header('location: /');
                exit;
            }

            if ( isset( $_GET['code'] ) && filter_var($_GET['code'], FILTER_SANITIZE_STRING) ) {
                $symbol = filter_var($_GET['code'], FILTER_SANITIZE_STRING);
                $symbol = strtoupper($symbol); //Change to all caps
            
            } else {
            
                // redirect them to your homepage
                header('location: /');
                exit;
            }

            break;

        default:
            $crypto_filename = "bitcoin.html";

    }

    include($crypto_filename);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Steps to Gifting Your Crypto - Crypto2Share</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="Giveaway your cryptocurrency as crypto gifts and presents">
    <meta name="keywords" content="give cryptocurrency, how to, crypto presents, crypto gifts, share cryptocurrency, christmas, lunar new year crypto packet or envelope">
    <meta name="author" content="Crypto2Share">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-ben-resume-style.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1TFKBV58BE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-1TFKBV58BE');
    </script>

</head>

<body onload="generate()" >

    <div class="py-5">
    </div>

    <!-- HERO -->
    <section class="hero d-flex flex-column justify-content-center align-items-center" id="intro">

        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center align-items-center col-lg-7 col-md-7 col-12">

                        <h3 class="py-4 pt-4 pt-lg-0 text-center">Now, send the amount of <?php echo htmlspecialchars($symbol, ENT_QUOTES); ?> you wish to give to this new wallet</h3>

                        <mark id="public" class="text-break text-center"></mark>
                        <div class="py-1"></div>
                        <button class="btn btn-outline-info btn-sm" onClick="copyText('public')">Copy Address</button><br />
                        <div class="py-1"></div>
                        <p>
                            <a href="#how-secure">
                                Wait a minute. How secure is this?
                                <i class="fas fa-arrow-down custom-icon"></i>
                            </a>
                        </p>

                        <a id="explorer-url" class="email-link">Check Explorer</a>

                </div>

                <div class="mx-auto col-lg-5 col-md-5 col-12">
                    <div id="public_qr" class="img-fluid offset-1 py-4">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <br />
    <br />
        <section class="contact section-padding pt-4" id="contact">
        <div class="container">
            <div class="row">

                <div class="mx-auto col-lg-4 col-md-6 col-12">
                    <h3 class="my-4 pt-4 pt-lg-0">Finally, fill in the form to send them this gift</h3>

                    <p class="mb-1">We will email them the crypto and wallet above with the address and private key. They will receive instructions on how to use them.</p>

                    <p>
                        <a href="images/email_sample.png" target="_blank">
                            How the email looks like?
                            <i class="fas fa-arrow-right custom-icon"></i>
                        </a>
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 col-12">

                    <form action="email_crypto.php" method="post" class="contact-form webform" role="form" onSubmit="return confirm('Please ensure that you filled in the recipient email correctly. Press OK to proceed.');">
                             <div class="form-group row">
                                <label for="text2" class="col-4 col-form-label">Recipient's Name</label>
                                <div class="col-8">
                                    <input id="text2" name="receiver-name"
                                        placeholder="Enter the person's name receiving the crypto" type="text" class="form-control"
                                        required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text3" class="col-4 col-form-label">Recipient's Email</label>
                                <div class="col-8">
                                    <input id="text3" name="receiver-email" placeholder="Enter the email address of the person"
                                        type="email" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text4" class="col-4 col-form-label" id="amount-label">Amount Sent (<?php echo htmlspecialchars($symbol, ENT_QUOTES); ?>)</label>
                                <div class="col-8">
                                    <input id="text4" name="crypto-amount" placeholder="Enter amount of coin"
                                        class="form-control" required="required"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        type="text" maxlength="18" pattern="^\d*(\.\d{0,18})?$" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Your Full Name</label>
                                <div class="col-8">
                                    <input id="text" name="sender-name" placeholder="Enter your name" type="text"
                                        class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text1" class="col-4 col-form-label">Your Email</label>
                                <div class="col-8">
                                    <input id="text1" name="sender-email" placeholder="Enter your email address" type="email"
                                        class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="textarea" class="col-4 col-form-label">Message</label>
                                <div class="col-8">
                                    <textarea id="textarea" name="message" cols="40" rows="5" class="form-control" maxlength="2500" required="required"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-lg-4 offset-sm-2 col-12">              
                                    <!--Add Google reCAPTCHA widget-->
                                    <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LdJLaodAAAAAFMbhruDSPVQ1cYOvyuO-Ba2M8lw"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-lg-4 col-lg-8 col-md-12 center-block">
                                    <button id="submitBtn" name="submit" type="submit" class="btn btn-primary col-md-10 col-lg-6 text-center" disabled>Send Crypto Gift</button>
                                </div>
                            </div>
                            <input type="hidden" id="pubKey" name="pub-key">
                            <input type="hidden" id="privKey" name="priv-key">
                            <input type="hidden" id="cryptoName" name="crypto-name" value="<?php echo htmlspecialchars($crypto_name, ENT_QUOTES); ?>">
                            <input type="hidden" id="symbol" name="symbol" value="<?php echo htmlspecialchars($symbol, ENT_QUOTES); ?>">
                            <input type="hidden" id="cryptoExplorer" name="crypto-explorer">
                            <input type="hidden" id="cryptoExplorerUrl" name="crypto-explorer-url">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <a id="how-secure"></a>
    <section class="about section-padding" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">
                    <h3 class="mb-4">How Secure Is This?</h3>

                    <p>It's very secure because we do not store any public address or private key in our server or log any outbound emails. The crypto wallet is generated using <a href="https://github.com/koraycoding/paper-wallet">paper wallet script</a> by the genius koraycoding.<p>

                </div>

                <div class="col-lg-5 mx-auto col-md-6 col-12">
                    <img src="images/share-cryptocurrency.jpg" class="about-image img-fluid" alt="Give crypto as gift">
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq section-padding">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-12">

                    <h3 class="mb-5">Frequently Asked Questions</h3>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How secure is your website?
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Our site do not use database and uses open source codes. It is also entirely protected by SSL security - the padlock icon you see on your browser's address bar. Click that icon to find out more or <a href="https://decoder.link/sslchecker/crypto2share.com/443">click here.</a></p>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How soon will they receive the crypto and wallet?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Immediately! Email is sent upon you pressing the Send button.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Is there any fee for using this site?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Nope! It's as free as air. However, if you love this site so much, we don't mind some donations to this site up. It costs at least $100 (excluding salary) to keep the lights on.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How many people can I send gifts at once?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Currently you can only send one gift to one person at a time. But if this site proves to be popular, we'll absolutely include a multi-recipient version in the near future.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        Why are we doing this?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>To spread the joy of cryptocurrency! We want to educate the world about cryptocurrency and blockchain so we thought that the best way to get someone interested is to give them some cryptos. The rest will follow</p>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">
                                        How you ensure each email goes into the inbox not the junkbox?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>We created <a href="https://mxtoolbox.com/SuperTool.aspx?action=spf%3acrypto2share.com&run=toolpage">SPF</a>, <a href="https://mxtoolbox.com/SuperTool.aspx?action=dkim%3acrypto2share.com%3adefault&run=toolpage">DKIM</a> and <a href="https://mxtoolbox.com/SuperTool.aspx?action=dmarc%3acrypto2share.com&run=toolpage">DMARC</a> records on our email server and domain name.</p>
                                    
                                    <p>Plus, each email is sent via SMTP with SSL security and authentication. But occasionally, if you found the email in the junk area, please kindly mark the email as not a spam.</p>
                                </div>
                            </div>
                        </div> 

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section>


    <footer>
        <div class="footer-copyright text-center py-3">
            <small><a href="https://crypto2share.com">Crypto2Share</a>. Contact us at hey (at) crypto2share.com</small>
            <div class="pt-2"></div>
            <small>Built with &#10084; and &#9728; to spread the goodnews of cryptocurrency. Made in Seoul, South Korea.</small>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        //To ensure reCAPTCHA checkbox is ticked before submitting form
        function recaptchaCallback() {
            document.getElementById('submitBtn').removeAttribute('disabled');
        }
    </script>

    <script>
        //To copy the wallet address to clipboard
        function copyText(element) {
            var range, selection, worked;
            element = document.getElementById(element); 

            if (document.body.createTextRange) {
                range = document.body.createTextRange();
                range.moveToElementText(element);
                range.select();
            } else if (window.getSelection) {
                selection = window.getSelection();        
                range = document.createRange();
                range.selectNodeContents(element);
                selection.removeAllRanges();
                selection.addRange(range);
            }
            
            try {
                document.execCommand('copy');
                alert('Wallet address copied');
            } catch (err) {
                alert('Error. Unable to copy wallet address');
            }
        }
    </script>

</body>

</html>