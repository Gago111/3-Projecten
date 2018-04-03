<?php
	include_once('server.php');

if(isset($_GET['delete']) )
{
  $id = $_GET['delete'];
  $sql = "DELETE FROM finances WHERE id = $id";
}
if ($db->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

header("refresh:0.0; url=index.php");

$db->close();

 ?>
