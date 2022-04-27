<html>
	<head><title> Receiving Input </title></head>
	<body>
		<h3>Thank You: Got You Input.</h3>
		<?php 
			$email = $_POST["email"];
			$contact = $_POST["contact"];

			echo "Your email is $email <br />";
			echo "Contact preference is $contact";
		?>
	</body>
</html>