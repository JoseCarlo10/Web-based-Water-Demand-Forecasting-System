<?php
	require_once 'config.php';

	$db = mysqli_connect("localhost","root","","lwua");
// sending query
	$delete = mysqli_query($db,"DELETE FROM government WHERE id = '".$_GET['user_del2']."'") or die(mysqli_error());
	if($delete){
		echo json_encode(array("status"=>1,'msg'=>"Data successfully deleted."));
	}
	$db->close();
	  

?>