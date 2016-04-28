<html>
    <head>
        <title>Combien de temps avant la fin ?</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
<!--        <link rel="stylesheet" href="assets/css/main.css" /> -->
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

Quand se finit ton contrat ?
<form action="#" method="post">
    <input type="date" name="date">
    <input type="submit" value="Feu !">
</form>
</body>
</html>

<?php
    /**
     * Created by Yaiba.
     * Date: 28/04/2016
     * Time: 15:09
     */
    if(isset($_POST['date'])){

        $date = DateTime::createFromFormat('Y-m-d',$_POST['date']);
        if(!$date){
            exit('Vous n\'avez pas entré le bon format');
        }

        $ajd = new DateTime('now');
        $fin = new DateTime($_POST['date']);

        $diff = $ajd->diff($fin);

        $diff = $diff->days;

        $period = new DatePeriod($ajd,new DateInterval('P1D'), $fin);

        foreach($period as $jour){
            $curr = $jour->format('D');
            if($curr == 'Sat'|| $curr == 'Sun'){
                $diff--;
            }

        }
        echo " Il te reste ".$diff." jours de travail avant la fin de ton contrat";
    }
