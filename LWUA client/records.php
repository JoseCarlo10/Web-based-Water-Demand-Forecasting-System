<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Records</title>
<?php include 'header.php' ?>
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
<div id="blocker"></div>
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
		<li class="active">
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
<!-- CONTENT -->
<section id="content">
		<!-- NAVBAR -->
		<nav>
		<h5 style=" position: absolute;  margin-left: 300px; font-size: 20px;">LWUA Water District</h5>
			 <!-- Profile -->
		</nav>	
<!-- NAVBAR -->
<!-- MAIN RECORDS HERE!-->
	<main>
<div id="parts ">
				<center><button id="ab" onclick="show_all_data()" style="border-radius: 5px; padding: 15px; margin-top: 1%; margin-left: -300px; background-color: lightblue;">ALL</button>
				<button id="rb" onclick="show_residential_data()" style="border-radius: 5px; padding: 15px; background-color: white;">RESIDENTIAL DATA</button>
				<button id="cb" onclick="show_commercial_data()" style="border-radius: 5px; padding: 15px; background-color: white;">COMMERCIAL DATA</button>
				<button id="gb" onclick="show_government_data()" style="border-radius: 5px; padding: 15px; background-color: white;">GOVERNMENT DATA</button></center>
				<a href="residential.php" ><button id="add" value ="manage" style="border-radius: 5px; padding: 15px; position: absolute; background-color: white; margin-top: -4%; margin-left: 1400px;">ADD DATA</button></a><br><br>			
				<div id="part_records_residential">
					
					<h1 style="background-color:#009EFF; width: 30vw; height: 100px; padding: 20px;  margin-top: -2%; margin-left: 650px; border-radius: 30px;"><center>RESIDENTIAL DATA</center></h1><hr>
					<center>
						
						
					</center>
					<br><br>
					<center>	
					<div class="container">

						<table class="table" style="margin-left: 145px; margin-top: -50px;  width: 80vw;" >
						<thead>
						<tr>
					
						<th scope="col">YEAR</th>
						<th scope="col">MONTH</th>
						<th scope="col">ZONE 1</th>
						<th scope="col">ZONE 2</th>
						<th scope="col">ZONE 3</th>
						<th scope="col">ZONE 4</th>
						<th scope="col">ZONE 5</th>
						<th scope="col">ZONE 6</th>
						<th scope="col">ZONE 7</th>
						<th scope="col">ZONE 8</th>
						<th scope="col">ZONE 9</th>
						<th scope="col">Delete</th>
						<th scope="col">Update</th>
						</tr>
						</thead>

						<?php
							include 'config.php';

							$pic = mysqli_query($db,"SELECT * FROM `residential`");
							while($row = mysqli_fetch_array($pic)){
							echo "<tr>
							<td>{$row['yeara']}</td>
							<td>{$row['montha']}</td>
							<td>{$row['zone_1']}</td>
							<td>{$row['zone_2']}</td>
							<td>{$row['zone_3']}</td>
							<td>{$row['zone_4']}</td>
							<td>{$row['zone_5']}</td>
							<td>{$row['zone_6']}</td>
							<td>{$row['zone_7']}</td>
							<td>{$row['zone_8']}</td>
							<td>{$row['zone_9']}</td>
							<td><button class='btn btn-sm btn-outline-danger remove_user' data-id='{$row["id"]}' >Delete</button></td>
							<td><a href='Updated_res.php? user_upd= $row[id]' class='btn btn-sm btn-outline-primary edit_user' style='padding: 8px;'>Update</a></td>
							<td></td>
							</tr>
									";
							}

							if(isset($_POST['eventa'])){
								$yeara = $_POST['yeara'];
								$montha= $_POST['montha'];
								$zone_1= $_POST['zone_1'];
								$zone_2= $_POST['zone_2'];
								$zone_3= $_POST['zone_3'];
								$zone_4= $_POST['zone_4'];
								$zone_5= $_POST['zone_5'];
								$zone_6= $_POST['zone_6'];
								$zone_7= $_POST['zone_7'];
								$zone_8= $_POST['zone_8'];
								$zone_9= $_POST['zone_9'];
										
								// insert data
									
								mysqli_query($db,"INSERT INTO `residential`(`yeara`,`montha`,`zone_1`,`zone_2`,`zone_3`,`zone_4`,`zone_5`,`zone_6`,`zone_7`,`zone_8`,`zone_9`) VALUES ('$yeara','$montha','$zone_1','$zone_2','$zone_3','$zone_4','$zone_5','$zone_6','$zone_7','$zone_8','$zone_9')");
								header("location:index.php");
							}
						?>
					</div>
						</table> <br>
					</center>
				</div>

				<div id="part_records_commercial">
				<h1 style="background-color:#009EFF; width: 30vw; height: 100px; padding: 20px;  margin-top: -2%; margin-left: 650px; border-radius: 30px;"><center>COMMERCIAL DATA</center></h1><hr>
					<center>
						
					</center>
						<!-- fetch data -->
						<br><br>
					<center>
						<div class="container">

						<table class="table" style="margin-left: 145px; margin-top: -50px;  width: 80vw;" >
								<thead>
									<tr>

									<th scope="col">YEAR</th>
									<th scope="col">MONTH</th>
									<th scope="col">ZONE 1</th>
									<th scope="col">ZONE 2</th>
									<th scope="col">ZONE 3</th>
									<th scope="col">ZONE 4</th>
									<th scope="col">ZONE 5</th>
									<th scope="col">ZONE 6</th>
									<th scope="col">ZONE 7</th>
									<th scope="col">ZONE 8</th>
									<th scope="col">ZONE 9</th>
									<th scope="col">Delete</th>
									<th scope="col">Update</th>
									</tr>
								</thead>
								
								<?php
							include 'config.php';

							$pic = mysqli_query($db,"SELECT * FROM `commercial`");
							while($row = mysqli_fetch_array($pic)){
							echo "
							<tr>
							<td>{$row['yeara']}</td>
							<td>{$row['montha']}</td>
							<td>{$row['zone_1']}</td>
							<td>{$row['zone_2']}</td>
							<td>{$row['zone_3']}</td>
							<td>{$row['zone_4']}</td>
							<td>{$row['zone_5']}</td>
							<td>{$row['zone_6']}</td>
							<td>{$row['zone_7']}</td>
							<td>{$row['zone_8']}</td>
							<td>{$row['zone_9']}</td>
							<td><button class='btn btn-sm btn-outline-danger remove_user1' data-id1='{$row["id"]}' >Delete</button></td>
							<td><a href='Updated_com.php? user_upd= $row[id]' class='btn btn-sm btn-outline-primary edit_user' style='padding: 8px;'>Update</a></td>
							<td></td>
							</tr>
									";
							}

							if(isset($_POST['eventa'])){
								$yeara = $_POST['yeara'];
								$montha= $_POST['montha'];
								$zone_1= $_POST['zone_1'];
								$zone_2= $_POST['zone_2'];
								$zone_3= $_POST['zone_3'];
								$zone_4= $_POST['zone_4'];
								$zone_5= $_POST['zone_5'];
								$zone_6= $_POST['zone_6'];
								$zone_7= $_POST['zone_7'];
								$zone_8= $_POST['zone_8'];
								$zone_9= $_POST['zone_9'];
										
								// insert data
									
								mysqli_query($db,"INSERT INTO `commercial`(`yeara`,`montha`,`zone_1`,`zone_2`,`zone_3`,`zone_4`,`zone_5`,`zone_6`,`zone_7`,`zone_8`,`zone_9`) VALUES ('$yeara','$montha','$zone_1','$zone_2','$zone_3','$zone_4','$zone_5','$zone_6','$zone_7','$zone_8','$zone_9')");
								header("location:index.php");
							}
						?>
						</div>
							</table> <br>
					</center>
				</div>

				<div id="part_records_government">
				<h1 style="background-color:#009EFF; width: 30vw; height: 100px; padding: 20px;  margin-top: -2%; margin-left: 650px; border-radius: 30px;"><center>GOVERNMENT DATA</center></h1><hr>
					<center>
						
					</center>
					<!-- fetch data -->
					<br><br>
					<center>
						<div class="container">

						<table class="table" style="margin-left: 145px; margin-top: -50px;  width: 80vw;" >
								<thead>
									<tr>

										<th scope="col">YEAR</th>
										<th scope="col">MONTH</th>
										<th scope="col">ZONE 1</th>
										<th scope="col">ZONE 2</th>
										<th scope="col">ZONE 3</th>
										<th scope="col">ZONE 4</th>
										<th scope="col">ZONE 5</th>
										<th scope="col">ZONE 6</th>
										<th scope="col">ZONE 7</th>
										<th scope="col">ZONE 8</th>
										<th scope="col">ZONE 9</th>
										<th scope="col">Delete</th>
										<th scope="col">Update</th>
									</tr>
								</thead>
								<?php
							include 'config.php';

							$pic = mysqli_query($db,"SELECT * FROM `government`");
							while($row = mysqli_fetch_array($pic)){
							echo "
							<tr>
							<td>{$row['yeara']}</td>
							<td>{$row['montha']}</td>
							<td>{$row['zone_1']}</td>
							<td>{$row['zone_2']}</td>
							<td>{$row['zone_3']}</td>
							<td>{$row['zone_4']}</td>
							<td>{$row['zone_5']}</td>
							<td>{$row['zone_6']}</td>
							<td>{$row['zone_7']}</td>
							<td>{$row['zone_8']}</td>
							<td>{$row['zone_9']}</td>
							<td><button class='btn btn-sm btn-outline-danger remove_user2' data-id2='{$row["id"]}' >Delete</button></td>
							<td><a href='Updated_gov.php? user_upd= $row[id]' class='btn btn-sm btn-outline-primary edit_user' style='padding: 8px;'>Update</a></td>
							<td></td>
							</tr>
									";
							}

							if(isset($_POST['eventa'])){
								$yeara = $_POST['yeara'];
								$montha= $_POST['montha'];
								$zone_1= $_POST['zone_1'];
								$zone_2= $_POST['zone_2'];
								$zone_3= $_POST['zone_3'];
								$zone_4= $_POST['zone_4'];
								$zone_5= $_POST['zone_5'];
								$zone_6= $_POST['zone_6'];
								$zone_7= $_POST['zone_7'];
								$zone_8= $_POST['zone_8'];
								$zone_9= $_POST['zone_9'];
										
								// insert data
									
								mysqli_query($db,"INSERT INTO `government`(`yeara`,`montha`,`zone_1`,`zone_2`,`zone_3`,`zone_4`,`zone_5`,`zone_6`,`zone_7`,`zone_8`,`zone_9`) VALUES ('$yeara','$montha','$zone_1','$zone_2','$zone_3','$zone_4','$zone_5','$zone_6','$zone_7','$zone_8','$zone_9')");
								header("location:index.php");
							}
						?>
						</div>
							</table> <br>
					</center>
				</div>
			</div>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


</body>
</html>

<?php
    
?>
<style>
.close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 5px;
  background-color: white;
  border: 1px solid red;
  cursor: pointer;
}
	</style>
<script>
$('.remove_user').click(function(){
				var id=$(this).attr('data-id');
				var _conf = confirm("Are you sure to delete this data ?");
				if(_conf == true){
					$.ajax({
						url:'del.php?user_del='+id,
						error:err=>console.log(err),
						success:function(resp){
							if(typeof resp != undefined){
								resp = JSON.parse(resp)
								if(resp.status == 1){
									alert(resp.msg);
									location.reload()
								}
							}
						}
					})
				}
			});
$('.remove_user1').click(function(){
				var id=$(this).attr('data-id1');
				var _conf = confirm("Are you sure to delete this data ?");
				if(_conf == true){
					$.ajax({
						url:'del1.php?user_del1='+id,
						error:err=>console.log(err),
						success:function(resp){
							if(typeof resp != undefined){
								resp = JSON.parse(resp)
								if(resp.status == 1){
									alert(resp.msg);
									location.reload()
								}
							}
						}
					})
				}
			});
$('.remove_user2').click(function(){
				var id=$(this).attr('data-id2');
				var _conf = confirm("Are you sure to delete this data ?");
				if(_conf == true){
					$.ajax({
						url:'del2.php?user_del2='+id,
						error:err=>console.log(err),
						success:function(resp){
							if(typeof resp != undefined){
								resp = JSON.parse(resp)
								if(resp.status == 1){
									alert(resp.msg);
									location.reload()
								}
							}
						}
					})
				}
			});

</script>
 <!-- All Jquery -->
 <script src="js/lib/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="js/lib/bootstrap/js/popper.min.js"></script>
<script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="functions.js"></script>
