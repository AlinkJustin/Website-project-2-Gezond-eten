<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Project 2</title>
    <meta name="description" content="Project 2 Gezond Eten.">
    <meta name="author" content="Justin Alink">

    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/standaard-style.css">
    <link rel="stylesheet" href="css/gezondeten-style.css">
    <!--<script defer type="text/javascript" src="js/main.js"></script>-->
</head>

<body>
    <?php
    global $activePage;
    $activePage = "gezondeten";

    include "includes/header.php";
    include "includes/nav.php";
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>gezondeten</h1>

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
                <div class="col col-75 col-m-100">
                    <h5>
                        Gezond eten betekent vooral natuurlijke en gevarieerde voeding.
                        Gouden regel voor gezond eten is daarom afwisseling en maat houden.
                        En een gezonde, evenwichtige voeding kan veel vervelende aandoeningen voorkomen.
                        Ontdek hoe dieet en levensstijl uw welzijn kunnen beïnvloeden.
                    </h5>
                    <h4>
                        Wat is eigenlijk gezond eten?
                    </h4>
                    <p>
                        De meningen over gezond eten lopen nogal uiteen.
                        In talrijke onderzoeken en studies worden standpunten gehuldigd die vaak haaks op elkaar staan.
                        Tientallen jaren bijvoorbeeld werd vet verfoeid,
                        maar tegenwoordig zijn essentiële vetzuren zoals
                        Omega-3 en Omega-6 door voedingsdeskundigen weer in ere hersteld.
                        <br>
                        <br>
                        Dat de voedingswetenschappers tot zulke uiteenlopende opvattingen komen,
                        wordt ook veroorzaakt door de aard van hun onderzoeksopdracht.
                        Ons fysieke welzijn wordt door veel zaken beïnvloed,
                        niet alleen door wat we eten.
                        Daar komt bij dat nauwkeurige onderzoeken naar de eetgewoonten van mensen duur en ingewikkeld zijn.
                        <br>
                        <br>
                        Vaak beperken onderzoeken zich alleen tot bepaalde deelgebieden of wijden ze zich aan een enkel ingrediënt,
                        zonder andere elementen daarbij te betrekken. 
                        Waterdichte bewijzen van positieve effecten van afzonderlijke voedingsmiddelen zijn er bijna niet. 
                        Daarom moeten geïnteresseerde leken al te nadrukkelijke beloftes en aanbevelingen met een gezonde portie argwaan bekijken.
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