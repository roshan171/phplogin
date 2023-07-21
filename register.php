<?php
 $conn=mysqli_connect("localhost", "root", "", "lemonmode_trackorder");

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
    if($password==$confirm_password){
$s="INSERT INTO `register` (`username`, `password`,`confirm_password`) VALUES ('$username','$password','$confirm_password')";
// echo $s; 
$sql=mysqli_query($conn,$s);
 if($sql){
        echo "<script>window.location.href ='login.php';</script>";
    }

}
else{
       echo "<script>alert('Confirm Right Password')";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <div class="card">
    <h2>Register Form</h2>
    <form action="" method="POST">
      <label for="username">Username</label>
      <input type="text" id="username" placeholder="Enter your username" name="username">

      <label for="password">Password</label>
      <input type="password" id="password" placeholder="Enter your password" name="password">

      <label for="confirm_password">Confim Password</label>
      <input type="password" id="confirm_password" placeholder="Enter your Confim Password" name="confirm_password">

      <button type="submit" id="submit" name="submit">Register</button>
    </form>
    <div class="switch">Already have an account? <a href="login.php" onclick="switchCard()">Login here</a></div>
  </div>

</div>





<script>
    function switchCard() {
  const loginCard = document.querySelector('.container .card:nth-child(1)');
  const registerCard = document.querySelector('.container .card:nth-child(2)');

  if (loginCard.style.display === 'none') {
    loginCard.style.display = 'block';
    registerCard.style.display = 'none';
  } else {
    loginCard.style.display = 'none';
    registerCard.style.display = 'block';
  }
}

</script>
</body>
</html>