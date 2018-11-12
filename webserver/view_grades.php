<?php
include 'connection.php';

	/* TODO: use query based on the UALink web application */
	mysqli_query($link,'SELECT * FROM tblGrades');
	if (mysqli_num_rows($result)){
		while($row[] = mysqli_fetch_assoc($result)){
			$json = json_encode($row);
		}
	}
	else {
		echo 'Result not found.';
	}
	/* Test output */
	echo $json;

	mysqli_close($link);
?>