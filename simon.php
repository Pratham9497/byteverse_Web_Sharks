<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/game.png">
  <title>Simon says</title>
  <style>
    * {
      margin: 0;
      padding: 0
    }

    body {
      background-color: #0a0a0a;
      font-family: sans-serif
    }

    header {
      padding: 1rem;
      position: absolute;
      left: 3%;
      top: 5%;
      border: 4px solid #dfdfdf;
      animation: left .6s
    }

    @keyframes left {
      0% {
        left: -100%
      }

      100% {
        left: 3%
      }
    }

    header span {
      font-size: 2.6rem;
      font-weight: 600;
      display: block;
      color: #dfdfdf;
      border-radius: .4rem
    }

    header span:nth-child(1),
    header span:nth-child(2) {
      display: inline-block
    }

    header span:nth-child(1) .letter {
      color: #0a0a0a;
      background-color: rgba(255, 0, 0, .9);
      height: 2.8rem
    }

    header span:nth-child(2) .letter {
      color: #0a0a0a;
      background-color: #01a501;
      height: 2.8rem
    }

    header div span:nth-child(1) .letter {
      color: #0a0a0a;
      background-color: #0385f0
    }

    header div span:nth-child(2) .letter {
      color: #0a0a0a;
      background-color: rgba(255, 255, 0, .8);
      width: 1.6rem
    }

    main {
      width: 100%;
      height: 100vh;
      display: grid;
      align-items: end;
      justify-content: center
    }

    .round-info-container {
      position: absolute;
      right: 15%;
      top: 5%;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1.6rem;
      animation: top .6s
    }

    @keyframes top {
      0% {
        top: -100%
      }

      100% {
        top: 5%
      }
    }

    .round-info-container div {
      border: 4px solid #dfdfdf;
      color: #dfdfdf;
      border-radius: .4rem;
      width: 150px
    }

    .round-info-container div:nth-child(2) {
      width: 100px
    }

    .round-info-container p {
      font-size: 1.6rem;
      font-weight: 600;
      padding: .1rem .5rem;
      color: #0a0a0a;
      background-color: #dfdfdf;
      letter-spacing: .04rem;
      display: flex;
      justify-content: center
    }

    .round-info-container span {
      font-weight: 600;
      padding: .5rem;
      font-size: 1.2rem;
      display: flex;
      justify-content: center;
      font-size: 1.3rem
    }

    .round-info-container .round-num-text {
      font-size: 1.8rem;
      font-weight: 1000;
      color: red
    }

    .squares-container {
      display: grid;
      grid-template-columns: 124px 124px;
      grid-template-rows: 124px 124px;
      gap: 1.2rem;
      padding: 2rem;
      rotate: 45deg;
      background-color: #1e1e1e;
      border-radius: .3rem
    }

    .squares-container .square {
      width: 124px;
      height: 124px;
      border-radius: .2rem;
      opacity: .9;
      transition: opacity .3s
    }

    .squares-container .square:hover {
      cursor: pointer
    }

    .squares-container .square:nth-child(1) {
      background-color: #a50000
    }

    .squares-container .square:nth-child(2) {
      background-color: #00a500
    }

    .squares-container .square:nth-child(3) {
      background-color: #005ba5
    }

    .squares-container .square:nth-child(4) {
      background-color: #a5a500
    }

    .start-btn-container {
      margin-top: 1rem;
      align-self: flex-start
    }

    .start-btn-container #start {
      margin-right: .5rem;
      border: none;
      width: 86px;
      height: 40px;
      color: #0a0a0a;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: .08rem;
      font-size: .9rem;
      background-color: #dfdfdf;
      border-radius: .4rem;
      transition: all .5s
    }

    .start-btn-container #start:hover {
      background-color: #5c5c5c;
      cursor: pointer
    }

    .start-btn-container #start:active {
      background-color: lime
    }

    footer {
      color: #dfdfdf;
      position: absolute;
      width: 200px;
      margin: .9rem;
      bottom: 0;
      right: 0
    }

    footer a {
      color: #0385f0
    }

    @media(max-width: 1024px) {
      header {
        top: 0;
        left: 0;
        max-width: 300px
      }

      @keyframes left {
        0% {
          left: -100%
        }

        100% {
          left: 0
        }
      }

      .round-info-container {
        right: 4%
      }
    }

    @media(max-width: 800px) {
      header {
        max-width: 230px;
        position: relative;
        margin: 1rem auto
      }

      .round-info-container {
        position: static;
        padding: 1rem 0;
        gap: 1rem;
        flex-direction: row;
        justify-content: space-around;
        align-self: flex-start;
        animation: none
      }

      .round-info-container div {
        width: 140px
      }

      .round-info-container p {
        font-size: 1rem
      }

      .round-info-container span {
        font-size: 1rem
      }

      .round-info-container .round-num-text {
        font-size: 1rem
      }

      .squares-container {
        margin-top: 1rem;
        rotate: none;
        grid-template-columns: 132px 132px;
        grid-template-rows: 132px 132px;
        gap: 1rem;
        padding: 1.6rem
      }

      .squares-container .square {
        width: 132px;
        height: 132px
      }

      .start-btn-container {
        justify-self: center
      }

      .start-btn-container #start {
        margin: 1rem 0 0
      }

      footer {
        position: relative
      }
    }

    @media(max-width: 620px) {
      main {
        height: auto
      }

      header {
        margin-bottom: 4rem
      }

      .squares-container {
        grid-template-columns: 110px 110px;
        grid-template-rows: 110px 110px
      }

      .squares-container .square {
        width: 110px;
        height: 110px
      }

      .start-btn-container {
        justify-self: flex-end
      }

      .start-btn-container #start {
        margin: 1rem 0;
        width: 80px;
        height: 36px;
        font-size: .8rem
      }

      footer {
        display: none
      }
    }

    @media(max-width: 400px) {
      .round-info-container {
        padding-top: .9rem;
        gap: 1rem
      }

      .round-info-container div {
        width: 110px
      }

      .round-info-container div:nth-child(2) {
        font-weight: 800
      }

      .round-info-container p {
        font-size: 1rem
      }

      .round-info-container span {
        font-size: .9rem
      }

      .squares-container {
        grid-template-columns: 100px 100px;
        grid-template-rows: 100px 100px;
        gap: .8rem
      }

      .squares-container .square {
        width: 100px;
        height: 100px
      }
    }

    @media(max-height: 500px) {
      footer {
        display: none
      }
    }
  </style>
</head>

<body>
  <header>
    <span><span class="letter">S</span>imon</span>
    <span><span class="letter">S</span>ays</span>
    <div>
      <span><span class="letter">G</span>ame</span>
      <span><span class="letter">J</span>s</span>
    </div>
  </header>
  <main>

    <section class="squares-container">
      <div id="square-r" class="square">
      </div>
      <div id="square-g" class="square">
      </div>
      <div id="square-b" class="square">
      </div>
      <div id="square-y" class="square">
      </div>
      <audio class="audio-error" src="assets/error.wav"></audio>
    </section>

    <div class="start-btn-container">
      <button id="start">Start</button>
    </div>

    <div class="round-info-container">
      <div>
        <p for="round-turn-text">Turn</p><span class="round-turn-text"></span>
      </div>
      <div>
        <p for="round-num-text">Round</p><span class="round-num-text"></span>
      </div>
    </div>

  </main>
  <footer>
    <p>Coded by <a href="https://github.com/agusscript" target="_blank">Agustin Sanchez</a></p>
  </footer>
  <script>
    const audio = document.querySelectorAll("audio");
    const squares = document.querySelectorAll(".square");
    const startButton = document.querySelector("#start");
    let userSelection = [];
    let computerSelection = [];
    let round = 0;

    roundNumberText("-");
    roundTurnText("Press START");

    startButton.onclick = function () {
      stateReset();
      play();
    };

    function play() {
      document.querySelector(".round-turn-text").style.color = "rgb(0, 245, 0)";
      roundTurnText("Computer");
      disableUserSquare();
      let newSquare = getRandomSquare();
      computerSelection.push(newSquare);

      const userTurnDelay = (computerSelection.length + 1) * 1000;

      computerSelection.forEach(function (square, index) {
        const delay = (index + 1) * 900;
        setTimeout(function () {
          highlightSquare(square);
          playSound(square);
        }, delay);
      });

      setTimeout(function () {
        roundTurnText("Player");
        enableUserSquare();
      }, userTurnDelay);

      userSelection = [];
      round++;
      roundNumberText(round);
    }

    function checkUserSelection(e) {
      const square = e.target;
      highlightSquare(square);
      playSound(square);
      userSelection.push(square);

      const computerSquare = computerSelection[userSelection.length - 1];
      if (square.id !== computerSquare.id) {
        loseGame();
        return;
      }

      if (userSelection.length === computerSelection.length) {
        disableUserSquare();
        setTimeout(play, 1000);
      }
    }

    function disableUserSquare() {
      squares.forEach(function (e) {
        e.onclick = "";
      });
    }

    function enableUserSquare() {
      squares.forEach(function (square) {
        square.onclick = checkUserSelection;
      });
    }

    function getRandomSquare() {
      let index = Math.floor(Math.random() * 4);
      return squares[index];
    }

    function highlightSquare(square) {
      square.style.filter = "brightness(180%)";
      square.style.opacity = "1";
      setTimeout(function () {
        square.style.opacity = "0.4";
      }, 400);
    }

    function playSound(element) {
      const audio = [
        new Audio('https://s3.amazonaws.com/freecodecamp/simonSound1.mp3'),
        new Audio('https://s3.amazonaws.com/freecodecamp/simonSound2.mp3'),
        new Audio('https://s3.amazonaws.com/freecodecamp/simonSound3.mp3'),
        new Audio('https://s3.amazonaws.com/freecodecamp/simonSound4.mp3')
      ];

      if (element.id == "square-r") {
        audio[0].play();
      } else if (element.id == "square-g") {
        audio[1].play();
      } else if (element.id == "square-b") {
        audio[2].play();
      } else {
        audio[3].play();
      }
    }

    function stateReset() {
      computerSelection = [];
      userSelection = [];
      round = 0;
    }

    function loseGame() {
      document.querySelector(".audio-error").play();
      document.querySelector(".round-turn-text").style.color = "red";
      document.querySelector(".round-turn-text").style.textTransform = "uppercase";
      roundTurnText("Game over");
      disableUserSquare();
    }

    function roundNumberText(round) {
      document.querySelector(".round-num-text").textContent = round;
    }

    function roundTurnText(turn) {
      document.querySelector(".round-turn-text").textContent = turn;
    }
  </script>
</body>

</html>