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
                <img src="../images/recepten/img_000847_1600x560_JPG.jpg">
            </div>
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
            <div class="col col-50 col-m-100">
                <h1>Bereiden</h1>
                <p>
                    <ol>
                        <li>
                        Verwarm de oven voor op 200 ºC. 
                        Bestrijk de tortilla's met de saus. 
                        Snijd de olijven in stukjes. 
                        Bestrooi de pizza's met de kappertjes en de olijfstukjes.
                        </li>
                        Bak de pizza's ca. 8 min. 
                        Verbrokkel de geitenkaas erboven en beleg met de rucola. 
                        Bak de pizza nog ca. 1 min.
                    </ol>
                </p>
            </div>
        </div>
    </div>
    <?php
    include "../includes/footer.php";
    ?>
</body>

</html>