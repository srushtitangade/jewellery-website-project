<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="style1.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">User Details</div>
    <p>Please enter you details</p>
    <div class="content">
      <form action="process.php" method = "POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name = "Name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name = "phoneNumber" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Email Id</span>
            <input type="text" name = "Email" placeholder="Enter your Email Id" required>
          </div>
		  <div class="input-box">
            <span class="details">Date of Birth</span>
            <input type="text" name = "dateOfBirth" placeholder = "Enter your Date of Birth" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name = "Address" placeholder = "Enter your Address" required>
          </div>
        </div>
        <div class="button">
          <input type="submit"name = "submit" value="Register">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
