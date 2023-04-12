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
   <!---------
          Header Section starts here
                                 ----------->
   <?php include "header.php";?>

   <!---------
          Contact Section starts here
                                 ----------->
   <div class="clr"></div>
   <div class="container" style="margin-top: 50px">
      <form action="script.php" method="post" >
         <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
         </div>
         <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" >
         </div>
         <div class="mb-3">
            <label for="number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="number" name="number">
         </div>
         <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
         </div>
         <button type="submit" class="btn btn-primary">Send Message</button>
      </form>
      <div class="clr"></div>
   </div>

   <!---------
           Footer Section starts here
                                 ----------->
   <?php include "footer.php";?>

   <script src="js/jquery-1.12.4.min.js"></script>
   <script src="js/waypoints.min.js"></script>
   <script src="js/jquery.counterup.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/slick.min.js"></script>
   <script src="js/lightbox.min.js"></script>
   <script src="js/custom.js"></script>
</body>
</html>