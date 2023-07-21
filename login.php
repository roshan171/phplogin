<?php

if(isset($_POST['submit'])){
  session_start();
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $con=mysqli_connect("localhost", "root", "", "lemonmode_trackorder");
  // if($con){ echo "1"; } else{ echo "2";}
  $chk=mysqli_fetch_array(mysqli_query($con,"select count(*) as cn from `register` where `username`='$user' and `password`='$pass'"));
  print_r($chk);
  //$user="koushaljs@gmail.com";
  //$pass='Kous@3636';
  //  if($username==$user && $password == $pass){
  if($chk['cn']>0){
      // echo $password . $pass;
      
      $_SESSION['username'] = $user;
      $_SESSION['loggedIn'] = true;
      echo "<script>window.location ='index.php';</script>";
      //header("Location: https://lemonmode.com/admin/index.php");
      
    
  }else{
    echo "Username and password wrong....";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <div class="card">
    <h2>Login Form</h2>
    <form action="" method="POST">
      <label for="username">Username</label>
      <input type="text" id="username" placeholder="Enter your username" name="username">

      <label for="password">Password</label>
      <input type="password" id="password" placeholder="Enter your password" name="password">

      <button type="submit" id="submit" name="submit">Login</button>
    </form>
    <div class="switch">Don't have an account? <a href="register.php" onclick="switchCard()">Register here</a></div>
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