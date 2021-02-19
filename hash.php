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
 /*   echo "test123";
    echo "<br>";
    echo password_hash("test123", PASSWORD_DEFAULT); */

    $input = "test123";
    $hashedPwdInDb = password_hash("test123", PASSWORD_DEFAULT);

    echo password_verify($input, $hashedPwdInDb)
?>


</body>
</html>