<!DOCTYPE html>
<html>
<head>
  <title>Public Pages</title>  
  <link rel="stylesheet" href="css/bootstrap-theme.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/circle.css" />
  <link rel="stylesheet" href="css/public.css"/>
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


         <div class="public">
           <img class="displayed" src="images/Ontario_Provincial_Police_Logo.svg.png" class="opp">
           
           <h2>This is a site made for the Ontario Provincal Police</h2>
           <p>
            This site is for authorized people only. 
                   </p>
                   <p>Login using your Username and Password</p>
          <div class="login">
           <!-- Form that provides the login fields-->
           <form method="post" action="validate.php">
             <div>
               <label for="email">Username</label>
               <input name="email" placeholder="Username" />
             </div>
             <div>
               <label for="pass">Password:</label>
               <input name="pass" type="password" placeholder="Password" />
             </div>
             <button type="">Login</button>
           </form>
              <a hef="">Forgot Password?</a>

          </div>
                  
                 
         </div>


     </div> <!-- Close Page Wrap-->

   </section>
 </div> <!-- Close Row -->






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