<?php
include_once 'DB.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['firstname'];
	 $last_name = $_POST['lastname'];
	 $city_name = $_POST['cityname'];
	 $email = $_POST['email'];
	 $sql = "INSERT INTO details (firstname,lastname,cityname,email)
	 VALUES ('$first_name','$last_name','$city_name','$email')";
	 if (mysqli_query($db, $sql)) {
		echo "New record created successfully !";
     		 header("location:index.php");
                
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($db);
	 }
	 mysqli_close($db);
}
?>