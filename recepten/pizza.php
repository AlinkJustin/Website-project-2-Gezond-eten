<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Project 2</title>
    <meta name="description" content="Project 2 Gezond Eten.">
    <meta name="author" content="Justin Alink">

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
        <div id="inleiding" class="row">
            <div id="paragraph" class="col">
                <h1>Recept: Tor­til­la-piz­za Na­po­leta­na</h1>
            </div>
        </div>
        <div class="row">
            <div class="col col-25 col-m-100">
                <img src="../images/recepten/img_000847_445x297_JPG.jpg">
            </div>
            <div class="col col-50 col"
        </div>
        <div class="row">
            <div class="col col-25 col-m-100">
                <h2>Ingrediënten</h2>
                <ul>
                    <li>
                        4 tortillawraps
                    </li>
                    <li>
                        260 g Napoletanasaus met basilicum (pot)
                    </li>
                    <li>
                        100 g zwarte olijven zonder pit
                    </li>
                    <li>
                        2 el kappertjes
                    </li>
                    <li>
                        150 g zachte geitenkaas
                    </li>
                    <li>
                        75 g rucola
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php
    include "../includes/footer.php";
    ?>
</body>

</html>