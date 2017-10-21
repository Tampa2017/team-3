
// Get the modal
var modal = document.getElementById('id01');
var goodSound = new Audio("https://s3-us-west-2.amazonaws.com/s.cdpn.io/74196/goodbell.mp3");
var badSound = new Audio("https://s3-us-west-2.amazonaws.com/s.cdpn.io/74196/bad.mp3");
var winSound = new Audio("https://s3-us-west-2.amazonaws.com/s.cdpn.io/74196/win.mp3");
var back = new Audio("backWave.WAV");
var Bbool = false;
var fishScore = 1;
var fishScoreDisplay = 1;
var whaleScore = 1;
var whaleScoreDisplay = 1;


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function soundB()
{
  if(Bbool == false)
  {
  back.play();
 document.getElementById("playB").innerHTML = "Pause 🔇";
Bbool = true;
}
else {
  back.pause();
  document.getElementById("playB").innerHTML = "Play 🔊";
  Bbool = false;
}

	document.getElementById("fish"+fishScore).style.display = "initial";
	fishScore++;

	if(fishScore == 21){
		document.getElementById("whale"+whaleScore).style.display = "initial";
		fishScore = 1;
		whaleScore++;

		for(i = 1; i <= 20; i++){
			document.getElementById("fish"+i).style.display = "none";
		}
	}
}
