<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>content1.php</title>
</head>
<body>
<h1>Content1.php</h1>
<section>		



</section>

<?php
	if ($_POST['username'] == null)
	{
	print_r('Human, you must enter your slave name.');
	?>
	<br>
	<a href = "http://web.engr.oregonstate.edu/~dinhd/Ass4/login.php"> Click Here to return to the login page </a>
	<?php
	}
	?>


</body>
</html>
