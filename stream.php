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
<iframe id="sc-widget" width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F29279129&amp;color=ff6600&amp;auto_play=false&amp;show_artwork=false"></iframe>
a!--/LIVE-->
</div>

<script type="text/javascript">

    var widgetIframe = document.getElementById('sc-widget'),
        widget       = SC.Widget(widgetIframe);
    
    widget.bind(SC.Widget.Events.READY, function() {
         setTimeout(seekToDUDE, 25000);
   	 seekToDUDE();

    function seekToDUDE(){
    	widget.seekTo(elapsed);
    }
     $('button').click(function() {
       widget.play();
     });


    });

var serverTime = new Date('<?php echo $_SERVER['REQUEST_TIME']; ?>'*1000);
var clientTime = new Date();
var lag = Math.abs(serverTime-clientTime);
var danceStarts = new Date('09/17/2013 5:22 PM');
var elapsed = clientTime - danceStarts + lag + 25000;


    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
var now = new Date();
var distance = now - danceStarts + lag;

        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

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
