
<?php
include "dbConn.php"; // Using database connection file here
	
	if(isset($_POST['submit']))
	{		
		$fullname = $_POST['Name'];
		$phoneNumber = $_POST['phoneNumber'];
		$productId = $_POST['ProductId'];

			$delete = mysqli_query($db,"DELETE FROM `userdetails` WHERE `ProductId`='$productId' AND `Name`='$fullname';");
	
		if(!$delete)
		{
			echo '<script>alert("Something went wrong, please try again")</script>';
		}
		else
		{
			echo '<script>alert("Your Order Has Been Cancelled.You will receive your refund with 2 to 3 business days")</script>';
			$url='http://localhost/jewellery-website-main new/index.html';
			echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
		}
	}
	
	mysqli_close($db); // Close connection
?>