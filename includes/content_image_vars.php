<?php

/**
 * Image URIs
 * 
 * Maybe full URLs or relative locations such as ../images/logo.jpg
 */

/**
 * Image Placeholder dimensions
 */
$v_placeholder_dimensions = "680x1024";
$h_placholder_dimensions = "1024x680";

/**
 * * Image placeholders
 */
$img_h_placeholder = "http://placehold.it/$h_placholder_dimensions";
$img_v_placeholder = "http://placehold.it/$v_placeholder_dimensions";

$brief_copy_placeholder = <<<EOF
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
EOF;

$longer_copy_placeholder = <<<EOF


<p><a href="http://www.lipsum.com/" alt="Dummy Text - Placeholder" title="Lorem Ipsum Placeholder">Lorem ipsum</a> dolor sit amet, consectetur adipiscing elit. Mauris blandit augue vitae felis volutpat lacinia. Etiam dapibus aliquam vestibulum. Suspendisse eget erat pharetra, suscipit dui porta, pulvinar tortor. Vestibulum mattis augue vitae justo posuere pretium. Donec viverra, nisi eu aliquam euismod, metus tortor vestibulum nisl, vitae malesuada urna tortor in lorem. Aliquam a orci tortor. Mauris sed ultricies nisi. Duis nunc urna, vulputate sed tellus eget, consequat mattis elit. Ut eleifend leo eu ligula convallis euismod. Suspendisse sed condimentum libero. Sed ante sapien, congue quis cursus nec, lacinia eget purus. Vestibulum blandit pulvinar elit, eu cursus urna egestas eu.</p>

<p>Sed tempor aliquam malesuada. Phasellus rutrum fringilla lacus, sit amet tempor sapien mollis ac. Suspendisse ut tellus sit amet elit consectetur cursus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc urna purus, scelerisque pulvinar odio accumsan, viverra adipiscing nunc. Nam placerat gravida posuere. Donec fringilla vestibulum velit, vitae semper lectus eleifend ac. Nulla ac quam magna. Pellentesque semper enim id lectus ornare pharetra.</p>

<p>Ut varius vel massa ac convallis. Fusce eu viverra orci. Pellentesque imperdiet augue urna, nec ullamcorper justo semper vitae. Pellentesque vulputate consectetur purus lobortis laoreet. Phasellus ornare tellus a erat mollis, id imperdiet erat congue. Morbi vel bibendum dolor. Sed viverra quam quis vestibulum lacinia. Quisque ac mollis felis. Nulla scelerisque, nisi sit amet consectetur gravida, enim mi feugiat magna, sodales aliquam libero lorem sit amet diam. Curabitur in nisi sed nisl cursus venenatis ut ac arcu. Fusce ac enim gravida ipsum tincidunt blandit non eu leo. Cras consectetur rutrum leo.</p> 
EOF;

// ***************************************************Copy

/**
 * About copy follows
 */

$about_philosophy_copy = $longer_copy_placeholder;

/*
 * Admissions Copy follows Please use paragraph tags; 
 * <em> for emphasis and consistency; <a href... with alt and title attributes ok. 
 * Please no font, div, span, style elements. 
 * Images would be unanticipated.
 */

$admissions_sticky_copy = $brief_copy_placeholder;
$admissions_open_house_copy = $longer_copy_placeholder;
$admissions_tours_copy = $longer_copy_placeholder;
$admissions_visits_copy = $longer_copy_placeholder;

/**
 * Family and Students Copy Follows
 *
 * Copy
 */
$family_lunch_copy = $brief_copy_placeholder;

/**
 * Gallery Images
 *
 * For bootstrap carousel
 */

$img_gallery_1 = "../images/logo-v.jpg";
$img_gallery_1 = $img_h_placeholder;
$img_gallery_1 = $img_h_placeholder;
$img_gallery_1 = $img_h_placeholder;
$img_gallery_1 = $img_h_placeholder;

