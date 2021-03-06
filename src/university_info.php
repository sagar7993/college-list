
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



<!-- Our Shortcodes Section -->
<div id="shortcodes" class="page">
    <div class="container">
        
        <h2 align="center" style="margin-top:-70px; margin-bottom:-60px;" class="title-description">UNIVERSITY INFORMATION</h2>

        <!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <!--<h2 class="title">MASTERTIONARY</h2>
                    <h3 class="title-description">Everything About $University_Name</h3>-->
                </div>
            </div>
        </div>
        <!-- End Title Page -->
       
        <div class="row">
            <div class="span12">
                <hr style="margin-top:-15px;">
            </div>  
        </div>


        <?php
require_once $_SERVER['DOCUMENT_ROOT'].'/Mastertionary/universitydatabase/UniversityDetails.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/Mastertionary/departmentdatabase/DepartmentDetails.php';
$universityName =urldecode($_GET['uname']);
$university = new University();
$department = new Department();
$universityDetails = $university -> getUniversityDetails($universityName);
while($row=mysqli_fetch_array($universityDetails)){
    $universityAddress = $row['CITY'];
    $universityAddress .= ', ';
    $universityAddress .= $row['STATE'];
    $universityRank = $row['RANK'];
    $universityApplicationFees = $row['APPLIEDFEES'];
    $universityTuitionFees = $row['FEES'];
$universityId=$row['UID'];
    }
$departmentNames = $department -> getDepartmentNames($universityId);

?>
        

        <!-- Start BlockQuote/Tooltip Section -->
        <div class="row">
            <!-- Start Blockquote -->
            <div class="span6">
                <h3 class="spec" style="margin-top:-15px;"><?php echo $universityName;?></h3>
                
                <blockquote>
                    <p>University Details:</p>
                    <cite title="name">Name: <?php echo $universityName;?></cite>
                    </br>
                    <cite title="address">Address: <?php echo $universityAddress;?></cite>
                    </br><cite title="name">Rank: <?php echo $universityRank;?></cite>
                    </br><cite title="name">Application Fees: <?php echo $universityApplicationFees;?> :</cite>
                    </br>
                    <cite title="name">Tution Fees: <?php echo $universityTuitionFees;?></cite>
                </blockquote>
            </div>
            <!-- End Blockquote -->


            <!-- Start Tabs -->
            <div class="span6">
                <h3 class="spec" style="margin-top:-15px;">Miscellaneous Information</h3>
                
                <div class="info-block">
                    <div class="info-text">
                        <h3><span class="color-text"><?php echo $universityName;?></span><br><br><small>Brief Description</small></h3>
                        <p>Blah Blah Blah.</p>
                        <p>For more details, visit the university website</p>
                        <a class="button" target="_blank" href="#">Go To Univ</a> 
                    </div>
                </div>
            </div> 
            <!-- End Tabs -->
        </div>
        <!-- End BlockQuote/Tooltip Section -->


        
        <div class="row">
            <div class="span12">
                <hr>
            </div>  
        </div>
        <script>

 function ajax_request(str)
 { 
    var url = "deptajax.php?deptid="+str;
    $.getJSON(url, function(json) {
        

        document.getElementById("dname").innerHTML=json.dept_name;
        document.getElementById("drank").innerHTML=json.dept_rank;
        document.getElementById("fdeadline").innerHTML=json.fall_deadline;
        document.getElementById("sdeadline").innerHTML=json.spring_deadline;
        document.getElementById("apply").innerHTML="<a href = \"json.apply_now\">"+json.apply_now+"</a>";
        document.getElementById("courses").innerHTML="<a href = \"json.courses\">"+json.courses+"</a>";
        document.getElementById("faq").innerHTML="<a href = \"json.faq\">"+json.faq+"</a>";
        document.getElementById("trans").innerHTML=json.transcript;
        document.getElementById("greicode").innerHTML=json.greicode;
        document.getElementById("gredcode").innerHTML=json.gredcode;
        document.getElementById("toeflicode").innerHTML=json.toeflicode;
        document.getElementById("toefldcode").innerHTML=json.toefldcode;
        document.getElementById("sop").innerHTML=json.sop;
        document.getElementById("lor").innerHTML=json.lor;
        document.getElementById("contact").innerHTML=json.contact;
        });
}



      </script>
        
        <h3 class="spec" align="center">Departments in <?php echo $universityName;?></h3>
        <br>
        <div class="row">

            <div class="span4" align="center">
 
                <div class="tabbable">
                
                    <ul id="whoa" class="nav nav-tabs" id="myTab">

                <?php 
                $i = 0;
                $hyperlink = '#tab';
                while($row=mysqli_fetch_array($departmentNames )){
                    $i++;
                    $hyperlink .= $i;
                    $dname = ltrim($row['NAME']," " );
                    //$dname = preg_replace('/\s+/','',$dname);
                    $did = $row['DID'];
                    $function_name = "ajax_request(";
                    $function_name .= $did;
                    $function_name .= ")";
                    if($i==1){
                ?>
                    
                        <li id="whoa" ><a href=<?php echo $hyperlink; ?> class="button" data-toggle="tab" onclick = <?php echo $function_name;?>><?php echo $dname?> </a></li> <br>
                        
                <?php 
                    }
                    else{
                ?>
                        <li id="whoa" ><a href=<?php echo $hyperlink; ?> class="button" data-toggle="tab" onclick = <?php echo $function_name;?>><?php echo $dname; ?></a></li><br>
                <?php
                    $hyperlink = '#tab';
                    }
                }
                ?>
                    </ul>
                </div>

            </div>

                <!-- Start Tabs -->
                            <div class="span8">
                                
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1">
                                            <br>
                                            Department Name: <div id="dname"></div>
                                            <br> 
                                            Department Rank: <div id="drank"></div>
                                            <br>
                                            Fall Deadline: <div id="fdeadline"></div>
                                            <br>
                                            Spring Deadline: <div id="sdeadline"></div>
                                            <br>
                                            Transcripts: <div id="trans"></div>
                                            <br>
                                            GRE Instutional Code: <div id="greicode"></div>
                                            <br>
                                            GRE Department Code: <div id="gredcode"></div>
                                            <br>
                                            TOEFL Institution Code: <div id="toeflicode"></div>
                                            <br>
                                            TOEFL Department code: <div id="toefldcode"></div>
                                            <br>
                                            Statement Of Purpose: <div id="sop"></div>
                                            <br>
                                            Letter Of Reccomendation: <div id="lor"></div>
                                            <br>
                                            Courses: <div id="courses"></div>
                                            <br>
                                            FAQ: <div id="faq"></div>
                                            <br>
                                            Contact: <div id="contact"></div>
                                            <br>
                                            Apply: <div id="apply"></div>
                                        </div>
                                       <!-- <div class="tab-pane fade in" id="tab2">
                                            <br>    
                                            Department Name:
                                            <br> 
                                            Department Rank:
                                            <br>
                                            Fall Deadline:
                                            <br>
                                            Spring Deadline:
                                            <br>
                                            Transcripts:
                                            <br>
                                            GRE Instutional Code:
                                            <br>
                                            GRE Department Code:
                                            <br>
                                            TOEFL Institution Code:
                                            <br>
                                            TOEFL Department code:
                                            <br>
                                            Statement Of Purpose:
                                            <br>
                                            Letter Of Reccomendation:
                                            <br>
                                            Courses:
                                            <br>
                                            FAQ:
                                            <br>
                                            Contact:
                                            <br>
                                            Apply:
                                        </div>
                                       <-->
                                    </div>
                                            
                                </div> <!-- end span 6 -->
        </div> <!-- row -->
        <!-- End Tabs -->
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