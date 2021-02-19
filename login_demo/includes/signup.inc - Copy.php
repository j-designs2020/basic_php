<?php
if (isset($_POST['signup-submit'])) {
    include_once 'dbh.inc.php';

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['mail']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $passwordRepeat = mysqli_real_escape_string($conn, $_POST['pwd-repeat']);

    /*enter sql code here */
    $sql = "insert into users (user_first, user_last, user_email, user_uid, user_pwd) 
    values (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);


    if (empty($first) || empty($last) || empty($uid) || empty($email) || empty($pwd) || empty($passwordRepeat) ) {
        header("Location:  ../signup.php?error=empty");
        exit();
    }
    else { 
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
            header("Location: ../signup.php?signup=char");
            exit();
        }
        else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?signup=invalidemail&first=$first&last=$last&uid=$uid");
                exit();
            }
            else if (!($pwd == $passwordRepeat)){
                header("Location: ../signup.php?signup=passworderror&first=$first&last=$last&uid=$uid&email=$email");
                exit();
            }
            

            else {

    
                if (!mysqli_stmt_prepare($stmt,$sql)){
                    echo "sql error";
                }
                else {
                    mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd); 
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success");
                }
            }
        }
    }

}

?>



