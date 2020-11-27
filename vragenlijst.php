<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Project 2</title>
    <meta name="description" content="Project 2 Gezond Eten.">
    <meta name="author" content="Justin Alink">
    <link rel="icon" href="favicon.ico" type="ico" sizes="32x32">
    <script defer src="scripts/Vragenlijst.js"></script>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/standaard-style.css">
    <link rel="stylesheet" href="css/vragenlijst-style.css">
    <!--<script defer type="text/javascript" src="js/main.js"></script>-->
</head>

<body>
    <?php
    global $activePage;
    $activePage = "vragenlijst";

    include "includes/header.php";
    include "includes/nav.php";
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Vragenlijst</h1>

                <div class="row">
                    <div class="col col-25 col-m-100">
                        <img src="images/vragenlijst-webdesign.jpg">
                    </div>
                    <div class="col col-75 col-m-100">
                        <p class="inleiding-text">
                            Test je kennis over het onderwerp Gezond Eten
                            met deze quiz. 
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div id="vragenlijst-container" class="col col-m-100 center">
                        <div id="vragenlijst">

                        </div>
                        <div id="knop">
                            <button id="submit">Submit Quiz</button>
                        </div>
                        <div id="resultaat">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "includes/footer.php"
    ?>
</body>

</html>