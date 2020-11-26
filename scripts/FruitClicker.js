var items = [
    {
        aantal: 0,
        basisPrijs: 10,
        aantalPerSeconde: 0.5,
    },
    {
        aantal: 0,
        basisPrijs: 100,
        aantalPerSeconde: 2,
    },
    {
        aantal: 0,
        basisPrijs: 500,
        aantalPerSeconde: 5,
    }
];
var aantal = 0;
document.getElementById("hoofdfruit").addEventListener("click", clickedHoofdFruit);

document.getElementById("item1").addEventListener("click", clickedItem1);
document.getElementById("item2").addEventListener("click", clickedItem2);
document.getElementById("item3").addEventListener("click", clickedItem3);

function clickedHoofdFruit() {
    aantal += getAantalPerClick();
    updateStats();
}
function clickedItem(itemData){
    if (aantal < itemData.basisPrijs) {
        return;
    }
    aantal -= itemData.basisPrijs;
    itemData.basisPrijs = Math.round(itemData.basisPrijs * 1.10);
    itemData.aantal += 1;
    updateStats()
}
function clickedItem1() {
    var itemData = items[0];
    clickedItem(itemData);
}
function clickedItem2() {
    var itemData = items[1];
    clickedItem(itemData);
}
function clickedItem3() {
    var itemData = items[2];
    clickedItem(itemData);
}
function updateStats() {
    document.getElementById("fruitAantal").innerText = Math.floor(aantal);
    document.getElementById("item1Prijs").innerText = items[0].basisPrijs;
    document.getElementById("item1Aantal").innerText = items[0].aantal;
    document.getElementById("item2Prijs").innerText = items[1].basisPrijs;
    document.getElementById("item2Aantal").innerText = items[1].aantal;
    document.getElementById("item3Prijs").innerText = items[2].basisPrijs;
    document.getElementById("item3Aantal").innerText = items[2].aantal;
    document.getElementById("fruitPerSeconde").innerText = getAantalPerSeconde();
}
function getAantalPerClick() {
    return 1;
}
function getAantalPerSeconde() {
    var totaal = 0;
    for(var i = 0; i < items.length; i++){
      totaal += items[i].aantal * items[i].aantalPerSeconde;
    }
        return totaal;
    
}
setInterval(() => {
    aantal += getAantalPerSeconde();
    updateStats();
}, 1000);
updateStats();