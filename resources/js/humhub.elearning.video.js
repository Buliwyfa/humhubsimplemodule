var video = document.getElementById("video");

console.log(video);

var timeStarted = -1;
var timePlayed = 0;
var duration = 0;

var timer = [];
// If video metadata is laoded get duration
if(video.readyState > 0)
  getDuration.call(video);
 
//If metadata not loaded, use event to get it
else
{
  video.addEventListener('loadedmetadata', getDuration);
}

// remember time user started the video
function videoStartedPlaying() {
  timeStarted = new Date().getTime()/1000;
  //console.log(timeStarted);
  console.log('Start at : '+video.currentTime);
  
}


function videoPausePlaying() {
	  //timeStarted = new Date().getTime()/1000;
	  //console.log(timeStarted);
	  console.log('Pause at : '+video.currentTime);
	  
	}


function videoStoppedPlaying(event) {
  // Start time less then zero means stop event was fired vidout start event
  if(timeStarted>0) {
    var playedFor = new Date().getTime()/1000 - timeStarted;
    timeStarted = -1;
    // add the new ammount of seconds played
    timePlayed+=playedFor;

  }
  document.getElementById("played").innerHTML = Math.round(timePlayed)+"";
  // Count as complete only if end of video was reached
  if(timePlayed>=duration && event.type=="ended") {
    document.getElementById("status").className="complete";
    console.log('complete');
  }
}

function getDuration() {
  duration = video.duration;
  //document.getElementById("duration").appendChild(new Text(Math.round(duration)+""));
  
}


function videoFastPlaying() {
	

	console.log(video.currentTime);
	timer.push(video.currentTime);
	
	

	}



// at what time the video start palying
video.addEventListener("play", videoStartedPlaying);
//
//video.addEventListener("playing", videoStartedPlaying);

video.addEventListener("ended", videoStoppedPlaying);

video.addEventListener("pause", videoPausePlaying);

video.addEventListener("seeking", videoFastPlaying);

setInterval(function() {
	//console.log ('valeur tableau at : '+timer);
	console.log ('Valeur minimum :'+Math.min(...timer));
	console.log ('Valeur maximum :'+Math.max(...timer));
	
	
	}, 5000);


