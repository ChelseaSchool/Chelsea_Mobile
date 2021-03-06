<?php

/** @file
 *  @brief html write functions mostly
 *  @todo 
 *  1. create modal for copyright click that gives about info
 *  2. rename this file and refactor
 *  3. recreate bottom navbar so it's an icon toolbar
 *  4. Comment on functions
 */
function write_top_navbar()
{

    
    $top = <<<EOF
<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Chelsea School</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

        <!--<li class="dropdown">
          <a href="about.php" class="dropdown-toggle" data-toggle="dropdown">About Us <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="about.php#about">About Chelsea School</a></li>
            <li><a href="about.php#philosophy">Philosophy</a></li>
            <li><a href="about.php#history">History</a></li>
            <li><a href="about.php#news">News</a></li>
         </ul>-->


        </li>
        <!--End About-->
        <!--<!--Start Meet
        <li class="dropdown">
            
                <a href="meet.php" class="dropdown-toggle" data-toggle="dropdown">Meet Chelsea School <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
        <li><a href="meet.php#students">Students</a></li>
                    <li><a href="meet.php#Faculty">Faculty</a></li>
                    <li><a href="meet.php#board">Board of Governors</a></li>        
                    <li><a href="meet.php#administration">Administration</a></li>
                    <li><a href="meet.php#staff">Staff</a></li>
        </ul>
       </li>-->
       <!--End Meet Chelsea-->
        <!--Start Admissions-->
        <!--<li class="dropdown">
            
                <a href="admissions.php" class="dropdown-toggle" data-toggle="dropdown">Admissions <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
        <li><a href="admissions.php#open-house-events">Open-House Events</a></li>
                    <li><a href="admissions.php#tours">Tours</a></li>
                    <li><a href="admissions.php#visits">Visits</a></li>        
                    <li><a href="admissions.php#admissions-process">Admission Process</a></li>
            </ul>
       </li>-->               
       <!--End Admissions-->
       <!--Begin Students & Families-->
        <!--<li class="dropdown">
            
                <a href="family.php" class="dropdown-toggle" data-toggle="dropdown">Students & Families <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
        <li><a href="family.php#">Students</a></li>
                    <li><a href="family.php#">Lunch</a></li>
                    <li><a href="family.php#">PowerSchool</a></li>        
                    <li><a href="family.php#">Moodle</a></li>
                    <li><a href="family.php#">Tech Support</a></li>

            </ul>
       </li>-->
       <!--End students and families-->
         <li><a alt="about" title="About Chelsea School" href="about.php">About Chelsea School</a></li>
         <li><a alt="meet" title="Meet Chelsea School" href="meet.php">Meet Chelsea School</a></li>
         <li><a alt="Student and Family Resources" title="Student & Family" href="family.php">Student &amp; Family Resources</a></li>
         <li><a alt="admissions" title="Chelsea School Admission" href="admissions.php">Admissions</a></li>
        
        
        <li><a alt="alum" title="Alumni Services" href="alum.php">Alumni</a></li>
                       <li><a href="calendar.php">Calendars</a></li>
<li><a href="site.php">About this Site</a></li>
<li><a href="social.php" title="Chelsea School around the Web">Social Media</a></li>
<li><a href="calendar.php" title="Calendars">Calendars</a></li>
<li><a href="contact.php" title="Our Contact Information">Contact</a></li>      
        
            

     
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
EOF;
    echo $tabs;
    echo $top;
}

/*
 * function write_top_navbar() { $top = <<<EOF <div id="topnavbar" class="navbar navbar-inverse navbar-default navbar-fixed-top"> <div class="container"> <div class="navbar-header"> <!-- .btn-navbar is used as the toggle for collapsed navbar content --> <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="index.php">Chelsea School</a> <span class="navbar-text navbar-version pull-left"><b></b></span> </div> <div class="collapse navbar-collapse nav-collapse"> <ul class="nav navbar-nav"> <li class="divider-vertical"></li> <!--<li><a href=".php">Back (not yet implemented</a></li> <li><a href="index.php">Home</a></li>--> <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Chelsea School<b class="caret"></b></a> <ul class="dropdown-menu"> <ul> <li class="toctree-l2"><a class="reference internal" href="about.php#philosophy">Philosophy</a></li> <li class="toctree-l2"><a class="reference internal" href="about.php#history">History</a></li> <li class="toctree-l2"><a class="reference internal" href="about.php#news">News</a></li> </ul> </ul> </li></li> <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Meet Chelsea School<b class="caret"></b></a> <ul class="dropdown-menu"><ul> <li class="toctree-l2"><a class="reference internal" href="meet.php#students">Students</a></li> <li class="toctree-l2"><a class="reference internal" href="meet.php#board">Board</a></li> <li class="toctree-l2"><a class="reference internal" href="meet.php#administration">Administration</a></li> <li class="toctree-l2"><a class="reference internal" href="meet.php#faculty">Faculty</a></li> </ul> </ul> </li></li> <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admissions<b class="caret"></b></a> <ul class="dropdown-menu"> <ul> <li class="toctree-l2"><a class="reference internal" href="admissions.php#tours">Tours</a></li> <li class="toctree-l2"><a class="reference internal" href="admissions.php#visits">Visits</a></li> <li class="toctree-l2"><a class="reference internal" href="admissions.php#open-house-events">Open House Events</a></li> <li class="toctree-l2"><a class="reference internal" href="admissions.php#admissions-process">Admissions Process</a></li> </ul></ul> </li></li> <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Calendars<b class="caret"></b></a> <ul class="dropdown-menu"> <ul> <li class="toctree-l2"><a class="reference internal" href="calendar.php#id1">Academic Calendar</a></li> <li class="toctree-l2"><a class="reference internal" href="calendar.php#id2">Athletic Calendar</a></li> <li class="toctree-l2"><a class="reference internal" href="calendar.php#id3">Events Calendar</a></li> </ul> </ul> </li></li> <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Family Resources<b class="caret"></b></a> <ul class="dropdown-menu"><ul> <li class="toctree-l2"><a class="reference internal" href="family.php#id1">Moodle</a></li> <li class="toctree-l2"><a class="reference internal" href="family.php#id2">Purchase Lunch</a></li> <li class="toctree-l2"><a class="reference internal" href="family.php#id3">Chelsea School Technology Guide</a></li> </ul> </ul> </li></li> </ul> </div> </div> </div> EOF; echo $top; }
 */
function write_bottom_navbar()
{
    $bottom = <<<EOF


      <!-- Static navbar -->
      <div class="navbar navbar-default navbar-fixed-bottom navbar-inverse" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="#">Project name</a>-->
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="social.php">Social</a></li>
              <li><a href="news.php">News</a></li>      
        <!--<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>-->
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default</a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

EOF;
    echo $bottom;
}

function write_bottom_padding()
{
    $pad = <<< EOF
<style>
body { padding-bottom: 70px; }
</style>
EOF;
    echo $pad;
}

function write_top_padding()
{
    $pad = <<< EOF
<style>
body { padding-top: 70px; }
</style>
EOF;
    echo $pad;
}

function write_footer()
{
    $footer = <<<EOF
<footer class="footer">
  <div class="container">
    <p class="pull-right">
      <a href="#">Back to top</a>
      
    </p>
    </div>
    <div class="container">
        <p>
        This project is now in collaborative development with students, teachers, and administrators at Chelsea School. 
    </p>
        </div>
  </div>
</footer>
EOF;
    echo $footer;
}

function write_depends()
{
    $depends = <<<EOF
    <link rel="stylesheet" href="css/chelsea.css" type="text/css" />
    <link rel="stylesheet" href="css/tabs.min.css" type="text/css" />
    <link rel="stylesheet" href="_static/basic.css" type="text/css" />
    <link rel="stylesheet" href="_static/pygments.css" type="text/css" />
    <link rel="stylesheet" href="_static/bootstrap-3.0.0/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="_static/bootstrap-3.0.0/css/bootstrap-theme.min.css" type="text/css" />
    <link rel="stylesheet" href="_static/bootstrap-sphinx.css" type="text/css" />
    
    <!-- jQuery Resources -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

	<!-- More Script Resources -->
	<script type="text/javascript" src="js/tabs.min.js"></script>
    <script type="text/javascript" src="_static/jquery.js"></script>
    <script type="text/javascript" src="_static/underscore.js"></script>
    <script type="text/javascript" src="_static/doctools.js"></script>
    <script type="text/javascript" src="_static/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="_static/js/jquery-fix.js"></script>
    <script type="text/javascript" src="_static/bootstrap-3.0.0/js/bootstrap.min.js"></script>
EOF;
    echo $depends;
}