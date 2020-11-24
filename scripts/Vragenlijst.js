function startQuiz(){
    const output = [];

    alleVragen.forEach(
    (huidigeVraag, vraagNummer) => {

      const antwoorden = [];

      for(letter in huidigeVraag.antwoorden){

        antwoorden.push(
          `<label>
            <input type="radio" name="question${vraagNummer}" value="${letter}">
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

function getResultaat(){

}


const startQuizButton = document.getElementById("startQuiz");
const vragenlijstContainer = document.getElementById("vragenlijst");
const submitVragenContainer = document.getElementById("submit");
const resultaatButton = document.getElementById("resultaat");

const alleVragen = [
    {
    vraag: "Vraag 1:",
    antwoorden:{
        a: "Antwoord A",
        b: "Antwoord B",
        c: "Antwoord C",
    },
    correcteAntwoord: "a, b, c"
},
{
    vraag: "Vraag 2",
    antwoorden:{
        a: "Antwoord A",
        b: "Antwoord B",
        c: "Antwoord C",
    },
    correcteAntwoord: "a, b, c"
},
{
    vraag: "Vraag 3",
    antwoorden:{
        a: "Antwoord A",
        b: "Antwoord B",
        c: "Antwoord C",
    },
    correcteAntwoord: "a, b, c"
},
{
    vraag: "Vraag 4",
    antwoorden:{
        a: "Antwoord A",
        b: "Antwoord B",
        c: "Antwoord C",
    },
    correcteAntwoord: "a, b, c"
}
];

startQuizButton.addEventListener("click", startQuiz);
resultaatButton.addEventListener("click", getResultaat);