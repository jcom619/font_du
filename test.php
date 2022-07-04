<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
	<title>PHP form example</title>
	</head>
	<body>
		<?php
		// check if there are received the necessary data from the form
		if (isset($_POST['user']) && isset($_POST['age'])) {
		  // adds the values in variables, romoving white spaces from the beginning and the end of the values
			$user = trim($_POST['user']);
			$age = trim($_POST['age']);

		  // check if data are valid
		  if (strlen($user)>0 && is_numeric($age)) {
			echo $user. ' - '. $age. ' years old.';
		  }
		  else {   // if not all data are valid
			echo '<h4>Fill the form with valid data</h4>';
		  }
		}
		else {   // if no data from form
		  echo '<h4>Fill the form</h4>';
		}
		?>

		<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
		 User: <input type="text" name="user" /><br />
		 Age: <input type="text" name="age" /><br />
		 <input type="submit" value="Send" />
		</form>

	</body>
</html