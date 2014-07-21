<?php

/**
 * @file
 *
 * @brief Photo Gallery
 *
 * @detail Uses carousel from bootstrap. Currenty unused as its been incorporated into index.php.
 *
 * PHP version 5
 *
 * @category    gallery
 * @package     frontend
 * @author      Rik Goldman <rikgoldman@chelseaschool.edu>
 * @copyright   2014 Chelsea School
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GPLv2
 */

/** 
 * Print navigation bar html
 */
require_once 'includes/navigation_functions.php';

/**
 * Prints metadata for html head - currently not used.
 */
require_once 'includes/metadata_functions.php';
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/tabs.min.css" type="text/css" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<title>Chelsea School &mdash; Chelsea School Mobile</title>

<script type="text/javascript">
      var DOCUMENTATION_OPTIONS = {
        URL_ROOT:    './',
        VERSION:     '',
        COLLAPSE_INDEX: false,
        FILE_SUFFIX: '.php',
        HAS_SOURCE:  true
      };
    </script>

<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
<meta name='viewport'
    content='width=device-width, initial-scale=1.0, maximum-scale=1'>
<meta name="apple-mobile-web-app-capable" content="yes">
<?php write_bottom_padding(); ?>
<?php write_top_padding(); ?>
  <script>
  $(document).ready(function(){
    $('.carousel').carousel();
  });
</script>
</head>
<body>
<?php write_top_navbar(); ?>

<div class="container">
        <div class="row">
            <div class="col-md-12">

                <div id="this-carousel-id" class="carousel slide">
                    <!-- class of slide for animation -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <!-- class of active since it's the first item -->
                            <img src="http://placehold.it/1080x760"
                                alt="" />
                            <div class="carousel-caption">
                                <h1>Promo: Maths &amp; Sciences</h1>
                                <p>Promotional Copy/Caption</p>
                                <a class="btn btn-lg btn-primary"
                                    href="placeholder.php" role="button">Learn
                                    More</a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://placehold.it/1080x760"
                                alt="" />
                            <div class="carousel-caption">
                                <h1>Promo Image: Literacy</h1>
                                <p>Promotional Copy/Caption</p>
                                <a class="btn btn-lg btn-primary"
                                    href="placeholder.php" role="button">Learn
                                    More</a>
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="http://placehold.it/1080x760"
                                alt="" />
                            <div class="carousel-caption">
                                <h1>Promo Image: Technology</h1>
                                <p>Promotional Copy/Caption</p>
                                <a class="btn btn-lg btn-primary"
                                    href="placeholder.php" role="button">Learn
                                    More</a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://placehold.it/1080x760"
                                alt="" />
                            <div class="carousel-caption">
                                <h1>Promo Image: Student Life</h1>
                                <p>Promotional Copy/Caption</p>
                                <a class="btn btn-lg btn-primary"
                                    href="placeholder.php" role="button">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.carousel-inner -->
                    <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
                    <a class="left carousel-control"
                        href="#this-carousel-id" data-slide="prev"><span
                        class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control"
                        href="#this-carousel-id" data-slide="next"><span
                        class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                <!-- /.carousel -->


            </div>
        </div>
    </div>
<?php write_footer(); ?>
    <!--  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="_static/js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="./js/bootstrap.min.js"></script>-->
</body>
</html>