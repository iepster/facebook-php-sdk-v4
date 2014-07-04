<?php
if (isset($_COOKIE["in_contest"]) && isset($_POST["meserii"])){
setcookie("submitted",1,time()+86400*365);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>aiJob Happy</title>
<meta charset="UTF-8">
<style>
body {
font-family:Arial;
}
section{
    position:relative;
    float: left;
}
.sidebar { 
    width:245px;
    position:relative;
    float:left;
}
.content {
    position:relative;
    float: left;
}
ul {
    maring:0;
    padding:0;
    height: 100px;
}
ul li {
    width:60px;
    height:60px;
    font-size: 10px;
    display:inline;
    float:left;
    padding: 5px;
    text-align: center;
}
li span {
    width:60px;
    height:60px;
    position: relative;
    float: left;
}
.asistenta {
    background: url('./assets/images/meserii.png') 0px 0;
}
.barman {
    background: url('./assets/images/meserii.png') -60px 0;
}
.bucatar {
    background: url('./assets/images/meserii.png') -120px 0;
}
.call {
    background: url('./assets/images/meserii.png') -180px 0;
}
.mecanic {
    background: url('./assets/images/meserii.png') -245px 0;
}
.sales {
    background: url('./assets/images/meserii.png') -305px 0;
}
.salon {
    background: url('./assets/images/meserii.png') -370px 0;
}
.vanzatoare {
    background: url('./assets/images/meserii.png') -430px 0;
}
.submit_button {
    background:url('./assets/images/button_vote.png') no-repeat;
    position:relative;
    float:left;
    border: none;
    width: 200px;
    height:41px;
    clear:both;
}
.expl {
    width:560px;
    margin-top: 20px;
    font-size:14px;
    color:#666;
    position:relative;
    float:left;
}
.organizer {
    position: relative;
    float: left;
    width:560px;
    line-height:60px;
    clear:both;
}
.app {
margin-left:auto;
margin-right:auto;
position:relative;
width:900px;
}
</style>
</head>
<!--
<body onload="FB.login(function(response) {   }, {scope: 'public_profile,email'});">
-->
<body>
<div class="app" id="app">
<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
	document.getElementByID("app").style.display = 'none';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '659112270843142',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.0' // use version 2.0
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
      'Thanks for logging in, ' + response.name + ' - ' + response.email  + '!';
      document.getElementById("authenticated").style.display = 'block';
      document.getElementById("unauthenticated").style.display = 'none';
      document.getElementById("sendhappy").submit();
      // document.getElementById("login-button").style.display = 'none';
    // set cookies to pass 
    document.cookie="name=" + response.name;
    document.cookie="email=" + response.email;
    location.reload();
    function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
        }
        return unescape(dc.substring(begin + prefix.length, end));
    } 

    var in_contest = getCookie("in_contest");
    var email = getCookie("email");
    if(in_contest == null && email !== null) {
        document.cookie="in_contest=1";
    }
    });
  }
</script>
<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->
<!--
<div id="login-button">
<fb:login-button  scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>
</div>
-->

<div id="status" style="display:none;">
</div>
<section>
        <form id="sendhappy" action="#" method="post">
            <div class="sidebar">
                <img src="./assets/images/banner_side.png" />
            </div>
            <div class="content">
		    <iframe width="560" height="315" src="//www.youtube.com/embed/E32w_EYjSdY" frameborder="0" allowfullscreen></iframe>
                    <h2>Se cauta cea mai happy persoana la job !</h2>
			<span style="color:#ce1c1c;font-size:16px;">
Voteaza si ai sansa de a te bucura de o vacanta de vis intr-o insula din Grecia. <br /><br />
</span>

		    <div id="authenticated-old" style="">
                     <ul>
                       <li><input  type="radio" name="meserii" value="barman" id="asistenta" required /><span class="asistenta" onclick="document.getElementById('asistenta').checked = true;FB.login(function(response) {   }, {scope: 'public_profile,email'});"></span><br />Barman</li>
                        <li><input  type="radio" name="meserii" value="mecanic" id="barman" /><span class="barman" onclick="document.getElementById('barman').checked = true;"></span><br /> Mecanic Auto</li>
                        <li><input  type="radio" name="meserii" value="hairstylist" id="bucatar" /><span class="bucatar" onclick="document.getElementById('bucatar').checked = true;"></span><br />Hair Stylist</li>
                        <li><input  type="radio" name="meserii" value="callcenter" id="callcenter" /><span class="call" onclick="document.getElementById('callcenter').checked = true;"></span><br />Operator Call Center</li>
                        <li><input  type="radio" name="meserii" value="bucatar" id="mecanic" /><span class="mecanic" onclick="document.getElementById('mecanic').checked = true;"></span><br />Bucatar</li>
                        <li><input  type="radio" name="meserii" value="vanzatoare" id="sales" /><span class="sales" onclick="document.getElementById('sales').checked = true;"></span><br />Vanzatoare Jucarii</li>
                        <li><input  type="radio" name="meserii" value="asistenta" id="salon" /><span class="salon" onclick="document.getElementById('salon').checked = true;"></span><br />Asistenta Medicala</li>
                        <li><input  type="radio" name="meserii" value="trainer" id="vanzatoare" /><span class="vanzatoare" onclick="document.getElementById('vanzatoare').checked = true;"></span><br />Trainer</li>
                    </ul>

		   <input type="hidden" name="submitted" value="1" />
                    <input type="submit" class="submit_button" value="" id="authenticated" style="display:none;" />
		    <?php if ( ($_COOKIE["submitted"] || $_POST["submitted"])) { ?>
                        Felicitari! Te-ai inscris cu succes in concurs!
			<br />
			Spune si prietenilor tai <div class="fb-share-button" data-href="https://apps.facebook.com/aijob_happy/" data-type="button_count"></div>
                    <?php } ?> 

	           </div>
<!--
		   <div id="unauthenticated">
                        Pentru a putea vota, apasa butonul alaturat &nbsp;&nbsp;&nbsp; 
                        <fb:login-button  scope="public_profile,email" onlogin="checkLoginState();">
                        </fb:login-button>              
                    </div>
    -->                
                    <p class="expl">
<!--
			Urmareste videoclipul prezentat de aijob.ro si alege angajatul care este cel mai happy.<br /><br />
-->

Pe 24 iulie afli daca ai castigat Marele Premiu sau unul dintre cele 8 premii speciale !<br /><br />

Inainte de extragere, nu uita sa iti completezi contul tau pe aijob.ro cu un CV. <br /><br />

                        Votand sunt de acord cu <a href="tos.php" target="_blank">termenii si conditiile</a> si <a href="privacy.php" target="_blank">regulamentul de participare</a>.
                        <br /><br />
<!--
                        <b>Regulament (sumar)</b><br />
                        Regizorul de film (în engleză film director) este creatorul principal al filmului. Calitatea lui 
                        de conducător al întregului proces de creație îi permite să defalce sarcini specifice 
                        colaboratorilor săi în realizarea creației: operatori, scenografi, compozitori.
-->
                    </p>
                    
                    <span class="organizer">
                                <img src="./assets/images/aijob_footer.png" />
                    </span>
                    
            </div>
        </form>
        
</section>

<?php 

if (isset($_COOKIE["name"])) {
$parts = explode (" ",$_COOKIE["name"]);
$fname = $parts[0];
$lname = $parts[1];
} else {
$fname = "";
$lname = "";

}
$con=mysqli_connect("localhost","contest","sHmQ7s7Aus4Y2ra4","contest");
$query_insert = 'INSERT INTO happy (id, first_name, last_name, email,choice) VALUES (NULL,"'. $fname.'", "'.$lname.'","'.$_COOKIE["email"].'","'.$_POST["meserii"].'")';
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_POST["submitted"])){
mysqli_query($con,$query_insert);
}

mysqli_close($con);
?>
</div>
</body>
</html>
