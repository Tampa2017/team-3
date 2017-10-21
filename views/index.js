
// Get the modal
var modal = document.getElementById('id01');

var goodSound = new Audio("https://s3-us-west-2.amazonaws.com/s.cdpn.io/74196/goodbell.mp3");
var badSound = new Audio("https://s3-us-west-2.amazonaws.com/s.cdpn.io/74196/bad.mp3");
var winSound = new Audio("https://s3-us-west-2.amazonaws.com/s.cdpn.io/74196/win.mp3");
var back = new Audio("backWave.WAV");
var Bbool = false;


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
}
