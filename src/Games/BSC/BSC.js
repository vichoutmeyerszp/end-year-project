const result = document.getElementById("result");
const steen = document.getElementById("steen");
const papier = document.getElementById("papier");
const schaar = document.getElementById("schaar");
const reset = document.getElementById("reset");

function convertToWord(word) {
    if (word === "steen") return "Steen";
    if (word === "papier") return "Papier";
    if (word === "schaar") return "Schaar";
}

function getComputerChoice() {
    const choices = ['steen', 'papier', 'schaar'];
    const randomNumber = Math.floor(Math.random() * 3);
    return choices[randomNumber];
}

function win(userChoice, computerChoice) {
    result.innerHTML = convertToWord(userChoice) + " wint van " + convertToWord(computerChoice) + ". Gewonnen!";
}

function lose(userChoice, computerChoice) {
    result.innerHTML = convertToWord(userChoice) + " verliest van " + convertToWord(computerChoice) + ". Jammer, verloren...";
}

function tie(userChoice, computerChoice) {
    result.innerHTML = convertToWord(userChoice) + " is hetzelfde als " + convertToWord(computerChoice) + ". Gelijkspel.";
}

function game(userChoice) {
    const computerChoice = getComputerChoice();
    switch (userChoice + computerChoice) {
        case "steenschaar":
        case "papiersteen":
        case "schaarpapier":
            win(userChoice, computerChoice);
            break;
        case "steenpapier":
        case "papierschaar":
        case "schaarsteen":
            lose(userChoice, computerChoice);
            break;
        case "steensteen":
        case "papierpapier":
        case "schaarschaar":
            tie(userChoice, computerChoice);
            break;
    }
}

function main() {
    rock.addEventListener("click", function () {
        game("steen");
    })

    paper.addEventListener("click", function () {
        game("papier");
    })

    scissors.addEventListener("click", function () {
        game("schaar");
    })

    reset.addEventListener("click", function () {
        window.location.reload();
    })
}

main();