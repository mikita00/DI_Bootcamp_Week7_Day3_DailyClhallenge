<?php

// This is the the page that will be diplayed after the redirection
//  Here we are starting a session in order to use the the datas of "login.php" session.
session_start();

/* An if statement for destroying the session and redirecting the page to the "login.php" page after  submitted
the "Logout" button which will be created in the following code.
*/
if  (isset($_POST['logout'])){
    session_destroy();
    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>

  <span>
  
  
  <h1>Welcome,
   <?php 
   /*  Here is the code for checking if the "login.php" session is set so that the session's username's value 
   could be displayed here after the html tag "Welcome, ". 
    
   */
   if (isset($_SESSION['username'], $_SESSION['password'])){
       $Username = $_SESSION['username']; // creating a variable initialized to the session's username's value;
       $Password = $_SESSION['password']; // creating a variable initialized to the session's password's value;
       echo $Username; // Now display the username
      
   }
   

    ?> 

   </h1>
  </span>

  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

  <input type="submit" value="Logout" name = "logout">
  </form>




</body>
</html>