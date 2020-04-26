<?php
include('lib/common.php');

if(isset($_POST["submit"])){
	$date = date('Y-m-d H:i:s');
	$province = trim($_POST["province"]);

	$sql = "INSERT INTO `fatalities`(`province`, `date`) VALUES ('".$province."','".$date."')";

	if ($conn->query($sql) == TRUE) {
		$success = 'New fatality created successfully.';
	} else {
		$error = "'Error: " . $sql . "<br>" . $conn->error."'";
	}

	$conn->close();
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<link href="css/styles.css" rel="stylesheet" />
</head>
<body>

</head>
<body>
<div class="container">

  <ul class="navbar">
    <li><a href="/add-case.php">Add Case</a></li>
    <li><a href="#">Add Fatality</a></li>
  </ul>

	<?php
		if (isset($success)) {
			echo '<div class="txt-center success">'.$success.'</div>';
		}
		if (isset($error)) {
			echo '<div class="txt-center error">'.$error.'</div>';
		}
	?>
	<div class="add-new-form">
		<h3 class="txt-center">Add New Death</h3>
		<form name="myForm" onsubmit="return validateForm()" method="post">
		  	<div class="col-md-12 txt-center">
		  		<label for="province">Province</label>
		    	<input class="control" type="text" id="province" name="province" required>
		  	</div>
		  	
		  	<div class="txt-center">
		  		<input type="submit" value="Submit" name="submit" onclick="myFunction()">
		  	</div>
		    
		</form>
	</div>
</div>

</body>
</html>
