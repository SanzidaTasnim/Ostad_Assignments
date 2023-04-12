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
   <section id="about">
      <div class="common d-flex justify-content-center mt-5">
         <div class="common-head align-self-center text-center">
            <h3>What we do</h3>
            <h2>story about us</h2>
         </div>
      </div>
      <div class="about-text">
         <div class="container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
         </div>
      </div>
      <div class="about-image">
         <div class="container">
            <div class="row">
            <div class="col-lg-4 col-sm-6">
               <div class="about-item">
                  <div class="about-item-img">
                  <img src="images/about1.jpg" alt="about-img">
                  <div class="about-item-img-overlay d-flex justify-content-center">
                     <div class="about-item-icon align-self-center text-center">
                        <a href="#">
                        <i class="fas fa-user-friends"></i>
                        </a>
                        <h4>super team</h4>
                     </div>
                  </div>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-sm-6">
               <div class="about-item">
                  <div class="about-item-img">
                  <img src="images/about2.jpg" alt="about-img">
                  <div class="about-item-img-overlay d-flex justify-content-center">
                     <div class="about-item-icon align-self-center text-center">
                        <a href="#">
                        <i class="fas fa-user-friends"></i>
                        </a>
                        <h4>super team</h4>
                     </div>
                  </div>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-sm-6 m-sm-auto">
               <div class="about-item">
                  <div class="about-item-img">
                  <img src="images/about3.jpg" alt="about-img">
                  <div class="about-item-img-overlay d-flex justify-content-center">
                     <div class="about-item-icon align-self-center text-center">
                        <a href="#">
                        <i class="fas fa-user-friends"></i>
                        </a>
                        <h4>super team</h4>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
            </div>
         </div>
      </div>
   </section>
   <!-----============ Footer Part Starts Here =================------->
      <?php include "footer.php";?>
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