<?php 
	error_reporting(0);
	ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Analytics</title>
	<style>
    body {
      font-family: sans-serif;
    }

    form {
      margin: 0 auto;
      width: 500px;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }

    select {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }

    button {
      width: 100%;
      padding: 5px;
      background-color: #000;
      color: #fff;
    }
    .content {
position: absolute;
left: 45%;
top: 600px;

}

.title {
	position: absolute;
	transform: translate(-50%, -50%);
	font-size: 4em;
   font-family: "Give You Glory", cursive;
}

.title:nth-child(1) {
	color: WHITE;
	-webkit-text-stroke: 2px black;
}

.title:nth-child(3) {
	color: #0178af;
	-webkit-text-stroke: 2px black;
	animation: onda 4s ease-in-out infinite;
}

@keyframes onda {
	0%, 100% {
		clip-path: polygon(0% 45%, 15% 44%, 32% 50%, 54% 60%, 70% 61%, 84% 59%, 100% 52%, 100% 100%, 0% 100%);
	}
	50% {
		clip-path: polygon(0% 60%, 16% 65%, 34% 66%, 51% 62%, 67% 50%, 84% 45%, 100% 46%, 100% 100%, 0% 100%);
	}
}

.title:nth-child(2) {
	color: blue;
	-webkit-text-stroke: 2px black;
	animation: fundo 4s ease-in-out infinite;
}

@keyframes fundo {
	0%, 100% {
		clip-path: polygon(0% 60%, 16% 65%, 34% 66%, 51% 62%, 67% 50%, 84% 45%, 100% 46%, 100% 100%, 0% 100%);
	}
	50% {
		clip-path: polygon(0% 45%, 15% 44%, 32% 50%, 54% 60%, 70% 61%, 84% 59%, 100% 52%, 100% 100%, 0% 100%);
	}
}


.custom-shape {
        position: absolute;
        top: 70%;
        left: 0;
        width: 100%;

    }
    
    .custom-shape svg {
        position: fixed;
        display: block;
        width: calc(140% + 1.3px);
        height: 225px;
		background-color: transparent;
    }
    
    .custom-shape .shape-fill {
        fill: rgb(30, 160, 246);
    }
	

	body {
	background: #fff;
	overflow-x: hidden;
}
	html {
	overflow-x: hidden;
	scroll-behavior: smooth;
	}


a {
	text-decoration: none;
}

li {
	list-style: none;
}

/* CONTENT */
#content {
	position: relative;
	width: calc(100% - 280px);
	left: 280px;
	transition: .3s ease;
}
#sidebar.hide ~ #content {
	width: calc(100% - 60px);
	left: 60px;
}

input {
    font-size: 25px;
}

label {
    width: 10%;
    display: inline-block;
    margin: 10px;
}

/* MAIN */
/* CONTENT */


@media screen and (max-width: 768px) {
	#sidebar {
		width: 180px;
	}

	#content {
		width: calc(100% - 60px);
		left: 200px;
	}
}





/* SIDEBAR */
#sidebar {
	position: fixed;
	top: 0;
	left: 0;
	width: 280px;
	height: 100%;
	background: #009EFF;
	z-index: 2000;
	font-family: var(--lato);
	transition: .3s ease;
	overflow-x: hidden;
	scrollbar-width: none;
}
#sidebar::--webkit-scrollbar {
	display: none;
}
#sidebar.hide {
	width: 60px;
}
#sidebar .brand {
	font-size: 24px;
	font-weight: 700;
	height: 56px;
	display: flex;
	align-items: center;
	color: var(--dark);
	position: sticky;
	top: 0;
	left: 0;
	background: #009EFF;
	
}
#sidebar .brand .bx {
	min-width: 60px;
	display: flex;
	justify-content: center;
}
#sidebar .side-menu {
	width: 100%;
	margin-top: 48px;
}
#sidebar .side-menu li {
	height: 48px;
	background: transparent;
	margin-left: 6px;
	border-radius: 48px 0 0 48px;
	padding: 4px;
}
#sidebar .side-menu li.active {
	background: #fff;
	position: relative;
}
#sidebar .side-menu li.active::before {
	content: '';
	position: absolute;
	width: 60px;
	height: 40px;
	border-radius: 50%;
	top: -40px;
	right: 0;
	box-shadow: 20px 20px 0 #fff;
	z-index: -1;
}
#sidebar .side-menu li.active::after {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	bottom: -40px;
	right: 0;
	box-shadow: 20px -20px 0 #fff;
	z-index: -1;
}
#sidebar .side-menu li a {
	width: 100%;
	height: 100%;
	background: #009EFF;
	display: flex;
	align-items: center;
	border-radius: 48px;
	font-size: 16px;
	color: var(--dark);
	white-space: nowrap;
	overflow-x: hidden;
}
#sidebar .side-menu.top li.active a {
	color: darkblue;
}
#sidebar.hide .side-menu li a {
	width: calc(48px - (4px * 2));
	transition: width .3s ease;
}
#sidebar .side-menu.top li a:hover {
	color: var(--darkblue);
	cursor: pointer;
	font-size: 17px;
}
#sidebar .side-menu li a .bx {
	min-width: calc(60px  - ((4px + 6px) * 2));
	display: flex;
	justify-content: center;
}
/* SIDEBAR */

#content nav {
	height: 50px;
	background: #009EFF;
	padding: 0 24px;
	display: flex;
	align-items: center;
	grid-gap: 24px;
	font-family: var(--lato);
	position: sticky;
	top: 0;
	left: 0;
	z-index: 1000;
}
#content nav::before {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	bottom: -40px;
	left: 0;
	border-radius: 50%;
	box-shadow: -20px -20px 0 #009EFF;
}
#content nav a {
	color: black;
}
#content nav .bx.bx-menu {
	cursor: pointer;
	color: black;
}
#content nav .nav-link {
	font-size: 20px;
	transition: .3s ease;
}
#content nav .nav-link:hover {
	color: blue;
}

  </style>
</style>
</head>
<body>
   	<!-- SIDEBAR -->
	<section id="sidebar">
	
	<a href="" class="brand">
		<i class='bx'></i>
		<span class="text">
		<a href="">
			<img class="line" src="logo.png" style="position: absolute; left: 20px; top: 10px; border-radius: 15px; "">
		  </a></span>
	</a><br>
	<ul class="side-menu top">
		<li>
			<a href="index.php">
				<i class='bx dashboard' ></i>
				<span class="text">Home</span>
			</a>
		</li>
		<li class="active">
			<a href="analytics.php">
				<i class='bx chart' ></i>
				<span class="text">Analytics</span>
			</a>
		</li>
		<li>
			<a href="records.php">
				<i class='bx about' ></i>
				<span class="text">Records</span>
			</a>
		</li>
		<li>
			<a href="about.php">
				<i class='bx about' ></i>
				<span class="text">About</span>
			</a>
		</li>	
	</ul>
	<div class="content">
				<h2 class="title">LWUA</h2>
				<h2 class="title">LWUA</h2>
				<h2 class="title">LWUA</h2>    
			</div>
</section>
<!-- SIDEBAR -->
<div class="custom-shape">
	<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="10 0 1200 120" preserveAspectRatio="none">
					<path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
				</svg></div>
			<div class="custom-shape">
				<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="10 -20 1400 140" preserveAspectRatio="none">
					<path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill 1" style="fill: rgb(16, 107, 244);"></path>
				</svg>
			</div> 


<!-- CONTENT -->
<section id="content">
	<!-- NAVBAR -->
	<nav>

		<a href="#" class="nav-link">LWUA Water District</a>
		<!-- Profile -->
	</nav>
<main>
	
<div id="arima_gui_automatic" style="background-color: transparent; width: 100%; position: center; padding: 10px;">
				
				<label style="width: 100%;"><b>Note:</b> Submitting your forecast displays only the top 5 most recent data updated in years. Take note that this system displays only 1 year ahead as <b>prediction</b>.</label>
				
				<h2 id="noteB" style="font-family: Calibri;">Please provide the following requirements:</h2>
				<p style="cursor: default; display: none;" id="consumer_select">Consumer Type: </p>
				<button style="display: none;" id="reload" onclick="window.location.reload();"><p>RETURN</p></button>
				<br>

				<div id="input_data_year">
					
					<form action="analytics.php" method="POST">
						<b>CONSUMER TYPE: </b> &nbsp&nbsp&nbsp&nbsp
						<select id="ctype" name="constype" style="background-color: white; padding: 10px;">
							<option value="residential">RESIDENTIAL</option>
							<option value="commercial">COMMERCIAL</option>
							<option value="government">GOVERNMENT</option>
						</select>
						
						<b>SELECT ZONE: </b> &nbsp&nbsp&nbsp&nbsp
						<select id="zloc" name="zone" style="background-color: white; padding: 10px;">
							<!-- <option value="All Zone">ALL ZONE</option> -->
							<option value="1">ZONE 1</option>
							<option value="2">ZONE 2</option>
							<option value="3">ZONE 3</option>
							<option value="4">ZONE 4</option>
							<option value="5">ZONE 5</option>
							<option value="6">ZONE 6</option>
							<option value="7">ZONE 7</option>
							<option value="8">ZONE 8</option>
							<option value="9">ZONE 9</option>
								
						</select>

						<br><br>
						<center><input id="submitButton" style="padding: 5px; width: 20%;" type="submit"></button></center>
						
					</form>
					<br>
					<center><button onclick="go()" style="padding: 5px; width: 5%;" id="showResult">Show</button></center>
					<br><br><br>
					<?php 
						$con = mysqli_connect("localhost", "root", "", "lwua");
						if (!$con) {
							echo "Disconnected!" . mysqli_error();
						} else {
							$constype = $_POST["constype"];
							$zone = $_POST["zone"];
							$default_start_year = 2020;

							$sql1 = "SELECT * FROM ".$constype;
							$result1 = mysqli_query($con, $sql1);

							// Get Latest year

							$get_year = "SELECT yeara FROM ".$constype;
							
							$count_year = mysqli_query($con, $get_year);
							
							while ($row = mysqli_fetch_array($count_year)) {
								$convert_year[] = (int) $row['yeara'];
							}

							$get_latest_year = $convert_year[0];
							for ($i = 0; $i < sizeof($convert_year); $i++) {
								if ($get_latest_year < $convert_year[$i]) {
									$get_latest_year = $convert_year[$i];
								}
							}

							if ($get_latest_year - $default_start_year > 5) {
								$default_start_year = $get_latest_year - 5;
								$base_year = $default_start_year;
							} else {
								$default_start_year = $default_start_year;
								$base_year = $default_start_year;
							}

							$ma_values = ((($get_latest_year - $default_start_year) + 1) * 12) - 1;
							$cma_values = ((($get_latest_year - $default_start_year) + 1) * 12) - 2;
							$seasonal_values = ((($get_latest_year - $default_start_year) + 1) * 12);
							$integrated_values = ((($get_latest_year - $default_start_year) + 1) * 12) - 2;

							while ($row = mysqli_fetch_array($result1)) {
								$year[] = $row['yeara'];
								$month[] = $row['montha'];
								$zone_1[] = $row['zone_1'];
								$zone_2[] = $row['zone_2'];
								$zone_3[] = $row['zone_3'];
								$zone_4[] = $row['zone_4'];
								$zone_5[] = $row['zone_5'];
								$zone_6[] = $row['zone_6'];
								$zone_7[] = $row['zone_7'];
								$zone_8[] = $row['zone_8'];
								$zone_9[] = $row['zone_9'];
							}
						}
						mysqli_close($con);
						
					?>

					<center><div id="historical_forecast_label" style="display: none; font-size:20px; background-color: white; padding: 3px; border: 2px solid black; width: 30%;"><b>HISTORICAL FORECAST</b></div></center>
					<center><b><label id="canvas_label_A" style="display: none; font-size: 24px;"></label></b></center>
					<center><div id="canvas_display_A" style="border-radius: 7px; width: 80%; border: 5px solid black; display: none;"><canvas id="myChart1" style="width: 100px; height: 40px; background-color: white; padding: 10px;"></canvas> <br></div></center>
					<center><b><label id="canvas_label_B" style="display: none; font-size: 24px;"></label></b></center>
					<center><div id="canvas_display_B" style="border-radius: 7px;width: 80%; border: 5px solid black; display: none;"><canvas id="myChart2" style="width: 100px; height: 40px; background-color: white; padding: 10px;"></canvas> <br></div></center>
					<center><b><label id="canvas_label_C" style="display: none; font-size: 24px;"></label></b></center>
					<center><div id="canvas_display_C" style="border-radius: 7px;width: 80%; border: 5px solid black; display: none;"><canvas id="myChart3" style="width: 100px; height: 40px; background-color: white; padding: 10px;"></canvas></div></center>
					<center><b><label id="canvas_label_D" style="display: none; font-size: 24px;"></label></b></center>
					<center><div id="canvas_display_D" style="border-radius: 7px; width: 80%;border: 5px solid black; display: none;"><canvas id="myChart4" style="width: 100px; height: 40px; background-color: white; padding: 10px;"></canvas></div></center>
					<center><b><label id="canvas_label_E" style="display: none; font-size: 24px;"></label></b></center>
					<center><div id="canvas_display_E" style="border-radius: 7px; width: 80%; border: 5px solid black; display: none;"><canvas id="myChart5" style="width: 100px; height: 40px; background-color: white; padding: 10px;"></canvas></div></center>
					<div id="show_accuracy_summary_C" style="display: none;">
					</div>
					<br>
					
					
					
					<br><br>
					
					<center><b id="label_for_summary" style="display: none; font-size:20px; background-color: white; padding: 3px; border: 2px solid black; width: 30%;"></b><br></center>
					<div id="summary_accuraccy_A" style="border-radius: 7px; padding: 10px; margin-left: 15px; float: left;display: none; border: 5px solid black; width: 55%;">
						<canvas id="myChart" style="width: 100%; max-width: 600px;"></canvas>
					</div>
					<div id="show_accuracy_summary_A" style="border-radius: 7px; margin-left: 15px;display: none; background-color: white; padding: 10px; width: 40%; float: left; border: 5px solid black;">
						<b>MAPE Note:</b><br>
					* High Percentage is BAD, Low Percentage is GOOD <br>
					* < 5% = Acceptably Accurate <br>
					* > 10% AND < 25% = Low but Acceptable <br>
					* > 25% = Very Low Accuracy
					<div id="label_accuracy" style="padding: 10px; display: none;">
						<div id="accuracy_result_label_A" style="border-radius: 7px; border: 5px solid black; background-color: none; padding: 10px; width: 80%;"></div>
					</div>
					</div>
				
					
					
					
					<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
					<center>
						<div id="future_forecast_label" style="display: none; font-size:20px; background-color: white; margin-top: 33%; padding: 3px; border: 2px solid black; width: 30%;">
						
							<b>FUTURE ASSUMPTIONS</b>
						</div>
					</center>
					<center><b><label id="canvas_label_F" style="width: 80%; display: none; font-size: 24px;"></label></b></center>
					<div id="canvas_display_forecast" style="border-radius: 7px; border: 5px solid black; display: none;"><canvas id="forecastChart" style="width: 100px; height: 40px; background-color: white;"></canvas></div>
					<br>
					
				</div>
						
		</div>
		
	</div>
	
</body>
</html>

<script type="text/javascript">
	var n;
	var ma_divisor = (<?php echo json_encode($get_latest_year); ?> - <?php echo json_encode($default_start_year) ; ?>) + 1;
	var total_months = 12 * ma_divisor;
	var ctr = 0;
	var consumer_type;
	var counter;
	var zone_number;
	var time;
	var time_ctr;
	var dataset;
	var deseasonal;
	var deseasonal_ctr;
	var future_regression;
	var future_forecast;
	var current_time;
	var varA;
	var forecast_array_A;
	var varB;
	var xx;
	var xy;
	var yy;
	var xx_ctr;
	var xy_ctr;
	var yy_ctr;
	var quarter = new Array(12);
	var ma_values = new Array(<?php echo json_encode($ma_values); ?>);
	var cma_values = new Array(<?php echo json_encode($cma_values); ?>);
	var seasonal_values = new Array(<?php echo json_encode($seasonal_values); ?>);
	var integrated_values = new Array(<?php echo json_encode($integrated_values); ?>);

	var mape;
	var error_array = new Array(12);
	var error_squared_array = new Array(12);
	var percentage_error = new Array(12);
	var look_back = new Array(12);
	var lb_variable = current_time - 12;
	var final_look_back = new Array(12);
	var dummy_array = new Array(12);

	var dummy_dataset;
	var dummy_ma_divisor = ma_divisor - 1;
	var dummy_total_months = 12 * dummy_ma_divisor;
	var dummy_ma_values = new Array(ma_values.length - 12);
	var dummy_cma_values = new Array(cma_values.length - 12);
	var dummy_integrated_values = new Array(integrated_values.length - 12);
	var dummy_quarter = new Array(12);
	var dummy_seasonal_values = new Array(seasonal_values.length - 12);
	var dummy_deseasonal = new Array(dummy_dataset.length);
	var dummy_xx = new Array(dummy_total_months);
	var dummy_xy = new Array(dummy_total_months);
	var dummy_yy = new Array(dummy_total_months);
	var dummy_future_forecast = new Array(12);
	var dummy_future_regression = new Array(12);
	var dummy_current_time = (12 * ((<?php echo json_encode($get_latest_year) ?> - <?php echo json_encode($default_start_year) ?>) + 1)) - 12;

	function ARIMA() {
		dummy_dataset = new Array(24);
		var roy = <?php echo json_encode($get_latest_year) ?> - <?php echo json_encode($default_start_year) ?>;
		var zone = <?php echo json_encode($zone) ?>.toString();
		console.log("roy: "+typeof(roy));
		console.log(typeof(zone));
		var ctr = 0;

		if (zone == "1" && roy == 2) {
			dummy_dataset = new Array(24);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "1" && roy == 3) {
			dummy_dataset = new Array(36);
			for (let i = 0; i < 36; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "1" && roy == 4) {
			dummy_dataset = new Array(48);
			for (let i = 0; i < 48; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "2" && roy == 2) {
			dummy_dataset = new Array(24);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "2" && roy == 3) {
			dummy_dataset = new Array(36);
			for (let i = 0; i < 36; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "2" && roy == 4) {
			dummy_dataset = new Array(48);
			for (let i = 0; i < 48; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "3" && roy == 2) {
			dummy_dataset = new Array(24);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "3" && roy == 3) {
			dummy_dataset = new Array(36);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "3" && roy == 4) {
			dummy_dataset = new Array(48);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "4" && roy == 2) {
			dummy_dataset = new Array(24);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "4" && roy == 3) {
			dummy_dataset = new Array(36);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "4" && roy == 4) {
			dummy_dataset = new Array(48);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "5" && roy == 2) {
			dummy_dataset = new Array(24);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "5" && roy == 3) {
			dummy_dataset = new Array(36);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "5" && roy == 4) {
			dummy_dataset = new Array(48);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "6" && roy == 2) {
			dummy_dataset = new Array(24);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "6" && roy == 3) {
			dummy_dataset = new Array(36);
			for (let i = 0; i < 36; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "6" && roy == 4) {
			dummy_dataset = new Array(48);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "7" && roy == 2) {
			dummy_dataset = new Array(24);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "7" && roy == 3) {
			dummy_dataset = new Array(36);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "7" && roy == 4) {
			dummy_dataset = new Array(48);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "8" && roy == 2) {
			dummy_dataset = new Array(24);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "8" && roy == 3) {
			dummy_dataset = new Array(36);
			for (let i = 0; i < 36; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "8" && roy == 4) {
			dummy_dataset = new Array(48);
			for (let i = 0; i < 48; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "9" && roy == 2) {
			dummy_dataset = new Array(24);
			for (let i = 0; i < 24; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "9" && roy == 3) {
			dummy_dataset = new Array(36);
			for (let i = 0; i < 36; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		} else if (zone == "9" && roy == 4) {
			dummy_dataset = new Array(48);
			for (let i = 0; i < 48; i++) {
				dummy_dataset[ctr] = dataset[i];
				ctr = ctr + 1;
			}
		}

		MOVING_AVERAGE();
		CENTERED_MOVING_AVERAGE();
		INTEGRATED();
		SEASONALITY();
		SEASONAL();
		REGRESSION_TREND();
		FORECAST();
	}

	

	function MOVING_AVERAGE() {
							
		ctr = 0;
		for (let i = 0; i < total_months - 1; i++) {
			if (ctr == total_months) {
				break;
			} else {
				ma_values[ctr] = (dataset[i] + (dataset[i+1])) / ma_divisor;
				ctr = ctr + 1;
			}
		}
		console.log("Moving Average Values: " + ma_values);

		//-----------------------------------------------------------------------------------------------------------------------------------
		
		ctr = 0;
		for (let i = 0; i < dummy_total_months - 1; i++) {
			if (ctr == dummy_total_months) {
				break;
			} else {
				dummy_ma_values[ctr] = (dummy_dataset[i] + (dummy_dataset[i+1])) / dummy_ma_divisor;
				ctr = ctr + 1;
			}
		}
	}
	
	
	function CENTERED_MOVING_AVERAGE() {
		ctr = 0;
		for (let i = 0; i < total_months - 2; i++) {
			if (ctr == total_months - 1) {
				break;
			} else {
				cma_values[ctr] = (ma_values[i] + (ma_values[i+1])) / ma_divisor;
				ctr = ctr + 1;
			}
		}
		console.log("Centered Moving Average Values: " + cma_values);

		//-----------------------------------------------------------------------------------------------------------------------------------

		ctr = 0;
		for (let i = 0; i < dummy_total_months - 2; i++) {
			if (ctr == dummy_total_months - 1) {
				break;
			} else {
				dummy_cma_values[ctr] = (dummy_ma_values[i] + (dummy_ma_values[i+1])) / dummy_ma_divisor;
				ctr = ctr + 1;
			}
		}
	}
	
	function INTEGRATED() {
		ctr = 0;
		for (let i = 0; i < total_months - 2; i++) {
			integrated_values[ctr] = dataset[i] / cma_values[i];
			ctr = ctr + 1;
		}
		console.log("Integrated Values: " + integrated_values);

		//-----------------------------------------------------------------------------------------------------------------------------------

		ctr = 0;
		for (let i = 0; i < dummy_total_months - 2; i++) {
			dummy_integrated_values[ctr] = dummy_dataset[i] / dummy_cma_values[i];
			ctr = ctr + 1;
		}
	}
	
	function SEASONALITY() {	// DEFAULT_SEASONAL
		var n = 11;
		ctr = 0;

		if (ma_divisor == 2) {
			// console.log(integrated_values.length);
			for (let i = 0; i < 12; i++) {
				quarter[ctr] = (integrated_values[ctr] + integrated_values[n+1]) / ma_divisor;
				n = n + 1;
				ctr = ctr + 1;
				if ((n + 1) == 22) {
					break;
				}
			}
			quarter[10] = integrated_values[10];
			quarter[11] = integrated_values[11];
			console.log("Seasonal Quarters: " + quarter);

		} else if (ma_divisor == 3) {
			for (let i = 0; i < 12; i++) {
				quarter[ctr] = (integrated_values[ctr] + integrated_values[n + 1] + integrated_values[n + 11]) / ma_divisor;
				n = n + 1;
				ctr = ctr + 1;
				if ((n + 1) == 34) {
					break;
				}
			}
			console.log("Seasonal Quarters: " + quarter);

		} else if (ma_divisor == 4) {
			for (let i = 0; i < 12; i++) {
				quarter[ctr] = (integrated_values[ctr] + integrated_values[n + 1] + integrated_values[n + 11] + integrated_values[n + 21]) / ma_divisor;
				n = n + 1;
				ctr = ctr + 1;
			}
			console.log("Seasonal Quarters: " + quarter);

		} else if (ma_divisor == 5) {
			for (let i = 0; i < 12; i++) {
				quarter[ctr] = (integrated_values[ctr] + integrated_values[n + 1] + integrated_values[n + 11] + integrated_values[n + 21] + integrated_values[n + 31]) / ma_divisor;
				n = n + 1;
				ctr = ctr + 1;
			}
			console.log("Seasonal Quarters: " + quarter);

		} else if (ma_divisor == 6) {
			for (let i = 0; i < 12; i++) {
				quarter[ctr] = (integrated_values[ctr] + integrated_values[n + 1] + integrated_values[n + 11] + integrated_values[n + 21] + integrated_values[n + 31] + integrated_values[n + 41]) / ma_divisor;
				n = n + 1;
				ctr = ctr + 1;
			}
			console.log("Seasonal Quarters: " + quarter);

		}

		//-----------------------------------------------------------------------------------------------------------------------------------
	
		var n = 11;
		ctr = 0;

		if (dummy_ma_divisor == 2) {
			// console.log(integrated_values.length);
			for (let i = 0; i < 12; i++) {
				dummy_quarter[ctr] = (dummy_integrated_values[ctr] + dummy_integrated_values[n+1]) / dummy_ma_divisor;
				n = n + 1;
				ctr = ctr + 1;
				if ((n + 1) == 22) {
					break;
				}
			}
			dummy_quarter[10] = dummy_integrated_values[10];
			dummy_quarter[11] = dummy_integrated_values[11];
		} else if (dummy_ma_divisor == 3) {
			for (let i = 0; i < 12; i++) {
				dummy_quarter[ctr] = (dummy_integrated_values[ctr] + dummy_integrated_values[n + 1] + dummy_integrated_values[n + 11]) / dummy_ma_divisor;
				n = n + 1;
				ctr = ctr + 1;
				if ((n + 1) == 34) {
					break;
				}
			}
		} else if (dummy_ma_divisor == 4) {
			for (let i = 0; i < 12; i++) {
				dummy_quarter[ctr] = (dummy_integrated_values[ctr] + dummy_integrated_values[n + 1] + dummy_integrated_values[n + 11] + dummy_integrated_values[n + 21]) / dummy_ma_divisor;
				n = n + 1;
				ctr = ctr + 1;
			}
		} else if (dummy_ma_divisor == 5) {
			for (let i = 0; i < 12; i++) {
				dummy_quarter[ctr] = (dummy_integrated_values[ctr] + dummy_integrated_values[n + 1] + dummy_integrated_values[n + 11] + dummy_integrated_values[n + 21] + dummy_integrated_values[n + 31]) / dummy_ma_divisor;
				n = n + 1;
				ctr = ctr + 1;
			}
		} else if (dummy_ma_divisor == 6) {
			for (let i = 0; i < 12; i++) {
				dummy_quarter[ctr] = (dummy_integrated_values[ctr] + dummy_integrated_values[n + 1] + dummy_integrated_values[n + 11] + dummy_integrated_values[n + 21] + dummy_integrated_values[n + 31] + dummy_integrated_values[n + 41]) / dummy_ma_divisor;
				n = n + 1;
				ctr = ctr + 1;
			}
		}
	}  
	
	function SEASONAL() {
		ctr = 0;
		n = 0;

		for (let i = 0; i < dataset.length; i++) {
			seasonal_values[ctr] = i / quarter[n];
			if (n % 12 == 0) {
				n = 0;
				ctr = ctr + 1;
			} else {
				n = n + 1;
				ctr = ctr + 1;
			}
		}
		console.log(dataset.length);
		console.log("Seasonal Values: " + seasonal_values);

		//-----------------------------------------------------------------------------------------------------------------------------------
	
		ctr = 0;
		n = 0;

		for (let i = 0; i < dummy_dataset.length; i++) {
			dummy_seasonal_values[ctr] = i / dummy_quarter[n];
			if (n % 12 == 0) {
				n = 0;
				ctr = ctr + 1;
			} else {
				n = n + 1;
				ctr = ctr + 1;
			}
		}
	}
	
	function REGRESSION_TREND() {
		time = 1;
		deseasonal = new Array(dataset.length);

		xx = new Array(total_months);
		xy = new Array(total_months);
		yy = new Array(total_months);
		
		for (let i = 0; i < total_months; i++) {
			deseasonal[i] = dataset[i];
		}
		
		for (let i = 0; i < total_months; i++) {
			xy[i] = time * deseasonal[i];
			xx[i] = Math.pow(time, 2);
			yy[i] = Math.pow(deseasonal[i], 2);
			time = time + 1;

		}
		
		// console.log("Hello: " + deseasonal);
		time_ctr = 0;
		deseasonal_ctr = 0;
		xx_ctr = 0;
		xy_ctr = 0;
		yy_ctr = 0;
		time = 1;
		
		for (let i = 0; i < 24; i++) {	// I'm not sure with the 24... if its dynamic or just static
			time_ctr = time_ctr + time;
			time = time + 1;

			deseasonal_ctr = deseasonal_ctr + deseasonal[i];
			xy_ctr = xy_ctr + xy[i];
			xx_ctr = xx_ctr + xx[i];
			yy_ctr = yy_ctr + yy[i];
		}

		var n = time - 1;

		varA = ((n * xy_ctr) - (time_ctr * deseasonal_ctr)) / ((n *xx_ctr) - (Math.pow(time_ctr, 2)));
		console.log("Total A: " + varA);
		varB = ((deseasonal_ctr * xx_ctr) - (time_ctr * xy_ctr)) / ((n * xx_ctr) - (Math.pow(time_ctr, 2)));
		console.log("Total B: " + varB);
		console.log(deseasonal);
		console.log("Time: " + time_ctr);
		console.log("Deseasonalize: " + deseasonal_ctr);
		console.log("XY: " + xy_ctr);
		console.log("X^2: " + xx_ctr);
		console.log("Y^2: " + yy_ctr);

		//-----------------------------------------------------------------------------------------------------------------------------------

		time = 1;
		dummy_deseasonal = new Array(dummy_dataset.length);

		dummy_xx = new Array(dummy_total_months);
		dummy_xy = new Array(dummy_total_months);
		dummy_yy = new Array(dummy_total_months);
		
		for (let i = 0; i < dummy_total_months; i++) {
			dummy_deseasonal[i] = dummy_dataset[i];
		}
		
		for (let i = 0; i < dummy_total_months; i++) {
			dummy_xy[i] = time * dummy_deseasonal[i];
			dummy_xx[i] = Math.pow(time, 2);
			dummy_yy[i] = Math.pow(dummy_deseasonal[i], 2);
			time = time + 1;
		}
		
		time_ctr = 0;
		deseasonal_ctr = 0;
		xx_ctr = 0;
		xy_ctr = 0;
		yy_ctr = 0;
		time = 1;
		
		for (let i = 0; i < dummy_total_months; i++) {
			time_ctr = time_ctr + time;
			time = time + 1;
			deseasonal_ctr = deseasonal_ctr + dummy_deseasonal[i];
			xy_ctr = xy_ctr + dummy_xy[i];
			xx_ctr = xx_ctr + dummy_xx[i];
			yy_ctr = yy_ctr + dummy_yy[i];
		}

		var n = time - 1;

		varA = ((n * xy_ctr) - (time_ctr * deseasonal_ctr)) / ((n *xx_ctr) - (Math.pow(time_ctr, 2)));
		varB = ((deseasonal_ctr * xx_ctr) - (time_ctr * xy_ctr)) / ((n * xx_ctr) - (Math.pow(time_ctr, 2)));
	}
	
	function FORECAST() {
		// Future Forecast Data

		future_forecast = new Array(12);
		future_regression = new Array(12);
		current_time = 12 * ((<?php echo json_encode($get_latest_year) ?> - <?php echo json_encode($default_start_year) ?>) + 1);

		counter = current_time;
		// console.log("Future Quarterly Quack: " + quarter);
		for (let i = 0; i < 12; i++) {
			future_regression[i] = (varB + (varA * counter));
			counter = counter + 1;
		}

		ctr = 1;
		for (let i = 0; i < 12; i++) {
			future_forecast[i] = quarter[ctr] * future_regression[i];
			ctr = ctr + 1;
			if (ctr == 12) {
				ctr = 1;
			}
		}

		look_back = new Array(12);
		lb_variable = current_time - 12;
		final_look_back = new Array(12);
		ctr = 1;

		for (let i = 0; i < 12; i++) {
			look_back[i] = (varB + (varA * lb_variable));
			lb_variable = lb_variable + 1;
		}
		for (let i = 0; i < 12; i++) {
			final_look_back[i] = quarter[ctr] * look_back[i];
			ctr = ctr + 1;
			if (ctr == 12) {
				ctr = 1;
			}
		}
		console.log("Look Back: " + final_look_back);
		console.log("FUTURE FORECAST: " + future_forecast);

		//-----------------------------------------------------------------------------------------------------------------------------------
		dummy_future_forecast = new Array(12);
		dummy_future_regression = new Array(12);
		dummy_current_time = 12 * ((<?php echo json_encode($get_latest_year) ?> - <?php echo json_encode($default_start_year) ?>) + 1) - 12;
		dummy_counter = dummy_current_time;
		// console.log("Future Quarterly Quack: " + quarter);
		for (let i = 0; i < 12; i++) {
			dummy_future_regression[i] = (varB + (varA * dummy_counter));
			dummy_counter = dummy_counter + 1;
		}
		ctr = 1;
		for (let i = 0; i < 12; i++) {
			dummy_future_forecast[i] = dummy_quarter[ctr] * dummy_future_regression[i];
			ctr = ctr + 1;
			if (ctr == 12) {
				ctr = 1;
			}
		}
		look_back = new Array(12);
		lb_variable = current_time - 12;
		final_look_back = new Array(12);
		ctr = 1;
		for (let i = 0; i < 12; i++) {
			look_back[i] = (varB + (varA * lb_variable));
			lb_variable = lb_variable + 1;
		}
		for (let i = 0; i < 12; i++) {
			final_look_back[i] = dummy_quarter[ctr] * look_back[i];
			ctr = ctr + 1;
			if (ctr == 12) {
				ctr = 1;
			}
		}
		console.log("DUMMY FUTURE FORECAST: " + dummy_future_forecast);
	}

	function go() {
		console.log("Latest Year: " + <?php echo json_encode($get_latest_year) ?>);
		console.log("Default Start Year: " + <?php echo json_encode($default_start_year) ?>);
		document.getElementById("showResult").disabled = true;
		var label_months = ['JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER', 'NOVEMBER', 'DECEMBER'];
		document.getElementById("historical_forecast_label").style.display = "block";
		document.getElementById("future_forecast_label").style.display = "block";
		var zone_number = 1;
		
		document.getElementById("label_accuracy").style.display = "block";
		document.getElementById("summary_accuraccy_A").style.display = "block";
		document.getElementById("showResult").style.display = "none";
		

		var start_year = Number(<?php echo json_encode($default_start_year) ?>);
		var end_year = Number(<?php echo json_encode($get_latest_year) ?>);
		var range_of_year = end_year - start_year;

		var list_array_A = new Array(12);
		var list_array_B = new Array(12);
		var list_array_C = new Array(12);
		var list_array_D = new Array(12);
		var list_array_E = new Array(12);
		var count = 0;
		var selected_zone = <?php echo json_encode($zone) ?>.toString();
		console.log("Seleceted Zone: " +  selected_zone);
		dataset = new Array(total_months);

		if (selected_zone == "1") {	// 2 years
			// Zone 1: 2 years to forecast EX: 2020-2021
			if (range_of_year == 1) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_1); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_1); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_1); ?>);
			} else if (range_of_year == 2) {	// 3 years
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_1); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_1); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_1); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_C[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_1); ?>);

				dummy_dataset = new Array(24);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				console.log("THIS IS JUST A DUMMY: " + dummy_dataset);

			} else if (range_of_year == 3) {	// 4 years
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_1); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_1); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_1); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_1); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_D[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_1); ?>);

				dummy_dataset = new Array(36);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}
			} else if (range_of_year == 4) {	// 5 years
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_1); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_1); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_1); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_1); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = <?php echo json_encode($zone_1); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = Number(list_array_E[i]);
					list_array_E[i] = list_array_E[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_E[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_E[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_1); ?>);

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_E
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_1); ?>);

				dummy_dataset = new Array(48);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_D[i];
					ctr = ctr + 1;
				}
			}
		} else if (selected_zone == "2") {
			
			if (range_of_year == 1) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_2); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_2); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_2); ?>);

			} else if (range_of_year == 2) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_2); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_2); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_2); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_C[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_2); ?>);

				dummy_dataset = new Array(24);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}
			} else if (range_of_year == 3) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_2); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_2); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_2); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_2); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_D[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_1); ?>);

				dummy_dataset = new Array(36);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}
			} else if (range_of_year == 4) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_2); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_2); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_2); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_2); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = <?php echo json_encode($zone_2); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = Number(list_array_E[i]);
					list_array_E[i] = list_array_E[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_E[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_E[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_2); ?>);

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_E
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_2); ?>);

				dummy_dataset = new Array(48);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_D[i];
					ctr = ctr + 1;
				}
			}
		} else if (selected_zone == "3") {
			if (range_of_year == 1) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_3); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_3); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_3); ?>);

			} else if (range_of_year == 2) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_3); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_3); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_3); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_C[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_3); ?>);

				dummy_dataset = new Array(24);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}
			} else if (range_of_year == 3) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_3); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_3); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_3); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_3); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_D[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_3); ?>);

				dummy_dataset = new Array(36);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}
			} else if (range_of_year == 4) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_3); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_3); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_3); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_3); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = <?php echo json_encode($zone_3); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = Number(list_array_E[i]);
					list_array_E[i] = list_array_E[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_E[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_E[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_3); ?>);

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_E
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_3); ?>);

				dummy_dataset = new Array(48);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_D[i];
					ctr = ctr + 1;
				}
			}

		} else if (selected_zone == "4") {
			if (range_of_year == 1) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_4); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_4); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_4); ?>);

			} else if (range_of_year == 2) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_4); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_4); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_4); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_C[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_4); ?>);

				dummy_dataset = new Array(24);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}
			} else if (range_of_year == 3) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_4); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_4); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_4); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_4); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_D[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_4); ?>);

				dummy_dataset = new Array(36);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}
			} else if (range_of_year == 4) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_4); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_4); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_4); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_4); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = <?php echo json_encode($zone_4); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = Number(list_array_E[i]);
					list_array_E[i] = list_array_E[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_E[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_E[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_4); ?>);

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_E
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_4); ?>);

				dummy_dataset = new Array(48);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_D[i];
					ctr = ctr + 1;
				}
			}

		} else if (selected_zone == "5") {
			
			if (range_of_year == 1) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_5); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_5); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_5); ?>);

			} else if (range_of_year == 2) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_5); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_5); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_5); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_C[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_5); ?>);

				dummy_dataset = new Array(24);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}
			} else if (range_of_year == 3) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_5); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_5); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_5); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_5); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_D[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_5); ?>);

				dummy_dataset = new Array(36);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}
			} else if (range_of_year == 4) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_5); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_5); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_5); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_5); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = <?php echo json_encode($zone_5); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = Number(list_array_E[i]);
					list_array_E[i] = list_array_E[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_E[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_E[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_4); ?>);

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_E
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_5); ?>);

				dummy_dataset = new Array(48);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_D[i];
					ctr = ctr + 1;
				}
			} 
		} else if (selected_zone == "6") {
			if (range_of_year == 1) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_6); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_6); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_6); ?>);

			} else if (range_of_year == 2) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_6); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_6); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_6); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_C[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_6); ?>);

				dummy_dataset = new Array(24);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}
			} else if (range_of_year == 3) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_6); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_6); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_6); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_6); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_D[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_6); ?>);

				dummy_dataset = new Array(36);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}
			} else if (range_of_year == 4) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_6); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_6); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_6); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_6); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = <?php echo json_encode($zone_6); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = Number(list_array_E[i]);
					list_array_E[i] = list_array_E[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_E[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_E[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_1); ?>);

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_E
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_1); ?>);

				dummy_dataset = new Array(48);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_D[i];
					ctr = ctr + 1;
				}
			} 
		} else if (selected_zone == "7") {
			if (range_of_year == 1) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_7); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_7); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_7); ?>);

			} else if (range_of_year == 2) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_7); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_7); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_7); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_C[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_7); ?>);

				dummy_dataset = new Array(24);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}
			} else if (range_of_year == 3) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_7); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_7); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_7); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_7); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_D[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_7); ?>);

				dummy_dataset = new Array(36);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}
			} else if (range_of_year == 4) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_7); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_7); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_7); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_7); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = <?php echo json_encode($zone_7); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = Number(list_array_E[i]);
					list_array_E[i] = list_array_E[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_E[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_E[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_7); ?>);

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_E
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_7); ?>);

				dummy_dataset = new Array(48);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_D[i];
					ctr = ctr + 1;
				}
			} 
		} else if (selected_zone == "8") {
			if (range_of_year == 1) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_8); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_8); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_8); ?>);

			} else if (range_of_year == 2) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_8); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_8); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_8); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_C[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_8); ?>);

				dummy_dataset = new Array(24);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}
			} else if (range_of_year == 3) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_8); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_8); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_8); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_8); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_D[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_8); ?>);

				dummy_dataset = new Array(36);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}
			} else if (range_of_year == 4) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_8); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_8); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_8); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_8); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = <?php echo json_encode($zone_8); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = Number(list_array_E[i]);
					list_array_E[i] = list_array_E[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_E[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_E[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_8); ?>);

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_E
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_8); ?>);

				dummy_dataset = new Array(48);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_D[i];
					ctr = ctr + 1;
				}
			}
		} else if (selected_zone == "9") {
			if (range_of_year == 1) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_9); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_9); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_9); ?>);

			} else if (range_of_year == 2) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_9); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_9); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_9); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_C[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_9); ?>);

				dummy_dataset = new Array(24);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}
			} else if (range_of_year == 3) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_9); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_9); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_9); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_9); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_D[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_9); ?>);

				dummy_dataset = new Array(36);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}
			} else if (range_of_year == 4) {
				for (let i = 0; i < 12; i++) {
				list_array_A[i] = <?php echo json_encode($zone_9); ?>[count];
				count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_A[i] = Number(list_array_A[i]);
					list_array_A[i] = list_array_A[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = <?php echo json_encode($zone_9); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_B[i] = Number(list_array_B[i]);
					list_array_B[i] = list_array_B[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = <?php echo json_encode($zone_9); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_C[i] = Number(list_array_C[i]);
					list_array_C[i] = list_array_C[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = <?php echo json_encode($zone_9); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_D[i] = Number(list_array_D[i]);
					list_array_D[i] = list_array_D[i] / 1000;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = <?php echo json_encode($zone_9); ?>[count];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					list_array_E[i] = Number(list_array_E[i]);
					list_array_E[i] = list_array_E[i] / 1000;
				}

				count = 0;
				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_A[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_B[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_C[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_D[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dataset[count] = list_array_E[i];
					count = count + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_array[i] = list_array_E[i];
				}

				ARIMA();

				var ctr = 1;
				var sub;
				var change;
				var selected_zone;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
						type: "line",
						data: {
							labels: label_months,
							datasets: [{
								label: "Cubic Meter",
								fill: true,
								lineTension: 0.4,
								backgroundColor: "lightblue",
								borderColor: "blue",
								data: list_array_A
							}]
						},
						options: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									fontColor: '#71748d',
									fontFamily: 'Circular Std Book',
									fontSize: 14,
								}
							},
						}
					});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_B
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_C
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				ctr = Number(ctr);
				ctr = ctr + 1;

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_D
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_9); ?>);

				sub = ctr.toString();
				change = "myChart" + sub;

					new Chart(change, {
					type: "line",
					data: {
						labels: label_months,
						datasets: [{
							label: "Cubic Meter",
							fill: true,
							lineTension: 0.4,
							backgroundColor: "lightblue",
							borderColor: "blue",
							data: list_array_E
						}]
					},
					options: {
						legend: {
							display: true,
							position: 'bottom',
							labels: {
								fontColor: '#71748d',
								fontFamily: 'Circular Std Book',
								fontSize: 14,
							}
						},
					}
				});

				console.log(<?php echo json_encode($zone_9); ?>);

				dummy_dataset = new Array(48);
				ctr = 0;
				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_A[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_B[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_C[i];
					ctr = ctr + 1;
				}

				for (let i = 0; i < 12; i++) {
					dummy_dataset[ctr] = list_array_D[i];
					ctr = ctr + 1;
				}
			} 
		}

		//-------------------------------------------------------------------

			new Chart("forecastChart", {
				type: "line",
				data: {
					labels: label_months,
					datasets: [{
						label: "Cubic Meter",
						fill: true,
						lineTension: 0.4,
						backgroundColor: "lightblue",
						borderColor: "blue",
						data: future_forecast
					}]
				},
				options: {
					legend: {
						display: true,
						position: 'bottom',
						labels: {
							fontColor: '#71748d',
							fontFamily: 'Circular Std Book',
							fontSize: 14,
						}
					},
				}
			});

		var base = <?php echo json_encode($base_year); ?>;

		// forecast data = final_look_back
		// actual data/historical = list_array_?
		
		// error_array
		// error_squared_array
		// percentage_error

		new Chart("myChart", {
			type: "line",
			data: {
				labels: label_months,
				datasets: [{
					label: 'Actual Data',
					fill: false,
					backgroundColor: "rgb(255, 99, 132)",
					borderColor: "rgb(255, 99, 132)",
					data: dummy_array
				},{
					label: 'Forecast Data',
					fill: false,
					backgroundColor: "rgb(255, 255, 0)",
					borderColor: "rgb(255, 255, 0)",
					data: dummy_future_forecast
				}]
			},

		});

		

		console.log("This is my historical Data: " + dummy_array);	// At
		console.log("This is my forecast Data: " + dummy_future_forecast);	// Ft
		for (let i = 0; i < 12; i++) {
			if (dummy_array[i] < dummy_future_forecast[i]) {
				error_array[i] = (dummy_future_forecast[i] - dummy_array[i]) / dummy_array[i];
			} else if (dummy_array[i] > dummy_future_forecast[i]) {
				error_array[i] = (dummy_array[i] - dummy_future_forecast[i]) / dummy_array[i];
			} else {
				error_array[i] = (dummy_future_forecast[i] - dummy_array[i]) / dummy_array[i];
			}
		}

		mape = 0;

		console.log(error_array);

		for (let i = 0; i < 12; i++) {
			mape = mape + error_array[i];
		}

		mape = (mape / 12) * 100;

		mape = mape.toFixed(2);

		console.log("Mean Absolute Percentage Error: " + mape);

		var remarks;

		if (mape < 0) {
			mape = 0;
			remarks = "Acceptably Accurate";
			document.getElementById("accuracy_result_label_A").style.backgroundColor = "lightgreen";
		} else if (mape <= 5) {
			remarks = "Acceptably Accurate";
			document.getElementById("accuracy_result_label_A").style.backgroundColor = "lightgreen";
		} else if (mape > 5 && mape <= 25) {
			remarks = "Low but Acceptable";
			document.getElementById("accuracy_result_label_A").style.background = "lightyellow";
		} else if (mape > 25) {
			remarks = "Very Low Accuracy";
			document.getElementById("accuracy_result_label_A").style.backgroundColor = "rgb(255, 99, 132)";
		} else {
			remarks = "Undefined due to lack of data!";
		}

		mape = mape.toString();

		if (range_of_year == 1) {
			document.getElementById("canvas_label_A").innerHTML = "Year " + base.toString();
			base = base + 1;
			document.getElementById("canvas_label_B").innerHTML = "Year " + base.toString();
			base = base + 1;
			document.getElementById("canvas_label_F").innerHTML = "Year " + base.toString();

			document.getElementById("canvas_label_A").style.display = "block";
			document.getElementById("canvas_label_B").style.display = "block";
			document.getElementById("canvas_label_F").style.display = "block";

			document.getElementById("canvas_display_A").style.display = "block";
			document.getElementById("canvas_display_B").style.display = "block";
		} else if (range_of_year == 2) {
			document.getElementById("canvas_label_A").innerHTML = "Year " + base.toString();
			base = base + 1;
			document.getElementById("canvas_label_B").innerHTML = "Year " + base.toString();
			base = base + 1;
			document.getElementById("canvas_label_C").innerHTML = "Year " + base.toString();
			base = base + 1;
			document.getElementById("canvas_label_F").innerHTML = "Year " + base.toString();

			document.getElementById("canvas_label_A").style.display = "block";
			document.getElementById("canvas_label_B").style.display = "block";
			document.getElementById("canvas_label_C").style.display = "block";
			document.getElementById("canvas_label_F").style.display = "block";

			document.getElementById("label_for_summary").innerHTML = (base - 1) + " MAPE SUMMARY";
			document.getElementById("accuracy_result_label_A").innerHTML = "MAPE RESULT: " + mape + "<br>REMARKS: " + remarks;
			document.getElementById("show_accuracy_summary_A").style.display = "block";

			document.getElementById("canvas_display_A").style.display = "block";
			document.getElementById("canvas_display_B").style.display = "block";
			document.getElementById("canvas_display_C").style.display = "block";
		} else if (range_of_year == 3) {
			document.getElementById("canvas_label_A").innerHTML = "Year " + base.toString();
			base = base + 1;
			document.getElementById("canvas_label_B").innerHTML = "Year " + base.toString();
			base = base + 1;
			document.getElementById("canvas_label_C").innerHTML = "Year " + base.toString();
			base = base + 1;
			document.getElementById("canvas_label_D").innerHTML = "Year " + base.toString();
			base = base + 1;
			document.getElementById("canvas_label_F").innerHTML = "Year " + base.toString();

			document.getElementById("canvas_label_A").style.display = "block";
			document.getElementById("canvas_label_B").style.display = "block";
			document.getElementById("canvas_label_C").style.display = "block";
			document.getElementById("canvas_label_D").style.display = "block";
			document.getElementById("canvas_label_F").style.display = "block";

			document.getElementById("label_for_summary").innerHTML = (base - 1) + " MAPE SUMMARY";
			document.getElementById("accuracy_result_label_A").innerHTML = "MAPE RESULT: " + mape + "<br>REMARKS: " + remarks;
			document.getElementById("show_accuracy_summary_A").style.display = "block";

			document.getElementById("canvas_display_A").style.display = "block";
			document.getElementById("canvas_display_B").style.display = "block";
			document.getElementById("canvas_display_C").style.display = "block";
			document.getElementById("canvas_display_D").style.display = "block";
		} else if (range_of_year == 4) {
			document.getElementById("canvas_label_A").innerHTML = "Year " + base.toString();
			base = base + 1;
			document.getElementById("canvas_label_B").innerHTML = "Year " + base.toString();
			base = base + 1;
			document.getElementById("canvas_label_C").innerHTML = "Year " + base.toString();
			base = base + 1;
			document.getElementById("canvas_label_D").innerHTML = "Year " + base.toString();
			base = base + 1;
			document.getElementById("canvas_label_E").innerHTML = "Year " + base.toString();
			base = base + 1;
			document.getElementById("canvas_label_F").innerHTML = "Year " + base.toString();

			document.getElementById("canvas_label_A").style.display = "block";
			document.getElementById("canvas_label_B").style.display = "block";
			document.getElementById("canvas_label_C").style.display = "block";
			document.getElementById("canvas_label_D").style.display = "block";
			document.getElementById("canvas_label_E").style.display = "block";
			document.getElementById("canvas_label_F").style.display = "block";

			document.getElementById("label_for_summary").innerHTML = (base - 1) + " MAPE SUMMARY";
			document.getElementById("accuracy_result_label_A").innerHTML = "MAPE RESULT: " + mape + "<br>REMARKS: " + remarks;
			document.getElementById("show_accuracy_summary_A").style.display = "inline-block";

			document.getElementById("canvas_display_A").style.display = "block";
			document.getElementById("canvas_display_B").style.display = "block";
			document.getElementById("canvas_display_C").style.display = "block";
			document.getElementById("canvas_display_D").style.display = "block";
			document.getElementById("canvas_display_E").style.display = "block";
		} 
		
		document.getElementById("label_for_summary").style.display = "block";
		document.getElementById("canvas_display_forecast").style.display = "block";
	}
	
</script>

</main>
</section>
</body>
</html>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
 <!-- All Jquery -->
 <script src="js/lib/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="js/lib/bootstrap/js/popper.min.js"></script>
<script src="js/lib/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="functions.js"></script>

