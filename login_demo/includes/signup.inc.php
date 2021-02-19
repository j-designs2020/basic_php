<?php
//check if input comes from form
if (isset($_POST['signup-submit'])) {
    //include file with database connect information
    include_once 'dbh.inc.php';

    //gets input from form
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['mail']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $passwordRepeat = mysqli_real_escape_string($conn, $_POST['pwd-repeat']);

    

    //check if any fields are empty
    if (empty($first) || empty($last) || empty($uid) || empty($email) || empty($pwd) || empty($passwordRepeat) ) {
        header("Location:  ../signup.php?signup=empty");
        exit();
    }
    //check if anything other than letters are entered for name
    else if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
            header("Location: ../signup.php?signup=char");
            exit();
    }
    //built in php function to test for a valid email
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?signup=invalidemail&first=$first&last=$last&uid=$uid");
                exit();
    }
    //checks if both passwords match
    else if (!($pwd == $passwordRepeat)){
                header("Location: ../signup.php?signup=passworderror&first=$first&last=$last&uid=$uid&mail=$email");
                exit();
    }
            
    //if there are no errors, starts the db functions
    else  {

      $sql = "SELECT user_uid FROM users WHERE user_uid=?;";
      $stmt = mysqli_stmt_init($conn);

        //checks if there is an error writing to the db
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../signup.php?signup=sqlerror");
            exit(); 
        }

        else {
            mysqli_stmt_bind_param($stmt, "s", $uid);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

           
            if ($resultCheck > 0 ){
                header("Location: ../signup.php?signup=nameerror");
                exit(); 

            }

            else{
                //enter sql code here (variables to write data to the db)
                $sql = "insert into users (user_first, user_last, user_email, user_uid, user_pwd)  values (?, ?, ?, ?, ?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                    header("Location: ../signup.php?signup=sqlerror");
                    exit(); 
                }
                else{

                //Hash password for security (stores as hashed cryptography in db)
                $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

                
                
            
                //actually writes data to the db
                mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $hashedPwd); 
                mysqli_stmt_execute($stmt);
                header("Location: ../signup.php?signup=success");
                exit();
                }
            }
        }
    }
    
    //closes MySql
    mysqli_stmt_close($stmt);
    mysqli_close($conn); 
    

}
else{
    header("Location: ../signup.php");
    exit();
}

?>



