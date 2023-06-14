<!DOCTYPE html>
<!-- Coding by CodingLab || www.codinglabweb.com -->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Game in HTML CSS & JavaScript</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;z
  font-family: "Poppins", sans-serif;
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #4a98f7;
}
.wrapper {
  padding: 30px 40px;
  border-radius: 12px;
  background: #fff;
  text-align: center;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.wrapper header {
  font-size: 18px;
  font-weight: 400;
  color: #333;
}
.wrapper p {
  color: #333;
}
.wrapper .input-field {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin: 25px 0;
}
.input-field input,
.input-field button {
  height: 50px;
  width: calc(100% / 2 - 20px);
  outline: none;
  padding: 0 20px;
  border-radius: 8px;
  font-size: 18px;
}
.input-field input {
  text-align: center;
  color: #707070;
  width: 110px;
  border: 1px solid #aaa;
}
input::-webkit-inner-spin-button,
input::-webkit-outer-spin-button {
  display: none;
}
.input-field input:disabled {
  cursor: not-allowed;
}
.input-field button {
  border: none;
  background: #4a98f7;
  color: #fff;
  cursor: pointer;
  transition: 0.3s;
}
.input-field button:active {
  transform: scale(0.97);
}
  </style>
</head>

<body>
  <div class="wrapper">
    <header>Guess a number from 1 to 100</header>
    <p class="guess"></p>
    <div class="input-field">
      <input type="number" />
      <button>Check</button>
    </div>
    <p>You have <span class="chances">10</span> chances</p>
  </div>
  <script>
    // Get the DOM elements and initialize the game
const input = document.querySelector("input"),
  guess = document.querySelector(".guess"),
  checkButton = document.querySelector("button"),
  remainChances = document.querySelector(".chances");

// Set the focus on input field
input.focus();

let randomNum = Math.floor(Math.random() * 100);
chance = 10;

// Listen for the click event on the check button
checkButton.addEventListener("click", () => {
  // Decrement the chance variable on every click
  chance--;
  // Get the value from the input field
  let inputValue = input.value;
  // Check if the input value is equal to the random number
  if (inputValue == randomNum) {
    // Update guessed number, disable input, check button text and color.
    [guess.textContent, input.disabled] = ["Congratulations", true];
    [checkButton.textContent, guess.style.color] = ["Replay", "#333"];
    //Check if input value is > random number and within 1-99 range.
  } else if (inputValue > randomNum && inputValue < 100) {
    // Update the guess text and remaining chances
    [guess.textContent, remainChances.textContent] = [
      "Your guess is high",
      chance
    ];
    guess.style.color = "#333";
    //Check if input value is < random number and within 1-99 range.
  } else if (inputValue < randomNum && inputValue > 0) {
    // Update the guessed number text and remaining chances
    [guess.textContent, remainChances.textContent] = [
      "Your guess is low",
      chance
    ];
    guess.style.color = "#333";
    // If the input value is not within the range of 1 to 99
  } else {
    // Update the guessed number text, color and remaining chances
    [guess.textContent, remainChances.textContent] = [
      "Your number is invalid",
      chance
    ];
    guess.style.color = "#DE0611";
  }
  // Check if the chance is zero
  if (chance == 0) {
    //Update check button, disable input, and clear input value.
    // Update guessed number text and color to indicate user loss.
    [checkButton.textContent, input.disabled, inputValue] = [
      "Replay",
      true,
      ""
    ];
    [guess.textContent, guess.style.color] = ["You lost the game", "#DE0611"];
  }
  if (chance < 0) {
    window.location.reload();
  }
});
  </script>
</body>

</html>