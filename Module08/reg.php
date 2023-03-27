<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   <title>Registration Form</title>
</head>
<body>
   <div class="container">
   <h1 class="my-3">Registration Form</h1>
      <div class="row col-md-6">
      <form action="index.php" method="post">
         <div class="mb-3">
            <label for="username" class="form-label">First Name</label>
            <input 
               type="text" 
               class="form-control" 
               id="username"
               name="fname" 
               placeholder="Enter your first name"
               required 
            />
         </div>
         <div class="mb-3">
            <label for="username" class="form-label">Last Name</label>
            <input 
               type="text" 
               class="form-control" 
               id="username"
               name="lname" 
               placeholder="Enter your last name"
               required 
            />
         </div>
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
               placeholder="Password"
               required 
            />
         </div>
         <div class="mb-3">
            <label for="password" class="form-label">Confirm Password</label>
            <input 
               type="Password" 
               class="form-control" 
               id="password" 
               aria-describedby="emailHelp" 
               name="confirm_password" 
               placeholder="Re-enter your password"
               required 
            />
         </div>
         <input type="submit" value="Register" class="btn btn-primary btn-lg mt-3">
      </form>
      </div>
   </div>
</body>
</html>
