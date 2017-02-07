<html>
	<head>
		<title>MySQL Test</title>
	</head>
	<body>
		<?php
			$conn = new mysqli("localhost", "user1", "user*password", "test") or die('Cannot connect 
to database: ' . mysqli_connect_error());
			echo "Connected to MySQL test database.<br />";
			print(date("m.d.y"));
			echo "</br> Brandon Ellis";
		?>
	</body>
</html>