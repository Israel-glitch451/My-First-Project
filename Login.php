<?php 

  // Creating The Topic Of the Page
  if(isset($_POST['Submit'])){


      $firstName = $_POST['first_name'];
      $lastName = $_POST['last_name'];
      $Password = $_POST['email_name'];
      $Email = $_POST['password'];

      if($firsName == " " || empty($firstName){

            die("This field is required");
      }
      else{
          die("Move on to validate the last Name);

      }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body style="text-algin: center">

    <div class="container my-5">
          <form action="#" method="POST">
              <div>
                  <label for="first_name">First Name: </label>
                  <input type="text" name="first_name" placeholder="Enter Your First Name" >
              </div>
              <br>
            
              <div>
                  <label for="last_name">Last Name: </label>
                  <input type="text" name="last_name" placeholder="Enter Your Last Name" >
              </div>
              <br>
            
              <div>
                  <label for="email">Email Address: </label>
                  <input type="email" name="email" placeholder="Enter Your Email Address" >
              </div>
              <br>
            
              <div>
                  <label for="Password">Password </label>
                  <input type="password" name="age" placeholder="Enter Your Password" >
              </div>
              <br>
            
              <div>
                  <input type="submit" name="Submit"  value="Login" >
              </div>
              <br>
        </form>
    </div>
    
</body>
</html>
