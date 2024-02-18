<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>About</title>
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
        position: absolute;
        display: block;
        width: calc(140% + 1.3px);
        height: 225px;
		background-color: transparent
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
</head>
<body>
   
	<!-- SIDEBAR -->
	<section id="sidebar">
	
	<a href="" class="brand">
		<i class='bx'></i>
		<span class="text">
		<a href="">
			<img class="line" src="logo.png" style="position: absolute; left: 20px; top: 10px; border-radius: 15px; ">
		  </a></span>
	</a><br>
	<ul class="side-menu top">
		<li>
				<a href="index.php">
					<i class='bx dashboard' ></i>
					<span class="text">Home</span>
				</a>
			</li>
			<li>
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
		
			<li class="active">
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
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>

			<div id="part_about" style="background: transparent; text-align:center; margin-left: 0%; margin-top: 5%;">
							<h5>OUR SERVICES
							<p><br>Project DISTRICT uses prediction and advance calculation using ARIMA Algorithm <br> to determine where, 
								what zone/Barangay is having a high and low consumption</p></h5><br>

							<h5>ABOUT PROJECT DISTRICT
							<p><br>PROJECT DISTRICT aims to develop a water demand forecasting system for LWUA Bato Water District to monitor <br>
								the water consumption in every zone/barangay and their classification</p></h5><br>

							<h5>CONTACT WITH US</h1>
							<p>+123456789<br>ProjectDISTRICT@gmail.com</p></h5>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
</body>
 <!-- All Jquery -->
 <script src="js/lib/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="js/lib/bootstrap/js/popper.min.js"></script>
<script src="js/lib/bootstrap/js/bootstrap.min.js"></script>

</html>

<?php
    
?>


