<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="icon" type="image/png" href="e-cave.ico">


	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

	<link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />


	<script src="https://use.fontawesome.com/b6c0e81101.js"></script>

	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<link rel="stylesheet" href="../css/aos.css">

	<link rel="stylesheet" href="../css/ionicons.min.css">

	<link rel="stylesheet" href="../css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="../css/jquery.timepicker.css">


	<script src="../js/chartjs/jquery.min.js"></script>

	<script src="../js/chartjs/Chart.min.js"></script>


	<link rel="stylesheet" href="../css/flaticon.css">
	<link rel="stylesheet" href="../css/icomoon.css">
	<link rel="stylesheet" href="../css/style.css">

	<link rel="stylesheet" href="../css/parsley.css">


	<title><?php echo $title;?></title>



	<script>
window.onload = function () {
	
	var data = [{
			type: "line",                
			dataPoints: <?php echo json_encode($total_sales, JSON_NUMERIC_CHECK); ?>
		}];
		
	//Better to construct options first and then pass it as a parameter
	var options = {
		zoomEnabled: true,
		animationEnabled: true,
		title: {
			text: "Try Zooming - Panning"
		},
		axisY: {
			lineThickness: 1
		},
		data: data  // random data
	};
	 
	var chart = new CanvasJS.Chart("chartContainer", options);
	var startTime = new Date();
	chart.render();
	var endTime = new Date();
	document.getElementById("timeToRender").innerHTML = "Time to Render: " + (endTime - startTime) + "ms";
	 
	}
	</script>
	<style>
		#timeToRender {
			position:absolute; 
			top: 10px; 
			font-size: 20px; 
			font-weight: bold; 
			background-color: #d85757;
			padding: 0px 4px;
			color: #ffffff;
		}
	</style>



</head>

<body> 

<?php
require 'topbar.php';



	