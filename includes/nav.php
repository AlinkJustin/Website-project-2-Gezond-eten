<?php

include_once("config.php");

function isActivePage($currentNavItem)
{
    global $activePage;

    echo ($activePage === $currentNavItem ? "active-tab" : "");
}

?>

<nav id="sticky">
    <div class="nav-item <?php isActivePage("schijfvanvijf"); ?>">
        <a href="<?= $baseUrl ?>schoolkantines.php">Artikel School Kantines</a>
    </div>

    <div class="nav-item <?php isActivePage("recepten"); ?> dropdown">
        <a id="dropbutton" href="<?= $baseUrl ?>recepten.php">Recepten</a>
        <div class="dropdown-content">
            <a class="nav-item <?php isActivePage("broodje"); ?>"href="<?= $baseUrl ?>recepten/broodje.php">Broodje</a>
            <a href="<?= $baseUrl ?>recepten/pastaCarbonara.php">Pasta Carbonara</a>
            <a href="<?= $baseUrl ?>recepten/PastaVis.php">Zalm Pasta</a>
            <a href="<?= $baseUrl ?>recepten/pizza.php">Gezonde Pizza</a>
            <a href="<?= $baseUrl ?>recepten/spruiten.php">Spruiten</a>
            <a href="<?= $baseUrl ?>recepten/taart.php">Quiche</a>
        </div>
    </div>

    <div class="nav-item <?php isActivePage("bmi"); ?>">
        <a href="<?= $baseUrl ?>bmi.php">Bereken BMI</a>
    </div>
    <div class="nav-item <?php isActivePage("gezondeten"); ?>">
        <a href="<?= $baseUrl ?>gezondeten.php">Artikel Gezond Eten</a>
    </div>
    <div class="nav-item <?php isActivePage("vragenlijst"); ?>">
        <a href="<?= $baseUrl ?>vragenlijst.php">Gezonde Quiz</a>
    </div>
    <div class="nav-item <?php isActivePage("svvgame"); ?>">
        <a href="<?= $baseUrl ?>svvgame.php">Fruit Clicker</a>
    </div>

    <div class="clear"></div>
</nav>