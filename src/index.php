<!-- DATABASE = mastertionary && TABLE = Users & Columns = Username, Password, hash, class, activation -->
<?php require_once("session.php") ?>
<?php require_once 'hashing.php'; ?>

<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
<html class="no-js lt-ie9 lt-ie8" lang="en">
<html class="no-js lt-ie9" lang="en">
<html class="no-js ie9" lang="en">
<html lang="en-US">

<head>

<link href="assets/css/font-awesome.css" rel="stylesheet">
<link href="assets/css/docs.css" rel="stylesheet" >
<link href="assets/css/bootstrap-social.css" rel="stylesheet" >
<link href="assets/css/bootstrap.css" rel="stylesheet" >
<script src="assets/js/jquery.js"></script>
<script src="assets/js/docs.js"></script>

<!-- Meta Tags -->
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="_include/css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
<script type="text/javascript" src="_include/js/modernizr.custom.46884.js"></script> 
<noscript><link rel="stylesheet" type="text/css" href="_include/css/noJS.css" /></noscript>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,firofox=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="GRE, TOEFL, University, Profile, Mentor, Documents Required" />
<meta name="description" content="Learn everything there is to know, about M.S. in U.S." />  

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<meta http-equiv="cleartype" content="on">

<link rel="stylesheet" type="text/css" href="_include/css/login.css" />
<link rel="stylesheet" type="text/css" href="_include/css/sidemenu.css" />
<link rel="stylesheet" type="text/css" href="_include/css/sidemenucomponent.css" />
<script src="_include/js/modernizr.custom.js"></script>

<title>Mastertionary</title>  

<!-- Bootstrap -->
<link href="_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="_include/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="_include/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="_include/js/modernizr.js"></script>

<!-- Analytics -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript">

            function DropDown(el) {
                this.dd = el;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.dd.on('click', function(event){
                        $(this).toggleClass('active');
                        event.stopPropagation();
                    }); 
                }
            }

            $(function() {

                var dd = new DropDown( $('#dd') );

                $(document).click(function() {
                    // all dropdowns
                    $('.wrapper-dropdown-5').removeClass('active');
                });

            });

        </script>
<script src="_include/js/classie.js"></script>
<script>
  var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
  showLeft = document.getElementById( 'showLeft' ),
  body = document.body;
  showLeft.onclick = function() {
  classie.toggle( this, 'active' );
  classie.toggle( menuLeft, 'cbp-spmenu-open' );
  disableOther( 'showLeft' );
  };
  function disableOther( button ) {
  if( button !== 'showLeft' ) {
  classie.toggle( showLeft, 'disabled' );
    }
  }
</script>

<script>
  (function(d, s, id)
    {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {return;}
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js";
      fjs.parentNode.insertBefore(js, fjs);
    }
  (document, 'script', 'facebook-jssdk'));
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '684051288325575',
    status     : true,
    cookie     : true,
    xfbml      : true 
  });


  FB.getLoginStatus(function(response) {
    if(response.status=='connected') {
      var uid=response.authResponse.userID;
      accessToken=response.authResponse.accessToken;
      console.log("User is logged in and authorised the app");
      FB.api('/me', function(response) {
          img_link = "http://graph.facebook.com/"+response.id+"/picture";
          fbname = response.name;
          alert("Name: "+ fbname + "\nFirst name: "+ response.first_name + "\nID: "+response.id + "\nProfile picture: "+ img_link);
      });
    }
    else if (response.status=='not_authorized') {
      console.log("User is logged into fb but not authorised the app");
    }
    else
    {
      console.log("User is not logged into fb at all");
    }
  });


  FB.Event.subscribe('auth.authResponseChange', function(response) {
    if (response.status === 'connected') {
      testAPI();
    } else if (response.status === 'not_authorized') {
      FB.login();
    } else {
      FB.logout();
    }
  });
  };

</script>

</head>

<body>
<div id="fb-root"></div>
<!-- This section is for Splash Screen -->
<div class="ole">
<section id="jSplash">
  <div id="circle"></div>
</section>
</div>
<!-- End of Splash Screen -->

<!-- Header -->
    <header>
        <div class="sticky-nav">
        <!--<a href="index-mastertionary.html" title="Mastertionary" id="logo">MASTERTIONARY</a>-->
            <nav id="menu" style="float:left; margin-left:-50px;">
                <ul id="menu-nav" style="float:left; margin-left:-50px;">  
                    <li>
                        <div class="menucontainer">
                            <div class="mainmenu">
                                <section>
                                    <button id="showLeft">MENU</button>
                                    <button id="mastertionarybutton" style="float:center; margin-left:550px; margin-top:-60px; background:#26292E; color:#DE5E60;">MASTERTIONARY</button>
                                </section>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>

            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
            <script>
                      $(document).ready(function(){
                            $('#login-trigger').click(function(){
                                $(this).next('#login-content').slideToggle();
                                $(this).toggleClass('active');
                                $('#register-trigger').find('span').html('&#x25BC;');
                                $('#register-content').slideUp();                  
                                if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
                                    else $(this).find('span').html('&#x25BC;')
                                })
                      });
                </script>

                <script>
                      $(document).ready(function(){
                            $('#register-trigger').click(function(){
                                $(this).next('#register-content').slideToggle();
                                $(this).toggleClass('active');
                                $('#login-trigger').find('span').html('&#x25BC;');                  
                                $('#login-content').slideUp();
                                if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
                                    else $(this).find('span').html('&#x25BC;')
                                })
                      });
                </script>

                <?php
                $local_signup = "
                <nav id=\"yo\">
                    <ul>
                        <li id=\"register\" style=\"border:none;\">
                            <a id=\"register-trigger\" style=\"border:none;\">
                                Sign Up <span>&#x25BC;</span>
                            </a>
                            <div id=\"register-content\" style=\"border:none;\">
                                <form action = \"registerform.php\" method = \"post\">
                                    <fieldset id=\"inputs\">
                                        <input id=\"username\" type=\"email\" name=\"r_username\" placeholder=\"Your email address\" required style=\"height:35px; vertical-align:middle;\">   
                                        <input id=\"password\" type=\"password\" name=\"r_password\" placeholder=\"Password\" required style=\"height:35px; vertical-align:middle;\">
                                        <input id=\"password\" type=\"password\" name=\"c_password\" placeholder=\"Confirm Password\" required style=\"height:35px; vertical-align:middle;\">
                                    </fieldset>
                                    <fieldset id=\"actions\">
                                        <input type=\"submit\" name = \"r_submit\" id=\"submit\" value=\"Sign Up\" style=\"width:240px;height:29px;\">
                                    </fieldset>
                                </form>
                            </div>                     
                        </li>
                    </ul>
                </nav>
                ";
                $local_login = "
                <nav id=\"yo\">
                    <ul>
                        <li id=\"login\">
                            <a id=\"login-trigger\">
                                Log in <span>&#x25BC;</span>
                            </a>
                            <div id=\"login-content\">
                                <form action = \"loginform.php\" method = \"post\">
                                    <fieldset id=\"inputs\">
                                        <input id=\"username\" type=\"email\" name=\"username\" placeholder=\"Your email address\" required style=\"height:35px; vertical-align:middle;\">   
                                        <input id=\"password\" type=\"password\" name=\"password\" placeholder=\"Password\" required style=\"height:35px; vertical-align:middle;\">
                                    </fieldset>
                                    <fieldset id=\"actions\">
                                      <input type=\"submit\" name = \"submit\" id=\"submit\" value=\"Log in\" style=\"width:240px;height:29px; margin-bottom:20px;\"><br><br>
                                        <div id=\"social buttons\">
                                          <a class=\"btn btn-block btn-social btn-facebook\" onclick=\"FB.login();\" style=\"background:#3b5998; border:none; color:#fff; text-shadow:2px 2px #000; vertical-align:middle; float:left;\">
                                          <i class=\"fa fa-facebook\"></i> Sign in with Facebook
                                          </a>
                                          <br>
                                          <br>
                                          <br>
                                          <div id=\"gSignInWrapper\">
                                            <div id=\"customBtn\" class=\"customGPlusSignIn\">
                                              <a class=\"btn btn-block btn-social btn-google-plus\" style=\"background:#dd4b39; border:none; color:#fff; text-shadow:2px 2px #000; vertical-align:middle; float:left;\">
                                              <i class=\"fa fa-google-plus\"></i> Sign in with Google
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>                     
                        </li>
                    </ul>
                </nav>
                ";

                $local_logout = "
                  <div class=\"wrapper-demo\">
                    <div id=\"dd\" class=\"wrapper-dropdown-5\" tabindex=\"1\" style=\"float:right;margin-right:30px;height:45px;margin-top:7px;margin-bottom:7px;color:#7F8289;background:#7F8289;\">
                      <iframe src=\"_include/images/profile.jpeg\" width=\"35\" height=\"33\" scrolling=\"no\" style=\"float:left;margin-bottom:-15px;margin-left:-5px;margin-right:5px;color:#fff;\">
                      </iframe>
                        <span style=\"float:left;vertical-align:middle;color:#fff;\"> " . logged_in() . " </span>
                          <ul class=\"dropdown\" style=\"margin: 0 0 0px; width:240px;\">
                            <!-- <li><a href=\"#\"><i class=\"icon-user\"></i>Profile</a></li>
                            <li><a href=\"#\"><i class=\"icon-cog\"></i>Settings</a></li> -->
                            <li><a href=\"logout.php\"><i class=\"icon-remove\"></i>Log out</a></li>
                          </ul>
                    </div>
                  </div>
                ";

                if(!logged_in())
                {
                  echo $local_signup . $local_login;
                }

                else
                {
                  echo $local_logout;
                }
                ?>

        </div>
    </header>
<!-- End Header -->

<!-- Homepage Slider -->
<div id="home-slider" style="height:91%;">  
    <div class="overlay"></div>

    <!--<div class="slider-text">
      <div id="slidecaption"></div>
    </div> -->  
  
  <div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>
        
        <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->

<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1" style="overflow:auto;">
    <h3>MENU</h3>
    <a href="index.php" style="background:#DE5E60;">HOME</a>
    <a href="msmba.html">MS / MBA</a>
    <a href="gretoefl.html">GRE - TOEFL</a>
    <a href="university.php">UNIVERSITIES</a>
    <a href="documents.html">DOCUMENTS</a>
    <a href="mentors.html">MENTORS</a>
    <a href="profiles.html">PROFILES</a>
    <!--<a href="forums.html">FORUMS</a>-->
    <a href="team.html">OUR TEAM</a>
    <a href="contactus.html">CONTACT US</a>
</nav>

<script src="_include/js/classie.js"></script>
<script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeft = document.getElementById( 'showLeft' ),
        body = document.body;
    showLeft.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeft' );
    };

    function disableOther( button ) {
        if( button !== 'showLeft' ) {
            classie.toggle( showLeft, 'disabled' );
        }
    }
</script>

<!-- Our Work Section -->
<div id="work" class="page" align="center">
  <div class="container" align="center">
        <h3 style="margin-top:-65px;" class="title-description" style="color:#DE5E60;">View Universities by State: </h3>
      <!-- Title Page -->
        <div class="row" align="center">
            <div class="span12" align="center">
                <div class="title-page" align="center">
                    
                    <!-- START MAP -->
                    <iframe src="http://createaclickablemap.com/map.php?&id=22410&online=true" width="900" height="525" style="border: none;"></iframe>
                    <script>if (window.addEventListener){ window.addEventListener("message", function(event) { if(event.data.length >= 22) { if( event.data.substr(0, 22) == "__MM-LOCATION.REDIRECT") location = event.data.substr(22); } }, false); } else if (window.attachEvent){ window.attachEvent("message", function(event) { if( event.data.length >= 22) { if ( event.data.substr(0, 22) == "__MM-LOCATION.REDIRECT") location = event.data.substr(22); } }, false); } </script>
                    <!-- END MAP -->
                </div>
            </div>
        </div>
        <!-- End Title Page -->
    </div>
</div>
<!-- End Our Work Section -->

<!-- Footer -->
<footer>
    <p class="credits">&copy;2014 <a href="#" title="End Page">Mastertionary Inc.</a> BY Students Of <a href="http://www.spit.ac.in">S.P.I.T</a> & <a href="http://www.djsce.ac.in/">D.J.Sanghvi</a></p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
  <i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->

<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="_include/js/main.js"></script> <!-- Default JS -->
<!-- End Js -->

    <!-- Place this asynchronous JavaScript just before your </body> tag -->
      <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
      <script type="text/javascript">
      (function() {
        var po = document.createElement('script');
        po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/client:plusone.js?onload=render';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
      })();
      
      function render() {
        gapi.signin.render('customBtn', {
          //'callback': 'signinCallback',
          'clientid': '345457547009-qr2hs4695a4f8bcvenphrmu10s1qbsv2.apps.googleusercontent.com',
          'cookiepolicy': 'single_host_origin',
          'requestvisibleactions': 'http://schemas.google.com/AddActivity',
          'scope': 'https://www.googleapis.com/auth/plus.login'
        });
      }
      </script>

</body>
</html>