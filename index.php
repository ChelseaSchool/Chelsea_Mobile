<?php 
/** @file
 *  @brief Main landing page
 *  @detail
 *  Provides access to primary navigation, contents, perhaps search
 *  @todo
 *  1. install icon (jQuery Mobile)
 *  2. Move from block buttons to icon panel for sections
 *  3. Request desktop site?
 *
 */

require_once 'includes/navigation_functions.php';
require_once 'includes/metadata_functions.php';
?>

<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Chelsea School</title>


    <link rel="stylesheet" href="css/tabs.min.css" type="text/css" />

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

     
<!-- Tabs -->
<script type="text/javascript">
    $( document ).ready()
	$('#buttons a[href="#buttons"]').tab('show') // Select tab by name
    $('#contents a[href="#contents"]').tab('show') // Select tab by name 
    $('#contact a[href="#contact"]').tab('show') // Select tab by name  

</script>    
<!-- End Tabs -->
     
<!-- FontAwesome Resources -->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    
 
<!-- jQuery Resources -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>


    <script type="text/javascript">
      var DOCUMENTATION_OPTIONS = {
        URL_ROOT:    './',
        VERSION:     '',
        COLLAPSE_INDEX: false,
        FILE_SUFFIX: '.php',
        HAS_SOURCE:  true
      };
    </script>
	<script type="text/javascript" src="js/tabs.min.js"></script>
    <script type="text/javascript" src="_static/jquery.js"></script>
    <script type="text/javascript" src="_static/underscore.js"></script>
    <script type="text/javascript" src="_static/doctools.js"></script>
    <script type="text/javascript" src="_static/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="_static/js/jquery-fix.js"></script>
    <script type="text/javascript" src="_static/bootstrap-3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="_static/bootstrap-sphinx.js"></script>
    <!-- <link rel="author" title="About these documents" href="#" />
    <link rel="top" title="Chelsea School Mobile" href="index.php" />
    <link rel="next" title="Meet Chelsea School" href="meet.php" />
    <link rel="prev" title="Chelsea School" href="index.php" />
    <link rel="author" title="About these documents" href="about.php" />
    <link rel="top" title="Chelsea School Mobile" href="#" />
    <link rel="next" title="About Chelsea School" href="about.php" />-->
	
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1'>
<meta name="apple-mobile-web-app-capable" content="yes">
<?php write_bottom_padding(); ?>
<?php write_top_padding(); ?>
  </head>
  <body>

<?php write_top_navbar(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
    <!-- Nav tabs -->
<div class="nav">
	<ul class="nav nav-tabs">
 		 
 		 <li class="active"><a href="#buttons" data-toggle="tab">Main Menu</a></li>
 		 <li><a href="#contents" data-toggle="tab">Contents</a></li>
 		 <li><a href="#contact" data-toggle="tab">Contact</a></li>	  
	</ul>
</div>
 <!-- end tabs -->
 <div class="tab-content">


 <div class="tab-pane active" id="buttons">
 <p>This project is now in collaborative development with students, teachers, and administrators at <a href="http://chelseaschool.edu">Chelsea School</a>.</p>
 <div class="row">
    <div class="col-md-12">
       <div class="btn-group btn-regular btn-group-lg btn-block">
        
        <a type="button" class="btn btn-default btn-block" href="about.php">
          <i class="fa fa-question-circle"></i> About Chelsea School
        </a>

        <a type="button" class="btn btn-default  btn-block" href="meet.php">
          <i class="fa fa-comments-o"></i> Meet Chelsea School
        </a>        

        <a type="button" class="btn btn-default btn-block" href="admissions.php">
          <i class="fa fa-check-square-o"></i> Admissions
        </a>                
    

    
        
        <a type="button" class="btn btn-default btn-block" href="family.php">
          <i class="fa fa-users"></i> Families &amp; Students
        </a>

        <a type="button" class="btn btn-default btn-block" href="calendar.php">
          <i class="fa fa-calendar"></i> Calendars
        </a>        

        <a type="button" class="btn  btn-block btn-default" href="gallery.php">
          <i class="fa fa-camera"></i> Media Gallery
        </a> 
        </div>               
    </div><!--End column-->
</div><!--end row-->
<!--<p align=center><a href="gallery.php"><img src="http://placehold.it/1080x760&text=Tremendous+Promo+Shot+or+Logo"></a></p>

<a type="button" class="btn btn-primary btn-lg btn-block" name="buttons" type="button" href="about.php">About Chelsea School</a>
<a type="button" class="btn btn-primary btn-lg btn-block" type="button" href="meet.php">Meet Chelsea</a>
<a type="button" class="btn btn-primary btn-lg btn-block" type="button" href="admissions.php">Admissions</a>	
<a type="button" class="btn btn-primary btn-lg btn-block" type="button" href="family.php">Families</a>
<a type="button" class="btn btn-primary btn-lg btn-block" type="button" href="calendar.php">Calendars</a> 
<!-- <a type="button" class="btn btn-primary btn-lg btn-block" type="button" href="gallery.php">Gallery</a> -->
</div>
 
<div class="tab-pane" id="contents">     
 <h1 hidden>Chelsea School<a name="contents" class="headerlink" href="#chelsea-school" title="Permalink to this headline">¶</a></h1>
<!-- <div class="toctree-wrapper compound">-->
<ul>
<li><a href="gallery.php">Chelsea School Gallery</a></li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="about.php">About Chelsea School</a><ul>
<li class="toctree-l2"><a class="reference internal" href="about.php#philosophy">Philosophy</a></li>
<li class="toctree-l2"><a class="reference internal" href="about.php#history">History</a></li>
<li class="toctree-l2"><a class="reference internal" href="about.php#news">News</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="meet.php">Meet Chelsea School</a><ul>
<li class="toctree-l2"><a class="reference internal" href="meet.php#students">Students</a></li>
<li class="toctree-l2"><a class="reference internal" href="meet.php#board">Board</a></li>
<li class="toctree-l2"><a class="reference internal" href="meet.php#administration">Administration</a></li>
<li class="toctree-l2"><a class="reference internal" href="meet.php#faculty">Faculty</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="admissions.php">Admissions</a><ul>
<li class="toctree-l2"><a class="reference internal" href="admissions.php#tours">Tours</a></li>
<li class="toctree-l2"><a class="reference internal" href="admissions.php#visits">Visits</a></li>
<li class="toctree-l2"><a class="reference internal" href="admissions.php#open-house-events">Open House Events</a></li>
<li class="toctree-l2"><a class="reference internal" href="admissions.php#admissions-process">Admissions Process</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="calendar.php">Calendars</a><ul>
<li class="toctree-l2"><a class="reference internal" href="calendar.php#id1">Academic Calendar</a></li>
<li class="toctree-l2"><a class="reference internal" href="calendar.php#id2">Athletic Calendar</a></li>
<li class="toctree-l2"><a class="reference internal" href="calendar.php#id3">Events Calendar</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="family.php">Family Resources</a><ul>
<li class="toctree-l2"><a class="reference internal" href="family.php#id1">Moodle</a></li>
<li class="toctree-l2"><a class="reference internal" href="family.php#id2">Purchase Lunch</a></li>
<li class="toctree-l2"><a class="reference internal" href="family.php#id3">Chelsea School Technology Guide</a></li>
</ul>
</li>
</ul>

<!-- </div>-->
<!--  <div class="section" id="indices-and-tables">-->
<h1 hidden>Index &amp; Search<a class="headerlink" href="#indices-and-tables" title="Permalink to this headline">¶</a></h1>
<ul class="simple">
<li hidden><a class="reference internal" href="genindex.php"><em>Index</em></a></li>
<li hidden><a class="reference internal" href="search.php"><em>Search Page</em></a></li>
</ul>
</div>


<div class="tab-pane" id="contact">
	<h1>Chelsea School</h1>
	<address>Suite 300<br>  

	2970 Belcrest Center Drive<br>

	Hyattsville, Maryland 20782</address>

	<p><a href="phone:1-240-467-2100">1-240-467-2100</a></p>

</div>






<!-- End Tabbed Content --></div>

 
     
 

<footer class="footer">
  <!-- <div class="container">
    <p class="pull-right">
      <a href="#">Back to top</a>
      
    </p>
    <p>
        &copy; Copyright 2014, Chelsea School.<br/>
    </p>
  </div>-->
</footer>

  </body>
</html>
