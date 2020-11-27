<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Project 2</title>
    <meta name="description" content="Project 2 Gezond Eten.">
    <meta name="author" content="Justin Alink">
    <link rel="icon" href="favicon.ico" type="ico" sizes="32x32">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/standaard-style.css">
    <!--<script defer type="text/javascript" src="js/main.js"></script>-->
</head>

<body>
    <?php
    global $activePage;
    $activePage = "recepten";

    include "../includes/header.php";
    include "../includes/nav.php";
    ?>
    <div class="container">
        <div class="row">
            <div class="col col-m-100">
                <img src="../images/recepten/img_013152_1600x560_JPG.jpg">
            </div>
        </div>
        <div class="row">
            <div class="col col-25 col-m-100">
                <h2>Ingrediënten</h2>
                <ul>
                    <li>
                        350 g fusilli
                    </li>
                    <li>
                        600 g diepvries snijbonen
                    </li>
                    <li>
                        2 uien
                    </li>
                    <li>
                        2 el olijfolie extra vierge
                    </li>
                    <li>
                        250 ml halfvolle melk
                    </li>
                    <li>
                        250 ml kraanwater
                    </li>
                    <li>
                        70 g mix voor tagliatelle roomsaus (pakje)
                    </li>
                    <li>
                        425 g roze zalm in blik (blikje à 213 g)
                    </li>
                </ul>
            </div>
            <div class="col col-50 col-m-100">
                <h1>Bereiden</h1>
                <ol>
                    <li>
                        Kook de pasta volgens de aanwijzingen op de verpakking. Kook de snijbonen 5 min. in een pan.
                    </li>
                    <li>
                        Snipper de ui. Verhit de olie in een koekenpan en fruit de ui.
                        Voeg de melk, het water en de mix voor de roomsaus toe aan de uien. Laat 2 min. zachtjes koken.
                    </li>
                    <li>
                        Giet die de zalm af en verwijder de graatjes en velletjes. Voeg de zalm aan de saus toe en verwarm.
                        Meng de pasta met de snijbonen, en verdeel over de borden. Schenk de saus over de fusilli.
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <?php
    include "../includes/footer.php";
    ?>
</body>

</html>