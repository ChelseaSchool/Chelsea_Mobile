<?php

function write_top_navbar() {
	$top= <<<EOF
	
<div id="navbar" class="navbar navbar-inverse navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Chelsea School</a>
        <span class="navbar-text navbar-version pull-left"><b></b></span>
      </div>

        <div class="collapse navbar-collapse nav-collapse">
          <ul class="nav navbar-nav">
            <li class="divider-vertical"></li>
            
                <li><a href=".php"></a></li>
                <li><a href="./"></a></li>
            
            
              <li class="dropdown globaltoc-container">
  <a href="#"
     class="dropdown-toggle"
     data-toggle="dropdown">Site Menu <b class="caret"></b></a>
  <ul class="dropdown-menu globaltoc"
    ><ul>
<li class="toctree-l1"><a class="reference internal" href="about.php">About Chelsea School</a><ul>
<li class="toctree-l2"><a class="reference internal" href="about.php#philosophy">Philosophy</a></li>
<li class="toctree-l2"><a class="reference internal" href="about.php#history">History</a></li>
<li class="toctree-l2"><a class="reference internal" href="about.php#news">News</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="meet.php">Meet Chelsea School</a><ul>
<li class="toctree-l2"><a class="reference internal" href="meet.php#students">Students</a></li>
<li class="toctree-l2"><a class="reference internal" href="meet.php#board">Board</a></li>
<li class="toctree-l2"><a class="reference internal" href="meet.php#administration">Administration</a></li>
<li class="toctree-l2"><a class="reference internal" href="meet.php#faculty">Faculty</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="admissions.php">Admissions</a><ul>
<li class="toctree-l2"><a class="reference internal" href="admissions.php#tours">Tours</a></li>
<li class="toctree-l2"><a class="reference internal" href="admissions.php#visits">Visits</a></li>
<li class="toctree-l2"><a class="reference internal" href="admissions.php#open-house-events">Open House Events</a></li>
<li class="toctree-l2"><a class="reference internal" href="admissions.php#admissions-process">Admissions Process</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="calendar.php">Calendars</a><ul>
<li class="toctree-l2"><a class="reference internal" href="calendar.php#id1">Academic Calendar</a></li>
<li class="toctree-l2"><a class="reference internal" href="calendar.php#id2">Athletic Calendar</a></li>
<li class="toctree-l2"><a class="reference internal" href="calendar.php#id3">Events Calendar</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="family.php">Family Resources</a><ul>
<li class="toctree-l2"><a class="reference internal" href="family.php#id1">Moodle</a></li>
<li class="toctree-l2"><a class="reference internal" href="family.php#id2">Purchase Lunch</a></li>
<li class="toctree-l2"><a class="reference internal" href="family.php#id3">Chelsea School Technology Guide</a></li>
</ul>
</li>
</ul>
</ul>
</li>
              
            
            
            
            
            
          </ul>

          
            

          
        </div>
    </div>
  </div>
  
EOF;
  
  echo $top;
}

function write_bottom_navbar() {
	$bottom = <<<EOF
	<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
	<div class="container">
	
      <div class="navbar-header">
        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Chelsea School</a>
        <span class="navbar-text navbar-version pull-left"><b></b></span>
      </div>
 	
        <div class="collapse navbar-collapse nav-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown-toggle dropup">Social Networks</li>
            
                <li><a href=".php"></a></li>
                <li><a href="./"></a></li>
  <!-- Social Media-->
<li class="dropdown globaltoc-container">
  <a href="#" class="dropdown-toggle dropup" data-toggle="dropdown">Social Networks <b class="caret"></b></a>
  <ul class="dropdown-menu dropup"><ul>
<li class="toctree-l1"><a class="reference internal" href="about.php">Facebook</a><ul>
<li class="toctree-l2"><a class="reference internal" href="about.php#philosophy">Twitter</a></li>
<li class="toctree-l2"><a class="reference internal" href="about.php#history">LinkedIn</a></li>

</ul>
</li>

</ul>
</li>
              
            
            
            
            
            
          </ul>
			<!--End Social Media-->          
            
              <li class="dropdown globaltoc-container">
  <a href="#"
     class="dropdown-toggle dropup"
     data-toggle="dropdown">Site Menu <b class="caret"></b></a>
  <ul class="dropdown-menu globaltoc"><ul>
<li class="toctree-l1"><a class="reference internal" href="about.php">About Chelsea School</a><ul>
<li class="toctree-l2"><a class="reference internal" href="about.php#philosophy">Philosophy</a></li>
<li class="toctree-l2"><a class="reference internal" href="about.php#history">History</a></li>
<li class="toctree-l2"><a class="reference internal" href="about.php#news">News</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="meet.php">Meet Chelsea School</a><ul>
<li class="toctree-l2"><a class="reference internal" href="meet.php#students">Students</a></li>
<li class="toctree-l2"><a class="reference internal" href="meet.php#board">Board</a></li>
<li class="toctree-l2"><a class="reference internal" href="meet.php#administration">Administration</a></li>
<li class="toctree-l2"><a class="reference internal" href="meet.php#faculty">Faculty</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="admissions.php">Admissions</a><ul>
<li class="toctree-l2"><a class="reference internal" href="admissions.php#tours">Tours</a></li>
<li class="toctree-l2"><a class="reference internal" href="admissions.php#visits">Visits</a></li>
<li class="toctree-l2"><a class="reference internal" href="admissions.php#open-house-events">Open House Events</a></li>
<li class="toctree-l2"><a class="reference internal" href="admissions.php#admissions-process">Admissions Process</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="calendar.php">Calendars</a><ul>
<li class="toctree-l2"><a class="reference internal" href="calendar.php#id1">Academic Calendar</a></li>
<li class="toctree-l2"><a class="reference internal" href="calendar.php#id2">Athletic Calendar</a></li>
<li class="toctree-l2"><a class="reference internal" href="calendar.php#id3">Events Calendar</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="family.php">Family Resources</a><ul>
<li class="toctree-l2"><a class="reference internal" href="family.php#id1">Moodle</a></li>
<li class="toctree-l2"><a class="reference internal" href="family.php#id2">Purchase Lunch</a></li>
<li class="toctree-l2"><a class="reference internal" href="family.php#id3">Chelsea School Technology Guide</a></li>
</ul>
</li>
</ul>
</ul>
</li>
              
            
            
            
            
            
          </ul>

          
            

          
        
    </div>
	</div>
	</nav>

EOF;
	echo $bottom;
}

function write_bottom_padding() {
	$pad = <<< EOF
<style>
body { padding-bottom: 70px; }
</style>
EOF;
	echo $pad;
}

function write_top_padding() {
	$pad = <<< EOF
<style>
body { padding-top: 70px; }
</style>
EOF;
	echo $pad;
}
