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
    /*sql SELECT ALL code in php file */
    $sql = "SELECT * FROM users WHERE user_first='Jane';";

    /* calling (query) the db from included file */ 
    $result = mysqli_query($conn, $sql); 

    $counter = 0; 
    
    /* if there is data then it shows something */ 
    $resultCheck = mysqli_num_rows($result);


    if ($resultCheck > 0){
        /* gets data from each row */
        while ($row = mysqli_fetch_assoc($result)){
            /* displays row user_uid */ 
            echo "UserName #", $row['user_id'], ": ", $row['user_uid'], "<br>";
            $counter +=1 ; 
        }

    } 
?>


</body>





</html>