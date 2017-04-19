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
			text: "Prediction Likelihood",
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
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
	</head>
	<body>
		<div class="container" id="wrapper">
			<header id="header">
				
				<nav>
					<a href="#results" class="jumplink primary">Results</a>
					<a href="#Statistics" class="jumplink pad-after primary">Statistics</a>
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
														<div class="row">
															<div class="12u 12u(mobile)">
																<div class="content" >
																	<h1> 
The percentage of past complaints filed against <?php echo $output[6]; ?>  on a <?php echo $output[1]; ?> during <?php echo $output[2]; ?> with an <?php echo $output[3]; ?> change in volume trading was <?php echo $output[5]; ?>% </h1>
<br>
<h2>Prediction Value: <?php echo $output[4]; ?></h2>
<hr>
																</div>
															</div>
														</div>
														
														
														<div class="row">
															<div class="4u 12u(mobile)">
															
																
																
																	<table style = "margin-top: 50px">
																	  <tr>
																	    <th>Category</th>
																	    <th>Complaints</th>
																	  </tr>
																	  <tr>
																	    <td>Low</td>
																	    <td>0 - 2</td>
																	  </tr>
																	  <tr>
																	    <td>Low-Medium</td>
																	    <td>0 - 2</td>
																	  </tr>
																	  <tr>
																	    <td>Medium</td>
																	    <td>0 - 2</td>
																	  </tr>
																	  <tr>
																	    <td>Medium-High</td>
																	    <td>0 - 2</td>
																	  </tr>
																	  <tr>
																	    <td>High</td>
																	    <td>0 - 2</td>
																	  </tr>
																	</table>
																	
															</div>
                     							<div class="8u 12u(mobile)">
														<div id="chartContainer" style="height: 300px; width: 100%;"></div>
													</div>
													</div>
													
													
													
											</div>
										</article>
									</div>

								<!-- **************************************************************************** -->
								<!-- * Statistics                                                                    * -->
								<!-- **************************************************************************** -->

									<div class="slide" id="Statistics">
										<article class="page work">
											<div class="inner">

												<!-- Inner content -->

													<header class="major">
														<h2>The various statistics of our model</h2>
													</header>
													<div class="gallery">
														<div class="row no-collapse">
															<div class="4u 12u(mobile)"><a href="images/gallery/fulls/Tree1.png" class="image full"><img src="images/gallery/thumbnails/Tree1.jpg" alt="" title="Top Half of the Decision Tree." /></a></div>
															<div class="4u 12u(mobile)"><a href="images/gallery/fulls/Tree2.png" class="image full"><img src="images/gallery/thumbnails/Tree2.jpg" alt="" title="The second top Half of the Decision Tree." /></a></div>
															<div class="4u 12u(mobile)"><a href="images/gallery/fulls/Tree3.png" class="image full"><img src="images/gallery/thumbnails/Tree3.jpg" alt="" title="The third part of our Decision Tree" /></a></div>
														</div>
		
														<div class="row no-collapse">
															<div class="4u 12u(mobile)"><a href="images/gallery/fulls/Tree4.png" class="image full"><img src="images/gallery/thumbnails/Tree4.jpg" alt="" title="Bottom part of our Decision Tree." /></a></div>
															<div class="4u 12u(mobile)"><a href="images/gallery/fulls/Data-Quality.png" class="image full"><img src="images/gallery/thumbnails/Data-Quality.jpg" alt="" title="Data valadation with zero missing values." /></a></div>
												
														</div>

													</div>
													<hr>
													<div>
														<h2> Comparing $C-Complaints Scale with Complaints Scale</h2>
																		<table>
																		  <tr>
																		    <th style="font-weight:bold; background-color:#f9cfd1;">'Partition'</th>
																		    <th style="font-weight:bold; background-color:#f9cfd1;">Training (75%)</th>
																		    <th style="font-weight:bold; background-color:#f9cfd1;">%</th>
																		    <th style="font-weight:bold; background-color:#f9cfd1;">Testing (25%)</th>
																		    <th style="font-weight:bold; background-color:#f9cfd1;">%</th>
																		  </tr>
																		  <tr>
																		    <td style="font-weight:bold">Correct</td>
																		    <td>19,570</td>
																		    <td>59.39%</td>
																		    <td>6,547</td>
																		    <td>58.42%</td>
																		  </tr>
																		  <tr>
																		    <td style="font-weight:bold">Wrong</td>
																		    <td>13,379</td>
																		    <td>40.61%</td>
																		    <td>4,660</td>
																		    <td>41.58%</td>
																		  </tr>
																		  <tr>
																		    <td style="font-weight:bold">Total</td>
																		    <td>32,949</td>
																		    <td></td>
																		    <td>11,207</td>
																		    <td></td>
																		  </tr>
																		</table>
													</div>
													<hr>
													<div>
														<h2>Coincidence Matrix for $C-Complaints Scale</h2>
																		<table>
																		  <tr>
																		    <th style="font-weight:bold; background-color:#f9cfd1;">'1_Partition' = Training</th>
																		    <th style="font-weight:bold; background-color:#f9cfd1;">High</th>
																		    <th style="font-weight:bold; background-color:#f9cfd1;">Low</th>
																		    <th style="font-weight:bold; background-color:#f9cfd1;">Low-Medium</th>
																		    <th style="font-weight:bold; background-color:#f9cfd1;">Medium</th>
																		    <th style="font-weight:bold; background-color:#f9cfd1;">Medium-High</th>
																		  </tr>
																		  <tr>
																		    <td>High</td>
																		    <td style="background-color:yellow; font-weight:bold">5,558</td>
																		    <td>4</td>
																		    <td>3</td>
																		    <td>3</td>
																		    <td>560</td>
																		  </tr>
																		  <tr>
																		    <td>Low</td>
																		    <td>152</td>
																		    <td style="background-color:yellow; font-weight:bold">5,093</td>
																		    <td>1,845</td>
																		    <td>42</td>
																		    <td>633</td>
																		  </tr>
																		  <tr>
																		    <td>Low-Medium</td>
																		    <td>57</td>
																		    <td>2,856</td>
																		    <td style="background-color:yellow; font-weight:bold">4,662</td>
																		    <td>212</td>
																		    <td>875</td>
																		  </tr>
																		  <tr>
																		    <td>Medium</td>
																		    <td>96</td>
																		    <td>322</td>
																		    <td>2,156</td>
																		    <td style="background-color:yellow; font-weight:bold">327</td>
																		    <td>1,487</td>
																		  </tr>
																		  <tr>
																		    <td>Medium-High</td>
																		    <td>991</td>
																		    <td>47</td>
																		    <td>786</td>
																		    <td>252</td>
																		    <td style="background-color:yellow; font-weight:bold">3,930</td>
																		  </tr>
																		  <tr>
																		    <th style="font-weight:bold; background-color:#f9cfd1;">'2_Partition' = Testing</th>
																		    <th style="font-weight:bold; background-color:#f9cfd1;">High</th>
																		    <th style="font-weight:bold; background-color:#f9cfd1;">Low</th>
																		    <th style="font-weight:bold; background-color:#f9cfd1;">Low-Medium</th>
																		    <th style="font-weight:bold; background-color:#f9cfd1;">Medium</th>
																		    <th style="font-weight:bold; background-color:#f9cfd1;">Medium-High</th>
																		  </tr>
																		  <tr>
																		    <td>High</td>
																		    <td style="background-color:yellow; font-weight:bold">1,913</td>
																		    <td>0</td>
																		    <td>2</td>
																		    <td>1</td>
																		    <td>210</td>
																		  </tr>
																		  <tr>
																		    <td>Low</td>
																		    <td>41</td>
																		    <td style="background-color:yellow; font-weight:bold">1,693</td>
																		    <td>617</td>
																		    <td>12</td>
																		    <td>200</td>
																		  </tr>
																		  <tr>
																		    <td>Low-Medium</td>
																		    <td>18</td>
																		    <td>969</td>
																		    <td style="background-color:yellow; font-weight:bold">1,543</td>
																		    <td>79</td>
																		    <td>306</td>
																		  </tr>
																		  <tr>
																		    <td>Medium</td>
																		    <td>36</td>
																		    <td>139</td>
																		    <td>734</td>
																		    <td style="background-color:yellow; font-weight:bold">101</td>
																		    <td>552</td>
																		  </tr>
																		  <tr>
																		    <td>Medium-High</td>
																		    <td>385</td>
																		    <td>17</td>
																		    <td>255</td>
																		    <td>96</td>
																		    <td style="background-color:yellow; font-weight:bold">1,297</td>
																		  </tr>
																		</table>
														
														
													</div>
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
