
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

<title>University</title>  

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

   function display(str, elementid)
 {
  if (str=="")
   {
     document.getElementById("text").innerHTML="";
     return;
   } 
  if (window.XMLHttpRequest)
   {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
   }
  else
   {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
  xmlhttp.onreadystatechange=function()
   {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
     {
       document.getElementById(elementid).innerHTML=xmlhttp.responseText;
     }
   }
  xmlhttp.open("POST","universityajax.php?alphabet="+str,true);
  xmlhttp.send();
 }

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

<!-- Our Shortcodes Section -->
<div id="shortcodes" class="page">
    <div class="container">
        
        <h2 align="center" style="margin-top:-60px; margin-bottom:-60px;">TOP UNIVERSITIES IN USA</h2>
        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <!--<h2 class="title">Mastertionary</h2>-->
                </div>
            </div>
            <!--<h3 class="title" align="center">Top US Universities</h3>-->
        </div>
        <!-- End Title Page -->
        
        <!-- Start Accordion/Toggle Section -->
       <div class="row">
        
            <div class="span6">
                <!-- Start Accordion -->
                <div class="accordion" id="accordionArea">
                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#oneArea" onclick = display("A","oneArea")>
                               A
                                <span class="font-icon-arrow-simple-down"></span>
                            </a>
                        </div>
                        <div id="oneArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                               <!--<li><a href="university_info.html">Arizona State University</a></li>
                               <li><a href="university_info.html">Alibaba State University</a></li><-->
                            </div>
                        </div>
                    </div>
                    
                     <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#threeArea" onclick = "display('C','threeArea')">
                            C
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="threeArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                               <!--> <li><a href="university_info.html">Carnegie Melon University</a></li><-->
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#fiveArea" onclick = "display('E','fiveArea')">
                            E
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="fiveArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <!--<li><a href="university_info.html">Eye</a></li><-->
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#sevenArea" onclick = "display('G','sevenArea')">
                            G
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="sevenArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                             <!-->    <li><a href="university_info.html">Guy</a></li><-->
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#nineArea" onclick = "display('I','nineArea')">
                            I
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="nineArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                            <!-->     <li><a href="university_info.html">Idiot</a></li><-->
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#elevenArea" onclick = "display('K','elevenArea')">
                            K
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="elevenArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                              <!-->   <li><a href="university_info.html">Kite</a></li><-->
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#thirteenArea" onclick = "display('M','thirteenArea')">
                            M
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="thirteenArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                            <!-->      <li><a href="university_info.html">Mine</a></li><-->
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#fifteenArea" onclick = "display('O','fifteenArea')">
                            O
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="fifteenArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                            <!-->      <li><a href="university_info.html">Oyeee</a></li><-->
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#seventeenArea" onclick = "display('Q','seventeenArea')">
                            Q
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="seventeenArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                            <!-->      <li><a href="university_info.html">Queen</a></li><-->
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#nineteenArea" onclick = "display('S','nineteenArea')">
                            S
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="nineteenArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                            <!-->      <li><a href="university_info.html">Serious</a></li><-->
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#twentyoneArea" onclick = "display('U','twentyoneArea')">
                            U
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="twentyoneArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                               <!--> <li><a href="university_info.html">Universe</a></li><-->
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#twentythreeArea" onclick = "display('W','twentythreeArea')">
                            W
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="twentythreeArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                              <!-->   <li><a href="university_info.html">Woah</a></li><-->
                            </div>
                        </div>
                    </div>

                     <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#twentyfiveArea" onclick = "display('Y','twentyfiveArea')">
                            Y
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="twentyfiveArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                             <!-->     <li><a href="university_info.html">Yo Yo Honey Singh</a></li><-->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Accordion -->
            </div>
            
            <div class="span6">
                
                 <div class="accordion" id="accordionArea">
                
                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#twoArea" onclick = "display('B','twoArea')">
                            B
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="twoArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                           <!-->       <li><a href="university_info.html">Boston Legal</a></li><-->
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#fourArea" onclick = "display('D','fourArea')">
                            D
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="fourArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                            <!-->      <li><a href="university_info.html">Dont Angry me</a></li><-->
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#sixArea" onclick = "display('F','sixArea')">
                            F
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="sixArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                             <!-->     <li><a href="university_info.html">Fish</a></li><-->
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#eightArea" onclick = "display('H','eightArea')">
                            H
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="eightArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                             <!-->     <li><a href="university_info.html">Hello</a></li><-->
                            </div>
                        </div>
                    </div>

                     <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#tenArea" onclick = "display('J','tenArea')">
                            J
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="tenArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                         <!-->       <li><a href="university_info.html">Jerk</a></li><-->
                            </div>
                        </div>
                    </div>

                     <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#twelveArea" onclick = "display('L','twelveArea')">
                            L
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="twelveArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                         <!-->       <li><a href="university_info.html">Lol</a></li><-->
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#fourteenArea" onclick = "display('N','fourteenArea')">
                            N
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="fourteenArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                             <!-->   <li><a href="university_info.html">NYU</a></li><-->
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#sixteenArea" onclick = "display('P','sixteenArea')">
                            P
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="sixteenArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                         <!-->       <li><a href="university_info.html">People</a></li><-->
                            </div>
                        </div>
                    </div>

                     <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#eightteenArea" onclick = "display('R','eightteenArea')">
                            R
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="eightteenArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                             <!-->   <li><a href="university_info.html">Rocky Balboa</a></li><-->
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#twentyArea" onclick = "display('T','twentyArea')">
                            T
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="twentyArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                             <!-->   <li><a href="university_info.html">Tyrion Lannister</a></li><-->
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#twentwoArea" onclick = "display('V','twentytwoArea')">
                            V
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="twentwoArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                               <!--> <li><a href="university_info.html">V For Vendetta</a></li><-->
                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#twentyfourArea" onclick = "display('X','twentyfourArea')">
                            X
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="twentyfourArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <!--><li><a href="university_info.html">Xylophone</a></li><-->
                            </div>
                        </div>
                    </div>

                     <div class="accordion-group">
                        <div class="accordion-heading accordionize">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#twentysixArea" onclick = "display('Z','twentysixArea')">
                            Z
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                        </div>
                        <div id="twentysixArea" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <!--><li><a href="university_info.html">Zbigz</a></li><-->
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- End Toggle -->
            </div>
            
        </div>
        <!-- End Accordion/Toggle Section -->
        
        
    </div>
</div>
<!-- End Shortcodes Section -->
        

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