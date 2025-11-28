<?php
// login.php
session_start();
// if already logged in, send to home
if (isset($_SESSION['user'])) {

    // redirect to home.php
    header('Location: home.php');
    exit;
}
?>


<?php include('header.php');  ?>

 

<section class="login">
    <h2>Login Page</h2>



    <?php 
    
    // $form_error = $_GET["error"];

    // if ($form_error) {
    //     echo "<div class='error'>" . $form_error . "</div>";
    // }
    
    //echo $_GET["error"];?>

    <form action="validate.php" method="post">
    <Fieldset>
    <legend>LOGIN INFORMATION</legend><br>
    
    <div>
    <label for="username">Username:</label>
    <input type="text" name="username" placeholder="Insert username" required><br><br>
    </div>

    <div>
    <label for="password">Password: </label>
    <input type="password" name="password" placeholder=""><br><br>
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
    </Fieldset>
    </form>

<!-- 
    <form action="validate.php" method="post">
        <label>Username: <input type="text" name="username" required></label><br><br>
        <label>Password: <input type="password" name="password" required></label><br><br>
        <button type="submit">Login</button>
    </form> -->
</section>

    

 <?php include('footer.php'); ?>