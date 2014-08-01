<?php

/**
 * @file
 * @brief   Text (Copy) and Image Variables
 * 
 * @detail  Defines content that appears throughout the site. This will be replaced with a database.
 * 
 * PHP version 5
 * 
 * @category    Config
 * @package     backend
 * @author      Rik Goldman <rikgoldman@chelseaschool.edu>
 * @copyright   2014 Chelsea School
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GPLv2 
 * @todo        Decide whether every section needs "sticky" copy 
 */


//**************Placeholder Definitions

/**
 * Vertical Placeholder dimension
 *   
 */
$v_placeholder_dimensions = "680x1024";

/**
 * Horizontal Placeholder dimension
 */
$h_placholder_dimensions = "1024x680";

/**
 * Horizontal placeholder URI
 */
$img_h_placeholder = "http://placehold.it/$h_placholder_dimensions";

/**
 * Vertical placeholder URI
 */

$img_v_placeholder = "http://placehold.it/\$v_placeholder_dimensions";

/**
 * Placeholder for roughly two sentences (intro, summary, etc
 */
$brief_copy_placeholder = <<<EOF
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
EOF;

/**
 * Placeholder for longer copy - currently set to three paragraphs
 *
 * Includes <a> tag to demonstrate alt, title, href use
 */

$longer_copy_placeholder = <<<EOF


<p><a href="http://www.lipsum.com/" alt="Dummy Text - Placeholder" title="Lorem Ipsum Placeholder">Lorem ipsum</a> dolor sit amet, consectetur adipiscing elit. Mauris blandit augue vitae felis volutpat lacinia. Etiam dapibus aliquam vestibulum. Suspendisse eget erat pharetra, suscipit dui porta, pulvinar tortor. Vestibulum mattis augue vitae justo posuere pretium. Donec viverra, nisi eu aliquam euismod, metus tortor vestibulum nisl, vitae malesuada urna tortor in lorem. Aliquam a orci tortor. Mauris sed ultricies nisi. Duis nunc urna, vulputate sed tellus eget, consequat mattis elit. Ut eleifend leo eu ligula convallis euismod. Suspendisse sed condimentum libero. Sed ante sapien, congue quis cursus nec, lacinia eget purus. Vestibulum blandit pulvinar elit, eu cursus urna egestas eu.</p>

<p>Sed tempor aliquam malesuada. Phasellus rutrum fringilla lacus, sit amet tempor sapien mollis ac. Suspendisse ut tellus sit amet elit consectetur cursus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc urna purus, scelerisque pulvinar odio accumsan, viverra adipiscing nunc. Nam placerat gravida posuere. Donec fringilla vestibulum velit, vitae semper lectus eleifend ac. Nulla ac quam magna. Pellentesque semper enim id lectus ornare pharetra.</p>

<p>Ut varius vel massa ac convallis. Fusce eu viverra orci. Pellentesque imperdiet augue urna, nec ullamcorper justo semper vitae. Pellentesque vulputate consectetur purus lobortis laoreet. Phasellus ornare tellus a erat mollis, id imperdiet erat congue. Morbi vel bibendum dolor. Sed viverra quam quis vestibulum lacinia. Quisque ac mollis felis. Nulla scelerisque, nisi sit amet consectetur gravida, enim mi feugiat magna, sodales aliquam libero lorem sit amet diam. Curabitur in nisi sed nisl cursus venenatis ut ac arcu. Fusce ac enim gravida ipsum tincidunt blandit non eu leo. Cras consectetur rutrum leo.</p> 
EOF;

//****************CONTENT

$meet_chelsea_intro = $brief_copy_placeholder;
$meet_chelsea_students = $longer_copy_placeholder;
$meet_chelsea_board = $longer_copy_placeholder;
$meet_chelsea_faculty = $longer_copy_placeholder;
$meet_chelsea_admin = $longer_copy_placeholder;

/**
 * Copy for About > Philosophy
 */

$about_philosophy_copy = $longer_copy_placeholder;

/**
 * Copy for About > Main Tab
 */
$about_chelsea = $brief_copy_placeholder;

/**
 * Copy for About > History
 */
$about_history = $longer_copy_placeholder;

/**
 * Copy for About > News
 */
$about_news = $longer_copy_placeholder;

/*
 * Admissions Copy follows Please use paragraph tags; <em> for emphasis and consistency; <a href... with alt and title attributes ok. Please no font, div, span, style elements. Images would be unanticipated.
 */

/**
 * Admissions - top of every subpage
 */
$admissions_sticky_copy = $brief_copy_placeholder;

/**
 * Admissions copy for adminissions > Open House Events
 *
 * 
 */
$admissions_open_house_copy = $longer_copy_placeholder;

/**
 * Copy for admissions > tours
 */
$admissions_tours_copy = $longer_copy_placeholder;

/**
 * Copy for admissions > visits
 */
$admissions_visits_copy = $longer_copy_placeholder;

/**
 * Copy for admissions > tours
 */
$admissions_process_copy = $longer_copy_placeholder;

//------Student and Family Section Content

/**
 * Copy for online lunch payment modal
 */

$family_lunch_copy = $brief_copy_placeholder;

/**
 * Explanation of Moodle Link
 */
$moodle_summary = <<<EOF
<p>Moodle, or <a href="http://Chelseapride.org" title="http://chelseapride.org">ChelseaPride.org</a>, is a course management system used by stuents and faculty at Chelsea School. Click the link to access Moodle.</p>
EOF;

/**
 * Explanation of Powerschool Link
 */
$powerschool_summary = <<<EOF
<p>Students, guardians, parents are encouraged to log in to PowerSchool weekly to celebrate successes, anticipate difficulties, and develop strategies for continuing success.</p>
EOF;

/**
 * Copy above button to launch paypal modal
 */

$lunch_summary = $brief_copy_placeholder;

/**
 * Copy about technology guide
 */
$technology_guide_summary = $brief_copy_placeholder;

//--------Images for Gallery

/**
 * First image for bootstrap "carousel" on index.php: intended as logo
 */

$img_gallery_1 = "images/logo-v.jpg";

/**
 * Second image for bootstrap "carousel" on index.php
 */
$img_gallery_2 = $img_h_placeholder;

/**
 * Third image for bootstrap "carousel" on index.php
 */
$img_gallery_3 = $img_h_placeholder;

/**
 * Fourth image for bootstrap "carousel" on index.php
 */
$img_gallery_4 = $img_h_placeholder;

/**
 * Fifth image for bootstrap "carousel" on index.php
 */
$img_gallery_5 = $img_h_placeholder;

