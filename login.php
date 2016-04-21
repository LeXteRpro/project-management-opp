<!DOCTYPE html>
<html>
<head>
  <title>Login</title>  
  <link rel="stylesheet" href="css/bootstrap-theme.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/main.css" />

</head>
<body>

  <div class="row outer">
   <div class="col-md-1"></div>
   <div class="col-md-10 inner"> 

     <section class="row nav-whole">
       <section class="col-md-1">

          <img src="images/opp_logo.png" class="opp-logo"> 

       </section> <!-- Close Column-->

       <section class="col-md-10">
         <nav>
           <ul class="navbar-right">
             <li><a href="index.php" title="login">Dashboard</a></li>
             <li><a href="login.php" title="login">Login</a></li>
           </ul>
         </nav>
       </section>
       <section class="col-md-1">
         <img src="images/georgian-accelerator-green-white-200.png" class="leaf">
       </section>
     </section> <!-- Close Row -->

     <div class="row">
      <section  class="col-md-12">
        <div class="page-wrap">
          <div class="login">

            <h1>Login</h1>
            <p>Login using your Username and Password</p>
            <div class="login">

              <form method="post" name="login">
                <div>
                  <label for="username">Username</label>
                  <input type="text" name="username" placeholder="Username" />
                </div>
                <div>
                  <label for="password">Password:</label>
                  <input type="text" name="password" placeholder="Password" />
                </div>
                <input type="submit" name="login" value="Log Me in!"></input>
              </form>
            </div>
          </div>
        </div> <!-- Close Row -->
      </section>
      <br />
      <a href="">Forgot Password?</a>
    </div>

    <div class="row footer">
     <div class="col-md-12">
       <footer>
        <p>
          &copy; Copyright 2016. Inovify All rights reserved. | <a href="/info/">Info</a> | <a href="/privacy-policy/">Privacy Policy</a>
        </p>
      </footer>
    </div> <!-- Close Column-->
  </div> <!-- Close Row -->

</div><!-- Close Col-->

<div class="col-md-1 outer"></div>

</div><!-- Close Row-->



<div class="row">
 <div class="col-md-1"></div>
 <div class="col-md-10 footer">

 </div> <!-- Close Column-->
 <div class="col-md-1"></div>
</div><!-- Close Row-->

<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/npm.js"></script>
</body>
</html>

<?php 

session_start();

$conn = new PDO('mysql:host=localhost;dbname=opp', 'root', '');

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = $conn->prepare("SELECT COUNT('id') FROM 'users' WHERE '$username' AND 'password' = '$password'");
  $query->execute();

  $count = $query->fetchColumn();

  if ($count == "1") {
    $_SESSION['username'] = $username;

    header('location: index.php');
  }
}

?>
