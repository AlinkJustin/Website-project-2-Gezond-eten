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
                <img src="../images/recepten/img_000870_1600x560_JPG.jpg">
            </div>
        </div>
        <div class="row">
            <div class="col col-25 col-m-100">

                <h2>Ingrediënten</h2>
                <ul>
                    <li>
                        1 ciabatta afbakbrood
                    </li>
                    <li>
                        ½ zakje verse bieslook
                    </li>
                    <li>
                        100 g verse roomkaas (bakje à 150 g)
                    </li>
                    <li>
                        zout
                    </li>
                    <li>
                        verse witte peper
                    </li>
                    <li>
                        1 bakje rivierkreeftjes (bakje à 100 g AH)
                    </li>
                </ul>
            </div>
            <div class="col col-50 col-m-100">
                <h1>Bereiden</h1>
                <p>
                    Ciabatta in vieren snijden.
                    Elk stuk ciabatta in elektrisch tosti-apparaat of in broodrooster met tostiklem 2 à 3 minuten voorbakken.
                    In kom bieslook fijn knippen, roomkaas toevoegen en goed mengen. Op smaak brengen met zout en peper. Ciabatta doorsnijden.
                    Elke helft van ciabatta aan één zijde met roomkaas besmeren. Eén helft beleggen met rivierkreeftjes.
                    Andere helft van ciabatta met roomkaaszijde naar onder erop leggen. Op zelfde wijze overige stukken ciabatta beleggen.
                    Tosti's in elektrisch tostiapparaat of in broodrooster met tostiklem in 3 à 6 minuten goudbruin bakken.
                </p>
            </div>
        </div>
    </div>
    <?php
    include "../includes/footer.php";
    ?>
</body>

</html>