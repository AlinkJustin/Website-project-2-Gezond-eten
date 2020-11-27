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
    <link rel="stylesheet" href="css/bmi-style.css">
    <!--<script defer type="text/javascript" src="js/main.js"></script>-->
</head>

<body>
    <?php
    global $activePage;
    $activePage = "bmi";

    include "includes/header.php";
    include "includes/nav.php";
    ?>

    <div class="container">
        <div id="inleiding" class="row">
            <div id="paragraph" class="col">
                <h1>Bereken BMI</h1>

                <div class="row inleiding">
                    <div class="col-25 col-m-100">
                        <img id="bmi-foto" src="images/BMI-berekenen-1.jpg">
                    </div>
                    <div class="col-75 col-m-100">
                        <p class="inleiding-text">
                            op deze pagina kunt u uw BMI berekenen.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div id="inhoud-bmi" class="row">
            <div id="user-input" class="col col-25 col-m-100">
                <form method="post">
                    <div id="text">
                        <label for="gewicht">Gewicht in KG: </label>
                        <input type="text" class="userbmi control" name="gewicht" placeholder="Vul uw gewicht in">
                        <label for="lengte">Lengte in CM: </label>
                        <input type="text" class="userbmi control" name="lengte" placeholder="Vul uw lengte in">
                        <label for="leeftijd">Leeftijd: </label>
                        <input type="text" class="userbmi control" name="leeftijd" placeholder="vul uw leeftijd in">
                    </div>
                    <div id="radio">
                        <label for="geslacht">Geslacht: </label><br>
                        <label for="geslacht">Man: </label>
                        <input type="radio" class="userbmi" name="geslacht" value="Man">
                        <label for="gelacht">Vrouw: </label>
                        <input type="radio" class="userbmi" name="geslacht" value="Vrouw">
                    </div>
                    <input id="bmi-submit" type="submit" Value="Submit" class="userbmi" name="submit">
                </form>
            </div>
            <div id="result" class="center col col-75 col-m-100">
                <div class="col center col-50 col-m-100">
                    <?php
                    include 'includes/BMI-Berekenaar.php'
                    ?>
                    <br>
                    <h3>
                        Wat is je BMI?
                    </h3>
                    <p>
                        BMI is een afkorting voor Body Mass Index. Dit is de verhouding tussen je lengte en je gewicht.
                        Aan de hand van je BMI wordt gekeken naar de gezondheidsrisico’s van die verhouding voor je lijf.
                        Met een makkelijke formule kun je je eigen BMI berekenen. Dit is die formule:
                            <br>
                        <strong>Massa (gewicht in kilogram) / lengte² (lengte in meters in het kwadraat) = BMI</strong>
                        <br>
                        Stel je bent 1 meter en 76 centimeter lang en je weeg 74 kilo.
                        Dan neem je gewicht (74 kilo) en deel je dat getal door je lengte in het kwadraat 1,76 x 1,76 = 3,09.
                        Je krijgt dan dus 74/3,09 = 23.9. Je BMI is dus 23.9. Maar is dat goed? Daarvoor pakken we er een schema bij.
                        <br>
                        <h5>Is je BMI…</h5>
                        <ul>
                            <li>… minder dan 18,5 dan is er sprake van ondergewicht.</li>
                            <li>… tussen de 18,5 en 24,9 dan heb je een gezond gewicht</li>
                            <li>… tussen de 25 en 29,9 dan is er sprake van overgewicht</li>
                            <li>… boven de 30 dan is er sprake van obesitas</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "includes/footer.php";
    ?>
</body>

</html>