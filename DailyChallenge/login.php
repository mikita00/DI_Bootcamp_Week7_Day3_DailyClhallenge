<?php

/* 
Creating a session. For that we will use the "session_start()" function.

PS: the fonction must be the first code in the document so that it could run. otherwise the 
session will not be created
*/
session_start();

/*
Seeing that we want to redirect from the page to "welcome.php" page,  we will use a "header()" fonction
which will take the location (URL) of the second page as a parameter.

PS: for the header function it's good to use it before any Html tag , then we can be sure that it will run.

Here we are trying to be sure that all the form's field are filled and also the form is submitted
before to redirect to "welcome.php" page.
*/
if (!empty($_POST['name']) && !empty($_POST['password']) && isset($_POST['login'])){

    header('Location: welcome.php');
}

// Now let's create the form bellow
?>


<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<input type="text" name="name" placeholder="Username"> <br><br>
<input type="password" name="password" placeholder="Password"><br><br>
<input type="submit" value="Login" name = "login">
</form>


<?php

/*
Curiously the following code will be run before the one on top because the form's inputs have
to be set before to try to check if they are empty or not.
 */
if (isset($_POST['name'], $_POST['password'])){

    // Initializing the Session variables to the form's inputs values.
    $_SESSION['username'] = $_POST['name'];
    $_SESSION['password'] = $_POST['password'];

    }
    


?>