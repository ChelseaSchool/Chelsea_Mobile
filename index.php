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

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />


<!-- Tabs
<script type="text/javascript">
    $( document ).ready()
	$('#buttons a[href="#buttons"]').tab('show') // Select tab by name
    $('#contents a[href="#contents"]').tab('show') // Select tab by name 
    $('#contact a[href="#contact"]').tab('show') // Select tab by name  

</script>    
<!-- End Tabs -->

<!-- FontAwesome Resources -->
<link
    href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css"
    rel="stylesheet">


<!-- jQuery Resources -->
<link rel="stylesheet"
    href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="css/chelsea.css">
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
<script type="text/javascript"
    src="_static/bootstrap-3.0.0/js/bootstrap.min.js"></script>
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
<meta name='viewport'
    content='width=device-width, initial-scale=1.0, maximum-scale=1'>
<meta name="apple-mobile-web-app-capable" content="yes">
<script>
  $(document).ready(function(){
    $('.carousel').carousel();
  });
</script>
<?php //write_bottom_padding(); ?>
<?php //write_top_padding(); ?>
<link rel="shortcut icon" href="favicon.ico">
  </head>
<body>

<?php write_top_navbar(); ?>

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--     <!-- Nav tabs
<div class="nav">
	<ul class="nav nav-tabs">
 		 
 		 <li class="active"><a href="#buttons" data-toggle="tab">Main Menu</a></li>
 		 <li><a href="#contents" data-toggle="tab">Contents</a></li>
 		 <li><a href="#contact" data-toggle="tab">Contact</a></li>	  
	</ul>
</div>-->
                <!-- end tabs -->
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">

                                <a data-toggle="collapse"
                                    data-parent="#accordion"
                                    href="#collapseOne"> Gallery <small>Close</small>

                                </a>
                            </h4>
                        </div>
                        <div class="panel-body">
                            <div id="collapseOne"
                                class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <a data-toggle="collapse"
                                        data-parent="#accordion"
                                        href="#collapseOne">
                                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img class="placeholder" src="images/logo-v.jpg" alt="Greater Expectations" title="Chelsea School: Greater Expectations">
      
    </div>
    
    <div class="item">
      <img class="placeholder" src="http://placehold.it/300x150" alt="Promo Placeholder" title="Chelsea School: Promo Shot">
      
    </div>
     <div class="item">
     <img clas="placeholder" src="http://placehold.it/300x150" alt="Promo Placeholder" title="Chelsea School: Promo Shot">
     </div> 
          <div class="item">
      <img class="placeholder" src="http://placehold.it/300x150" alt="Promo Placeholder" title="Chelsea School: Promo Shot">
      
    </div>
    </div>  
    

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

                             
</div>
                            <div id="collapseTwo"
                                class="panel-collapse collapse in">
                                <div class="panel-body">

                                    <div
                                        class="btn-group btn-regular btn-group-lg btn-block">

                                        <a type="button"
                                            class="btn btn-default btn-block"
                                            href="about.php"> <i
                                            class="fa fa-question-circle"></i>
                                            About Chelsea School
                                        </a> 
                                        
                                        <a type="button"
                                            class="btn btn-default  btn-block"
                                            href="meet.php"> <i
                                            class="fa fa-comments-o"></i>
                                            Meet Chelsea School
                                        </a> 
                                        
                                        <a type="button"
                                            class="btn btn-default btn-block"
                                            href="admissions.php"> <i
                                            class="fa fa-file-text-o"></i>

                                            Admissions
                                        </a> 
                                        
                                        <a type="button"
                                            class="btn btn-default btn-block"
                                            href="family.php"> <i
                                            class="fa fa-users"></i>
                                            Families &amp; Students
                                        </a> 
                                        
                                        <a type="button"
                                            class="btn btn-default btn-block"

                                            href="alum.php"> <i
                                            class="fa fa-graduation-cap"></i>&nbsp;
                                            Alumni
                                        </a> <a type="button"

                                            

                                            class="btn btn-default btn-block"
                                            href="calendar.php"> <i
                                            class="fa fa-calendar"></i>
                                            Calendars
                                        </a>

                                        <!-- <a type="button" class="btn  btn-block btn-default" href="gallery.php">
          <i class="fa fa-camera"></i> Media Gallery
        </a>-->
                                    </div>
                                </div>
                                <!--End column-->
                            </div>
                            <!--end row-->
                            </h4>
                        </div>
                        <div id="collapseTwo"
                            class="panel-collapse collapse in"></div>
                    </div>
                </div>



                <!--<p align=center><a href="gallery.php"><img src="http://placehold.it/1080x760&text=Tremendous+Promo+Shot+or+Logo"></a></p>

<a type="button" class="btn btn-primary btn-lg btn-block" name="buttons" type="button" href="about.php">About Chelsea School</a>
<a type="button" class="btn btn-primary btn-lg btn-block" type="button" href="meet.php">Meet Chelsea</a>
<a type="button" class="btn btn-primary btn-lg btn-block" type="button" href="admissions.php">Admissions</a>	
<a type="button" class="btn btn-primary btn-lg btn-block" type="button" href="family.php">Families</a>
<a type="button" class="btn btn-primary btn-lg btn-block" type="button" href="calendar.php">Calendars</a> 
<!-- <a type="button" class="btn btn-primary btn-lg btn-block" type="button" href="gallery.php">Gallery</a> -->





                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"
                                data-parent="#accordion"
                                href="#collapseThree">
                                <p>Contact</p>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree"
                        class="panel-collapse collapse in">
                        <div class="panel-body">
                            <h3>Chelsea School</h3>
                            <address>
                                Suite 300<br> 2970 Belcrest Center Drive<br>
                                Hyattsville, Maryland 20782
                            </address>

                            <p>
                                <a href="phone:1-240-467-2100">1-240-467-2100</a>
                            </p>
                            </h4>
                        </div>
                        <div id="collapseThree"
                            class="panel-collapse collapse in"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>











<?php write_footer(); ?>
    <!-- <footer class="footer">
        <!-- <div class="container">
    <p class="pull-right">
      <a href="#">Back to top</a>
      
    </p>
    <p>
        &copy; Copyright 2014, Chelsea School.<br/>
    </p>
  </div>
    </footer>-->

</body>
</html>
