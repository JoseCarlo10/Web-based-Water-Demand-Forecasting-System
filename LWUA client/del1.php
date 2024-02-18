<?php
	require_once 'config.php';

	$db = mysqli_connect("localhost","root","","lwua");
// sending query
	$delete = mysqli_query($db,"DELETE FROM commercial WHERE id = '".$_GET['user_del1']."'") or die(mysqli_error());
	if($delete){
		echo json_encode(array("status"=>1,'msg'=>"Data successfully deleted."));
	}
	$db->close();
	  

?>