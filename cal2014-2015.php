<?php

/**
 * @file
 *
 * @brief Academic Calendar
 *
 * @detail Uses table, table-striped, table-hover classes
 *
 * PHP version 5
 *
 * @category    Calendars
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

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Academic Calendar</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/tabs.min.css" type="text/css" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />

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
<body lang="en-US" dir="ltr">
<?php write_top_navbar(); ?>

<div class="container">
<h1>Academic Calendar: 2014-2015</h1>
<table class="table table-hover table-striped">


<tr><th>Date(s)</th><th>Description</th></tr>
<tr><td>August 18-August 22</td><td>Summer Institute
                for faculty</td></tr>
                
<tr><td>August 22</td><td>New student orientation (10:00 a.m.-1:00 p.m.)</td></tr>
<tr><td>August 25</td><td>First day of school for
                students</td></tr>
                
               
    
    <tr><td>September 1</td><td> Holiday: Labor Day</td></tr>
    </p>
    <tr><td>
       September 10</td><td>PTO Membership
                Drive/Potluck Dinner (7:00-9:00 p.m.)</td></tr>
   
    <tr><td>September 19</td><td> NO SCHOOL: Professional
                Development</td></tr>
    
    <tr><td>
        
            September 24</td><td>Back to School Night
                (7:00-9:00 p.m.)</td></tr>
   
    <tr><td>
        
            September 25</td><td>HOLIDAY: Rosh Hashanah</td></tr>

    <tr><td>
        
            September 30</td><td>Professional Breakfast
                (9:00)</td></tr>
    
    <tr><td>
        
            October 3</td><td>Progress reports sent home
        </td></tr>

    <tr><td>
        
            October 24</td><td> End of First Quarter
             Quarter (42 days)</td></tr>
    
    <tr><td>
        
            October 27</td><td>NO SCHOOL: Professional
                Development</td></tr>
   
    <tr><td>
        
            October 29</td><td>Open House (9:00-11:00)</td></tr>

    <tr><td>
        
            November 14</td><td>Parent Conferences (After
                dismissal-1:00-5:00 p.m.) </td></tr>
   
    <tr><td>
        
            November 26</td><td>Early Dismissal (1:00):
                Thanksgiving</td></tr>
    
    <tr><td>
        
            November 27-28</td><td>HOLIDAY: Thanksgiving</td></tr>

    <tr><td>
        
            December 10</td><td>Progress reports sent
                home</td></tr>
    
    <tr><td>
        
            December 20 - January 4</td><td>HOLIDAY:
                Winter Break </td></tr>

    <tr><td>
        
            January 5</td><td>Return from winter break</td></tr>
    </p>
    <tr><td>
        
            January 16</td><td> End of 2nd Quarter</td></tr>
    </p>
    <tr><td>
        
            January 19</td><td> HOLIDAY: Martin Luther
                King, Jr. Day </td></tr>
    </p>
    <tr><td>
        
            January 20-January 23</td><td>Semester Exams</td></tr>
    </p>
    <tr><td>
        
            January 26</td><td> NO SCHOOL: Professional
                Development</td></tr>
    </p>
    <tr><td>
        
            January 29 </td><td>Open House (9:00-11:00)</td></tr>
    
    <tr><td>
        
            February 11</td><td> Potluck Dinner/Honor Roll
                (7:00-9:00 p.m.)</td></tr>
    </p>
    <tr><td>
        
            February 13</td><td> Parent Conferences (After
                Dismissal-5:00 p.m.) </td></tr>
    </p>
    <tr><td>
        
            February 16</td><td> HOLIDAY: President’s Day
        </td></tr>
    </p>
    <tr><td>
        
            February 20</td><td> Progress reports sent
                home</td></tr>
   
    <tr><td>
        
            March 3</td><td> Open House (9:00-11:00)</td></tr>
    </p>
    <tr><td>
        
            March 27</td><td> End of 3rd Quarter (48 days)</td></tr>
    </p>
    <tr><td>
        
            March 28-April 6</td><td> HOLIDAY: Spring
                Break</td></tr>
   
    <tr><td>
        
            April 16</td><td> Open House/Academic Fair
                (6:00-8:30)</td></tr>
    </p>
    
    <tr><td>
        
            May 7</td><td>
             Progress reports sent home</td></tr>
    </p>
    <tr><td>
       
          May 25</td><td> HOLIDAY: Memorial Day
        </td></tr>
    </p>
    
    <tr><td>
        
            June 2 </td><td>Graduation (2:00); 12:15
                Dismissal for students</td></tr>
    </p>
    <tr><td>
        
            June 12-17</td><td> Semester Exams</td></tr>
    </p>
    <tr><td>
        
            June 18</td><td>Last day for students; End of
                4th
             Quarter (51 days)</td></tr>
    </p>
    <tr><td>
        
            June 19</td><td> Last day for teachers</td></tr>

    </table>
    
    </div>
    <?php write_footer();?>
</body>
</html>