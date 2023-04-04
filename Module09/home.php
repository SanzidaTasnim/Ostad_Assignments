<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Blog Website | Home</title>
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
   <?php include("header.php"); ?>

   <!---------
           Blog Section starts here
                                 ----------->
   <div class="container">
      <div class="row mt-5">
         <div class="card col-md-4 col-sm-6 mb-5" style="width: 25rem;">
            <img src="assets/blog-1.jpg" class="card-img-top" alt="blog_description">
            <div class="card-body">
               <h5 class="card-title">The Only Guide You Need</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <p class="card-text"><small class="text-body-secondary">Last updated 15 mins ago</small></p>
            </div>
         </div>
         <div class="card col-md-4 col-sm-6 mx-5 mb-5" style="width: 25rem;">
            <img src="assets/blog-2.jpg" class="card-img-top" alt="blog_description">
            <div class="card-body">
               <h5 class="card-title">A Step-By-Step Guide</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <p class="card-text"><small class="text-body-secondary">Last updated 32 mins ago</small></p>
            </div>
         </div>
         <div class="card col-md-4 col-sm-6 mb-5" style="width: 25rem;">
            <img src="assets/blog-3.jpg" class="card-img-top" alt="blog_description">
            <div class="card-body">
               <h5 class="card-title">The In-Depth Guide To…</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <p class="card-text"><small class="text-body-secondary">Last updated 30 mins ago</small></p>
            </div>
         </div>
         <div class="card col-md-4 col-sm-6 mb-5" style="width: 25rem;">
            <img src="assets/blog-1.jpg" class="card-img-top" alt="blog_description">
            <div class="card-body">
               <h5 class="card-title">The Only Guide You Need</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
         </div>
         <div class="card col-md-4 col-sm-6 mx-5 mb-5" style="width: 25rem;">
            <img src="assets/blog-2.jpg" class="card-img-top" alt="blog_description">
            <div class="card-body">
               <h5 class="card-title">The Only Guide You Need</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <p class="card-text"><small class="text-body-secondary">Last updated 10 mins ago</small></p>
            </div>
         </div>
         <div class="card col-md-4 col-sm-6 mb-5" style="width: 25rem;">
            <img src="assets/blog-3.jpg" class="card-img-top" alt="blog_description">
            <div class="card-body">
               <h5 class="card-title">The Only Guide You Need</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <p class="card-text"><small class="text-body-secondary">Last updated 9 mins ago</small></p>
            </div>
         </div>
         <div class="card col-md-4 col-sm-6 mb-5" style="width: 25rem;">
            <img src="assets/blog-1.jpg" class="card-img-top" alt="blog_description">
            <div class="card-body">
               <h5 class="card-title">The Only Guide You Need</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
         </div>
         <div class="card col-md-4 col-sm-6 mx-5 mb-5" style="width: 25rem;">
            <img src="assets/blog-2.jpg" class="card-img-top" alt="blog_description">
            <div class="card-body">
               <h5 class="card-title">The Only Guide You Need</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <p class="card-text"><small class="text-body-secondary">Last updated 5 mins ago</small></p>
            </div>
         </div>
         <div class="card col-md-4 col-sm-6 mb-5" style="width: 25rem;">
            <img src="assets/blog-3.jpg" class="card-img-top" alt="blog_description">
            <div class="card-body">
               <h5 class="card-title">The Only Guide You Need</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <p class="card-text"><small class="text-body-secondary">Last updated 10 mins ago</small></p>
            </div>
         </div>
      </div>
   </div>
   <!---------
           Footer Section starts here
                                 ----------->
   <?php include 'footer.php'; ?>
</body>
</html>