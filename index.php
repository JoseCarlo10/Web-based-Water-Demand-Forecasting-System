<?php
session_start();
DATE_DEFAULT_TIMEZONE_SET('Asia/Manila');
require_once('config.php');
if (isset($_SESSION['user'])!="")
{
  header("Location:LWUA client/index.php");
  //exit();
}
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
if(isset($_POST['login']))
{
$name=trim($_POST['name']);
$name=htmlspecialchars($_POST['name']);
$password=trim($_POST['password']);
$password=htmlspecialchars($_POST['password']);

$sth=$db->prepare("SELECT * FROM users WHERE name=:name");
$sth->execute(array(':name'=>htmlspecialchars($_POST['name'])));
$row=$sth->fetch(PDO::FETCH_ASSOC);
$count=$sth->rowCount();
if($count==1)
    {
if (password_verify(htmlspecialchars($_POST['password']) , $row['password']))
{
    $_SESSION['user'] = $row['user_id'] ;
    header('location:LWUA client/index.php');
    
$user_status="online";
    $stmt =$db->prepare('UPDATE users SET
user_status=:user_status WHERE user_id=:id');
$stmt->bindParam(':user_status',$user_status);
$stmt->bindParam(':id',$_SESSION['user']);
$stmt->execute(); 
  $time_loged =date("Y-m-d H:i:s",strtotime("now"));
  $stmt=$db->prepare('INSERT INTO activity(time_loged,user_id)VALUES(?,?)');
  $stmt->bindparam(1,$time_loged);
  $stmt->bindparam(2,$_SESSION['user']);
  $stmt->execute();
    }
    }
  else
  {
    $_SESSION['msg']='something went wrong';
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Sign in Form </title>
</head>

<body>
  
<div class="container">
<div class="row">
<div class="col-sm-6 col-sm-push-3" id="ww">
<?php
	if(isset($_SESSION['msg']))
	{
			?>
<?php
echo $_SESSION['msg'];
	}
?>
            <?php
			unset($_SESSION['msg']);
		?>  
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
 
        <form action="" method="post" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="name"/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" name="password"/>
          </div>
          <input type="submit" value="Login" name="login" class="btn solid" />
        </form>

      </div>
    </div>
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
        <h3>One of us ?</h3>
          <p>
            One of the client or staff in LOCAL WATER UTILITIES ADMINISTRATION(LWUA)
          </p>
        </div>
        <img src="img/log.svg" class="image" alt="" />
        <img src="img/wew.svg" class="image" alt="" />
      </div>

    </div>
  </div>

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="app.js"></script>
</body>

</html>