var items = [
    {
        aantal:0,
        basisPrijs: 10,
        aantalPerSeconde: 0.5,
    },
    {
        aantal:0,
        basisPrijs: 100,
        aantalPerSeconde: 2,
    },
    {
        aantal:0,
        basisPrijs: 500,
        aantalPerSeconde: 5,
    }
];
var aantal = 0;
document.getElementById("hoofdfruit").addEventListener("click", clickedHoofdFruit);

document.getElementById("item1").addEventListener("click", clickedItem1);
document.getElementById("item2").addEventListener("click", clickedItem2);
document.getElementById("item3").addEventListener("click", clickedItem3);

function clickedHoofdFruit(){
    aantal +=getAantalPerClick();
    updateStats();
}
function clickedItem1(){
    var itemData = items[0];
    if(aantal < itemData.basisPrijs){
        return;
    }
    aantal -= itemData.basisPrijs;
    itemData.basisPrijs = Math.round(itemData.basisPrijs  * 1.10);
    itemData.aantal += 1;
    updateStats()
}
function clickedItem2(){
    alert("Item2");
}
function clickedItem3(){
    alert("Item3");
}
function updateStats(){
    document.getElementById("fruitAantal").innerText = aantal;
    document.getElementById("item1Prijs").innerText = items[0].basisPrijs;
    document.getElementById("item1Aantal").innerText = items[0].aantal;
    document.getElementById("item2Prijs").innerText = items[1].basisPrijs;
    document.getElementById("item2Aantal").innerText = items[1].aantal;
    document.getElementById("item3Prijs").innerText = items[2].basisPrijs;
    document.getElementById("item3Aantal").innerText = items[2].aantal;
    document.getElementById("fruitPerSeconde").innerText = getAantalPerSeconde();
}
function getAantalPerClick(){
    return 1;
}
function getAantalPerSeconde(){
    return items[0].aantal * items[0].aantalPerSeconde;
}
setInterval(() => {
    aantal +=getAantalPerSeconde();
    updateStats();
}, 1000);
updateStats()

// aantal = upgradebaar, begint bij 1
// upgrade kost veel
// teller begint bij 0
// upgrade 1 kost 10 om mee te beginnen.
// bij iedere aankoop 10% bovenop basis kosten, nieuwe aantal is nieuwe basis kosten,
// zodat upgrade later erg duur wordt
// upgrade 1 geeft 0.5 Fruit per seconden
// upgrade 2 geeft 2 Fps
// upgrade 3 geeft 5 Fps
// latere upgrades komen nog
// kan een oneindig aantal upgrades van alle upgrades kopen