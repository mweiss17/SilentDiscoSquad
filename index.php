<DOCTYPE html>

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
  <link rel="stylesheet" href="stylesheets/index.css">
  <!-- Included CSS Files (Compressed) -->
  <script src="javascripts/modernizr.foundation.js"></script>
      <link rel="stylesheet" type="text/css" href="CountdownStylesheet.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<style>
a:hover {color:blue; font-size:23px; font-family:Lato, sans-serif;}
</style>
</head>


<body> 
<?php
if($_GET['sent'])
{?>
      <script>
      alert("Thanks for signing up!");
      </script> 
<?php
}
?>
<div class="header">
  <!-- Header and Nav -->
  <br>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<a href="http://silentdiscosquad.com/about/about.html" style="position:absolute; padding-left: 10px;  height: 10px;">About</a>

  <div class="row" align="center" style="margin-top:5px;">
    	<div class="twelve columns">
      <h1><img src="images/logo.png" /></h1>
      	</div>
  </div>
  <!-- End Header and Nav -->
  <!-- First Band (Image) --> 
  <div class="12 columns,center" align="center">

<!--<h1 STYLE="color:#2ba6cb;" > EPIC DANCEPARTY OCT 5th </h1>-->
<!-- David's Experiment-->
<!--<div class="large-9 push-3 columns"> -->
            
 <!-- <p align="center" STYLE="letter-spacing:2px;"><a-->
<h4><a STYLE="letter-spacing:0px;" href="https://www.facebook.com/events/187024661485772">COSTUME HALLOWEEN DANCEPARTY OCT 31ST! EVENT INVITE + DETAILS</a></h4>
  </div>            

<!--Once we have a facebook event, you just put the link to it as the value of the href, and uncomment the exclamation point and doubledash at the beginning of the line, and at the end. The line right beneath this comment-->      

    </div>    



  <div class="row" align center>
    <div class="twelve columns">
<script>
var serverTime = new Date('<?php echo $_SERVER['REQUEST_TIME']; ?>'*1000);
var clientTime = new Date();
var lag = Math.abs(serverTime-clientTime);



<!-- The next line is where you put the date of the danceparty. The format //MUST// be '09/24/2013 9:00 PM' -->
var end = new Date('11/20/2013 01:00 PM');



    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now + lag;
	
	//if it's 3 hours after the dance started, every new visitor should be redirected to the about page.
        if(distance < -10800000)
        {
        	window.location.assign('http://silentdiscosquad.com/about.html');
        	return;
	}

        else if (distance < 0) {

            //clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'WOOOOOOOOOOT!';
            window.location.assign('http://silentdiscosquad.com/stream/stream.php');
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
    
  <form action="emailSignup.php" method="post">
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
<div class="push"></div>
</div>
 <div class="fb-like-box" style="float:right" data-href="https://www.facebook.com/SilentDiscoSquad" data-width="200" data-colorscheme="dark" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>

</body>
</html>
