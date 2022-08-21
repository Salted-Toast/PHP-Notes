<?php
    /* ------------ Sessions ------------ */

    /*
    
    Sessions are a way to store information (in variables) to be used across multiple pages.
    Unlike cookies, sessions are stored on the server rather than a cookie of which is stored
    on the clients system.
    
    */

    session_start();
    
    if (isset($_POST['submit'])) {
        $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
        
        $password = $_POST['password'];

        if($username == 'Salted-Toast' && $password == 'password') {
            $_SESSION['username'] = $username;
            header('Location: /PHP-Notes/extras/dashboard.php');
        } else {
            echo 'Incorrect Login';
        }

    };

?>

<br><br>

<!-- Pass data through a form -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<div>
  <label for="username">Username: </label>
  <input type="text" name="username">
</div>
<br>
<div>
<label for="password">Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>