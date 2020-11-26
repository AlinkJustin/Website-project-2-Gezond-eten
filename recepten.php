<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Project 2</title>
    <meta name="description" content="Project 2 Gezond Eten.">
    <meta name="author" content="Justin Alink">

    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/standaard-style.css">
    <link rel="stylesheet" href="css/recepten-style.css">
    <!--<script defer type="text/javascript" src="js/main.js"></script>-->
</head>

<body>
    <?php
    global $activePage;
    $activePage = "recepten";

    include "includes/header.php";
    include "includes/nav.php";
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>recepten</h1>

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
                <div class="row">
                    <div id="recept1" class="col col-33 col-m-100">
                        <a><img src="images/recepten/lekker broodje ofzo.jpg"></a>
                    </div>
                    <div id="recept2" class="col col-33 col-m-100">
                        <a><img src="images/recepten/pasta carbonara.jpg"></a>
                    </div>
                    <div id="recept3" class="col col-33 col-m-100">
                    <a><img src="images/recepten/pasta met vis.jpg"></a>
                    </div>
                </div>
                <div class="row">
                    <div id="recept4" class="col col-33 col-m-100">
                        <a><img src="images/recepten/spruiten met ham.jpg"></a>
                    </div>
                    <div id="recept5" class="col col-33 col-m-100">
                        <a><img src="images/recepten/taart.jpg"></a>
                    </div>
                    <div id="recept6" class="col col-33 col-m-100">
                        <a><img src="images/recepten/img_000847_445x297_JPG.jpg"></a>
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