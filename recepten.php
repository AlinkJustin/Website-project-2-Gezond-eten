<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Project 2</title>
    <meta name="description" content="Project 2 Gezond Eten.">
    <meta name="author" content="Justin Alink">
    <link rel="icon" href="favicon.ico" type="ico" sizes="32x32">
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
                        <img id="recepten-foto" src="images/recepten pagina foto.jpg">
                    </div>
                    <div class="col col-50 col-m-100">
                        <p class="inleiding-text">
                            Op deze pagina vind u een aantal lekkere en gezonde recepten om te proberen,
                            click op een van de plaatjes om het recept te bekijken.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div id="recept1" class="col col-33 col-m-100">
                        <h3>
                            Ci­a­bat­ta-tos­ti met ro­mi­ge ri­vier­kreef­tjes
                        </h3>
                        <a href="recepten/broodje.php"><img src="images/recepten/lekker broodje ofzo.jpg"></a>
                    </div>
                    <div id="recept2" class="col col-33 col-m-100">
                        <h3>
                            Tor­til­la-piz­za Na­po­leta­na
                        </h3>
                        <a href="recepten/pastaCarbonara.php"><img src="images/recepten/pasta carbonara.jpg"></a>
                    </div>
                    <div id="recept3" class="col col-33 col-m-100">
                        <h3>
                            Pas­ta met zalm en boon­tjes
                        </h3>
                        <a href="recepten/pastaVis.php"><img src="images/recepten/pasta met vis.jpg"></a>
                    </div>
                </div>
                <div class="row">
                    <div id="recept4" class="col col-33 col-m-100">
                        <h3>
                            War­me spruit­jes­sa­la­de met ham
                        </h3>
                        <a href="recepten/spruiten.php"><img src="images/recepten/spruiten met ham.jpg"></a>
                    </div>
                    <div id="recept5" class="col col-33 col-m-100">
                        <h3>
                            Cham­pig­nontaart met tijm
                        </h3>
                        <a href="recepten/taart.php"><img src="images/recepten/taart.jpg"></a>
                    </div>
                    <div id="recept6" class="col col-33 col-m-100">
                        <h3>
                            Smeu­ï­ge spa­ghet­ti car­bo­na­ra
                        </h3>
                        <a href="pizza.php"><img src="images/recepten/img_000847_445x297_JPG.jpg"></a>
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