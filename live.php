<?php include "../inc/dbinfo.inc"; ?>
<html>
<body>
<h1>DB Connection</h1>
<?php

  /* Connect to MySQL */
  $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
  if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
?>
</body>
</html>
