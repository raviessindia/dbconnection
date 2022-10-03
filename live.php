<?php include "../inc/dbinfo.inc"; ?>
<html>
<body>
<h1>DB Connection</h1>
<?php

  /* Connect to MySQL */
  $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
  if (!$connection) {
    die("Maintenance " . mysqli_connect_error());
	}
	echo "Well Done";
?>
</body>
</html>
