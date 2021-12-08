<?php require_once('config.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
  
  </style>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lifesy - home</title>
  <meta content="" name="We are Team of Goal Diggers. Each member of our Team is dedicated to providing the highest standard of care and Support to all the patients by recommending required solution according to symptoms of patient’s disease. We are recommending prescription & nearby hospitals according to patients location.">
  <meta content="" name="Welcome to Lifesy Make your health classy with lifesy">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpeg" rel="icon">
  <link href="assets/img/favicon.jpeg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link type="text/css" href="assets/css/style.css" rel="stylesheet">
     <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
 <!-- Template Main CSS File -->
 
     <!--jquery min-->
 
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 
  <!--chat bot-->
  <script>(function(w, d) { 
      w.CollectId = "60f000b094689f24ee2c161e"; 
      var h = d.head || d.getElementsByTagName("head")[0]; 
      var s = d.createElement("script"); 
      s.setAttribute("type", "text/javascript"); 
      s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); 
      h.appendChild(s); })
      (window, document);
    </script>
</head>

<body>
<?php
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phonenumber = $_POST['phone'];
$psw = $_POST['psw'];
$psw_repeat = $_POST['psw-repeat'];


$user_registration_query = "INSERT INTO loginform(Email,first_name,last_name,psw,psw_repeat,phone) VALUES('$email','$first_name','$last_name','$psw','$psw_repeat','$phonenumber')";

$user_registration_submit = mysqli_query($con,$user_registration_query) or die(mysqli_error($con));



echo "User successfully inserted";
?>
<div id="id02" class="modal2">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
              <form class="modal-content" action="./config.php" method="post">
                <div class="container">
                  
                  <h1>Sign Up</h1>
                  <p>Please fill in this form to create an account.</p>
                  <hr>
                  <label for="first_name"><b>First Name</b></label>
                  <input  class="form-control" type="text" placeholder="Enter Your first name" name="first_name" id="first_name"required>
                  <label>

                    <label for="last_name"><b>Last Name</b></label>
                    <input class="form-control" type="text" placeholder="Enter Your last name" name="last_name" id="last_name"required>
                    <label>
                  <label for="email"><b>Email</b></label>
                  <input class="form-control" type="text" placeholder="Enter Email" name="email" id="email"required>

                  <label for="phone"><b>Contact No.</b></label>
                  <input class=" form-control form-control" type="number" placeholder="Enter Your mobile No." name="phone" id="phone"required>
                  <label>
            
                  <label for="psw"><b>Password</b></label>
                  <input class="form-control" type="password" placeholder="Enter Password" id="psw"name="psw" required>
            
                  <label for="psw-repeat"><b>Repeat Password</b></label>
                  <input class="form-control" type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat"required>

                  
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                  </label>
                  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                  <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn btn btn-primary">Cancel</button>
                    <button type="submit" class="signupbtn btn btn-primary">Sign Up</button>
                  </div>
                </div>
              </form>
            </div>  
</body>
 <!-- Vendor JS Files -->
 <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</html>


