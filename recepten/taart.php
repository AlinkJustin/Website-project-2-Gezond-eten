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
                <img src="../images/recepten/img_013652_1600x560_JPG.jpg">
            </div>
        </div>
        <div class="row">
            <div class="col col-25 col-m-100">

                <h2>Ingrediënten</h2>
                <ul>
                    <li>
                        1 bakje champignons (250 g)
                    </li>
                    <li>
                        1 bakje verse tijm (15 g)
                    </li>
                    <li>
                        1 zak champignon roerbakmix (400 g)
                    </li>
                    <li>
                        2 el olijfolie
                    </li>
                    <li>
                        6 eieren
                    </li>
                    <li>
                        150 ml melk
                    </li>
                    <li>
                        1 zakje gemalen kaas (belegen (175 g))
                    </li>
                    <li>
                        1 pakje bladerdeeg ((10 vellen, diepvries), ontdooid)
                    </li>
                    <li>
                        boter (om in te vetten)
                    </li>
                </ul>
            </div>
            <div class="col col-50 col-m-100">
                <h1>Bereiden</h1>
                Verwarm de oven voor op 200 °C. 
                Maak de champignons schoon met keukenpapier en snijd ze in vieren. 
                Ris de tijmblaadjes van de takjes en meng ze in een kom met de roerbakmix en de champignons.
                Voeg naar smaak peper en zout toe. Verhit de olie in een wok en roerbak het champignonmengsel 4 min. 
                Klop de eieren los in een grote kom met de melk, kaas en peper en zout. 
                Bekleed de springvorm met deeg en prik met een vork enkele gaatjes in de bodem. 
                Schep het champignonmengsel in de vorm en verdeel het eimengsel er gelijkmatig over. 
                Bak de taart in het midden van de oven in ca. 25 min. goudbruin en gaar.
            </div>
        </div>
    </div>
    <?php
    include "../includes/footer.php";
    ?>
</body>

</html>