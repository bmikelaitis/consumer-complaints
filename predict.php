<?php
$ticker = $_POST["ticker"];
$day = $_POST["day"];
$season = $_POST["season"];
$volume = $_POST["volume"];

$tmp = exec("python score-engine.py $ticker $day $season $volume",$output);

?>
												

<!DOCTYPE HTML>
<!--
	Transition by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>Predicting Customer Complaints</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Percent likelihood of each category?",
			fontFamily: "arial black"
		},
                animationEnabled: true,
		legend: {
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		theme: "theme1",
		data: [
		{        
			type: "pie",
			indexLabelFontFamily: "Garamond",       
			indexLabelFontSize: 20,
			indexLabelFontWeight: "bold",
			startAngle:0,
			indexLabelFontColor: "MistyRose",       
			indexLabelLineColor: "darkgrey", 
			indexLabelPlacement: "inside", 
			toolTipContent: "{name}: {y}% Likelihood",
			showInLegend: true,
			indexLabel: "#percent%", 
			dataPoints: [
				{  y: <?php echo $output[7]; ?>, name: "Low", legendMarkerType: "square"},
				{  y: <?php echo $output[8]; ?>, name: "Low-Medium", legendMarkerType: "square"},
				{  y: <?php echo $output[9]; ?>, name: "Medium", legendMarkerType: "square"},
				{  y: <?php echo $output[10]; ?>, name: "Medium-High", legendMarkerType: "square"},
				{  y: <?php echo $output[11]; ?>, name: "High", legendMarkerType: "square"}
			]
		}
		]
	});
	chart.render();
}
</script>
<script type="text/javascript" src="/assets/script/canvasjs.min.js"></script>
	</head>
	<body>
		<div class="container" id="wrapper">
			<header id="header">
				
				<nav>
					<a href="#results" class="jumplink primary">Results</a>
					<a href="#graph" class="jumplink pad-after primary">Graphs</a>
                    <a href="index.html">Go Back</a>
				</nav>
			</header>
			<div class="row">
				<div class="12u">

					<div id="main">
						<div class="previous"></div>
						<div class="next"></div>
						<div class="viewer">
							<div class="reel">

								<!-- **************************************************************************** -->
								<!-- * Home                                                                     * -->
								<!-- **************************************************************************** -->

									<div class="slide" id="results">
										<article class="page work">
											<div class="inner">

												<!-- Inner content -->

													<header class="major">
														<h2>The Results</h2>
													</header>
													<p>Below are several screenshots that show the various steps and information we took in developing this algorithm and application <?php 
 echo $output[0];
 echo $output[1];
 echo $output[2];
 echo $output[3];
 echo $output[4];
 echo $output[5];

?>
</p>
<p> 
The percentage of past complaints filed against <?php echo $output[6]; ?>  on a <?php echo $output[1]; ?> during <?php echo $output[2]; ?> with an <?php echo $output[3]; ?> change in volume trading was <?php echo $output[5]; ?>% </p>
Ticker Symbol: <?php echo $output[0]; ?></p>
<p> Day of the Week: <?php echo $output[1]; ?></p>
<p> Season: <?php echo $output[2]; ?></p>
<p> Volume: <?php echo $output[3]; ?></p>
<p> Complaint Prediction: <?php echo $output[4]; ?></p>
<p> Complaint Percent Frequency: <?php echo $output[5]; ?></p>
<p> Company Name: <?php echo $output[6]; ?></p>                       
													<div id="chartContainer" style="height: 300px; width: 100%;"></div>
											</div>
										</article>
									</div>

								<!-- **************************************************************************** -->
								<!-- * Work                                                                     * -->
								<!-- **************************************************************************** -->

									<div class="slide" id="graph">
										<article class="page work">
											<div class="inner">

												<!-- Inner content -->

													<header class="major">
														<h2>The various steps we took to get here</h2>
													</header>
													<div id="chartContainer" style="height: 300px; width: 100%;"></div>
												
											</div>
										</article>
									</div>



								<!-- **************************************************************************** -->
								<!-- **************************************************************************** -->
								<!-- **************************************************************************** -->

							</div>
						</div>
					</div>

				</div>
			</div>
			<footer id="footer">
				<ul class="icons">
					<li><a href="https://msmis.eller.arizona.edu/program-details/courses/mis-510-web-computing-and-mining" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
				</ul>
				<p>&copy; Team 8 - Spring 2017 MIS 510. All rights reserved.</p>
			</footer>
		</div>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.slidertron.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.nicescroll-modified.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>


	</body>
</html>
