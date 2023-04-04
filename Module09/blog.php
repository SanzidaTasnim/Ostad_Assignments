<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Blog Website | Blog</title>
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
   <div class="container mt-5">
      <div class="row">
         <div class="col-md-9">
            <div class="row">
               <div class="col-md-4">
                  <div class="card col-md-4 mb-5" style="width: 19rem;">
                     <img src="assets/blog-1.jpg" class="card-img-top" alt="blog_description">
                     <div class="card-body">
                        <h5 class="card-title">The Only Guide You Need</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text">
                           <small class="text-body-secondary">Last updated 15 mins ago</small>
                        </p>
                        <a href="single_post.php">
                           <button class="btn btn-sm btn-primary">Read More</button>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card col-md-4 mb-5" style="width: 19rem;">
                     <img src="assets/blog-2.jpg" class="card-img-top" alt="blog_description">
                     <div class="card-body">
                        <h5 class="card-title">The Only Guide You Need</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                        <p class="card-text">
                           <small class="text-body-secondary" style="padding-bottom: 11px;display: block;">Last updated 15 mins ago</small>
                        </p>
                        <a href="single_post.php">
                           <button class="btn btn-sm btn-primary">Read More</button>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card col-md-4 mb-5" style="width: 19rem;">
                     <img src="assets/blog-3.jpg" class="card-img-top" alt="blog_description">
                     <div class="card-body">
                        <h5 class="card-title">The Only Guide You Need</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text">
                           <small class="text-body-secondary">Last updated 15 mins ago</small>
                        </p>
                        <a href="single_post.php">
                           <button class="btn btn-sm btn-primary">Read More</button>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card col-md-4 mb-5" style="width: 19rem;">
                     <img src="assets/blog-1.jpg" class="card-img-top" alt="blog_description">
                     <div class="card-body">
                        <h5 class="card-title">The Only Guide You Need</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text">
                           <small class="text-body-secondary">Last updated 15 mins ago</small>
                        </p>
                        <a href="single_post.php">
                           <button class="btn btn-sm btn-primary">Read More</button>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card col-md-4 mb-5" style="width: 19rem;">
                     <img src="assets/blog-2.jpg" class="card-img-top" alt="blog_description">
                     <div class="card-body">
                        <h5 class="card-title">The Only Guide You Need</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up.</p>
                        <p class="card-text">
                           <small class="text-body-secondary" style="padding-bottom: 11px;display: block;">Last updated 15 mins ago</small>
                        </p>
                        <a href="single_post.php">
                           <button class="btn btn-sm btn-primary">Read More</button>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card col-md-4 mb-5" style="width: 19rem;">
                     <img src="assets/blog-3.jpg" class="card-img-top" alt="blog_description">
                     <div class="card-body">
                        <h5 class="card-title">The Only Guide You Need</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text">
                           <small class="text-body-secondary">Last updated 15 mins ago</small>
                        </p>
                        <a href="single_post.php">
                           <button class="btn btn-sm btn-primary">Read More</button>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <input class="form-control" id="input" type="text" placeholder="Search here...">
            <div class="row">
               <div class="col-lg-4">
                  <button class="btn btn-success mt-4 mb-4 btn-sm">Lifestyle</button>
               </div>
               <div class="col-lg-4">
                  <button class="btn btn-success mt-4 mb-4 btn-sm">Food</button>
               </div>
               <div class="col-lg-4">
                  <button class="btn btn-success mt-4 mb-4 btn-sm">Travel</button>
               </div>
               <div class="col-lg-4">
                  <button class="btn btn-success mb-4 btn-sm">Fashion</button>
               </div>
               <div class="col-lg-4">
                  <button class="btn btn-success mb-4 btn-sm">Photography</button>
               </div>
               <div class="col-lg-4">
                  <button class="btn btn-success mb-4 btn-sm">Personal</button>
               </div>
               <div class="col-lg-4">
                  <button class="btn btn-success mb-4 btn-sm">DIY Craft</button>
               </div>
               <div class="col-lg-4">
                  <button class="btn btn-success mb-4 btn-sm">Music</button>
               </div>
               <div class="col-lg-4">
                  <button class="btn btn-success mb-4 btn-sm">Business</button>
               </div>
               <div class="col-lg-4">
                  <button class="btn btn-success mb-4 btn-sm">Beauty</button>
               </div>
               <div class="col-lg-4">
                  <button class="btn btn-success mb-4 btn-sm">Book</button>
               </div>
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