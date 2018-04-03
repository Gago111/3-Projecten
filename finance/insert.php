<?php
	include_once('server.php');

if($db === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}

$a_value = mysqli_real_escape_string($db, $_REQUEST['a_value']);
$a_type = mysqli_real_escape_string($db, $_REQUEST['a_type']);
$a_amount = mysqli_real_escape_string($db, $_REQUEST['a_amount']);
$a_tofrom = mysqli_real_escape_string($db, $_REQUEST['a_tofrom']);
$a_date = mysqli_real_escape_string($db, $_REQUEST['a_date']);
$userID = $_SESSION['id'];

$sql = "INSERT INTO finances (a_value, a_type, a_amount, a_tofrom, a_date, userID)  VALUES ('$a_value', '$a_type', '$a_amount', '$a_tofrom','$a_date',$userID)";


if(mysqli_query($db, $sql)){


  header("refresh:0.0; url=index.php");

}else{
  echo "ERROR: Could not execute $sql. " . mysqli_error($db);
}

mysqli_close($db);
?>
