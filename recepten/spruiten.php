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
        <div class="row">
            <div class="col col-m-100">
                <img src="../images/recepten/img_000815_1600x560_JPG.jpg">
            </div>
        </div>
        <div class="row">
            <div class="col col-25 col-m-100">

                <h2>Ingrediënten</h2>
                <ul>
                    <li>
                        400 g spruitjes
                    </li>
                    <li>
                        30 g walnoten
                    </li>
                    <li>
                        ½ zakje verse bieslook
                    </li>
                    <li>
                        3 eetlepels (olijf)olie
                    </li>
                    <li>
                        1 eetlepel azijn
                    </li>
                    <li>
                        1 mespunt mosterd
                    </li>
                    <li>
                        1 mespunt suiker
                    </li>
                    <li>
                        zout
                    </li>
                    <li>
                        peper
                    </li>
                    <li>
                        100 g hamreepjes
                    </li>
                </ul>
            </div>
            <div class="col col-50 col-m-100">
                <h1>Bereiden</h1>
                Spruitjes schoonmaken. In pan met weinig water spruitjes in ca. 10 minuten beetgaar koken.
                Walnoten fijnhakken. Bieslook fijn knippen.In schaal olie, azijn, mosterd, suiker, zout, peper en bieslook tot dressing kloppen.
                Spruitjes, walnoten en hamreepjes erdoor scheppen.
            </div>
        </div>
    </div>
    <?php
    include "../includes/footer.php";
    ?>
</body>

</html>