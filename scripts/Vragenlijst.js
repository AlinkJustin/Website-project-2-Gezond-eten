function startQuiz() {
    const output = [];

    alleVragen.forEach(
        (huidigeVraag, vraagNummer) => {

            const antwoorden = [];

            for (letter in huidigeVraag.antwoorden) {

                antwoorden.push(
                    `<label>
                <input type="radio" name="vraag${vraagNummer}" value="${letter}">
                ${letter} :
                ${huidigeVraag.antwoorden[letter]}
                </label>`
                );
            }

            output.push(
                `<div class="vraag"> ${huidigeVraag.vraag} </div>
                <div class="antwoorden"> ${antwoorden.join('')} </div>`
            );
        }
    );

    vragenlijstContainer.innerHTML = output.join('');
}

function getResultaat() {
    const antwoordContainers = vragenlijstContainer.querySelectorAll('.antwoorden');

    let correctAantal = 0;

    alleVragen.forEach((huidigeVraag, vraagNummer) => {

        const antwoordContainer = antwoordContainers[vraagNummer];
        const selector = `input[name=vraag${vraagNummer}]:checked`;
        const gebruikerAntwoord = (antwoordContainer.querySelector(selector) || {}).value;

        if (gebruikerAntwoord === huidigeVraag.correcteAntwoord) {
            correctAantal++;
            antwoordContainers[vraagNummer].style.color = 'lightgreen';
        } else {
            antwoordContainers[vraagNummer].style.color = 'red';
        }
    });
    resultaatContainer.innerHTML = `${correctAantal} van de ${alleVragen.length} vragen goed`;
}


const startQuizButton = document.getElementById("startQuiz");
const vragenlijstContainer = document.getElementById("vragenlijst");
const submitButton = document.getElementById("submit");
const resultaatContainer = document.getElementById("resultaat");

const alleVragen = [{
        vraag: "Vraag 1: Wat hoort niet in de schijf van 5?",
        antwoorden: {
            a: "Biefstuk",
            b: "Volkoren brood",
            c: "Yoghurt",
        },
        correcteAntwoord: "a"
    },
    {
        vraag: "Vraag 2: Van welk ontbijt krijg je de meeste energie?",
        antwoorden: {
            a: "Havermout",
            b: "Mars",
            c: "Zakje chips",
        },
        correcteAntwoord: "c"
    },
    {
        vraag: "Vraag 3: Hoeveel stuks fruit moet je minimaal per dag eten?",
        antwoorden: {
            a: "3",
            b: "4",
            c: "1",
        },
        correcteAntwoord: "c"
    },
    {
        vraag: "Vraag 4: Wat bevat meer vezels?",
        antwoorden: {
            a: "Bruin brood",
            b: "Wit brood",
            c: "Beschuit",
        },
        correcteAntwoord: "a"
    },
    {
        vraag: "Vraag 5: Welke vitamine maak je aan onder invloed van zonlicht?",
        antwoorden: {
            a: "Vitamine C",
            b: "Vitamine D",
            c: "Vitamine B:",
        },
        correcteAntwoord: "b"
    },
    {
        vraag: "Vraag 6: Waardoor ontstaat overgewicht?",
        antwoorden: {
            a: "Omdat je te weinig spieren in je lichaam hebt",
            b: "Doordat je je huiswerk niet maakt ",
            c: "Doordat je meer calorieën binnen krijgt dan je lichaam verbruikt",
        },
        correcteAntwoord: "c"
    },
    {
        vraag: "Vraag 7: Je kunt in plaats van fruit net zo goed 2 glazen vruchtensap drinken?",
        antwoorden: {
            a: "Onjuist",
            b: "Misschien",
            c: "Juist",
        },
        correcteAntwoord: "a"
    },
    {
        vraag: "Vraag 8: Naast gezonde voeding is het belangrijk voor een gezond leven om:",
        antwoorden: {
            a: "Te lachen",
            b: "Voldoende te bewegen",
            c: "Al het bovenstaande",
        },
        correcteAntwoord: "c"
    },
    {
        vraag: "Vraag 9: Hoeveel liter vocht moet je minstens per dag drinken?",
        antwoorden: {
            a: "4 L ",
            b: "500 ml",
            c: "1,5 L",
        },
        correcteAntwoord: "c"
    },
    {
        vraag: "Vraag 10: Wat zijn plantaardige voedingsmiddelen?",
        antwoorden: {
            a: "Voedingsmiddelen uit fruit",
            b: "Voedingsmiddelen uit de grond",
            c: "Voedingsmiddelen afkomstig van dieren",
        },
        correcteAntwoord: "a"
    }
];

startQuiz()
submitButton.addEventListener("click", getResultaat);