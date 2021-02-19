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
    values (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)){
        echo "sql error";
    }
    else {
        mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd); 
        mysqli_stmt_execute($stmt);
    }

    header("Location: ../insert_data.php?signup=success");

?>