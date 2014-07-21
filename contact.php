<?php

/**
 * @file
 *
 * @brief Organization contact and nav stuff
 *
 * @detail Uses html5 address (navigation) and tel type hyperlinks
 *
 * PHP version 5
 *
 * @category    contact
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

<title>Contact Chelsea School</title>


<link rel="stylesheet" href="css/tabs.min.css" type="text/css" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link
    href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css"
    rel="stylesheet">


<!-- jQuery Resources -->
<link rel="stylesheet"
    href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="css/chelsea.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="js/tabs.min.js"></script>
<script type="text/javascript" src="_static/jquery.js"></script>
<script type="text/javascript" src="_static/underscore.js"></script>
<script type="text/javascript" src="_static/doctools.js"></script>
<script type="text/javascript" src="_static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="_static/js/jquery-fix.js"></script>
<script type="text/javascript"
    src="_static/bootstrap-3.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="_static/bootstrap-sphinx.js"></script>

<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
<meta name='viewport'
    content='width=device-width, initial-scale=1.0, maximum-scale=1'>
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
<?php write_top_navbar(); ?>
<div class="container">
        <h2>Chelsea School</h2>
        <p>Depending on your device, clicking the phone number should
            start a call to our office.</p>
        <p>Again, depending on your device, clicking on the address
            should bring up Chelsea School's location in your mapping
            software.</p>
        <h3>Postal Address</h3>
        <p>
        
        
        <address>
            Suite 300<br> 2970 Belcrest Center Drive<br> Hyattsville,
            Maryland 20782
        </address>
        </p>
        <h3>Telephone</h3>
        <p>
            <a href="tel:+12404672100">1-240-467-2100</a>
        </p>
    </div>
</body>