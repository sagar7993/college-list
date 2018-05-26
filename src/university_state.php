
<!DOCTYPE html>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
<html class="no-js lt-ie9 lt-ie8" lang="en">
<html class="no-js lt-ie9" lang="en">
<html class="no-js ie9" lang="en">
<html lang="en-US">

<head>

<!-- Meta Tags -->

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="GRE, TOEFL, University, Profile, Mentor, Documents Required, MS, MBA" />
<meta name="description" content="Learn everything there is to know, about M.S. in U.S." />  

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<meta http-equiv="cleartype" content="on">

<link rel="stylesheet" type="text/css" href="_include/css/sidemenu.css" />
<link rel="stylesheet" type="text/css" href="_include/css/sidemenucomponent.css" />
<script src="_include/js/modernizr.custom.js"></script>

<title>University Information</title>  

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
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics -->

</head>

<body class="cbp-spmenu-push">
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
            <!--<input type="text" placeholder="Search" id="search" style="margin-top:15px; width:300px; height:30px; margin-right:20px;">-->
        </div>
    </header>
<!-- End Header -->

        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1" style="overflow:auto;">
            <h3>MENU</h3>
            <a href="index-mastertionary.html">HOME</a>
            <a href="msmba.html">MS / MBA</a>
            <a href="gretoefl.html">GRE - TOEFL</a>
            <a href="university.php" style="background:#DE5E60;">UNIVERSITIES</a>
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


<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/Mastertionary/universitydatabase/UniversityDetails.php';
$state = $_GET['state_name'];
$univ = new University();
$universities = $univ->getUniversityByState($state);

?>

<!-- Our Work Section -->
<div id="work" class="page">
	<div class="container">
        <div class="row">

           <h2 class="spec" align="center" style="margin-top:-50px; color:#DE5E60"><?php echo $state;?></h2>

                <nav id="options" class="work-nav" align="center">
                    <ol type="1" id="filters" class="option-set" data-option-key="filter">
                        
                        <?php
                        while($row=mysqli_fetch_array($universities)){
                            $universityName = $row['Name'];
						
                            $hyperlink = "university_info.php?uname=";
                            $hyperlink .= urlencode($universityName);
                        ?>  
                        <li><a class="external" href=<?php echo $hyperlink;?>><?php echo $universityName;?></a></li>
						
                        <?php
                        }
                        ?>
                        
                    </ul>
                </nav>
        </div>
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

</body>
</html>
