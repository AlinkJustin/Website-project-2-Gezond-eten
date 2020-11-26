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
                <div class="row" id="game-container">
                    <div class="col col-50 col-m-100">
                        <div class="center-block">
                            <div>
                                <h2>aantal Fruit: <h2><span id="fruitAantal"></span>
                            </div>
                            <div id="hoofdfruit"></div>
                            <div>
                                <h2>Fps: </h2><span id="fruitPerSeconde"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col col-50 col-m-100">
                        <div class="row">
                            <div class="col col-50 col-m-100">
                                <input type="button" class="upgrade-button" id="item1" value="Item 1">
                            </div>
                            <div class="col col-50 col-m-100">
                                <div>Kost: <span id="item1Prijs"></span> Fruit</div>
                                <div>in bezitting: <span id="item1Aantal"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-50 col-m-100">
                                <input type="button" class="upgrade-button" id="item2" value="Item 2">
                            </div>
                            <div class="col col-50 col-m-100">
                                <div>Kost: <span id="item2Prijs"></span> Fruit</div>
                                <div>in bezitting: <span id="item2Aantal"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-50 col-m-100">
                                <input type="button" class="upgrade-button" id="item3" value="Item 3">
                            </div>
                            <div class="col col-50 col-m-100">
                                <div>Kost: <span id="item3Prijs"></span> Fruit</div>
                                <div>in bezitting: <span id="item3Aantal"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-50 col-m-100">
                                <input type="button" class="upgrade-button" id="item4" value="Item 4">
                            </div>
                            <div class="col col-50 col-m-100">
                                <div>Kost: <span id="item4Prijs"></span> Fruit</div>
                                <div>in bezitting: <span id="item4Aantal"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-50 col-m-100">
                                <input type="button" class="upgrade-button" id="item5" value="Item 5">
                            </div>
                            <div class="col col-50 col-m-100">
                                <div>Kost: <span id="item5Prijs"></span> Fruit</div>
                                <div>in bezitting: <span id="item5Aantal"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-50 col-m-100">
                                <input type="button" class="upgrade-button" id="item6" value="Item 6">
                            </div>
                            <div class="col col-50 col-m-100">
                                <div>Kost: <span id="item6Prijs"></span> Fruit</div>
                                <div>in bezitting: <span id="item6Aantal"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-50 col-m-100">
                                <input type="button" class="upgrade-button" id="item7" value="Item 7">
                            </div>
                            <div class="col col-50 col-m-100">
                                <div>Kost: <span id="item7Prijs"></span> Fruit</div>
                                <div>in bezitting: <span id="item7Aantal"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-50 col-m-100">
                                <input type="button" class="upgrade-button" id="item8" value="Item 8">
                            </div>
                            <div class="col col-50 col-m-100">
                                <div>Kost: <span id="item8Prijs"></span> Fruit</div>
                                <div>in bezitting: <span id="item8Aantal"></span></div>
                            </div>
                        </div>
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