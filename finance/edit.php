<?php
	include_once('server.php');

	if(isset($_GET['edit']))
	{
		$id = $_GET['edit'];
		$res= mysqli_query($db,"SELECT * FROM finances WHERE id=$id");
		$row= mysqli_fetch_array($res);
	}

	if(isset($_GET['id']))
	{
		$newText = $_GET['a_value'];
		$id	 = $_GET['id'];
		$sql     = "UPDATE finances SET a_value='$newText' WHERE id=$id";
		$res 	 = mysqli_query($db,$sql)
                                    or die("Could not update".mysqli_error($db));
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}

	if(isset($_GET['id']))
	{
		$newTitle = $_GET['a_type'];
		$a_id 	 = $_GET['id'];
		$sql     = "UPDATE finances SET a_type='$newTitle' WHERE id=$id";
		$res 	 = mysqli_query($db,$sql)
                                    or die("Could not update".mysqli_error($db));
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
?>
<form action="edit.php" method="GET">
To/From: <textarea cols="20" rows="1"  name="a_value"><?php echo $row[1];?></textarea>
<input type="hidden" name="id" value="<?php echo $row[0];?>">

Value: <textarea cols="20" rows="1" name="a_type"><?php echo $row[2];?></textarea>
<input type="hidden" name="id" value="<?php echo $row[0];?>">
<input type="submit" value=" Update "/>



</form>
<?
