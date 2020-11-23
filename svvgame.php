<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-with, initial-scale=1.0"> 
        <title>Project 2</title>
        <meta name="description" content="Project 2 Gezond Eten.">
        <meta name="author" content="Justin Alink">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/standaard-style.css">
        <link rel="stylesheet" href="css/svvgame-style.css">
        <script defer type="text/javascript" src="scripts/FruitClicker.js"></script>
    </head>
    <body>
        <?php 
                    global $activePage;
                    $activePage = "svvgame";

            include "includes/header.php";
            include "includes/nav.php";
        ?>
   <div class="container">
        <div class="row">
            <div class="col">
                <h1>svvgame</h1>

                <div class="row">
                    <div class="col col-25 col-m-100">
                        <!--<img id="fruitschaal" src="images/OIP.jfif">-->
                        <div id="fruitschaal"></div>
                    </div>
                    <div class="col col-75 col-m-100">
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
                </div>

                <hr>
                <div>
                    <input type="button" id="hoofdfruit" value="Fruit">
                    <input type="button" id="item1" value="Item 1">
                    <input type="button" id="item2" value="Item 2"> 
                    <input type="button" id="item3" value="Item 3"> 
                    <div class="stats">
                        
                        aantal Fruit: <span id="fruitAantal"></span><br>
                        prijs Item 1: <span id="item1Prijs"></span><br>
                        aantal Item 1: <span id="item1Aantal"></span><br>
                        aantal Item 2: <span id="item2Aantal"></span><br>
                        aantal Item 3: <span id="item3Aantal"></span><br>
                        Fps: <span id="fruitPerSeconde"></span><br>
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