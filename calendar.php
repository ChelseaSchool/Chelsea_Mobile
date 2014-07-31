<?php

/**
 * @file
 *
 * @brief Calendar Main Page
 *
 * @detail Links to academic calendar, athletic calendar, special events, bell schedule
 *
 * PHP version 5
 *
 * @category    calendars
 * @package     frontend
 * @author      Rik Goldman <rikgoldman@chelseaschool.edu>
 * @copyright   2014 Chelsea School
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GPLv2
 */

/** 
 * Print navigatio bar html
 */
require_once 'includes/navigation_functions.php';

/**
 * Prints metadata for html head - currently not used.
 */
require_once 'includes/metadata_functions.php';
?>


<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Chelsea School Calendars</title>

<link rel="stylesheet" href="css/tabs.min.css" type="text/css" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />



<link rel="author" title="About these documents" href="about.php" />
<link rel="top" title="Chelsea School Mobile" href="index.php" />
<link rel="next" title="Family Resources" href="family.php" />
<link rel="prev" title="Admissions" href="admissions.php" />
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

                <div class="section" id="calendars">
                    <h1>Calendars</h1>
                    <p>
                        <img class="center-block img-responsive"
                            alt="placeholder"
                            title="Placeholder for Relevant Image"
                            src="http://placehold.it/300x150">
                    </p>

                </div>

                <div class="section" id="id1">
                    <h2>
                        <a disabled class="btn btn-block btn-default"
                            href="http://google.com/calendar"><i
                            class="fa fa-external-link"></i> Athletic
                            Calendar &raquo;</a>
                    </h2>
                </div>
                <div class="section" id="id2">
                    <h2>
                        <a class="btn btn-block btn-default"
                            href="cal2014-2015.php"><i
                            class="fa fa-external-link"></i> Academic
                            Calendar &raquo;</a>
                    </h2>
                </div>
                <div class="section" id="id3">
                    <h2>
                        <a disabled class="btn btn-block btn-default"
                            href="http://google.com/calendar"><i
                            class="fa fa-external-link"></i> Events
                            Calendar &raquo;</a>
                    </h2>
                    <p>
                
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
</body>
</html>