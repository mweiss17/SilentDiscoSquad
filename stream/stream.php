<?php
session_start();
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="stream.css">
<script src="https://w.soundcloud.com/player/api.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="https://w.soundcloud.com/player/api.js" type="text/javascript"></script>
<title>SDS Montreal</title>
</head>

<div id="mainDiv";>
<body>
<div id="player">

<!--SOUNDCLOUD SOUND: the commented line below is an example for how the soundcloud iframe should look. When loading a new sound into the stream.php page, make sure that you edit the code from soundcloud to include the following text: 'id="sc-widget"' otherwise this won't work. Also, change the height attribute to 166. (height="166")-->

<!--EXAMPLE-->
<!--iframe id="sc-widget" width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F101728229&amp;color=ff6600&amp;auto_play=false&amp;show_artwork=true"></iframe-->

<!--LIVE-->
<iframe id="sc-widget" width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/117957225&amp;color=ff6600&amp;auto_play=false&amp;show_artwork=false"></iframe>
<!--/LIVE-->
</div>

<script type="text/javascript">
    var jumped = 0;
    var widgetIframe = document.getElementById('sc-widget');
    var widget       = SC.Widget(widgetIframe);

	serverTime = new Date('<?php echo $_SERVER['REQUEST_TIME']; ?>'*1000);
	var clientTime = new Date();
	var danceStarts = new Date('10/31/2013 6:30 PM').getTime();
	var elapsed = serverTime.getTime() - danceStarts;


    widget.bind(SC.Widget.Events.READY, function() {
	var refreshIntervalId = window.setInterval(function(){
		seek()	
		}, 1000);
	
    	function seek(){
	    if(checkIfJumped())
		{
			console.log("seeked elapsed = " +elapsed);
                        widget.seekTo(elapsed);

		}
		else
		{
                        window.clearInterval(refreshIntervalId);
		}	
	}
    });

function checkIfJumped()
{
	elapsed = elapsed + 1000;
	var actualPosition;
   widget.getPosition(function(sound) {
	window.actualPosition = sound;
	console.log("elapsed="+elapsed);
        }); 

	if((window.actualPosition + 3000 >= elapsed && window.actualPosition <= elapsed) || (window.actualPosition - 3000 <= elapsed && window.actualPosition >= elapsed))
	{
		return false;
	}
	else
	{
		return true;
	}	
}

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;
    var distance = new Date(elapsed);
    var distanceMilli = distance.getTime();
    function showRemaining() {
	distanceMilli = distanceMilli + 1000;
        var days = Math.floor(distanceMilli / _day);
        var hours = Math.floor((distanceMilli % _day) / _hour);
        var minutes = Math.floor((distanceMilli % _hour) / _minute);
        var seconds = Math.floor((distanceMilli % _minute) / _second);

        document.getElementById('countdown').innerHTML = days + 'days ';
        document.getElementById('countdown').innerHTML += hours + 'hrs ';
        document.getElementById('countdown').innerHTML += minutes + 'mins ';
        document.getElementById('countdown').innerHTML += seconds + 'secs';

    }

    timer = setInterval(showRemaining, 1000);

</script>
</div>

<div id="countdown"></div>
</div>

<!--div id="playbuttondiv">
<button>play</button>
</div-->

</body>
</html>
