<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-with, initial-scale=1.0"> 
        <title>Project 2</title>
        <meta name="description" content="Project 2 Gezond Eten.">
        <meta name="author" content="Justin Alink">
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

        <div id="inleiding">
            <h1>Bereken BMI</h1>
        </div>
        <div id="paragraph">
            <img id="fruitschaal" src="images/OIP.jfif">
            <p id="placeholder">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa. 
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
                Nulla consequat massa quis enim. 
                Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. 
                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
            </p>
        </div>
        <hr>
        <div id="inhoud-bmi" class="row">
            <div id="user-input" class="col col-25">
                <form method="post">
                    <div id="text">
                        <label for="gewicht">Gewicht in KG: </label>
                        <input type="text" class="userbmi" name="gewicht" placeholder="Vul uw gewicht in">
                        <label for="lengte">Lengte in CM: </label>
                        <input type="text" class="userbmi" name="lengte" placeholder="Vul uw lengte in">
                        <label for="leeftijd">Leeftijd: </label>
                        <input type="text" class="userbmi" name="leeftijd" placeholder="vul uw leeftijd in">
                    </div>
                    <div id="radio">
                        <label for="geslacht">Geslacht: </label><br>
                        <label for="geslacht">Man: </label>
                        <input type="radio" class="userbmi" name="geslacht" value="Man">
                        <label for="gelacht">Vrouw: </label>
                        <input type="radio" class="userbmi" name="geslacht" value="Vrouw">
                    </div>
                    <input type="submit" Value="Submit" class="userbmi" name="submit">
                </form>
            </div>
            <div id="result" class="col col-75">
                <?php 
                    include 'includes/BMI-Berekenaar.php'   
                ?>
            </div>
        </div>
        <?php
            include "includes/footer.php";
        ?>
    </body>
</html>