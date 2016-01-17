<?php

    session_start();

    if(!isset($_SESSION['collegename'])){
        header("location: loginpage.php");
        die();
    }

    $conn = mysqli_connect("localhost","wasiq","root123","college_db_one");
    if(!$conn){
        die("connection to db failed.");
    }

    function getEventId($data){
        $conn = mysqli_connect("localhost","wasiq","root123","college_db_one");
        if(!$conn){
            die("connection to db failed.");
        }
        $sql = mysqli_query($conn,"SELECT id FROM tableid WHERE event = '$data'") or die(mysqli_error($conn)." 1"); //1
        if(mysqli_num_rows($sql)!=1){
            die("No. of rows returned = ".mysqli_num_rows($sql).". Please Check tableid.");
        }
        $temp = mysqli_fetch_row($sql);
        $eventId = $temp[0];
        return $eventId;
    }
    //<?php echo(getEventId(thehogwartsexperience));
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>VERVE 2016 | Register For Events</title>

		<link rel="shortcut icon" type="image/x-icon" href="../img/logo.ico" />
   <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

        <style type="text/css">
            .portfolio-box-caption-content{
                cursor:pointer;
            }
        </style>

        <script type="text/javascript">
            function goToRegister(data){    
                location.href = "contingentregisterform.php?eventid="+data;
            }
            function fillEventId(data){
                document.getElementById('eventid').value = data;    
            }
        </script>

	</head>
<body style="background-repeat:no-repeat; background-size:cover; margin-left:1cm;" background="images/back.jpg">
        <?php require("floatingButton.php");?>
 <div id="top">
<header><br>
<div style="right:auto; height:100px; width:130px; float:left">
<a href="index.php"><img src="images/logo.png" alt="logo" height="100px" width="100px" class="img-rounded"></a></div>
<div style="height:100px; margin-left:150px"><h1  align="center" style="font-size:50px; color:white"><b>VERVE 2016</b><br> <small style="font-size:35px; color:#FFF8DC"> A GENESIS</small></b></h1></div>
<span></span>
</header>
</div>
</div>
<div class="container">  <ul class="nav nav-pills"><br><br>
	<li><a data-toggle="pill" href="#pa"><h5 style="color:white">Performing Arts</h5></a></li>
    <li><a data-toggle="pill" href="#la"><h5 style="color:white">Literary Art</h5></a></li>
    <li><a data-toggle="pill" href="#fa"><h5 style="color:white">Fine Arts</h5></a></li>
    <li><a data-toggle="pill" href="#fe"><h5 style="color:white">Fun Events</h5></a></li>
  <!--  <li><a data-toggle="pill" href="#tc"><h5 style="color:white">Technical Competitions</h5></a></li> -->
    <li><a data-toggle="pill" href="#tfe"><h5 style="color:white">Technical Events</h5></a></li>
    <li><a data-toggle="pill" href="#spt"><h5 style="color:white">Sportsmania</h5></a></li>
    <li><a data-toggle="pill" href="#wrk"><h5 style="color:white">Workshop</h5></a></li>
    <li><a data-toggle="pill" href="#photo"><h5 style="color:white">Photography</h5></a></li>
  </ul>
  <div class="tab-content">
    <div id="pa" class="tab-pane fade">
		<h3>Performing Arts</h3>
		  <div class="row">
            <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/pa/streetdance.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('streetup'); echo $n;?>)">
                                <div class="project-category text-faded">Street Up</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
            <div class="col-md-3 portfolio-item">
               		 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/pa/streetplay.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('nukkadnatak'); echo $n;?>)">
                                <div class="project-category text-faded">Nukkad Natak</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
            </div>
            <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px"src="images/pa/fashionshow.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('vogue'); echo $n;?>)">
                                <div class="project-category text-faded">Vogue-Fashion Show</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
			
           <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/pa/mainstage.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('syncem'); echo $n;?>)">
                                <div class="project-category text-faded">Sync 'em</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            <br><br></div>
			
           <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/pa/mrmsverve.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('mrandmissverve'); echo $n;?>)">
                                <div class="project-category text-faded">Mr. and Miss Verve</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
			
			
           <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/pa/film.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('shotsharp'); echo $n;?>)">
                                <div class="project-category text-faded">Shot Sharp</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
			
           <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/pa/singing.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('redhun'); echo $n;?>)">
                                <div class="project-category text-faded">Re Dhun</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
           <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/pa/duetdance.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('dancingtoes'); echo $n;?>)">
                                <div class="project-category text-faded">Dancing Toes</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
          <br><br>
        </div>
</div><!--close pa tab-->
	
	<div id="la" class="tab-pane fade">
		<h3>Literary Arts</h3>
		  <div class="row">
            <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/la/shf.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('superherofactory'); echo $n;?>)">
                                <div class="project-category text-faded">SuperHero Factory</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
            <div class="col-md-3 portfolio-item">
               		 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/la/absref.jpg" class="img-responsive" alt="">
						<div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('abstractreflection'); echo $n;?>)">
                                <div class="project-category text-faded">Abstract Reflection</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
            </div>
            <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/la/lf.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('locusfocus'); echo $n;?>)">
                                <div class="project-category text-faded">Locus Focus</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
           <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                       <img height="150px" width="265px" src="images/la/one.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('one4t'); echo $n;?>)">
                                <div class="project-category text-faded">One4T</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            <br><br></div>
			
           <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/la/poet.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('poetsalley'); echo $n;?>)">
                                <div class="project-category text-faded">Poet's Alley</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
           <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/la/tc.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('twistedchronicles'); echo $n;?>)">
                                <div class="project-category text-faded">Twisted Chronicles</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
           <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/la/fo.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('faceoff'); echo $n;?>)">
                                <div class="project-category text-faded">Face Off</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
           <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/la/vv.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('vaadvivad'); echo $n;?>)">
                                <div class="project-category text-faded">Vaad Vivad</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
						</a>
						<br><br>
						</div>
						
           <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/la/ss.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('shabdasandhan'); echo $n;?>)">
                                <div class="project-category text-faded">Shabda Sandhan</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
						</a>
						</div>
           <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/la/qu.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('quizzards'); echo $n;?>)">
                                <div class="project-category text-faded">Quizzards</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
            </div>
	</div><!--close lit tab-->
    
<div id="fa" class="tab-pane fade">
		<h3>Fine Arts</h3>
		  <div class="row">
            <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/fa/afteres.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('afternoonescapade'); echo $n;?>)">
                                <div class="project-category text-faded">Afternoon Escapade</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
            <div class="col-md-3 portfolio-item">
               		 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/fa/potp.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('potpainting'); echo $n;?>)">
                                <div class="project-category text-faded">Pot Painting</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
            </div>
            <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#lt">
                        <img height="150px" width="265px" src="images/fa/cari.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('caricature'); echo $n;?>)">
                                <div class="project-category text-faded">Caricature</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
           <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/fa/scrapw.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('scrapwrap'); echo $n;?>)">
                                <div class="project-category text-faded">Scrap Wrap</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
<br><br>           </div>

           <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/fa/facep.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('facepainting'); echo $n;?>)">
                                <div class="project-category text-faded">Face Painting</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
           <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/fa/kalay.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('kalayouth'); echo $n;?>)">
                                <div class="project-category text-faded">Kala Youth</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
        </div>
</div><!--close pa tab-->
	
	
	<div id="tc" class="tab-pane fade">
      <h3>Technical Competitions</h3>
	  </div><!--close tech tab-->

	<div id="tfe" class="tab-pane fade">
      <h3>Technical Fun Events</h3>
	  <div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/fa/kalay.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content" onclick="goToRegister(<?php $n = getEventId('kalayouth'); echo $n;?>)">
                                <div class="project-category text-faded">Kala Youth</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
	  </div><!--close tech tab-->
	  
	<div id="spt" class="tab-pane fade">
		<h3>Sportsmania</h3>
<div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/spt/rink.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">Rink Football</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
			<div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/spt/cage.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">Cage Football</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
			<div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/spt/long.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">Long Football</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
			<div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/spt/s6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">S6</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
		<br><br>            </div>
	
			<div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/spt/throwball.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">Throwball</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
			<div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/spt/volleyball.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">Smash Volley</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
			<div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px"  src="images/spt/basketball.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">Alley-Oop</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
			<div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px"src="images/spt/kabaa.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">Pro Kabaddi</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            <br><br>
			</div>
			
			<div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/spt/carr.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">Carrom</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>
		
			<div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px"  src="images/spt/chess.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">Chess</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            </div>

			<div class="col-md-3 portfolio-item">
               			 <a class="portfolio-box" data-toggle="modal" data-target="#">
                        <img height="150px" width="265px" src="images/spt/tt.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">Table Tennis</div>
                                <div class="project-name">Register</div>
                            </div>
                        </div>
        </a>		
            		 </div>
					 </div><!--close spt tab-->
					 <div id="fe" class="tab-pane fade">
		<h3>Fun Events</h3>
		  <div class="row">
            <div class="col-md-3 portfolio-item">
			</div>
			</div>
		</div><!--close pa tab-->
	
	
		<div id="wrk" class="tab-pane fade">
		<h3>Workshop</h3>
		  <div class="row">
			</div>
		</div><!--close pa tab-->
		
		<div id="photo" class="tab-pane fade">
		<h3>Photography</h3>
		  <div class="row">
			</div>
		</div><!--close pa tab-->

		</div>
</div>




</body>
</html>