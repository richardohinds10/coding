
<?php

include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th> First Name </th>
		<th> Last Name </th>
		<th> E-mail </th>
		<th> Username </th>
	</tr>

</table>

<?php
   $sql = "SELECT * FROM login;";
   $result = mysqli_query($connect, $sql);
  

   if ($result->num_rows > 0) {
   	while ($row = mysqli_fetch_assoc($result)) {
   		echo $row['user_uid']."<br>";
   		echo $row['user_first']."<br>";
   	}
   }
?>

</body>
</html>


