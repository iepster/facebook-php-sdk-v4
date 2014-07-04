<?php
if (isset($_POST["email"])){
setcookie("submitted", "1", time()+3600);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>aiJob Happy</title>
<meta charset="UTF-8">
<style>
body {
height: 1200px;
font-family:Arial;
margin: 0;
padding: 0;
color: #FFF;

/* gradient */

background: #2169ae; /* Old browsers */
background: -moz-linear-gradient(top,  #2169ae 0%, #155286 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#2169ae), color-stop(100%,#155286)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #2169ae 0%,#155286 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #2169ae 0%,#155286 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #2169ae 0%,#155286 100%); /* IE10+ */
background: linear-gradient(to bottom,  #2169ae 0%,#155286 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2169ae', endColorstr='#155286',GradientType=0 ); /* IE6-9 */

}
header {
    width: 100%;
    top:0;
    background: url('assets/v3/back_repeat.png') center  top repeat-x;
    position: relative;
}
.header_image {
    width: 1400px;
    position: relative;
    margin-left: auto;
    margin-right: auto;
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
    width:720px;
    position:relative;
    float: left;
}
.wrap {
width:100%;
height: 400px;
background: url('assets/images/btn_around.png') right  top no-repeat;    
}
ul {
    margin:0;
    padding:0;
    height: 100px;
    position: relative;
}
ul li {
    width:40%;
    height:60px;
    font-size: 10px;
    display:inline;
    float:left;
    padding: 10px;
    padding-top:35px;
    text-align: center;
    text-align:center;
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
    background:url('./assets/v3/btn_voteaza.png') no-repeat;
    position:relative;
    float:left;
    border: none;
    width: 276px;
    height:55px;
    clear:both;
    margin-top:25px;
    margin-left: 35px;
}
.submit_button:hovet {
    cursor: hand;
}
.expl  {
    width:560px;
    margin-top: 20px;
    font-size:14px;
    color:#FFF;
    position:relative;
    float:left;
}
.expl a {
    color: #eaeaea;     
 }
.organizer {
    position: relative;
    float: left;
    width:1400px;
    line-height:60px;
    clear:both;
    margin-left: auto;
    margin-right: auto;
}
.app {
margin-left:auto;
margin-right:auto;
position:relative;
width:1000px;
}
section {
    width: 1000px;
    margin-left:auto;
    margin-right:auto;
    position:relative;    
    margin-left: 200px;
}
.left {
    width: 700px;
    position: relative;
    float:left;
}
.right {
    width: 300px;
    position: relative;
    float:left;
}
.footer {
    width:100%;
    height: 80px;
    background: #ebebeb;
    position: relative;
    clear:both;
}

</style>
</head>
<!--
<body onload="FB.login(function(response) {   }, {scope: 'public_profile,email'});">
-->
<body>

<header>
    <div class="header_image">
        <img src="assets/v3/back_header.png" />
    </div>
</header>

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
    appId      : '649786431775726',
   //  appId   :   '659112270843142'; // testing settings
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
      if (!response.name) {
        return;
      } else {
          document.getElementById("authenticated").style.display = 'block';
	  document.getElementById("placeholder").style.display = 'none';
          // document.getElementById("login-button").style.display = 'none';
         // set cookies to pass 
         document.cookie="name=" + response.name;
         document.cookie="email=" + response.email;
         document.getElementById('name').value = response.name;
         document.getElementById('email').value = response.email;
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

<div class="left">

        
            <div class="content">
            <p>
                Tot ce ai de facut este sa vizionezi videoclipul de mai jos si sa votezi pe cine <br /> consideri tu ca este cel mai happy la job:
            </p>
            
            <iframe width="560" height="315" src="//www.youtube.com/embed/E32w_EYjSdY" frameborder="0" allowfullscreen></iframe>
            
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
        
    </div>
</div>

<div class="right">
                <form id="sendhappy" action="#" method="post">
                    
		    <div id="" style="">
		    <?php if ( !($_COOKIE["submitted"] || $_POST["submitted"])) { ?>
                     <ul>
                       <li>
                            <input  type="radio" name="meserii" value="barman" id="asistenta" required style="margin-top:25px;" />
                            <div style="width:50px;position:relative;float:right;">
                               <span class="asistenta" onclick="document.getElementById('asistenta').checked = true;FB.login(function(response) { testAPI();  }, {scope: 'public_profile,email'});"></span><br />Barman
                            </div>
                           </li>
                        <li>
                            <input  type="radio" name="meserii" value="mecanic" id="barman" style="margin-top:25px;" />
                            <div style="width:50px;position:relative;float:right;">
                                <span class="barman" onclick="document.getElementById('barman').checked = true;FB.login(function(response) { testAPI();  }, {scope: 'public_profile,email'});"></span><br /> Mecanic Auto
                            </div>
                        </li>
                        <li>
                            <input  type="radio" name="meserii" value="hairstylist" id="bucatar" style="margin-top:25px;" />
                            <div style="width:50px;position:relative;float:right;">
                                <span class="bucatar" onclick="document.getElementById('bucatar').checked = true;FB.login(function(response) { testAPI();  }, {scope: 'public_profile,email'});"></span><br />Hair Stylist
                            </div>
                        </li>
                        <li>
                            <input  type="radio" name="meserii" value="callcenter" id="callcenter" style="margin-top:25px;" />
                            <div style="width:50px;position:relative;float:right;">
                                <span class="call" onclick="document.getElementById('callcenter').checked = true;FB.login(function(response) { testAPI();  }, {scope: 'public_profile,email'});"></span><br />Operator Call Center
                            </div>
                        </li>
                        <li>
                            <input  type="radio" name="meserii" value="bucatar" id="mecanic" style="margin-top:25px;" />
                            <div style="width:50px;position:relative;float:right;">
                                <span class="mecanic" onclick="document.getElementById('mecanic').checked = true;FB.login(function(response) { testAPI();  }, {scope: 'public_profile,email'});"></span><br />Bucatar
                            </div>
                        </li>
                        <li>
                            <input  type="radio" name="meserii" value="vanzatoare" id="sales" style="margin-top:25px;" />
                            <div style="width:50px;position:relative;float:right;">
                                <span class="sales" onclick="document.getElementById('sales').checked = true;FB.login(function(response) { testAPI();  }, {scope: 'public_profile,email'});"></span><br />Vanzatoare Jucarii
                            </div>
                        </li>
                        <li>
                            <input  type="radio" name="meserii" value="asistenta" id="salon" style="margin-top:25px;" />
                            <div style="width:50px;position:relative;float:right;">
                                <span class="salon" onclick="document.getElementById('salon').checked = true;FB.login(function(response) { testAPI();  }, {scope: 'public_profile,email'});"></span><br />Asistenta Medicala
                            </div>
                        </li>
                        <li>
                            <input  type="radio" name="meserii" value="trainer" id="vanzatoare" style="margin-top:25px;" />
                            <div style="width:50px;position:relative;float:right;">
                                <span class="vanzatoare" onclick="document.getElementById('vanzatoare').checked = true;FB.login(function(response) { testAPI();  }, {scope: 'public_profile,email'});"></span><br />Trainer
                            </div>
                        </li>
                    </ul>
                    
                   <input id="name" type="hidden" name="name" value="<?php  echo $_COOKIE["name"];?>" />
                   <input id="email" type="hidden" name="email" value="<?php echo  $_COOKIE["email"]; ?>" />
                    
        		   <input type="hidden" name="submitted" value="1" />
            			<button class="submit_button" value="" id="placeholder" style="line-height:500px;display:block;margin-top:25px" onClick="alert('Pentru a putea vota, apasa pe una dintre imaginile de mai sus si autorizeaza aplicatia.');return false;"></button>
        		   </div>

                    <input type="submit" class="submit_button" value="" id="authenticated" style="display:none;margin-top:25px;" />
		    <?php } ?>
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
                    
                    
            </div>
        </form>

</div>

<?php 

if (isset($_POST["name"])) {
$parts = explode (" ",$_COOKIE["name"]);
$fname = $parts[0];
$lname = $parts[1];
} else {
$fname = "";
$lname = "";

}
$con=mysqli_connect("localhost","contest","sHmQ7s7Aus4Y2ra4","contest");
$query_insert = 'INSERT INTO happy (id, first_name, last_name, email,choice) VALUES (NULL,"'. $fname.'", "'.$lname.'","'.$_POST["email"].'","'.$_POST["meserii"].'")';
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

<footer class="footer">
    <span class="organizer">
                <img src="./assets/v3/footer.png" />
    </span>
</footer>
</body>
</html>

