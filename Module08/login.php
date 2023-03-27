<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
      <title>Login Form</title>
   </head>
   <body>
      <div class="container">
         <div class="row">
         <div class="col-lg-6">
         <h2 class="my-3">Login form</h2>
            <form action="loginIndex.php" method="post">
               <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input 
                     type="email" 
                     class="form-control" 
                     id="email" 
                     aria-describedby="emailHelp" 
                     name="email" 
                     placeholder="Enter your Email Address"
                     required 
                  />
               </div>
               <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input 
                     type="password" 
                     class="form-control" 
                     id="password" 
                     aria-describedby="emailHelp" 
                     name="password" 
                     placeholder="Enter your Password"
                     required 
                  />
               </div>
               <input type="submit" value="login" class="btn btn-primary btn-lg my-3" />
            </form>
         </div>
         </div>
      </div>
   </body>
</html>