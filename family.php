<?php

/**
 * @file
 *
 * @brief Student and Family resources
 *
 * @detail Currently flat hyperlinked buttons; 
 *
 * PHP version 5
 *
 * @category    students and families
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

require_once 'includes/content_image_vars.php';
?>

<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Family Resources &mdash; Chelsea School Mobile</title>

<link rel="stylesheet" href="css/tabs.min.css" type="text/css" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />



<link rel="author" title="About these documents" href="about.php" />
<link rel="top" title="Chelsea School Mobile" href="index.php" />
<link rel="prev" title="Calendars" href="calendar.php" />
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
<meta name='viewport'
    content='width=device-width, initial-scale=1.0, maximum-scale=1'>
<meta name="apple-mobile-web-app-capable" content="yes">

</head>

<body>

  <?php write_top_navbar(); ?>

<!-- Lunch Modal -->  

<!-- Modal -->
<div class="modal fade" id="lunch" tabindex="-1" role="dialog" aria-labelledby="lunch purchase" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Lunch Purchase</h4>
      </div>
      <div class="modal-body">
        <?php echo $family_lunch_copy; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Paypal Button Placeholder</button>
      </div>
    </div>
  </div>
</div>

<!-- End Lunch Modal -->
  
<div class="container">
        <div class="row">
            <div class="col-md-12">

                
                    <h1>Family Resources</h1>

                    <div class="placeholder">
                        <p>
                            <img class="center-block img-responsive"
                                alt="placeholder"
                                title="Placeholder for Relevant Image"
                                src="http://placehold.it/300x150">
                        </p>
                    </div>
                    
                

                
                    <h2>
                        <a href="http://chelseapride.org">Moodle</a>
                    </h2>
                    <p>
                        Moodle, or <a href="http://chelseapride.org"
                            title="Moodle" alt="Moodle">Chelseapride.org</a>, is a
                        course management system used by stuents and
                        faculty at Chelsea School. Click the link to
                        access Moodle.
                    </p>
                
                
                    <h2>
                        <a class="reference external"
                            href="http://chelseaschool.edu">Purchase
                            Lunch</a>
                    </h2>

                    
                   
                    <div class="text-center">
                    	<!-- Button trigger modal -->
<button class="btn btn-default btn-success" data-toggle="modal" data-target="#lunch">
  Launch Lunch Modal
</button>
</div>


                
                
                    <h2>
                        <a href="http://chelseaschool.edu/techguide">Chelsea
                            School Technology Guide</a>
                    </h2>
                    <p>Contrary to popular belief, Lorem Ipsum is not
                        simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it
                        over 2000 years old. Richard McClintock, a Latin
                        professor at Hampden-Sydney College in Virginia,
                        looked up one of the more obscure Latin words,
                        consectetur, from a Lorem Ipsum passage, and
                        going through the cites of the word in classical
                        literature, discovered the undoubtable source.
                        Lorem Ipsum comes from sections 1.10.32 and
                        1.10.33 of "de Finibus Bonorum et Malorum" (The
                        Extremes of Good and Evil) by Cicero, written in
                        45 BC. This book is a treatise on the theory of
                        ethics, very popular during the Renaissance. The
                        first line of Lorem Ipsum, "Lorem ipsum dolor
                        sit amet..", comes from a line in section
                        1.10.32.</p>
               
                
                    <h2>
                        <a href="https://chelseaschool.powerschool.com/public">PowerSchool</a>
                    </h2>
                    <p>Students, guardians, parents are encouraged to
                        log in to PowerSchool weekly to celebrate
                        successes, anticipate difficulties, and develop
                        strategies for continuing success.</p>
           
</div>

    
<?php write_footer(); ?>

<!-- JS Resources -->

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