<?php
    include_once 'dbh-ink.php';

    /*get data from form */

    /*real_escape_string makes sure database doesnt see data entry as code */

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


    /*enter sql code here */
    $sql = "insert into users (user_first, user_last, user_email, user_uid, user_pwd) 
    values ('$first', '$last', '$email', '$uid', '$pwd');
    ";

    /* calling (query) the db from included file */ 
    mysqli_query($conn, $sql); 

    header("Location: ../insert_data.php?signup=success");

?>