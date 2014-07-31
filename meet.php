<?php
/** @file
 *  @brief Meet the school
 *  @detail
 *  @deatail
 *  * Tabbed navigation for single page richness
 *  * Meet students, faculty, board, administration
 *  @todo
 *  1. Perhaps add a staff tab
 *  2. Fix tabs - they're not rendering correctly
 *
 */

/** 
 * Print navigation bar html
 */
require_once 'includes/navigation_functions.php';

/**
 * Prints metadata for html head - currently not used.
 */
require_once 'includes/metadata_functions.php';

require_once 'includes/content_image_vars.php';
?>

<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Meet Chelsea School &mdash; Chelsea School Mobile</title>

<link rel="stylesheet" href="css/tabs.min.css" type="text/css" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />



<link rel="author" title="About these documents" href="about.php" />
<link rel="top" title="Chelsea School Mobile" href="index.php" />
<link rel="next" title="Admissions" href="admissions.php" />
<link rel="prev" title="About Chelsea School" href="about.php" />
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
<meta name='viewport'
    content='width=device-width, initial-scale=1.0, maximum-scale=1'>
<meta name="apple-mobile-web-app-capable" content="yes">



    
  </head>
<body>

  <?php write_top_navbar(); ?>

<div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Nav tabs -->
                <div class="nav">
                    <ul class="nav nav-tabs tab-list">

                        <li><a class="active" href="#students" data-toggle="tab">Students</a></li>
                        <li><a href="#faculty" data-toggle="tab">Faculty</a></li>
                        <li><a href="#board" data-toggle="tab">Board</a></li>
                        <li><a href="#administration" data-toggle="tab">Administration</a></li>

                    </ul>
                </div>
                <!-- end tabs -->

                <div class="section" id="meet-chelsea-school">
                    <h1>
                        Meet Chelsea School
                    </h1>
                    
    
                                        <p>
                                            <img class="center-block img-responsive"
                                                alt="placeholder"
                                                title="Placeholder for Relevant Image"
                                                src="http://placehold.it/300x150">
                                        </p>
                                    
                  
                    </div>

                    <?php echo $meet_chelsea_intro; ?>
                </div>

                <!-- Tabbed Panes From Here -->
                <div class="container tab-content">

                    <div class="section tab-pane" id="students">
                        <h2>
                            Students
                        </h2>
                        <?php echo $meet_chelsea_students; ?>
                    </div>



                    <div class="section tab-pane" id="board">
                        <h2>
                            Board
                        </h2>
                        <?php echo $meet_chelsea_board?>
                    </div>

                    <div class="section tab-pane" id="administration">
                        <h2>
                            Administration
                        </h2>
                        <?php echo $meet_chelsea_admin; ?>
                    </div>

                    <div class="section tab-pane" id="faculty">
                        <h2>
                            Faculty
                        </h2>
                        <?php echo $meet_chelsea_faculty; ?>
                    </div>
                </div>


            </div>

        </div>
    </div>
    
    <?php write_footer(); ?>
    
<!-- JS Resources -->
    
<script type="text/javascript" src="js/tabs.min.js"></script>
<script type="text/javascript" src="_static/jquery.js"></script>
<script type="text/javascript" src="_static/underscore.js"></script>
<script type="text/javascript" src="_static/doctools.js"></script>
<script type="text/javascript" src="_static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="_static/js/jquery-fix.js"></script>
<script type="text/javascript"
    src="_static/bootstrap-3.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="_static/bootstrap-sphinx.js"></script>

<!-- Tabs -->
<script type="text/javascript">
    $( document ).ready()
	$('#students a[href="#students"]').tab('show') // Select tab by name
    $('#faculty a[href="#faculty"]').tab('show') // Select tab by name 
    $('#board a[href="#board"]').tab('show') // Select tab by name   
    $('#administration a[href="#administration"]').tab('show') // Select tab by name   
</script> 
</body>
</html>