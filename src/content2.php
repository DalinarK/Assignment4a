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

	

		if ($_SESSION['username'] == null)
		{
		print_r('Human, you must enter your slave name. ');
		?>

	<br>
	<a href = "http://web.engr.oregonstate.edu/~dinhd/Ass4/login.php"> Click Here to return to the login page </a>

		<?php
		}
		else
		{
			echo "Hi $_SESSION[username], you have visited this page $_SESSION[visits] times. \n";
			echo "<br>";
			echo "<a href = 'http://web.engr.oregonstate.edu/~dinhd/Ass4/content2.php'> Click Here to go to the content2.php page </a>";
		
		}
	?>
</section>

</body>
</html>
