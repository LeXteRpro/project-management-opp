<!DOCTYPE html>
<html>
<head>
  <title>Home</title>  
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
   <link rel="stylesheet" type="text/css" href="css/vscustom.css">
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=&sensor=true">
    </script>
<script src="js/custom1.js"></script> 
  <link rel="stylesheet" href="css/bootstrap-theme.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/circle.css" />

  <link rel="stylesheet" href="css/scott.css" />

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
             <li><a href="index.php" title="dashboard">Dashboard</a></li>
             <li><a href="help.php" title="help">Help</a></li>
             <li><a href="public.php" title="login">Logout</a></li>
           </ul>
         </nav>
       </section>
       <section class="col-md-1">
         <img src="images/georgian-accelerator-green-white-200.png" class="leaf">
       </section>
     </section> <!-- Close Row -->

     <section class="row inner">
       <section class="col-md-8 dash">
  <h1>Dashboard</h1>
         <h3>General Help / Instructions</h3>

         <ol>
           <li>For viewing data, please input one or more postal codes into the search area below</li>
           <li>To add data, please enter postal code. Select factor ratings from the drop downs and click submit changes</li>
           <li>If you require further assistance or have a problem please click help/faq and submit a support ticket</li>
         </ol>

         <section class="row">

           <!-- Entire Left Grid-->
           <section class="col-md-12">
             <section class="row">

               <section class="col-md-2 circle-wrapper">

                <h3>Density /</h3>
                <h3>Land Use</h3>

                <div class="c100 p75 small big">
                 <span>75%</span>
                 <div class="slice">
                   <div class="bar"></div>
                   <div class="fill"></div>
                 </div>
               </div>

             </section> <!-- Close Column Inner -->

             <section class="col-md-2 circle-wrapper">

              <h3>Pedestrian</h3>
              <h3>Infrastructure</h3>

              <div class="c100 p10 big orange">
               <span>10%</span>
               <div class="slice">
                 <div class="bar"></div>
                 <div class="fill"></div>
               </div>
             </div>

           </section> <!-- Close Column Inner -->

           <section class="col-md-2 circle-wrapper">

            <h3>Bicycling</h3>
            <h3>Infrastructure</h3>

            <div class="c100 p25 big">
             <span>25%</span>
             <div class="slice">
               <div class="bar"></div>
               <div class="fill"></div>
             </div>
           </div>

         </section> <!-- Close Column Inner -->

         <section class="col-md-2 circle-wrapper">

           <h3>Parking</h3>
           <h3>Transit</h3>

           <div class="c100 p65 big orange">
             <span>65%</span>
             <div class="slice">
               <div class="bar"></div>
               <div class="fill"></div>
             </div>
           </div>

         </section> <!-- Close Column Inner -->

         <section class="col-md-2 circle-wrapper">

           <h3>Factor</h3>
           <h3>5</h3>


           <div class="c100 p89 big">
             <span>89%</span>
             <div class="slice">
               <div class="bar"></div>
               <div class="fill"></div>
             </div>
           </div>

         </section> <!-- Close Column Inner -->

         <section class="col-md-2">

         </section> <!-- Close Column Inner -->

         <section class="row">
           <section class="col-md-12 search">
             <div class="form">
               <form class="post-form">
                 <div class="form-inputs">
                  <label>Province</label>
                  <input type="text" placeholder="Province" class="input-details"/>
                </div>

                <div class="form-inputs">
                  <label>City</label>
                  <input type="text" placeholder="City" class="input-details"/>
                </div>
                <div class="form-inputs">
                  <label>Postal Code</label>
                  <input type="text" placeholder="Postal Code" class="input-details"/>
                </div>
                <div class="search-here-wra">
                  <h2>Find</h2>
                  <input type="text" placeholder="Search Database" class="search-here">
                  <fieldset class="submit-search">
                   <button>Submit Search</button>
                 </fieldset>
               </div>
             </form>
           </div>
         </section> <!-- Close Column-->



       </section> <!-- Close Row-->


       <section class="row">
         <div id="map_canvas" class="md-col-12">
         <script>initialize();</script>
         </div>
       </section>

     </section> <!-- Close Row Inner -->
     
     
   </section> <!-- Entire Left Grid Column Close-->



 </section> <!-- Close Inner Row-->

</section> <!-- Close Column -->

<section class="col-md-4 recent-submissions">
 <div class="trans">
   <table>

     <div class="thead-wrapper">

       <p id="username" class="info">OPP Admin</p>

       <div class="opp-crest-wrapper">
         <img src="images/OPP_Crest.png" class="opp-crest" alt="">
       </div>

       <p id="username" class="info">Police Auxillery</p>
       <p id="username" class="info">#45356</p>
     </div>


     <tfoot>
       <tr>
         <td>Notes</td>
         <td>Request Change</td>
       </tr>
     </tfoot>
     <tr>
       <th>Date</th>
       <th>Area</th>
     </tr>
     <tr>
       <td>03/06/2016</td>
       <td>L3V 5F8</td>
     </tr>
     <tr>
       <td>03/06/2016</td>
       <td>L3V 5F8</td>
     </tr>
     <tr>
       <td>03/06/2016</td>
       <td>L3V 5F8</td>
     </tr>
     <tr>
       <td>03/06/2016</td>
       <td>L3V 5F8</td>
     </tr>

   </table>


   <section class="row map-changes">
     <section class="col-md-12">

       <p><em>Please Enter the Postal Code. The factor being affected and the rating</em></p>

       <div class="postal-code">
         <label for="">Postal Code:</label>
         <input type="text">

         <button type="">Submit Code</button>

         <p>Postal Code needs verification</p>
         <br />
       </div>

       <br />
       <br />


       <div class="submit-code">
        <p>Verify Postal Code</p>
      </div>

      <div class="fieldsets fieldsets-hide">
       <fieldset>
         <label for="">Density and Land Use</label>
         <select name="density">
           <option value="default">Rating</option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
         </select>
       </fieldset>

       <fieldset>
         <label for="">Pedestrian Infrastructure</label>
         <select name="pedestrian">
           <option value="default">Rating</option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
         </select>
       </fieldset>

       <fieldset>
         <label for="">Bicyling Infrastructure</label>
         <select name="bicyling">
           <option value="default">Rating</option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
         </select>
       </fieldset>

       <fieldset>
         <label for="">Transit</label>
         <select name="transit">
           <option value="default">Rating</option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
         </select>
       </fieldset>

       <fieldset>
         <label for="">Other Factors</label>
         <select name="other-factors">
           <option value="default">Rating</option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
         </select>
       </fieldset>
       <div class="submit-changes">
         <button>Submit Changes</button>
       </div>
     </div> <!-- Close Fieldsets-->
     

     
   </section> <!-- Close Column-->
 </section> <!-- Close Row -->
</section><!-- Close Entire Right Section-->


</section> <!-- Close Row -->


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
<script src="js/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>    
</body>
</html>

<?php

// session_start();

// echo "Welcome" . $_SESSION['username'];

// if (isset($_POST['logout'])) {
//   session_start();
//   session_destroy();

//   header('location: login.php');
// }
?>