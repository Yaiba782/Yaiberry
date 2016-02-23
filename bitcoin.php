<?php
    $eurToBtc = file_get_contents('https://blockchain.info/tobtc?currency=EUR&value=1');
    $usdToBtc = file_get_contents('https://blockchain.info/tobtc?currency=USD&value=1');

#    $poloniex = file_get_contents();

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
    <div class="row col-lg-12 center">
        <h1>Welcome to the Aproximacoin !</h1>
        You understood, it gives you a (pretty accurate) aproximation of the market price for the Bitcoin !<br />
        (source : Blockchain.info)
    </div>
    <div class="col-lg-12 nbsp"></div>
    <div class="data" data-eurToBtc="<?php echo $eurToBtc; ?>" data-usdToBtc="<?php echo $usdToBtc; ?>"></div>
    <div class="col-lg-6 col-lg-offset-3 col-xs-10 col-xs-offset-1 center">
        <select name="currency" id="currency">
            <option value="eurtobtc">EUR</option>
            <option value="usdtobtc">USD</option>
        </select>
        <input type="number" id="input1" value="1"><span id="valueIcon" class="glyphicon glyphicon-euro"></span>
            =
        <input type="number" id="input2" value="<?php echo $eurToBtc; ?>">
        <span class="glyphicon glyphicon-bitcoin"></span>
    </div>

    <script type="text/javascript" src="includes/js/jquery-2.2.0.min.js"></script>
    <script>
            var eurtobtc = $('.data').data('eurtobtc');
            var usdtobtc = $('.data').data('usdtobtc');

        $('#input1').keyup(function(){
            var currency = $('#currency').val()
            var number = $(this).val();

            var result = number*($('.data').data(currency));

            $('#input2').val(result);
            if ('eurtobtc' == currency){
                $('#valueIcon').removeClass();
                $('#valueIcon').addClass('glyphicon-euro glyphicon');
            }else{
                $('#valueIcon').removeClass();
                $('#valueIcon').addClass('glyphicon-usd glyphicon');
            }

        });
        $('#input2').keyup(function(){
            var currency = $('#currency').val()
            var number = $(this).val();

            var result = parseFloat(number/($('.data').data(currency)));

            $('#input1').val(result.toFixed(2));
        });
    </script>
</body>