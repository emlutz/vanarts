var game = function()
{
  //declare variables for words, timer and scoreboard, keyup tracking
  var words = ["hey", "zip", "flat", "ripe", "hanger", "language", "helicopter", "honey", "movie", "baking", "sunshine", "canada", "toronto maple leafs"];
  var currentWord, currentLocation, score, mistake, timer, isStarted, timerID;
  var word = document.getElementById("word");
  var scoreTrack = document.getElementById("score");
  var mistakeTrack = document.getElementById("mistakes");
  var timerTrack = document.getElementById("timer");

  //start game with empty scoreboard and 10 seconds on timer
  function init() {
    currentWord = "Click to Begin";
    currentLocation = 0;
    score = 0;
    mistake = 0;
    timer = 10;
    word.innerHTML = currentWord;
    scoreTrack.innerHTML = score;
    mistakeTrack.innerHTML = mistake;
    timerTrack.innerHTML = timer;
    isStarted = false;
  }
  init();

  //start timer, stop timer, alert score
  function runTimer() {
    timerID = setTimeout(function()
    {
      timer--;
      timerTrack.innerHTML = timer;
      if (timer<=0) {
        // alert('game over');
        var accuracy =
          score + mistake === 0
            ? "0.00"
            : (score / (score + mistake) * 100).toFixed(2);
          alert(
            score + " letters, " + mistake + "miss!" + accuracy + "% accuracy"
          );
          clearTimeout(timerID);
          init();
          return;
      }
      runTimer();
    }, 1000);
  }

  //randomly choose word from words array
  function setWord() {
    currentWord = words[Math.floor(Math.random() * words.length)];
    word.innerHTML = currentWord;
    currentLocation = 0;
  }

  //start game on click by randomly setting word and starting timer function
  window.addEventListener("click", function() {
    if (!isStarted) {
      isStarted = true;
      setWord();
      runTimer();
    }
  });

  //check which keys were pressed and whether they match set word, record for score
  window.addEventListener("keyup", function(e) {
    if (!isStarted) {
      return;
    }
    // e.keyCode
    // console.log(String.fromCharCode(e.keyCode));
    if (
      String.fromCharCode(e.keyCode) === currentWord[currentLocation].toUpperCase()
    ) {
      currentLocation++;
      var placeholder = "";
      for (var i = 0; i < currentLocation; i++) {
        placeholder += "_";
      }
      word.innerHTML = placeholder + currentWord.substring(currentLocation);
      // console.log('score!);
      score++;
      scoreTrack.innerHTML = score;
      if (currentLocation === currentWord.length) {
        setWord();
      } 
    } else {
        // console.log('miss!);
        mistake++;
        mistakeTrack.innerHTML = mistake;
      }
    });
  }

  //run game
  game();