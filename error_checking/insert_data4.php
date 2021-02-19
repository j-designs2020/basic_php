<!DOCTYPE html>
<html>
<head>
<title>Jason's PHP Training </title>
</head>



<body>

<form action="includes/signup-ink4.php" method="POST">
    
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

    ?>
  
    <input type="text" name="email" placeholder="E-Mail">
    <br>
    <input type="password" name="pwd" placeholder="Password">
    <br>
    <button type="submit" name="submit">Sign Up</button>
</form>
<?php 
  /*  $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullUrl, "signup=empty") == true ) {
        echo "<p>You did not fill in all fields!";
    }
    else if (strpos($fullUrl, "signup=char") == true ) {
        echo "<p>Please enter only letters.";
    }
    else if (strpos($fullUrl, "signup=invalidemail") == true ) {
        echo "<p>Please enter a valid email address";
    }
    else if (strpos($fullUrl, "signup=success") == true ) {
        echo "<p>You have successfully signed up!";
    }*/

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
            echo "<p>Please enter only letters.</p>";
            exit();
        }
        else if ($signupCheck == "invalidemail"){
            echo "<p>Please enter a valid email address</p>";
            exit();
        }
        else if ($signupCheck == "success"){
            echo "<p>You have successfully signed up!</p>";
            exit();
        }
    }
?>
</body>





</html>