<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-with, initial-scale=1.0"> 
        <title>Project 2</title>
        <meta name="description" content="Project 2 Gezond Eten.">
        <meta name="author" content="Justin Alink">

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
                    <h1>Welkom op deze site</h1>

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

                    <div id="tiles" class="row">
                        <div class="tile col col-33 col-m-100"><a href="schijfvanvijf.php" id="schijfvanvijf">1</a></div>
                        <div class="tile col col-33 col-m-100"><a href="recepten.php" id="recepten">2</a></div>
                        <div class="tile col col-33 col-m-100"><a href="bmi.php" id="bmi">3</a></div>
                        <div class="tile col col-33 col-m-100"><a href="gezondeten.php" id="gezondeten">4</a></div>
                        <div class="tile col col-33 col-m-100"><a href="vragenlijst.php" id="vragenlijst">5</a></div>
                        <div class="tile col col-33 col-m-100"><a href="svvgame.php" id="ssv-game">6</a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include "includes/footer.php";
        ?>
    </body>
</html>