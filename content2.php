<?php
session_start();
//header('Content-Type: text/plain');
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>content2.php</title>
</head>
<body>
<h1>Content2.php</h1>

<section>
	<?php

	

		if ($_POST['username'] == null)
		{
		print_r('Human, you must enter your slave name. ');
		?>

	<br>
	<a href = "http://web.engr.oregonstate.edu/~dinhd/Ass4/login.php"> Click Here to return to the login page </a>

		<?php
		}
		else
		{	// this section of code was copied from the lecture
			if(session_status() == PHP_SESSION_ACTIVE)
			{
				if(isset($_POST['username']))
				{
					$_SESSION['username'] = $_POST['username'];
				}

				if(!isset($_SESSION['visits']))
				{
					$_SESSION['visits'] = 0;
				}

				$_SESSION['visits']++;
				echo "Hi $_SESSION[username], you have visited this page $_SESSION[visits] times. \n";
			}
		}
	?>

	<br>
	<a href = "http://web.engr.oregonstate.edu/~dinhd/Ass4/content1.php"> Click Here to go to the content1.php page </a>	
</section>

</body>
</html>
