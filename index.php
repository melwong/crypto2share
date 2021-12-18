<?php

    //If the HTTPS is not found to be "on"
    if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") 
    {
        //Tell the browser to redirect to the HTTPS URL.
        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
        
        //Prevent the rest of the script from executing.
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Cryptocurrency as Gift - Crypto2Share</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="Giveaway your cryptocurrency as gifts and presents">
    <meta name="keywords"
        content="give cryptocurrency, how to, crypto presents, crypto gifts, share cryptocurrency, christmas, lunar new year crypto packet or envelope">
    <meta name="author" content="Crypto2Share">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-ben-resume-style.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1TFKBV58BE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-1TFKBV58BE');
    </script>

</head>

<body>

    <div class="space">
    </div>

    <!-- HERO -->
    <section class="hero d-flex flex-column justify-content-center align-items-center" id="intro">

        <div class="container">
            <div class="row">

                <div class="mx-auto col-lg-5 col-md-5 col-10">
                    <img src="images/santa-helper-crypto.jpg" class="img-fluid" alt="Send Crypto Gift">
                </div>

                <div class="d-flex flex-column justify-content-center align-items-center col-lg-7 col-md-7 col-12">
                    <div class="hero-text">

                        <h1 class="hero-title">Spread the joy of crypto to your non-crypto family and friends. Send them
                            some cryptos!</h1>

                        <a href="#start" class="email-link col-md-10 col-lg-6 text-center">
                            I'm ready 2 share
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <br />
    <br />
    <a id="start"></a>
    <section class="contact section-padding pt-0" id="contact">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-lg-4 col-md-6 col-12">
                    <h3 class="my-4 pt-4 pt-lg-0">First, choose what crypto to give them</h3>

                    <p class="mb-1">We will generate a secure wallet to send them the crypto.</p>
                    <p class="mt-3 pt-2">Choose from over 570 cryptocurrencies.</p>

                </div>
                <div class="col-lg-6 col-md-6 col-12 pt-5">
                    <div id="container">
                        <input type="text" id="searchInput" onkeyup="Search()" placeholder="Choose crypto 2 share">
                        <ol id="searchOL">
                            <li>
                                <a href="send_crypto.php?symbol=btc">Bitcoin (BTC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=eth">Ethereum (ETH)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=doge">Dogecoin (DOGE)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=wdc">Worldcoin (WDC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=xrp">Ripple (XRP)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=xlm">Stellar (XLM)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=xmr">Monero (XMR)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=ltc">Litecoin (LTC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=bch">Bitcoin Cash (BCH)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=dash">Dash (DASH)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=zec">Zcash (ZEC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=mona">Monacoin (MONA)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=dgb">DigiByte (DGB)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=btg">Bitcoin Gold (BTG)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=qtum">Qtum (QTUM)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=rdd">ReddCoin (RDD)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=ban">Banano (BAN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=dem">Deutsche eMark (DEM)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=lbry">LBRY Credits (LBRY)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=mint">Mintcoin (MINT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=xvg">Vergecoin (XVG)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=uno">Unobtanium (UNO)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=ppc">Peercoin (PPC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=dime">Dimecoin (DIME)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=emd">Emerald Crypto (EMD)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=ftc">Feathercoin (FTC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=nlg">Gulden (NLG)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=anc">Anoncoin (ANC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=via">Viacoin (VIA)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=blk">Blackcoin (BLK)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=grlc">Garlicoin (GRLC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=0x&code=zrx" class="erc20">0x(ZRX)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=300Token&code=300"
                                    class="erc20">300Token(300)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Ace&code=ace" class="erc20">Ace(ACE)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=adbank&code=adb"
                                    class="erc20">adbank(ADB)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=AdEx&code=adx" class="erc20">AdEx(ADX)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=AdShares&code=adst"
                                    class="erc20">AdShares(ADST)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=adToken&code=adt"
                                    class="erc20">adToken(ADT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=aelf&code=elf" class="erc20">aelf(ELF)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Aeron&code=arn" class="erc20">Aeron(ARN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=aeternity&code=ae"
                                    class="erc20">Aeternity(AE)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=agrello&code=dlt"
                                    class="erc20">Agrello(DLT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=AIDoctor&code=aidoc"
                                    class="erc20">AIDoctor(AIDOC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=AICHAIN&code=ait"
                                    class="erc20">AICHAIN(AIT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=AidCoin&code=aid"
                                    class="erc20">AidCoin(AID)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Aigang&code=aix"
                                    class="erc20">Aigang(AIX)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Aion&code=aion" class="erc20">Aion(AION)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=AirSwap&code=ast"
                                    class="erc20">AirSwap(AST)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=AirToken&code=air"
                                    class="erc20">AirToken(AIR)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=ALIS&code=alis" class="erc20">ALIS(ALIS)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=AllSports&code=soc"
                                    class="erc20">AllSports(SOC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Alphabit&code=abc"
                                    class="erc20">Alphabit(ABC)</a>
                            </li>
                            <li>
                                <a href="#send_crypto.php?symbol=erc20&name=Amber&code=amb" class="erc20">Amber(AMB)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=AppCoins&code=appc"
                                    class="erc20">AppCoins(APPC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Aragon&code=ant"
                                    class="erc20">Aragon(ANT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=ArbitrageCT&code=arct"
                                    class="erc20">ArbitrageCT(ARCT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=ArcadeToken&code=arc"
                                    class="erc20">ArcadeToken(ARC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Arcblock&code=abt"
                                    class="erc20">Arcblock(ABT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Astro&code=astro"
                                    class="erc20">Astro(ASTRO)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=ATLANT&code=atl"
                                    class="erc20">ATLANT(ATL)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=ATMChain&code=atm"
                                    class="erc20">ATMChain(ATM)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=ATN&code=atn" class="erc20">ATN(ATN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Augur&code=rep" class="erc20">Augur(REP)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=AuroraDAO&code=aura"
                                    class="erc20">AuroraDAO(AURA)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Authorship&code=ats"
                                    class="erc20">Authorship(ATS)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Autonio&code=nio"
                                    class="erc20">Autonio(NIO)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Aventus&code=avt"
                                    class="erc20">Aventus(AVT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=aXpire&code=axp"
                                    class="erc20">aXpire(AXP)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=B2B&code=b2b" class="erc20">B2B(B2B)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Bancor&code=bnt"
                                    class="erc20">Bancor(BNT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Bankex&code=bkx"
                                    class="erc20">Bankex(BKX)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BCAP&code=bcap" class="erc20">BCAP(BCAP)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Bezop&code=bez" class="erc20">Bezop(BEZ)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BiboxToken&code=bix"
                                    class="erc20">BiboxToken(BIX)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BigONEToken&code=big"
                                    class="erc20">BigONEToken(BIG)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BinanceCoin&code=BNB"
                                    class="erc20">BinanceCoin(BNB)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Bitair&code=btca"
                                    class="erc20">Bitair(BTCA)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BitAsean&code=bas"
                                    class="erc20">BitAsean(BAS)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BitBoost&code=bbt"
                                    class="erc20">BitBoost(BBT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BitClave&code=cat"
                                    class="erc20">BitClave(CAT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BitcoinSilver&code=btcs"
                                    class="erc20">BitcoinSilver(BTCS)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Bitcoin2x&code=btc2x"
                                    class="erc20">Bitcoin2x(BTC2X)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BitDegree&code=bdg"
                                    class="erc20">BitDegree(BDG)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BitDice&code=csno"
                                    class="erc20">BitDice(CSNO)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=bitJob&code=stu"
                                    class="erc20">bitJob(STU)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BitparkCoin&code=bpc"
                                    class="erc20">BitparkCoin(BPC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=bitqy&code=bq" class="erc20">bitqy(BQ)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BitSerial&code=bte"
                                    class="erc20">BitSerial(BTE)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Blackmoon&code=bmc"
                                    class="erc20">Blackmoon(BMC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BlackmoonCrypto&code=bmc"
                                    class="erc20">BlackmoonCrypto(BMC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BlockArray&code=ary"
                                    class="erc20">BlockArray(ARY)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BlockCAT&code=cat"
                                    class="erc20">BlockCAT(CAT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BlockCDN&code=bcdn"
                                    class="erc20">BlockCDN(BCDN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BlockchainIndex&code=blx"
                                    class="erc20">BlockchainIndex(BLX)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Blockport&code=bpt"
                                    class="erc20">Blockport(BPT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Blocktix&code=tix"
                                    class="erc20">Blocktix(TIX)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BLOCKv&code=vee"
                                    class="erc20">BLOCKv(VEE)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Bloom&code=blt" class="erc20">Bloom(BLT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BLUE&code=blue" class="erc20">BLUE(BLUE)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Bluzelle&code=blz"
                                    class="erc20">Bluzelle(BLZ)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Bolenum&code=bln"
                                    class="erc20">Bolenum(BLN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Bonpay&code=bon"
                                    class="erc20">Bonpay(BON)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Bottos&code=bto"
                                    class="erc20">Bottos(BTO)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Bounty0x&code=bnty"
                                    class="erc20">Bounty0x(BNTY)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BRAT&code=brat" class="erc20">BRAT(BRAT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Bread&code=brd" class="erc20">Bread(BRD)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=BTCMoon&code=btcm"
                                    class="erc20">BTCMoon(BTCM)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Bytom&code=btm" class="erc20">Bytom(BTM)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=C20&code=c20" class="erc20">C20(C20)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Candy&code=candy"
                                    class="erc20">Candy(CANDY)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=CanYaCoin&code=can"
                                    class="erc20">CanYaCoin(CAN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Cappasity&code=capp"
                                    class="erc20">Cappasity(CAPP)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=CargoX&code=cxo"
                                    class="erc20">CargoX(CXO)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=CarTaxiToken&code=ctx"
                                    class="erc20">CarTaxiToken(CTX)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=carVertical&code=cv"
                                    class="erc20">carVertical(CV)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=CashPokerPro&code=cash"
                                    class="erc20">CashPokerPro(CASH)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Cashaa&code=cas"
                                    class="erc20">Cashaa(CAS)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Ccore&code=cco" class="erc20">Ccore(CCO)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Centra&code=ctr"
                                    class="erc20">Centra(CTR)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=ChainLink&code=link"
                                    class="erc20">ChainLink(LINK)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Change&code=cag"
                                    class="erc20">Change(CAG)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Chronobank&code=time"
                                    class="erc20">Chronobank(TIME)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=&code=" class="erc20">Chronologic(DAY)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Cindicator&code=cnd"
                                    class="erc20">Cindicator(CND)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Civic&code=cvc" class="erc20">Civic(CVC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=ClearPoll&code=poll"
                                    class="erc20">ClearPoll(POLL)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Cloud&code=cld" class="erc20">Cloud(CLD)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Cobinhood&code=cob"
                                    class="erc20">Cobinhood(COB)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Cofound.it&code=cfi"
                                    class="erc20">Cofound.it(CFI)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Coimatic3.0&code=ctic3"
                                    class="erc20">Coimatic3.0(CTIC3)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=CoinDash&code=cdt"
                                    class="erc20">CoinDash(CDT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=CoinFi&code=cofi"
                                    class="erc20">CoinFi(COFI)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Coinlancer&code=cl"
                                    class="erc20">Coinlancer(CL)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=CoinMeet&code=mee"
                                    class="erc20">CoinMeet(MEE)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=COMSA&code=cms"
                                    class="erc20">COMSA[ETH](CMS)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Copytrack&code=cpy"
                                    class="erc20">Copytrack(CPY)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Corethum&code=crtm"
                                    class="erc20">Corethum(CRTM)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=COSS&code=coss" class="erc20">COSS(COSS)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Covesting&code=cov"
                                    class="erc20">Covesting(COV)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=CPChain&code=cpc"
                                    class="erc20">CPChain(CPC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Creditbit&code=crb"
                                    class="erc20">Creditbit(CRB)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Credo&code=credo"
                                    class="erc20">Credo(CREDO)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Crypterium&code=crpt"
                                    class="erc20">Crypterium(CRPT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=CryptoInsight&code=tkr"
                                    class="erc20">CryptoInsight(TKR)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Cryptopay&code=cpay"
                                    class="erc20">Cryptopay(CPAY)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=CrystalClear&code=cct"
                                    class="erc20">CrystalClear(CCT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=CyberMiles&code=cmt"
                                    class="erc20">CyberMiles(CMT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=DADI&code=dadi" class="erc20">DADI(DADI)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Dai&code=dai" class="erc20">Dai(DAI)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Dalecoin&code=dalc"
                                    class="erc20">Dalecoin(DALC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=DAO.Casino&code=bet"
                                    class="erc20">DAO.Casino(BET)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=DATA&code=dta" class="erc20">DATA(DTA)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Datawallet&code=dxt"
                                    class="erc20">Datawallet(DXT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Datum&code=dat" class="erc20">Datum(DAT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=DCORP&code=drp" class="erc20">DCORP(DRP)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=DecentBet&code=dbet"
                                    class="erc20">DecentBet(DBET)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Decentraland&code=mana"
                                    class="erc20">Decentraland(MANA)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=DecisionToken&code=hst"
                                    class="erc20">DecisionToken(HST)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Delphy&code=dpy"
                                    class="erc20">Delphy(DPY)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Dent&code=dent" class="erc20">Dent(DENT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Dentacoin&code=dcn"
                                    class="erc20">Dentacoin(DCN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Dether&code=dth"
                                    class="erc20">Dether(DTH)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Devery&code=eve"
                                    class="erc20">Devery(EVE)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=DEW&code=dew" class="erc20">DEW(DEW)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=DigiPulse&code=DGPT"
                                    class="erc20">DigiPulse(DGPT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=DigixDAO&code=dgd"
                                    class="erc20">DigixDAO(DGD)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=DimonCoin&code=fudd"
                                    class="erc20">DimonCoin(FUDD)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=district0x&code=dnt"
                                    class="erc20">district0x(DNT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Divi&code=divx" class="erc20">Divi(DIVX)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=DMarket&code=dmt"
                                    class="erc20">DMarket(DMT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=DomRaider&code=drt"
                                    class="erc20">DomRaider(DRT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Dovu&code=dovu" class="erc20">Dovu(DOVU)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Dragonchain&code=drgn"
                                    class="erc20">Dragonchain(DRGN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=DRPUtility&code=drpu"
                                    class="erc20">DRPUtility(DRPU)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=E4ROW&code=e4row"
                                    class="erc20">E4ROW(E4ROW)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=EagleCoin&code=eagle"
                                    class="erc20">EagleCoin(EAGLE)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=eBIT&code=ebit" class="erc20">eBIT(EBIT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=eBitcoinCash&code=ebch"
                                    class="erc20">eBitcoinCash(EBCH)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=eBTC&code=ebtc" class="erc20">eBTC(EBTC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=EchoLink&code=eko"
                                    class="erc20">EchoLink(EKO)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Edgeless&code=edg"
                                    class="erc20">Edgeless(EDG)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=EDUCare&code=ekt" class="erc20">EDUCare(EKT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=eGold&code=egold" class="erc20">eGold(EGOLD)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Eidoo&code=edo" class="erc20">Eidoo(EDO)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Elixir&code=elix" class="erc20">Elixir(ELIX)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Embers&code=mbrs" class="erc20">Embers(MBRS)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Emphy&code=epy" class="erc20">Emphy(EPY)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=EncrypGen&code=dna" class="erc20">EncrypGen(DNA)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Energo&code=tsl" class="erc20">Energo(TSL)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Enigma&code=eng" class="erc20">Enigma(ENG)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Enigma&code=xng" class="erc20">Enigma(XNG)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=EnjinCoin&code=enj" class="erc20">EnjinCoin(ENJ)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Envion&code=evn" class="erc20">Envion(EVN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=EOS&code=eos" class="erc20">EOS(EOS)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Equal&code=eql" class="erc20">Equal(EQL)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=ERC20&code=erc20" class="erc20">ERC20(ERC20)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=eREAL&code=ereal" class="erc20">eREAL(EREAL)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Eroscoin&code=ero" class="erc20">Eroscoin(ERO)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=EthBet&code=ebet" class="erc20">EthBet(EBET)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Ethbits&code=etbs" class="erc20">Ethbits(ETBS)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=EtherDeltaToken&code=edt" class="erc20">EtherDeltaToken(EDT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Ethercash&code=ech" class="erc20">Etherecash(ECH)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=EthereumCash&code=ecash" class="erc20">EthereumCash(ECASH)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=EthereumGold&code=etg" class="erc20">EthereumGold(ETG)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=EthereumLite&code=elite" class="erc20">EthereumLite(ELITE)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Etheriya&code=riya" class="erc20">Etheriya(RIYA)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Etheroll&code=dice" class="erc20">Etheroll(DICE)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Etherparty&code=fuel" class="erc20">Etherparty(FUEL)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=EtherSportz&code=esz" class="erc20">EtherSportz(ESZ)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=ETHGAS&code=egas" class="erc20">ETHGAS(EGAS)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=EthLend&code=lend" class="erc20">EthLend(LEND)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Ethorse&code=horse" class="erc20">Ethorse(HORSE)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Ethos&code=ethos" class="erc20">Ethos(ETHOS)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=eUSD&code=eusd" class="erc20">eUSD(EUSD)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=EventChain&code=evc" class="erc20">EventChain(EVC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Everex&code=evx" class="erc20">Everex(EVX)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Everus&code=evr" class="erc20">Everus(EVR)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=ExchangeUnion&code=xuc" class="erc20">ExchangeUnion(XUC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=ExchangeN&code=exn" class="erc20">ExchangeN(EXN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Experty&code=exy" class="erc20">Experty(EXY)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=EXRNchain&code=exrn" class="erc20">EXRNchain(EXRN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Facecoin&code=fc" class="erc20">Facecoin(FC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=FairGame&code=fair" class="erc20">FairGame(FAIR)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=FAPcoin&code=fap" class="erc20">FAPcoin(FAP)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Farad&code=frd" class="erc20">Farad(FRD)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=FidentiaX&code=fdx" class="erc20">FidentiaX(FDX)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=FirstBlood&code=1st" class="erc20">FirstBlood(1ST)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=FLiK&code=flik" class="erc20">FLiK(FLIK)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Flixxo&code=flixx" class="erc20">Flixxo(FLIXX)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=FlypMe&code=fyp" class="erc20">FlypMe(FYP)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Fortuna&code=fota" class="erc20">Fortuna(FOTA)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=FuckToken&code=fuck" class="erc20">FuckToken(FUCK)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Fujinto&code=nto" class="erc20">Fujinto(NTO)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=FundYourselfNow&code=fyn" class="erc20">FundYourselfNow(FYN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=FunFair&code=fun" class="erc20">FunFair(FUN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Fusion&code=fsn" class="erc20">Fusion(FSN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=FuturXe&code=fxe" class="erc20">FuturXe(FXE)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Game&code=gtc" class="erc20">Game(GTC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=GameChainSystem&code=gcs" class="erc20">GameChainSystem(GCS)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Gatcoin&code=gat" class="erc20">Gatcoin(GAT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Gems&code=gem" class="erc20">Gems(GEM)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=GenaroNetwork&code=gnx" class="erc20">GenaroNetwork(GNX)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=GenesisVision&code=gvt" class="erc20">GenesisVision(GVT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=GETProtocol&code=get" class="erc20">GETProtocol(GET)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Gifto&code=gto" class="erc20">Gifto(GTO)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=GigaWattToken&code=wtt" class="erc20">GigaWattToken(WTT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Gimli&code=gim" class="erc20">Gimli(GIM)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=GladiusToken&code=gla" class="erc20">GladiusToken(GLA)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=GlobalJobcoin&code=gjc" class="erc20">GlobalJobcoin(GJC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Gnosis&code=gno" class="erc20">Gnosis(GNO)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=GoldUnionCoin&code=guc" class="erc20">GoldUnionCoin(GUC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Golem&code=gnt" class="erc20">Golem(GNT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Goodomy&code=good" class="erc20">Goodomy(GOOD)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Grid+&code=grid" class="erc20">Grid+(GRID)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=GUESS&code=guess" class="erc20">GUESS(GUESS)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=GUTSTickets&code=get" class="erc20">GUTSTickets(GET)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Hacken&code=hkn" class="erc20">Hacken(HKN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=HawalaToday&code=hat" class="erc20">Hawala.Today(HAT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Hedge&code=hdg" class="erc20">Hedge(HDG)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=HelloGold&code=hgt" class="erc20">HelloGold(HGT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=HEROcoin&code=play" class="erc20">HEROcoin(PLAY)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Hive&code=hvn" class="erc20">Hive(HVN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=HiveProject&code=hvn" class="erc20">HiveProject(HVN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=HODLBucks&code=hdlb" class="erc20">HODLBucks(HDLB)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=HubiiNetwork&code=hbt" class="erc20">HubiiNetwork(HBT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Humaniq&code=hmq" class="erc20">Humaniq(HMQ)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=HydraProtocol&code=hot" class="erc20">HydroProtocol(HOT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=HyperTV&code=hytv" class="erc20">HyperTV(HYTV)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=iBTC&code=ibtc" class="erc20">iBTC(IBTC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=ICON&code=icx" class="erc20">ICON(ICX)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Iconomi&code=icn" class="erc20">Iconomi(ICN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=ICOS&code=icos" class="erc20">ICOS(ICOS)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=IDEXMembership&code=idxm" class="erc20">IDEXMembership(IDXM)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=iDice&code=ice" class="erc20">iDice(ICE)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=iEthereum&code=ieth" class="erc20">iEthereum(IETH)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=iExecRLC&code=rlc" class="erc20">iExecRLC(RLC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=indaHash&code=idh" class="erc20">indaHash(IDH)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Indicoin&code=indi" class="erc20">Indicoin(INDI)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=IndorseToken&code=ind" class="erc20">IndorseToken(IND)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=InkProtocol&code=xnk" class="erc20">InkProtocol(XNK)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=INSEcosystem&code=ins" class="erc20">INSEcosystem(INS)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=InsurePal&code=ipl" class="erc20">InsurePal(IPL)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Internxt&code=inxt" class="erc20">Internxt(INXT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=InvestDigital&code=idt" class="erc20">InvestDigital(IDT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=InvestFeed&code=ift" class="erc20">InvestFeed(IFT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=IOStoken&code=iost" class="erc20">IOStoken(IOST)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=IoTChain&code=itc" class="erc20">IoTChain(ITC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=IPChain&code=ipc" class="erc20">IPChain(IPC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=iQuant&code=iqt" class="erc20">iQuant(IQT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Iungo&code=ing" class="erc20">Iungo(ING)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=iXledger&code=ixt" class="erc20">iXledger(IXT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=JesusCoin&code=jc" class="erc20">JesusCoin(JC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Jetcoin&code=jet" class="erc20">Jetcoin(JET)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=JibrelNetwork&code=jnt" class="erc20">JibrelNetwork(JNT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=KickCoin&code=kick" class="erc20">KickCoin(KICK)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Kin&code=kin" class="erc20">Kin(KIN)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=KuberaCoin&code=kbr" class="erc20">KuberaCoin(KBR)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=KuCoinShares&code=kcs" class="erc20">KuCoinShares(KCS)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=KyberNetwork&code=knc" class="erc20">KyberNetwork(KNC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Lamden&code=tau" class="erc20">Lamden(TAU)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=Lampix&code=pix" class="erc20">Lampix(PIX)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=LAToken&code=la" class="erc20">LAToken(LA)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=LegendsRoom&code=lgd" class="erc20">LegendsRoom(LGD)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=LendConnect&code=lct" class="erc20">LendConnect(LCT)</a>
                            </li>
                            <li>
                                <a href="#send_crypto.php?symbol=erc20&name=Leverj&code=lev" class="erc20">Leverj(LEV)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=LIFE&code=life" class="erc20">LIFE(LIFE)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=LightChain&code=light" class="erc20">LightChain(LIGHT)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=LinkPlatform&code=lnk" class="erc20">LinkPlatform(LNK)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=erc20&name=LiteCoinGold&code=ltg" class="erc20">LiteCoinGold(LTG)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">LLToken(LLT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">LOCIcoin(LOCI)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">LockChain(LOC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Loopring(LRC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Lunyr(LUN)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Lympo(LYM)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Macro(MCR)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Maecenas(ART)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Maggie(MAG)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Maker(MKR)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Matchpool(GUP)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Matryx(MTX)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">MaverickChain(MVC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">MCAP(MCAP)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Medicalchain(MTN)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">MediShares(MDS)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Melon(MLN)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">MercuryProtocol(GMT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Metal(MTL)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">MicroMoney(AMM)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Minereum(MNE)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Mixin(XIN)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">MOAC(MOAC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">MobileGo(MGO)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Modum(MOD)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">MolecularFuture(MOF)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Monaco(MCO)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">MoneroGold(XMRG)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Monetha(MTH)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Mothership(MSP)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Musiconomi(MCI)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">MyBitToken(MYB)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Mysterium(MYST)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">MyWish(WISH)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">NAGA(NGC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Natcoin(NTC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Nebulas(NAS)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">NetworkToken(NTWK)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Neumark(NEU)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">NeuroDAO(NDAO)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Neurotoken(NTK)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">NEVERDIE(NDC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Newbium(NEWB)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Nework(NKC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Nexium(NXC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Nimfamoney(NIMFA)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Nimiq(NET)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Nitro(NOX)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">NucleusVision(NCASH)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Nuls(NULS)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Numeraire(NMR)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">OAX(OAX)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Odyssey(OCN)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">OlympusLabs(MOT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">OmiseGO(OMG)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">OneRootNetwork(RNT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">onG.social(ONG)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Opus(OPT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">OriginTrail(TRAC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">OrmeusCoin(ORME)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">OXFina(OX)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Oyster(PRL)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">OysterPearl(PRL)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Paragon(PRG)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Patientory(PTOY)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Payfair(PFR)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Paypex(PAYX)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">PayPie(PPP)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Pillar(PLR)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">PiplCoin(PIPL)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Playkey(PKT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">PlexCoin(PLX)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">PlusCoin(PLC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Pluton(PLU)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Po.et(POE)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">POLYAI(AI)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Polybius(PLBT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">PolymathNetwork(POLY)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Populous(PPT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">PoSToken(POS)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">PowerLedger(POWR)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Presearch(PRE)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">PressOne(PRS)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Primas(PST)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Privatix(PRIX)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">ProChain(PRO)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Propy(PRO)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">ProspectorsGold(PGL)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Publica(PBL)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">PundiX(PXS)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Purpose(PRPS)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">PylonNetwork(PYLNT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">QASH(QASH)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Quantstamp(QSP)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Quantum(QAU)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Qube(QUBE)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">QunQun(QUN)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Qvolta(QVT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">RChain(RHOC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Read(READ)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">REAL(REAL)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">RealChain(RCT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Rebellious(REBL)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">REDMWAT(MWAT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Refereum(RFR)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">RefToken(REF)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Remicoin(RMC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Remme(REM)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">RequestNetwork(REQ)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Revain(R)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">REX(REX)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Rialto(XRL)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Rivetz(RVT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Rock(RKT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">RouletteToken(RLT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Ruff(RUFF)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SALT(SALT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SandCoin(SND)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Scry.info(DDD)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Selfkey(KEY)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SelfSell(SSC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Senderon(SDRN)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Sense(SENSE)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Sether(SETH)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Sharechain(SSS)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">ShareX(SEXC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Show(SHOW)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SimpleToken(OST)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SingularDTV(SNGLS)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SingularityNET(AGI)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SIRINLABSToken(SRN)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SkinCoin(SKIN)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SmartBillions(SMART)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SmartMesh(SMT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Snovio(SNOV)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Soarcoin(SOAR)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Social(SCL)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Sociall(SCL)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Soma(SCT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SONM(SNM)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SophiaTX(SPHTX)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SpankChain(SPANK)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SphreAIR(XID)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SportyCo(SPF)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SportyFi(SPF)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Starbase(STAR)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">StarChain(STC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">StarCredits(STRC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Status(SNT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">STK(STK)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Storj(STORJ)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Storm(STORM)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Stox(STX)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">StreamrDATAcoin(DATA)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Substratum(SUB)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SugarExchange(SGR)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SunContract(SNC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Suretly(SUR)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Swapcoin(SWP)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Swarm(SWM)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SwarmCity(SWT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SwftCoin(SWFTC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">SwissBorg(CHSB)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">TaaS(TAAS)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">TargetCoin(TGT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Telcoin(TEL)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">TenX(PAY)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">ThetaToken(THETA)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Tierion(TNT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">TIESNetwork(TIE)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Ties.DB(TIE)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Tigereum(TIG)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">TimeNewBank(TNB)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Tokenbox(TBX)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">TokenCard(TKN)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">TokenClub(TCT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">TopChain(TOPC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Tracto(TRCT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">TradeToken(TIO)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Triaconta(TRIA)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">TridentGroup(TRDT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">TRON(TRX)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">TrueChain(TRUE)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">TrueFlip(TFL)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">U.CASH(UCASH)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">UGToken(UGT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">ugChain(UGC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">UnikoinGold(UKG)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Universa(UTNP)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">UnlimitedIP(UIP)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Upfiring(UFR)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">UquidCoin(UQC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">UTRUST(UTK)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">ValueChain(VLC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">VeChain(VEN)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Verify(CRED)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Veritaseum(VERI)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Veros(VRS)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Vezt(VZT)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">VIBE(VIBE)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Viberate(VIB)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Viuly(VIU)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Voise(VOISE)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">vSlice(VSL)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">WaBi(WABI)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Walton(WTC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Waltonchain(WTC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">WandX(WAND)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">WAX(WAX)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">WePower(WPR)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">WETH(WETH)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">WeTrust(TRST)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">WiCoin(WIC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">WildCrypto(WILD)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Wings(WINGS)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Worldcore(WRC)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Xaurum(XAUR)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Xenon(XNN)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">XPA(XPA)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">XPlay(XPA)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Yee(YEE)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Zap(ZAP)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">ZCashGold(ZCG)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Zeusshield(ZSC)</a>
                            </li>
                            <li>
                                <a href="send_crypto.php?symbol=zla" class="erc20">Zilla(ZLA)</a>
                            </li>
                            <li>
                                <a href="#" class="erc20">Zilliqa(ZIL)</a>
                            </li>
                        </ol>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <footer>
        <div class="footer-copyright text-center py-3">
            <small><a href="https://crypto2share.com">Crypto2Share</a>. Contact us at hey (at) crypto2share.com</small>
            <div class="pt-2"></div>
            <small>Built with &#10084; and &#9728; to spread the goodnews of cryptocurrency. Made in Seoul, South Korea.</small>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="js/erc20.js"></script>


</body>

</html>