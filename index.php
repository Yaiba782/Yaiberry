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
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-74196136-1', 'auto');
        ga('send', 'pageview');

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
        <div class="presentation col-xs-10 col-xs-offset-1">
            <div class="col-lg-2 divHomeImg">
                <img class="homeImg" src="/images/developper.png" alt="">
            </div>
            <div class="col-lg-7 col-lg-offset-1 text1">
                Hello, hello, hello to my humble website. You will find here some of the stuff I made, or at least links to it.
                As you must have noticed already, I'm way much more a developper/project manager than a <abbr title="PLEASE REMAKE THIS DISGUSTING DESIGN">designer.</abbr>
            </div>
            <div class="col-lg-7 col-lg-offset-1 text2">
                I've started to work as a web developper, doing some hideous back-end tools.
                After a while, I had to start integration, wich was at the begining a real torture. Buuuut, I also learnt a lot, that's kind of what I do sometimes when I want to eat something else than pastas.(thanks Azdzian).
            </div>
            <div class="col-lg-7 col-lg-offset-1 text3">
                Today, I'm more interested in project management. I also am a young entrepreneur wich is nice, the head full of ideas and the pocket (yet) empty of money.
            </div>
        </div>
        <div class="mainBox col-lg-10 col-lg-offset-1 col-xs-12">
            <div class="col-lg-4 col-xs-12">
                <a href="/bitcoin.php">
                    <div class="box box1">
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-xs-12">
                <a target="_blank" href="http://github.com/Yaiba782">
                    <div class="box box2">
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-xs-12"></div>

        </div>

    <script type="text/javascript" src="/includes/js/jquery-2.2.0.min.js"></script>
    <script>
        $('.homeImg').toggle();
        $('.homeImg').fadeToggle(5000);

        $('.text1').toggle();
        $('.text2').toggle();
        $('.text3').toggle();

        $('.text1').slideToggle(1000);
        $('.text2').slideToggle(3000);
        $('.text3').slideToggle(5000);

    </script>
    </body>
</html>