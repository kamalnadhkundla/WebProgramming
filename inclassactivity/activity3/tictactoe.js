let playerTurn = true;
let computerMoveTimeout = 0;
const gameStatus = {
    MORE_MOVES_LEFT: 1,
    HUMAN_WINS: 2,
    COMPUTER_WINS: 3,
    DRAW_GAME: 4
};

window.addEventListener("DOMContentLoaded", domLoaded);

function domLoaded() {
    const newBtn = document.getElementById("newGameButton");
    newBtn.addEventListener("click", newGame);

    const buttons = getGameBoardButtons();
    for (let button of buttons) {
        button.addEventListener("click", function() { boardButtonClicked(button); });
    }

    newGame();
}

function getGameBoardButtons() {
    return document.querySelectorAll("#gameBoard > button");
}

function checkForWinner() {
    const buttons = getGameBoardButtons();
    const possibilities = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // rows
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // columns
        [0, 4, 8], [2, 4, 6] // diagonals
    ];

    for (let indices of possibilities) {
        if (buttons[indices[0]].innerHTML !== "" &&
            buttons[indices[0]].innerHTML === buttons[indices[1]].innerHTML &&
            buttons[indices[1]].innerHTML === buttons[indices[2]].innerHTML) {
            if (buttons[indices[0]].innerHTML === "X") {
                return gameStatus.HUMAN_WINS;
            } else {
                return gameStatus.COMPUTER_WINS;
            }
        }
    }

    for (let button of buttons) {
        if (button.innerHTML !== "X" && button.innerHTML !== "O") {
            return gameStatus.MORE_MOVES_LEFT;
        }
    }

    return gameStatus.DRAW_GAME;
}

function newGame() {
    clearTimeout(computerMoveTimeout);
    computerMoveTimeout = 0;

    const buttons = getGameBoardButtons();
    for (let button of buttons) {
        button.textContent = "";
        button.classList.remove("x", "o");
        button.removeAttribute("disabled");
    }

    playerTurn = true;

    const turnInfo = document.getElementById("turnInfo");
    turnInfo.textContent = "Your turn";
}

function boardButtonClicked(button) {
    if (playerTurn) {
        button.textContent = "X";
        button.classList.add("x");
        button.disabled = true;
        switchTurn();
    }
}

function switchTurn() {
    const result = checkForWinner();

    if (result === gameStatus.MORE_MOVES_LEFT) {
        if (playerTurn) {
            computerMoveTimeout = setTimeout(makeComputerMove, 1000);
        }
        playerTurn = !playerTurn;
        const turnInfo = document.getElementById("turnInfo");
        turnInfo.textContent = playerTurn ? "Your turn" : "Computer's turn";
    } else {
        playerTurn = false;
        const turnInfo = document.getElementById("turnInfo");
        if (result === gameStatus.HUMAN_WINS) {
            turnInfo.textContent = "You win!";
        } else if (result === gameStatus.COMPUTER_WINS) {
            turnInfo.textContent = "Computer wins!";
        } else if (result === gameStatus.DRAW_GAME) {
            turnInfo.textContent = "Draw game";
        }
    }
}

function makeComputerMove() {
    const buttons = getGameBoardButtons();
    const availableButtons = [];

    for (let button of buttons) {
        if (button.textContent === "") {
            availableButtons.push(button);
        }
    }

    const randomIndex = Math.floor(Math.random() * availableButtons.length);
    const chosenButton = availableButtons[randomIndex];

    chosenButton.textContent = "O";
    chosenButton.classList.add("o");
    chosenButton.disabled = true;

    switchTurn();
}
