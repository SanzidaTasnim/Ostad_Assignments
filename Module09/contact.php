<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Blog Website | Contact</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&display=swap" rel="stylesheet">
   <style>
      body{
         font-family: 'Open Sans', sans-serif;
      }
   </style>
</head>
<body>
   <!---------
          Header Section starts here
                                 ----------->
   <?php include "header.php";?>

   <!---------
          Contact Section starts here
                                 ----------->
   <div class="container mt-3">
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
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject">
         </div>
         <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
         </div>
         <button type="submit" class="btn btn-primary">Send Message</button>
      </form>
   </div>

   <!---------
           Footer Section starts here
                                 ----------->
   <?php include 'footer.php';?>
</body>
</html>