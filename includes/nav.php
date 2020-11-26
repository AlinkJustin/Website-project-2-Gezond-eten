<?php
function isActivePage($currentNavItem) {
    global $activePage;

    echo($activePage === $currentNavItem ? "active-tab" : "");
}
?>

<nav id="sticky">
    <a class="nav-item <?php isActivePage("schijfvanvijf"); ?>" href="schijfvanvijf.php">Schijf van vijf</a>
    <a class="nav-item <?php isActivePage("recepten"); ?>" href="recepten.php">Recepten</a>
    <a class="nav-item <?php isActivePage("bmi"); ?>" href="bmi.php">Bereken BMI</a>
    <a class="nav-item <?php isActivePage("gezondeten"); ?>" href="gezondeten.php">Gezond Eten</a>
    <a class="nav-item <?php isActivePage("vragenlijst"); ?>" href="vragenlijst.php">Gezonde Quiz</a>
    <a class="nav-item <?php isActivePage("svvgame"); ?>" href="svvgame.php">Fruit Clicker</a>
</nav>