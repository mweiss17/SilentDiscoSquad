<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <title>Silent Disco Squad</title>
  <!-- Included CSS Files (Uncompressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.css">
  <!-- Included CSS Files (Compressed) -->
  <script src="javascripts/modernizr.foundation.js"></script>
      <link rel="stylesheet" type="text/css" href="CountdownStylesheet.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
</head>


<body>  
  <!-- Header and Nav -->
  <br>
  <div class="row" align="center" style="margin-top:5px;">
    	<div class="twelve columns">
      <h1><img src="images/logo.png" /></h1>
      	</div>
  </div>
  <!-- End Header and Nav -->
  <!-- First Band (Image) --> 
  <div class="12 columns,center" align="center">


            

<!--Once we have a facebook event, you just put the link to it as the value of the href, and uncomment the exclamation point and doubledash at the beginning of the line, and at the end. The line right beneath this comment-->      
<!--h3><a href="https://www.facebook.com/events/148307958699317/">EPIC DANCE PARTY AT TAMS</a></h3-->
    </div>    




  <div class="row" align center>
    <div class="twelve columns">

<script>
var serverTime = new Date('<?php echo $_SERVER['REQUEST_TIME']; ?>'*1000);
var clientTime = new Date();
var lag = Math.abs(serverTime-clientTime);



<!-- The next line is where you put the date of the danceparty. The format //MUST// be '09/24/2013 9:00 PM' -->
var end = new Date('09/17/2013 5:22 PM');



    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now + lag;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'WOOOOOOOOOOT!';
            window.location.assign('http://silentdiscosquad.com/stream.php');
            return;
        }
	
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
<div id="countdown" class="center" align="center"></div>

    </div>
  </div>
  
    <div class="row">
      <div class="twelve columns, center">
    
  <form action="signup.php" method="post">
  <div align="center">

<input width="40px" type="text" name="email" Placeholder="Enter Your Email To Join The Party" class="inputfield">

<input type="submit" class="large button">
</div>
</form>

    </div>
  </div>
  
  

  

  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="javascripts/jquery.js"></script>
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="javascripts/jquery.foundation.forms.js"></script>
  
  <script src="javascripts/jquery.event.move.js"></script>
  
  <script src="javascripts/jquery.event.swipe.js"></script>
  
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="javascripts/jquery.placeholder.js"></script>
  
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  
  <script src="javascripts/jquery.foundation.joyride.js"></script>
  
  <script src="javascripts/jquery.foundation.clearing.js"></script>
  
  <script src="javascripts/jquery.foundation.magellan.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>
</body>
</html>
