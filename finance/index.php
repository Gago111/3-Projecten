<?php
	include_once('server.php');

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
  ?>

	<?php
	$sql = "SELECT * FROM finances WHERE userID=" .  $_SESSION['id'];
  // print_r($_SESSION);
	// exit;
	$result = $db->query($sql);
	 ?>




	 <!DOCTYPE HTML>
	 <html>
	 <head>
		 <link rel="stylesheet" href="style1.css">
	 <body>

		 <div id="logout">
		 <button><a href="login.php">Logout</button></a>
		  </div>

 <div class="border">
		 <form action="insert.php" method="post">
		     <p>
		         <label for="value"></label>
		         <input type="text" name="a_value" placeholder="Title"    id="value" required>
		     </p>
		     <p>
		      <label for="type"></label>
					<input checked="checked" name="a_type" type="radio" value="Spend" /> Spend
          <input name="a_type" type="radio" value="recieved" /> recieved

		     </p>

		     <p>
		       <label for="amount"></label>
		       <input type="text" name="a_amount" value="€" placeholder="Amount." id="amount" required>
		     <p>
		        <label for="to or from"></label>
						<input checked="checked" name="a_tofrom" type="radio" value="To" /> To
						<input name="a_tofrom" type="radio" value="From"/> From
		     </p>
				 <p>
					 <label for="date"></label>
		     <input type="date" name="a_date" id="submit">
				 <input type="submit" value="Submit" id="submit">
			 </p>
		 </form>



	   <h1>Manange finance</h1>
       <table class="users">
				 <tr>

	       <th>From or To</th>
	       <th>Spend/Recieved</th>
				 <th>Amount</th>
				 <th>To or From</th>
				 <th>Date</th>
	     </tr>
	       <?php
	     if($result->num_rows > 0){
	       while($row = $result->fetch_assoc()){
	         ?>
            <table class="users">
					     <tr>

	               <td><center><?php echo $row['a_value']; ?></td></center>
	               <td><?php echo $row['a_type']; ?></td>
								 <td><?php echo $row['a_amount']; ?></td>
								 <td><?php echo $row['a_tofrom']; ?></td>
								 <td><?php echo $row['a_date']; ?></td>
								 <td> <?php echo "<a href='edit.php?edit=$row[id]'>edit</a>";?></td>
								 <td><?php echo "<a href='delete.php?delete=$row[id]' onClick=\"return confirm('Are you sure you wanna delete this data?');\">delete</a><br />";?>
	             </tr>
            </div>
	         <?php
	       }
	     }
	   else
	   {

	      ?>
	      <tr>
	        <th colspan="2">No data</th>
	      </tr>
	      <?php
	}
	       ?>
	</table>
	</body>
	</html>
