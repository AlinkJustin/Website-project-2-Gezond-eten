<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Project 2</title>
    <meta name="description" content="Project 2 Gezond Eten.">
    <meta name="author" content="Justin Alink">
    <link rel="icon" href="favicon.ico" type="ico" sizes="32x32">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/standaard-style.css">
    <link rel="stylesheet" href="css/index-style.css">
    <!--<script defer type="text/javascript" src="js/main.js"></script>-->
</head>
<body>
    <?php
    include "includes/header.php";
    include "includes/nav.php";
    ?>
    <div class="container">
        <div id="inleiding" class="row">
            <div id="paragraph" class="col">
                <div class="row inleiding">
                    <div class="col col-25 col-m-100">
                        <!--<img id="fruitschaal" src="images/OIP.jfif">-->
                        <div id="fruitschaal"></div>
                    </div>
                    <div class="col col-75 col-m-100">
                    <strong><h1>Welkom op deze site!</h1></strong>
                        <p class="inleiding-text">
                            op deze site vind je een aantal dingen over het thema: <strong>Gezond Eten</strong>!
                            <br>
                            Met de insteek, om je te informeren over wat gezond eten nou precies is.
                        </p>
                    </div>
                </div>
                <hr>
                <div id="tiles" class="row">
                    <div class="tile col col-33 col-m-100">
                        <a href="schijfvanvijf.php" id="schijfvanvijf">
                            <img class="tile-image" src="images/nieuwe-schijf-van-vijf-pleit-variatie-en-onbewerkte-producten.jpg">
                        </a>
                    </div>
                    <div class="tile col col-33 col-m-100">
                        <a href="recepten.php" id="recepten">
                            <img class="tile-image" src="images/recipes-banner.jpg">
                        </a>
                    </div>
                    <div class="tile col col-33 col-m-100">
                        <a href="bmi.php" id="bmi">
                            <img class="tile-image" src="images/BMI-berekenen-1.jpg">
                        </a>
                    </div>
                    <div class="tile col col-33 col-m-100">
                        <a href="gezondeten.php" id="gezondeten">
                            <img class="tile-image" src="images/6000-9-artikelen.jpg">
                        </a>
                    </div>
                    <div class="tile col col-33 col-m-100">
                        <a href="vragenlijst.php" id="vragenlijst">
                            <img class="tile-image" src="images/vragenlijst-webdesign.jpg">
                        </a>
                    </div>
                    <div class="tile col col-33 col-m-100">
                        <a href="svvgame.php" id="ssv-game">
                            <img class="tile-image" src="images/8e502ebced2324e6b580e9e5d984cead.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "includes/footer.php";
    ?>
</body>

</html>