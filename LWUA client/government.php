<!DOCTYPE html>
<html lang="en">
<?php
session_start();

$db = mysqli_connect("localhost","root","","lwua");
$sql = "SELECT yeara,montha,zone_1,zone_2, zone_3, zone_4, zone_5, zone_6, zone_7, zone_8, zone_9 FROM government ORDER BY id";
$result = mysqli_query($db,$sql);
$data = array();

foreach ($result as $row) {
	$data[] = $row;
}
if(isset($_POST['submit'] ))
{
    if(empty($_POST['yeara'])&&
   	    empty($_POST['montha'])&& 
		empty($_POST['zone_1'])&& 
		empty($_POST['zone_2'])&& 
		empty($_POST['zone_3'])&& 
        empty($_POST['zone_4'])&& 
        empty($_POST['zone_5'])&& 
        empty($_POST['zone_6'])&& 
        empty($_POST['zone_7'])&& 
        empty($_POST['zone_8'])&& 
		empty($_POST['zone_9']))
		{
			$error = '<div class="alert alert-danger alert-dismissible fade show" style=" margin-left: 20%; width: 50%;">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>All fields Required!</strong>
				</div>';
		}
	else
	{
	
	
	$sql = "INSERT INTO government(yeara,montha,zone_1,zone_2,zone_3,zone_4,zone_5,zone_6,zone_7,zone_8,zone_9) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
	$stmt = mysqli_prepare($db, $sql);
    if ($stmt); {
        mysqli_stmt_bind_param($stmt, "sssssssssss", $_POST['yeara'],$_POST['montha'],$_POST['zone_1'],$_POST['zone_2'],$_POST['zone_3'],$_POST['zone_4'],$_POST['zone_5'],$_POST['zone_6'],$_POST['zone_7'], $_POST['zone_8'], $_POST['zone_9']);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
		$success = 	'<div class="alert alert-success alert-dismissible fade show" style=" background: lightgreen; margin-left: 20%; margin-top: 1%;">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Congrass!</strong> New Added Successfully.</br></div>';
	
    }
	}

?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
	<!-- My CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>

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
	<title>ADD ZONE</title>
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
        <a href="residential.php">
            <i class='bx records' ></i>
            <span class="text">Residential Records</span>
        </a>
    </li>
    <li>
        <a href="commercial.php">
            <i class='bx records' ></i>
            <span class="text">Commercial Records</span>
        </a>
    </li>
    <li class="active">
        <a href="government.php">
            <i class='bx records' ></i>
            <span class="text">Government Records</span>
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
		<!-- NAVBAR -->
	<br>
		<!-- MAIN -->
		<main>
			  <!-- Container fluid  -->
			  <div class="container-fluid"  >
                <!-- Start Page Content -->
                     <div class="row">
                   
                   
					
					 <div class="container-fluid">
                <!-- Start Page Content -->

					<center>		
					    <div class="col-lg-12">
                        <div class="card card-outline-primary" style="position: absolute; text-align: center; margin-left: 500px; width: 50vw; top: 20px; border: 2px solid black; border-radius: 20px; background: #fff; padding: 5px;">
                            <div class="card-header">
                                <h4 class="m-b-0 text-black">Add Government Data</h4>
                            </div>
                            <div class="card-body"  style="text-align: center; " >
                                <form action='' method='post'  enctype="multipart/form-data">
                                    <div class="form-body" style="text-align: center; "> 
                                    <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label class="control-label" style="position: absolute;  margin-left: 170px;">YEAR</label><br>
                                                    <input type="number" name="yeara" class="form-control" placeholder="YEAR"  style=" position: absolute; margin-left: 140px; text-align: center; width: 200px;" ><br>
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label class="control-label" style="position: absolute;  margin-left: 240px;">MONTH</label><br>
                                                    <input type="text" name="montha" class="form-control" placeholder="MONTH"  style=" position: absolute; margin-left: 220px; text-align: center; width: 200px;" ><br><br><br>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row p-t-20">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label class="control-label" style="position: absolute;  margin-left: 30px;">ZONE 1</label><br>
                                                    <input type="number" name="zone_1" class="form-control" placeholder="zone1" style=" position: absolute; text-align: center; width: 200px;" ><br>
                                                   </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label class="control-label" style="position: absolute;  margin-left: 170px;">ZONE 2</label><br>
                                                    <input type="number" name="zone_2" class="form-control" placeholder="zone2" style=" position: absolute; margin-left: 140px; text-align: center; width: 200px;" ><br>
                                                   </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label class="control-label" style="position: absolute;  margin-left: 280px;">ZONE 3</label><br>
                                                    <input type="number" name="zone_3" class="form-control" placeholder="zone3" style=" position: absolute; margin-left: 260px; text-align: center; width: 200px;"><br><br><br>
                                                   </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label class="control-label" style="position: absolute;  margin-left: 30px;">ZONE 4</label><br>
                                                    <input type="number" name="zone_4" class="form-control" placeholder="zone4" style=" position: absolute; text-align: center; width: 200px;"><br>
                                                   </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label class="control-label" style="position: absolute;  margin-left: 170px;">ZONE 5</label><br>
                                                    <input type="number" name="zone_5" class="form-control" placeholder="zone5" style=" position: absolute; margin-left: 140px; text-align: center; width: 200px;"><br>
                                                   </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label class="control-label" style="position: absolute;  margin-left: 280px;">ZONE 6</label><br>
                                                    <input type="number" name="zone_6" class="form-control" placeholder="zone6" style=" position: absolute; margin-left: 260px; text-align: center; width: 200px;"><br><br><br>
                                                   </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label class="control-label" style="position: absolute;  margin-left: 30px;">ZONE 7</label><br>
                                                    <input type="number" name="zone_7" class="form-control" placeholder="zone7" style=" position: absolute; text-align: center; width: 200px;"><br>
                                                   </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label class="control-label" style="position: absolute;  margin-left: 170px;">ZONE 8</label><br>
                                                    <input type="number" name="zone_8" class="form-control" placeholder="zone8" style=" position: absolute; margin-left: 140px; text-align: center; width: 200px;"><br>
                                                   </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label class="control-label" style="position: absolute;  margin-left: 280px;">ZONE 9</label><br>
                                                    <input type="number" name="zone_9" class="form-control" placeholder="zone9" style=" position: absolute; margin-left: 260px; text-align: center; width: 200px;"><br><br><br>
                                                   </div>
                                            </div>
                                        </div>
                                    <div class="form-actions">
                                    <input type="submit" name="submit" class="btn btn-success" value="save" button onclick='verify()'>
                                        <a href="records.php" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
		
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
			</main>
	
</body>
</html>

<?php

?>

<script>
function verify() {
  // Create a close button element
  var closeButton = document.createElement("button");
  closeButton.setAttribute("class", "close");
  closeButton.setAttribute("data-dismiss", "alert");
  closeButton.innerHTML = "X";

  // Add the close button to the alert message
  var alertMessage = alert("Added successful!");
  alertMessage.appendChild(closeButton);

  // Add an event listener to the close button to close the alert message
  closeButton.addEventListener("click", function() {
    alertMessage.close();
  });

  // Call the closeVerification function
  closeVerification();
}
</script>					
 <!-- All Jquery -->
 <script src="js/lib/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="js/lib/bootstrap/js/popper.min.js"></script>
<script src="js/lib/bootstrap/js/bootstrap.min.js"></script>

