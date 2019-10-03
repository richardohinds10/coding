
<?php

include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		table {
	    border-collapse: collapse;
		width: 100%;
		color: #d96459;
		font-family: monospace;
		font-size: 25px;
		text-align:left;
		padding: 0;
		}
		
		th{
			background-color: #588c7e;
			color: white;
		}


	</style>
</head>
<body>
<table>

 <center> <h1> Extracting Data from Mysql Database</h1>  </center>
	<tr>
		<th> First Name </th>
		<th> Last Name </th>
		<th> E-mail </th>
		<th> Username </th>
	</tr>



<?php
   $sql = "SELECT * FROM login;";
   $result = $connect-> query($sql);
  

   if ($result->num_rows > 0) {
   	while ($row = $result-> fetch_assoc()) {
   		
   				 echo "<tr><td>". $row["user_first"] . "</td><td>" . $row["user_last"] . "</td><td>"
   				 . $row["user_email"] ."</td> <td>". $row["user_uid"] . "</td> <tr>"  ;



   		// echo "<tr><td>" $row["user_first"]  "</td><td>"


   		 // $row["user_last"] . "</td><td>". $row["user_email"] . "</td><td>". $row["user_uid"] . 
   	}
   		echo "</table>";
   }
   else {
   	echo " Result is 0";
   }

   $connect-> close();
?>


</body>
</html>


