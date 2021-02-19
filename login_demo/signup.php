<?php
    /* include the header file */
    require 'header.php';
?>





<main>
    <!---Form for a user to fill out that signs them up for the website--->
    <center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    <h1>Signup</h1>
    <form action="includes/signup.inc.php" method="POST">

<?php
    if (isset($_GET['first'])){
            $first = $_GET['first'];
        echo '<input type="text" name"first" placeholer="First Name" value="'.$first.'"><br>';
        }
        else {
            echo '<input type="text" name="first" placeholder="First Name"><br>';


        }
        if (isset($_GET['last'])){
            $last = $_GET['last'];
        echo '<input type="text" name"last" placeholer="Last Name" value="'.$last.'"><br>';
        }
        else {
            echo '<input type="text" name="last" placeholder="Last Name"><br>';

        }
        if (isset($_GET['uid'])){
            $uid = $_GET['uid'];
        echo '<input type="text" name"uid" placeholer="User Name" value="'.$uid.'"><br>';
        }
        else {
            echo '<input type="text" name="uid" placeholder="User Name"><br>';

        }
        if (isset($_GET['mail'])){
            $email = $_GET['mail'];
        echo '<input type="text" name"mail" placeholer="E-Mail Address" value="'.$email.'"><br>';
        }
        else {
            echo '<input type="text" name="mail" placeholder="E-Mail Address"><br>';

        }
        ?>




    <input type="password" name="pwd" placeholder="Password"><br>
    <input type="password" name="pwd-repeat" placeholder="Repeat Password"><br> <br> <br>
    <button type="submit" name="signup-submit">Signup</button>
    </form> 

<?php

if (!isset($_GET['signup'])){
    exit(); 
}
else{
    $signupCheck = $_GET['signup']; 

    if ($signupCheck == "empty"){
        echo "<p>You did not fill in all fields!</p>";
        exit();
    }
    else if ($signupCheck == "char"){
        echo "<p>Please enter only letters for name.</p>";
        exit();
    }
    else if ($signupCheck == "invalidemail"){
        echo "<p>Please enter a valid email address.</p>";
        exit();
    }
    else if ($signupCheck == "passworderror"){
        echo "<p>Please make sure both passwords match.</p>";
        exit();
    }
    else if ($signupCheck == "nameerror"){
        echo "<p>The username is already taken.</p>";
        exit();
    }
    else if ($signupCheck == "success"){
        echo "<p id='p2'>You have successfully signed up!</p>";
        exit();
    }

}

?>

</main>

<?php 
    /* include the footer file */
    require 'footer.php';
?>