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

   alleVragen.forEach( (huidigeVraag, vraagNummer ) => {

    const antwoordContainer = antwoordContainers[vraagNummer];
    const selector = `input[name=vraag${vraagNummer}]:checked`;
    const gebruikerAntwoord = (antwoordContainer.querySelector(selector) || {}).value;

    if(gebruikerAntwoord === huidigeVraag.correcteAntwoord){
        correctAantal++;
    }
   }
   );
   resultaatContainer.innerHTML = `${correctAantal} van de ${alleVragen.length} vragen goed`; 
}


const startQuizButton = document.getElementById("startQuiz");
const vragenlijstContainer = document.getElementById("vragenlijst");
const submitButton = document.getElementById("submit");
const resultaatContainer = document.getElementById("resultaat");

const alleVragen = [
    {
        vraag: "Vraag 1:",
        antwoorden: {
            a: "Antwoord A",
            b: "Antwoord B",
            c: "Antwoord C",
        },
        correcteAntwoord: "a"
    },
    {
        vraag: "Vraag 2",
        antwoorden: {
            a: "Antwoord A",
            b: "Antwoord B",
            c: "Antwoord C",
        },
        correcteAntwoord: "a"
    },
    {
        vraag: "Vraag 3",
        antwoorden: {
            a: "Antwoord A",
            b: "Antwoord B",
            c: "Antwoord C",
        },
        correcteAntwoord: "a"
    },
    {
        vraag: "Vraag 4",
        antwoorden: {
            a: "Antwoord A",
            b: "Antwoord B",
            c: "Antwoord C",
        },
        correcteAntwoord: "a"
    }
];

startQuizButton.addEventListener("click", startQuiz);
submitButton.addEventListener("click", getResultaat);