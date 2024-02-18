<!DOCTYPE html>
<html lang="en">
<?php
DATE_DEFAULT_TIMEZONE_SET('Asia/Manila');
require("config.php");
error_reporting(~E_NOTICE);
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
if(isset($_POST['sub']))
{
$name=trim($_POST['name']);
$name=htmlspecialchars($_POST['name']);
$email=trim($_POST['email']);
$email=htmlspecialchars($_POST['email']);
$type=trim($_POST['type']);
$type=htmlspecialchars($_POST['type']);
$password=trim($_POST['password']);
$password=htmlspecialchars($_POST['password']);
$user_status='ofline';
$time_joined =date("Y-m-d H:i:s",strtotime("now"));
$date_joined =date("Y-m-d", strtotime("now"));

$encrypt = password_hash($password,PASSWORD_DEFAULT);
$sth=$db->prepare("INSERT into  users(name,email,type,password,user_status,time_joined,date_joined)VALUES(?,?,?,?,?,?,?)");
$sth->bindparam(1,$name,PDO::PARAM_STR);
$sth->bindparam(2,$email,PDO::PARAM_STR);
$sth->bindparam(3,$type,PDO::PARAM_STR);
$sth->bindparam(4,$encrypt,PDO::PARAM_STR);
$sth->bindparam(5,$user_status,PDO::PARAM_STR);
$sth->bindparam(6,$time_joined,PDO::PARAM_STR);
$sth->bindparam(7,$date_joined,PDO::PARAM_STR);
$success = '<div class="alert alert-success alert-dismissible fade show" style=" background: lightgreen; margin-top: 1%;">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Congrats!</strong> New User Added Successfully.</br></div>';
if($sth->execute())
{


                                }
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
	<link rel="stylesheet" href="styles/dashboard-styles.css">

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

</style>
	<title>LWUA</title>
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
				<a href="dash.php">
					<i class='bx dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="all_users.php">
					<i class='bx chart' ></i>
					<span class="text">All Users</span>    
				</a>
			</li>
			<li>
				<a href="activity.php">
					<i class='bx chart' ></i>
					<span class="text">Time Logs</span>    
				</a>
			</li>
            <li class="active">
				<a href="adding_user.php">
					<i class='bx chart' ></i>
					<span class="text">Add Users</span>    
				</a>
			</li>
		</ul>
		<div class="content">
                    <h2 class="title">ADMIN</h2>
                    <h2 class="title">ADMIN</h2>
					<h2 class="title">ADMIN</h2>    
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

			<a href="#" class="nav-link">ADMIN SITE</a>
			 <!-- Profile -->
			 
		</nav>
</section>		
		<!-- NAVBAR -->
	<br>
		<!-- MAIN -->
		<main>
		<style>
body{
    background:#F6F6F6;   
}
#ww{
position:relative;
width:1400px;
max-width:100%;
height:350px;
bottom:30px;
}
</style>

<!----container --->
<div class="container" style="margin-left: 450px; margin-top: 50px; border: 2px solid black; width: 900px; border-radius: 20px;">
<div class="row">
<div class="panel panel-default">
<div class="panel-body" style="color:transparent;">
		<?php  echo var_dump($_POST);
				echo $success; ?>
<form method="POST" id="register-form">
	
<div class="row p-t-20">
	<div class="col-md-6">
   <div class="form-group">
<label class="control-label" for="name">FULL NAME</label>
<input class="form-control input-sm" type="text" name="name" placeholder="JohnG***" />
</div></div><br>
<div class="col-md-6">
<label class="control-label" for="email">E- MAIL ADRESS</label>
<input class="form-control input-sm" type="email" name="email" id="email" placeholder="exmple@gmail.com" />
</div></div></div><br>
	<div class="row p-t-20">
	<div class="col-md-6">
<div class="form-group">
<label class="control-label" for="type">TYPE OF MEMBER</label>
<input class="form-control input-sm" type="text" name="type" placeholder="Administrator"/>
</div></div><br>
<div class="col-md-6">
<label class="control-label" for="password">PASSWORD</label>
<input class="form-control input-sm" type="password" name="password" placeholder="123***"/>
</div></div></div><br><br>

<!----submit button---->
<div class="row p-t-20">
<div class="col-md-6">
<div class="form-group"><br><br>
<input type="submit" name="sub" class="btn btn-success" value="save">
<a href="dash.php" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10">Cancel</a><br><br>

</div></div></div>
</div><!----container--->
</div><!----row--->
</div><!----column--->
</div><!----panel body--->

<script type="text/javascript">
$('document').ready(function()
{
$("#register-form").validate(
{
rules:{
name:{
required:true,
minlength:8
},
email:{
required:true,
email:true
},
type:{
required:true,
url:true
},
password:{
required:true,
minlength:8
},
/*repassword: {
					required: true,
					equalTo: '#password'
				},
				*/
		   },
		   messages:{
		   name:{
		   //required:'<p class="text-primary">'+"ENTER YOUR FULL NAME"+'</p>',
		   required:'<span class="glyphicon glyphicon-user text-primary">'+"ENTER YOUR FULL NAME"+'</span>',
		   minlength:'<span class="glyphicon glyphicon-remove text-danger">'+"ENTER VALID LENGTH OF 8 CHARACTERS"+'</span>',
		   },
		  
		   email:'<span class="glyphicon glyphicon-envelope text-danger">'+"ENTER YOUR EMAIL ADRESS"+'</span>',
		   
		  type:'<span class="glyphicon glyphicon-globe text-danger">'+"ENTER A VALID MEMBER",
		  
		  password:{
		   required:'<span class="glyphicon glyphicon-lock text-primary">'+"ENTER YOUR PASSWORD"+'</span>',
		   minlength:'<span class="glyphicon glyphicon-eye-open text-danger">'+"ENTER REQUIRED LENGTH OF 8 CHARACTERS LONG"+'</span>',
		   },
		   /*repassword:{
		   required:'<span class="glyphicon glyphicon-lock text-primary">'+"RE TYPE YOUR PASSWORD"+'</span>',
	equalTo:'<span class="glyphicon glyphicon-ban-circle text-danger">'+"PASSWORD DID NOT MATCH"+'</span>'
	},
	*/
	},
submitHandler:function(form)
{
form.submit()
}
});
});

</script>
</body>
</html>
 <!-- All Jquery -->
 <script src="js/lib/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="js/lib/bootstrap/js/popper.min.js"></script>
<script src="js/lib/bootstrap/js/bootstrap.min.js"></script>

