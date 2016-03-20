<?php

    // Fetching API
    $ethApi = file_get_contents('https://coinmarketcap-nexuist.rhcloud.com/api/eth');
    $btcApi = file_get_contents('https://coinmarketcap-nexuist.rhcloud.com/api/btc');

    // Decoding the 'json' string
    $btcJson = json_decode($btcApi);
    $ethJson = json_decode($ethApi);

    // BTC
    $eurToBtc = $btcJson->price->eur;
    $usdToBtc = $btcJson->price->usd;

    // ETH
    $eurToEth = $ethJson->price->eur;
    $usdToEth = $ethJson->price->usd;
    $btcToEth = $ethJson->price->btc;

?>
<html>
    <head>
        <title>Welcome !</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="includes/css/style.css">
        <link rel="stylesheet" href="includes/bootstrap/bootstrap.min.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto' type='text/css'>
    </head>
    <body class="content">
    <script>
 //       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
   //             (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     //       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
       // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

//        ga('create', 'UA-74196136-1', 'auto');
//        ga('send', 'pageview');

    </script>
        <div class="navbar col-xs-12 col-md-10 col-md-offset-1">
            <div class="title col-xs-10 col-xs-offset-1 col-lg-3 col-lg-offset-1">
                <h1>
                    <a class="home" href="./">Yaiba</a>
                </h1>
            </div>
            <div class="col-lg-3 col-lg-offset-5">
                <a target="_blank" href="http://github.com/Yaiba782/Yaiberry">C'est si moche que ça ?</a>
            </div>
        </div>
    <div class="wrap">

        <div class="row col-lg-12 center">
                <h1>Welcome to the Aproximacoin !</h1>
                You understood, it gives you a (pretty accurate) aproximation of the market price for the Bitcoin !<br />
                (source : Blockchain.info)<br />
                (source : Coinmarketcap.com)
            </div>
            <div class="col-lg-12 nbsp"></div>
            <div class="data" data-eurToeth="<?php echo $eurToEth; ?>" data-usdToEth="<?php echo $usdToEth; ?>" data-btcToEth="<?php echo $btcToEth; ?>"  data-eurToBtc="<?php echo $eurToBtc; ?>" data-usdToBtc="<?php echo $usdToBtc; ?>"></div>
            <div class="col-lg-7 col-lg-offset-2 col-xs-10 col-xs-offset-1 center">
                <select name="currency" id="currency">
                    <option value="eurtobtc">EUR</option>
                    <option value="usdtobtc">USD</option>
                </select>
                <input type="number" id="input1" value="1"><span id="valueIcon" class="glyphicon glyphicon-euro"></span>
                    =
                <input type="number" id="input2" value="<?php echo $eurToBtc; ?>">
                <span class="glyphicon glyphicon-bitcoin"></span>
                    =
                <input type="number" id="input4" value="<?php echo round($eurToEth,3); ?>">
                <img class="eth-logo" src="./images/ETHEREUM-LOGO.png" alt="logo ethereum">
            </div>
        </div>
        <div class="nbsp"></div>
        <div class="row qrcode col-lg-12 center">
            <div class="row center qrcode-text">You could also donate <span class="glyphicon glyphicon-bitcoin"></span> here :D</div>
            <div class="row"><img class="qrcode-img" src="./images/qrcode.jpg" alt="public key"></div>
            <div class="row"><img src="./images/vegetacat.gif" alt="" width="50"></div>
        <script type="text/javascript" src="includes/js/jquery-2.2.0.min.js"></script>
        <script>
                var eurtobtc = $('.data').data('eurtobtc');
                var usdtobtc = $('.data').data('usdtobtc');
                var btctoeth = $('.data').data('btctoeth');

            $('#input1').keyup(function(){
                var currency = $('#currency').val();
                var source = $('.data').data(currency);
                var number = $(this).val();
                var result = number*source;

                $('#input2').val(result);

                if ('eurtobtc' == currency){
                    var eth = (number/$('.data').data('eurtoeth'));

                    $('#input4').val(eth.toFixed(3));
                    $('#valueIcon').removeClass();
                    $('#valueIcon').addClass('glyphicon-euro glyphicon');
                }else{
                    var eth = (number/$('.data').data('usdtoeth'));

                    $('#input4').val(eth.toFixed(3));
                    $('#valueIcon').removeClass();
                    $('#valueIcon').addClass('glyphicon-usd glyphicon');
                }

            });
            $('#input2').keyup(function(){
                var currency = $('#currency').val()
                var number = $(this).val();
                var result = parseFloat(number/($('.data').data(currency)));

                $('#input4').val( (number/btctoeth).toFixed(3) );
                $('#input1').val(result.toFixed(2));
            });
            $('#input4').keyup(function(){
                var currency = $('#currency').val()
                var number = $(this).val();

                $('#input2').val((number*btctoeth));

                if ('eurtobtc' == currency){
                    var eth = (number*$('.data').data('eurtoeth'));
                    $('#input1').val(eth.toFixed(2));
                }else{
                    var eth = (number*$('.data').data('usdtoeth'));
                    $('#input1').val(eth.toFixed(2));
                }

            });

        </script>
    </body>
</html>