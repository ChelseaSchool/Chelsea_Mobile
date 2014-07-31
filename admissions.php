<?php

/**
 * @file
 *
 * @brief Admissions marketing copy and information
 *
 * @detail currently static; will become dynamic in later iterations
 *
 * PHP version 5
 *
 * @category    admissions
 * @package     frontend
 * @author      Rik Goldman <rikgoldman@chelseaschool.edu>
 * @copyright   2014 Chelsea School
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GPLv2
 */

/**
 * Require nav function
 */
require_once 'includes/navigation_functions.php';

/**
 * Require metadata - but it is not called yet.
 */
require_once 'includes/metadata_functions.php';

require_once 'includes/content_image_vars.php';
?>

<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Chelsea School Admissions</title>

<link rel="stylesheet" href="css/tabs.min.css" type="text/css" />

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/chelsea.css" type="text/css" />

<script type="text/javascript" src="_static/jquery.js"></script>
<script type="text/javascript" src="_static/underscore.js"></script>
<script type="text/javascript" src="_static/doctools.js"></script>
<script type="text/javascript" src="_static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="_static/js/jquery-fix.js"></script>
<script type="text/javascript"
    src="_static/bootstrap-3.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="_static/bootstrap-sphinx.js"></script>
<link rel="author" title="About these documents" href="about.php" />
<link rel="top" title="Chelsea School Mobile" href="index.php" />
<link rel="next" title="Calendars" href="calendar.php" />
<link rel="prev" title="Meet Chelsea School" href="meet.php" />
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
<meta name='viewport'
    content='width=device-width, initial-scale=1.0, maximum-scale=1'>
<meta name="apple-mobile-web-app-capable" content="yes">

<!-- Tabs -->

<?php //write_bottom_padding(); ?>
<?php //write_top_padding(); ?>
</head>
<body>
    <?php write_top_navbar(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Nav tabs -->




                <div class="nav">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tours"
                            data-toggle="tab">Tours</a></li>
                        <li><a href="#visits" data-toggle="tab">Visits</a></li>
                        <li><a href="#open-house" data-toggle="tab">Open
                                House</a></li>
                        <li><a href="#admissions-process"
                            data-toggle="tab">Process</a></li>
                    </ul>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-md-12">











                            <h2>
                                Admissions <small>(Sticky Intro
                                    Placeholer)</small>
                            </h2>
                            <?php echo $admissions_sticky_copy; ?>
                            <div class="tab-content">
                                <div class="tab-pane" id="tours">
                                    <h2>Tours</h2>
                                    <?php echo $admissions_tours_copy; ?>


                                    <p>
                                        <img
                                            class="center-block img-responsive"
                                            alt="placeholder"
                                            title="Placeholder for Relevant Image"
                                            src="http://placehold.it/300x150">
                                    </p>

                                </div>


                                <div class="tab-pane" id="visits">

                                    <h2>Visits</h2>
                                    <?php echo $admissions_visits_copy; ?>
                                </div>


                                <div class="tab-pane" id="open-house">
                                    <h2>Open House Events</h2>
                                    <?php echo $admissions_open_house_copy; ?>
                                </div>


                                <div class="tab-pane"
                                    id="admissions-process">
                                    <h2>Admission Process</h2>
                                    <?php echo $admissions_process_copy; ?>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php write_footer(); ?>

    <!-- JS Depends -->
    
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
	$('#buttons a[href="#admissions"]').tab('show') // Select tab by name
    $('#tours a[href="#tours"]').tab('show') // Select tab by name 
    $('#visits a[href="#visits"]').tab('show') // Select tab by name  
    $('#open-house-events a[href="#open-house-events"]').tab('show') // Select tab by name 
    $('#admission-process a[href="#admissions-process"]').tab('show') // Select tab by name   
</script>
<!-- End Tabs -->
</body>
</html>
