<?php
/** @file
 *  @brief Social Networks
 *  @detail
 *  * Currently links to organization's facebook, g+, github, twitter, etc.
 *  @todo
 *  1. Generate links through php variables in included code
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
?>
<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Chelsea School</title>


<link rel="stylesheet" href="css/tabs.min.css" type="text/css" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
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
</head>
<body>
<?php write_top_navbar(); ?>
<div class="container">
<h1>Social Networks</h1>
<p title="placeholder">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


<div class="row">

<!-- column 1 -->
<div class="col-xs-4 placeholder"><p><a type="button" class="btn btn-lg btn-default" target="_new" href="https://www.facebook.com/ChelseaSchool" title="Chelsea on Facebook" alt="Facebook"><i class="fa fa-facebook-square fa-3x"></i></p></a>

</div>

<!-- column 2 -->
<div class="col-xs-4 placeholder"><p><a disabled="disabled" type="button" target="_blank" class="btn btn-lg btn-default" href="https://www.linkedin.com/company/1510917?trk=tyah&trkInfo=tarId%3A1405611938775%2Ctas%3AChelsea%20School%2Cidx%3A2-2-7" title="Chelsea on LinkedIn (Pending)" alt="LinkedIn"><i class="fa fa-linkedin-square fa-3x"></i></i></p></a>

</div>

<!-- column 3 -->
<div class="col-xs-4 placeholder"><p><a class="btn btn-lg btn-default" href="https://twitter.com/ChelseaSchool" title="Chelsea on Twitter" target="_blank" alt="twitter"><i class="fa fa-twitter fa-3x"></i></a></p></a>
</div>
</div>
<div class="row">
<!-- column 4 -->
<div class="col-xs-4 placeholder"><p><a type="button" class="btn btn-lg btn-default" target="_blank" href="https://www.youtube.com/channel/UCmLJEybLSa7V9yM0nCGitsQ" title="Chelsea on youtube" alt="youtube"><i class="fa fa-youtube fa-3x"></i></a></p></a>
</div>
<!-- column 5 -->
<div class="col-xs-4 placeholder"><p><a type="button" class="btn btn-lg btn-default" href="https://plus.google.com/+ChelseaSchoolHyattsville/" title="Chelsea on plus.google" alt="google+" target="_blank"><i class="fa fa-google-plus fa-3x"></i></a></p></a>
</div>
<!-- column 6 -->
<div class="col-xs-4 placeholder"><p><a type="button" class="btn btn-lg btn-default" href="https://github.com/orgs/ChelseaSchool/dashboard" title="Chelsea on github" alt="github" target="_blank"><i class="fa fa-github fa-3x"></i></a></p></a>

</div>

</div>
</div>

</body>