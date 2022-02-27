
<?php
include "dbConn.php"; // Using database connection file here
	
	if(isset($_POST['submit']))
	{		
		$fullname = $_POST['Name'];
		$address = $_POST['Address'];
		$phoneNumber = $_POST['phoneNumber'];
		$Date = $_POST['dateOfBirth'];
		$email = $_POST['Email'];
		$productId = $_POST['ProductId'];
		$Price1 = 'Rs.130000';

			$insert = mysqli_query($db,"INSERT INTO `userDetails`(`Name`, `Address`,`Email`,`Phone Number`, `Date Of Birth`,`productId`,`Price`) VALUES ('$fullname','$address','$email','$phoneNumber','$Date','$productId','$Price1')");
	
		if(!$insert)
		{
			echo '<script>alert("Something went wrong, please try again")</script>';
		}
		else
		{
			echo '<script>alert("Order Has Been Placed Successfully. Your total amount to be paid is : Rs.130000")</script>';
			$url='http://localhost/jewellery-website-main new/index.html';
			echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
		}
	}
	
	mysqli_close($db); // Close connection
?>