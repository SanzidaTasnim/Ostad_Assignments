<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Blog Website | Post</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
          Post Section starts here
                                 ----------->
   <div class="container my-5">
         <div class="card">
            <div class="row">
               <div class="col-md-6">
                  <img class="card-img-top" src="assets/blog-1.jpg" alt="post_description">
               </div>     
               <div class="col-md-6">
                  <div class="card-body">
                     <h4 class="card-title" style="text-transform: capitalize">I traveled most weeks for a month and this is what I learnt</h4>
                     <p class="card-text" style="text-align: justify">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia saepe magnam molestiae eveniet illo quibusdam explicabo fugiat, accusantium dolore eligendi hic eos. Odio debitis natus nisi unde atque consectetur architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quam voluptates a accusantium at commodi omnis dolores. Voluptatum, odit consequatur! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci tenetur distinctio natus dolores facilis nostrum ex aliquid officiis sit mollitia?</p>
                     <p class="card-text">
                           <small class="text-body-secondary">Last updated 15 mins ago</small>
                     </p>
                     <p class="card-text">
                           <small class="text-body-secondary">Author: Colleen Hoover </small>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container mt-5">
            <div class="row">
               <div class="col-md-3">
                  <a href="https://www.facebook.com" target="_blank">
                     <button type="button" class="btn btn-outline-secondary">
                        <i class="fa-brands fa-facebook"></i>
                        Share on Facebook
                     </button>
                  </a>
               </div>
               <div class="col-md-3">
                  <a href="https://www.twitter.com" target="_blank">
                     <button type="button" class="btn btn-outline-secondary">   
                     <i class="fa-brands fa-twitter"></i>
                        Share on Twitter
                     </button>
                  </a>
               </div>
               <div class="col-md-3">
                  <a href="https://www.instagram.com" target="_blank">
                     <button type="button" class="btn btn-outline-secondary">
                        <i class="fa-brands fa-instagram"></i>
                        Share on Instagram
                     </button>
                  </a>
               </div>
               <div class="col-md-3">
                  <a href="https://www.linkedin.com" target="_blank">
                     <button type="button" class="btn btn-outline-secondary">
                        <i class="fa-brands fa-linkedin"></i>
                        Share on Linkedin
                     </button>
                  </a>
               </div>
            </div>
         </div>
   </div>
   <!---------
          Header Section starts here
                                 ----------->
   <?php include("footer.php"); ?>
</body>
</html>