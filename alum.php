<?php

/**
 * @file
 *
 * @brief Alum Resources
 *
 * @detail Currently mere button hyperlinks
 *
 * PHP version 5
 *
 * @category    alumni
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

<title>Chelsea School Alumni Community</title>

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

                <div class="section" id="alumintro">
                    <h1>
                        Alumni Community </h1>
                        
                        <p>
                                            <img class="center-block img-responsive"
                                                alt="placeholder"
                                                title="Placeholder for Relevant Image"
                                                src="http://placehold.it/300x150">
                                        </p>
                   

                    
             

                    <p>Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since
                        the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries,
                        ...</p>

                           
                        </p>

                    </div>

<p><a type="button" class="btn btn-default btn-block" href="https://www.google.com/a/chelseapride.org/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/a/chelseapride.org/&ss=1&ltmpl=default&ltmplcache=2&emr=1"><span class="glyphicon glyphicon-envelope"></span> Access Chelsea Email Account &raquo; </a></p>
<p><a type="button" class="btn btn-default btn-block" href="http://chelseapride.org/helpdesk" title="Contact Helpdesk if you have trouble with your Chelsea accounts"><span class="glyphicon glyphicon-hdd"></span> Tech Support (Helpdesk) &raquo;</a></p>
<p><a type="button" class="btn btn-default btn-block" href="mailto:information@chelseaschool.edu" title="Career Support Placeholder"><span class="glyphicon glyphicon-briefcase"></span> Career Support &raquo; </a>
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
