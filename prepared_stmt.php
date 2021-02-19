<?php
    /* include connecting database file */
    include_once 'includes/dbh-ink.php';
?>


<!DOCTYPE html>
<html>
<head>
<title>Jason's PHP Training </title>
</head>



<body>



<?php
    $data = "Admin";
    /*Template */
    /*sql SELECT ALL code in php file */
    $sql = "SELECT * FROM users WHERE user_uid=?;";
    /*Create prepared statement*/
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "sql fail";
    }
    else {
        /*binds parameters to placeholer */
        mysqli_stmt_bind_param($stmt, "s", $data);
        // run arameters inside database
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)){
            echo $row['user_uid'], "<br>";
        }
    }
 
   

    


    
?>


</body>





</html>