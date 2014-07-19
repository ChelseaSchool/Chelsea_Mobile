<?php
require_once 'includes/navigation_functions.php';
require_once 'includes/metadata_functions.php';
?>

<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Chelsea School Admissions</title>

<link rel="stylesheet" href="css/tabs.min.css" type="text/css" />

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/chelsea.css" type="text/css" />

<script type="text/javascript" src="_static/jquery.js"></script>
<script type="text/javascript" src="_static/underscore.js"></script>
<script type="text/javascript" src="_static/doctools.js"></script>
<script type="text/javascript" src="_static/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="_static/js/jquery-fix.js"></script>
<script type="text/javascript"
    src="_static/bootstrap-3.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="_static/bootstrap-sphinx.js"></script>
<link rel="author" title="About these documents" href="about.php" />
<link rel="top" title="Chelsea School Mobile" href="index.php" />
<link rel="next" title="Calendars" href="calendar.php" />
<link rel="prev" title="Meet Chelsea School" href="meet.php" />
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
<meta name='viewport'
    content='width=device-width, initial-scale=1.0, maximum-scale=1'>
<meta name="apple-mobile-web-app-capable" content="yes">

<!-- Tabs -->
<script type="text/javascript">
    $( document ).ready()
	$('#buttons a[href="#admissions"]').tab('show') // Select tab by name
    $('#tours a[href="#tours"]').tab('show') // Select tab by name 
    $('#visits a[href="#visits"]').tab('show') // Select tab by name  
    $('#open-house-events a[href="#open-house-events"]').tab('show') // Select tab by name 
    $('#admission-process a[href="#admissions-process"]').tab('show') // Select tab by name   
</script>
<!-- End Tabs -->
<?php //write_bottom_padding(); ?>
<?php //write_top_padding(); ?>
  </head>
<body>
<?php write_top_navbar(); ?>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Nav tabs -->
                

                
                
                <div class="nav">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tours"
                            data-toggle="tab">Tours</a></li>
                        <li><a href="#visits" data-toggle="tab">Visits</a></li>
                        <li><a href="#open-house"
                            data-toggle="tab">Open House</a></li>
                        <li><a href="#admissions-process"
                            data-toggle="tab">Process</a></li>
                    </ul>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-md-12">





                    





                            <h2>
                                Admissions <small>(Sticky Intro
                                    Placeholer)</small>
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Donec sed erat sit amet
                                felis mollis tempor. Nullam fringilla,
                                quam a sollicitudin malesuada...</p>
                            <div class="tab-content">
                                <div class="tab-pane" id="tours">
                                    <h2>
                                        Tours
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                        Donec sed erat sit amet felis
                                        mollis tempor. Nullam fringilla,
                                        quam a sollicitudin malesuada,
                                        orci turpis bibendum risus,
                                        mollis placerat augue nulla at
                                        purus. Etiam faucibus consequat
                                        porttitor. Praesent venenatis
                                        urna id erat dapibus lacinia.
                                        Maecenas blandit mollis nibh,
                                        non pellentesque eros semper eu.
                                        Aliquam blandit blandit
                                        fermentum. Vivamus in urna
                                        porttitor, facilisis neque sed,
                                        mollis libero. Cras semper
                                        mauris nec sollicitudin dictum.
                                        Donec nec facilisis tellus.
                                        Quisque volutpat sem nisl, quis
                                        congue arcu condimentum id. Nam
                                        viverra, ligula et auctor
                                        ullamcorper, lectus purus
                                        commodo velit, vel tempor nulla
                                        urna eu tellus. Sed bibendum
                                        felis sed ante volutpat, in
                                        hendrerit enim hendrerit. Nulla
                                        blandit ultricies leo a
                                        tincidunt.</p>


                                    <p>
                                            <img class="center-block img-responsive"
                                                alt="placeholder"
                                                title="Placeholder for Relevant Image"
                                                src="http://placehold.it/300x150">
                                        </p>

                                </div>


                                <div class="tab-pane" id="visits">

                                    <h2>
                                        Visits
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                        Donec sed erat sit amet felis
                                        mollis tempor. Nullam fringilla,
                                        quam a sollicitudin malesuada,
                                        orci turpis bibendum risus,
                                        mollis placerat augue nulla at
                                        purus. Etiam faucibus consequat
                                        porttitor. Praesent venenatis
                                        urna id erat dapibus lacinia.
                                        Maecenas blandit mollis nibh,
                                        non pellentesque eros semper eu.
                                        Aliquam blandit blandit
                                        fermentum. Vivamus in urna
                                        porttitor, facilisis neque sed,
                                        mollis libero. Cras semper
                                        mauris nec sollicitudin dictum.
                                        Donec nec facilisis tellus.
                                        Quisque volutpat sem nisl, quis
                                        congue arcu condimentum id. Nam
                                        viverra, ligula et auctor
                                        ullamcorper, lectus purus
                                        commodo velit, vel tempor nulla
                                        urna eu tellus. Sed bibendum
                                        felis sed ante volutpat, in
                                        hendrerit enim hendrerit. Nulla
                                        blandit ultricies leo a
                                        tincidunt.</p>
                                </div>


                                <div class="tab-pane"
                                    id="open-house">
                                    <h2>
                                        Open House Events
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                        Donec sed erat sit amet felis
                                        mollis tempor. Nullam fringilla,
                                        quam a sollicitudin malesuada,
                                        orci turpis bibendum risus,
                                        mollis placerat augue nulla at
                                        purus. Etiam faucibus consequat
                                        porttitor. Praesent venenatis
                                        urna id erat dapibus lacinia.
                                        Maecenas blandit mollis nibh,
                                        non pellentesque eros semper eu.
                                        Aliquam blandit blandit
                                        fermentum. Vivamus in urna
                                        porttitor, facilisis neque sed,
                                        mollis libero. Cras semper
                                        mauris nec sollicitudin dictum.
                                        Donec nec facilisis tellus.
                                        Quisque volutpat sem nisl, quis
                                        congue arcu condimentum id. Nam
                                        viverra, ligula et auctor
                                        ullamcorper, lectus purus
                                        commodo velit, vel tempor nulla
                                        urna eu tellus. Sed bibendum
                                        felis sed ante volutpat, in
                                        hendrerit enim hendrerit. Nulla
                                        blandit ultricies leo a
                                        tincidunt.</p>
                                </div>


                                <div class="tab-pane"
                                    id="admissions-process">
                                    <h2>
                                        Admission Process
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                        Donec sed erat sit amet felis
                                        mollis tempor. Nullam fringilla,
                                        quam a sollicitudin malesuada,
                                        orci turpis bibendum risus,
                                        mollis placerat augue nulla at
                                        purus. Etiam faucibus consequat
                                        porttitor. Praesent venenatis
                                        urna id erat dapibus lacinia.
                                        Maecenas blandit mollis nibh,
                                        non pellentesque eros semper eu.
                                        Aliquam blandit blandit
                                        fermentum. Vivamus in urna
                                        porttitor, facilisis neque sed,
                                        mollis libero. Cras semper
                                        mauris nec sollicitudin dictum.
                                        Donec nec facilisis tellus.
                                        Quisque volutpat sem nisl, quis
                                        congue arcu condimentum id. Nam
                                        viverra, ligula et auctor
                                        ullamcorper, lectus purus
                                        commodo velit, vel tempor nulla
                                        urna eu tellus. Sed bibendum
                                        felis sed ante volutpat, in
                                        hendrerit enim hendrerit. Nulla
                                        blandit ultricies leo a
                                        tincidunt.</p>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php write_footer(); ?>


</body>
</html>
