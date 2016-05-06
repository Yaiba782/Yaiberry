<?php
if(isset($_GET['d'])){
    /*
     *
     *  Fetching API
     *
     * */
    $ethApi = file_get_contents('https://coinmarketcap-nexuist.rhcloud.com/api/eth/price');
    $btcApi = file_get_contents('https://coinmarketcap-nexuist.rhcloud.com/api/btc/price');

    // Decoding the 'json' string
    $btcJson = json_decode($btcApi);
    $ethJson = json_decode($ethApi);

?>
<html>

<head>
    <title>Aproximacoin !</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
    <!-- Analytics script -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-74196136-1', 'auto');
    ga('send', 'pageview');
    </script>

    <!-- Prices -->
    <div data-btceur="<?php echo $btcJson->eur; ?>" data-etheur="<?php echo $ethJson->eur; ?>" data-btcusd="<?php echo $btcJson->usd; ?>" data-ethusd="<?php echo $ethJson->usd; ?>"></div>
    <!-- Header -->
    <section id="header">
        <header>
            <h1>Aproximacoin</h1>
        </header>
        <footer>
        <p>
            Welcome to the new version of the Aproximacoin.<br />
            You can convert Euro, US Dollar to Bitcoin, and Ether.
        </p>
            <a href="#banner" class="button style2 scrolly">Let's go</a>
        </footer>
    </section>

    <section id="banner" class="aproximacoin_banner">
        <div class="col-xs-offset-4 col-xs-4">
            <select name="realCurrency">
                <option value="eur" selected >EUR</option>
                <option value="usd" >USD</option>
            </select>
        </div>
        <div class="col-xs-offset-4 col-xs-4 col-lg-offset-2 col-lg-2">
            <input type="number" value="<?php echo $btcJson->eur; ?>" name="currValue">
        </div>
        <div class="col-xs-offset-4 col-xs-4  col-lg-2">=</div>
        <div class="col-xs-offset-4 col-xs-4  col-lg-2">
            <input type="number" name="btcValue" value="1">
        </div>
        <div class="col-xs-offset-4 col-xs-4  col-lg-2"></div>
        <div class="col-xs-offset-4 col-xs-4">
            <select name="cryptoCurrency">
                <option value="btc" selected >BTC</option>
                <option value="eth" >ETH</option>
            </select>
        </div>
    </section>

    <section id="footer">
        <div class="copyright">
            <ul class="menu">
                <li>&copy; Yaiba782. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                <li>Data : coinmarketcap-nexuist.rhcloud.com/api</li>
            </ul>
        </div>
    </section>
</html>



<?
}else{
    ?>
    WIP !
<?php } ?>