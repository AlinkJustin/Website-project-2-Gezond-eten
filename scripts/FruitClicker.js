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
    },
    {
        aantal: 0,
        basisPrijs: 2000,
        aantalPerSeconde: 7.5,
    },
    {
        aantal: 0,
        basisPrijs: 5000,
        aantalPerSeconde: 10,
    },
    {
        aantal: 0,
        basisPrijs: 10000,
        aantalPerSeconde: 15,
    },
    {
        aantal: 0,
        basisPrijs: 20000,
        aantalPerSeconde: 25,
    },
    {
        aantal: 0,
        basisPrijs: 50000,
        aantalPerSeconde: 50,
    }
];
var aantal = 0;
document.getElementById("hoofdfruit").addEventListener("click", clickedHoofdFruit);

document.getElementById("item1").addEventListener("click", clickedItem1);
document.getElementById("item2").addEventListener("click", clickedItem2);
document.getElementById("item3").addEventListener("click", clickedItem3);
document.getElementById("item4").addEventListener("click", clickedItem4);
document.getElementById("item5").addEventListener("click", clickedItem5);
document.getElementById("item6").addEventListener("click", clickedItem6);
document.getElementById("item7").addEventListener("click", clickedItem7);
document.getElementById("item8").addEventListener("click", clickedItem8);

function clickedHoofdFruit() {
    aantal += getAantalPerClick();
    updateStats();
}
function clickedItem(itemData){
    if (aantal < itemData.basisPrijs) {
        alert("Je hebt nog niet genoeg fruit om dit te kopen!");
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
function clickedItem4() {
    var itemData = items[3];
    clickedItem(itemData);
}
function clickedItem5() {
    var itemData = items[4];
    clickedItem(itemData);
}
function clickedItem6() {
    var itemData = items[5];
    clickedItem(itemData);
}
function clickedItem7() {
    var itemData = items[6];
    clickedItem(itemData);
}
function clickedItem8() {
    var itemData = items[7];
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
    document.getElementById("item4Prijs").innerText = items[3].basisPrijs;
    document.getElementById("item4Aantal").innerText = items[3].aantal;
    document.getElementById("item5Prijs").innerText = items[4].basisPrijs;
    document.getElementById("item5Aantal").innerText = items[4].aantal;
    document.getElementById("item6Prijs").innerText = items[5].basisPrijs;
    document.getElementById("item6Aantal").innerText = items[5].aantal;
    document.getElementById("item7Prijs").innerText = items[6].basisPrijs;
    document.getElementById("item7Aantal").innerText = items[6].aantal;
    document.getElementById("item8Prijs").innerText = items[7].basisPrijs;
    document.getElementById("item8Aantal").innerText = items[7].aantal;
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