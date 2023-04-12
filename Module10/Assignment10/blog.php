<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 10 | Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body data-spy="scroll" data-target=".navbar">
   <!-----============ Navbar Part Starts Here =============------->
      <?php include "header.php";?>
   <!-----============ Navbar Part Ends Here ============-==------->
   <section id="text-part2">
        <div class="container mt-5">
            <div class="text-area2">
                <h3>Recent Posts.</h3>
                <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
            </div>
        </div>
      <div class="container">
         <div class="recent-main">
               <div class="recent-item">
                  <div class="recent-img">
                     <img src="images/post1.png" alt="post">
                     <div class="calendar">
                           <h3>30</h3>
                           <p>Sep.</p>
                     </div>
                     <div class="circle"></div>
                     <div class="circle1"></div>
                     <div class="circle2"></div>
                     <div class="circle3"></div>
                     <div class="circle4"></div>
                     <div class="recent-overlay"></div>
                  </div>
                  <div class="recent-text">
                     <h3>Lorem ipsum dolor sit amet.</h3>
                     <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                     <div class="recent-link">
                           <a href="#">read more</a>
                           <i class="fas fa-caret-right"></i>
                     </div>
                  </div>
               </div>
               <div class="recent-item margin-left">
                  <div class="recent-img">
                     <img src="images/post0.png" alt="post">
                     <div class="calendar">
                           <h3>30</h3>
                           <p class="calendar-para">Sep.</p>
                     </div>
                     <div class="recent-overlay"></div>
                  </div>
                  <div class="recent-text">
                     <h3>Lorem ipsum dolor sit amet.</h3>
                     <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                     <div class="recent-link">
                           <a href="#">read more</a>
                           <i class="fas fa-caret-right"></i>
                     </div>
                  </div>
               </div>
               <div class="recent-item margin-left">
                  <div class="recent-img">
                     <img src="images/post3.png" alt="post">
                     <div class="calendar">
                           <h3>30</h3>
                           <p>Sep.</p>
                     </div>
                     <div class="recent-overlay"></div>
                  </div>
                  <div class="recent-text">
                     <h3>Lorem ipsum dolor sit amet.</h3>
                     <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                     <div class="recent-link">
                           <a href="#">read more</a>
                           <i class="fas fa-caret-right"></i>
                     </div>
                  </div>
               </div>
               <div class="clr"></div>
         </div>
      </div>
   </section>
   <!-----============ Footer Part Starts Here =================------->
      <?php include("footer.php"); ?>
   <!-----============ Footer Part Ends Here ===================------->
   <script src="js/jquery-1.12.4.min.js"></script>
   <script src="js/waypoints.min.js"></script>
   <script src="js/jquery.counterup.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/slick.min.js"></script>
   <script src="js/lightbox.min.js"></script>
   <script src="js/custom.js"></script>
</body>
</html>

