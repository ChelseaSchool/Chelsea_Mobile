<?php

/**
 * @file
 *
 * @brief About the organization
 *
 *
 * PHP version 5
 *
 * @category    about
 * @package     frontend
 * @author      Rik Goldman <rikgoldman@chelseaschool.edu>
 * @copyright   2014 Chelsea School
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GPLv2
 */

/**
 * include nav and other functions
 */
require_once 'includes/navigation_functions.php';

/**
 * include metadata for html head. This isn't called yet.
 * 
 */
require_once 'includes/metadata_functions.php';

require_once 'includes/content_image_vars.php';
?>

<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>About Chelsea School</title>

<link rel="stylesheet" href="css/tabs.min.css" type="text/css" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/chelsea.css" type="text/css" />


<link rel="author" title="About these documents" href="#" />
<link rel="top" title="Chelsea School Mobile" href="index.php" />
<link rel="next" title="Meet Chelsea School" href="meet.php" />
<link rel="prev" title="Chelsea School" href="index.php" />

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
                    <ul class="nav nav-tabs tablist">
                        <li class="active"><a href="#about"
                            data-toggle="tab">About Chelsea</a></li>
                        <li><a href="#philosophy" data-toggle="tab">Philosophy</a></li>
                        <li><a href="#history" data-toggle="tab">History</a></li>
                        <li><a href="#news" data-toggle="tab">News</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <!--<div class="section" id="about-chelsea-school">-->

                    <div class="tab-pane active" id="about">
                        <h2>
                            About Chelsea School
                        </h2>
                        

                        <?php echo $about_chelsea; ?>
                    </div>

                    <div class="tab-pane" id="philosophy">
                        <h2>
                            Philosophy
                        </h2>
                        <?php echo $about_philosophy_copy; ?>
                    </div>
                    <div class="tab-pane" id="history">
                        <h2>
                            History
                        </h2>
                        <?php echo $about_history; ?>
                    </div>

                    <div class="tab-pane" id="news">
                        <h2>
                            News
                        </h2>
                        <?php echo $about_news; ?>
                    </div>

                                                        </div>
                                </div>
                            </div>
                           
                        

                </div>
            </div>

        </div>
    </div>
    <?php write_footer(); ?>


    <!-- Tabs -->
    <script type="text/javascript">
    $( document ).ready()
    $('#philosophy a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
    $('#about a[href="#about"]').tab('show') // Select tab by name
    
    $('#history a').click(function (e) {
    	  e.preventDefault()
    	  $(this).tab('show')
    	})
    $('#news a[href="#news"]').tab('show') // Select tab by name
</script>
    <!-- End Tabs -->
    
<!-- JS Depends -->
    
<script type="text/javascript" src="js/tabs.min.js"></script>
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