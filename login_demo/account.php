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
    
    

<?php
            include_once 'includes/dbh.inc.php';
 
            if (isset($_SESSION['userId'])){
                $place = $_SESSION['userId'];
                $sql = "SELECT * FROM users WHERE user_id=$place;";

                /* calling (query) the db from included file */ 
                $result = mysqli_query($conn, $sql); 
            
                
                /* if there is data then it shows something */ 
                $resultCheck = mysqli_num_rows($result);
            
            
                if ($resultCheck > 0){
                    /* gets data from each row */
                    while ($row = mysqli_fetch_assoc($result)){
                        /* displays row user_uid */ 
                        echo "<div id='d1'><h1><u><center>Account Details</center></u></h1><h3>USER ID: #", $row['user_id'], "<br><br>USER NAME: ", $row['user_uid'], "<br><br>EMAIL: ", $row['user_email'], "</font></div>";
    
                    }
            
                } 
              
                }



                else {
                    echo '<h3>You are not signed in.</font>';
                }
        

?>

</main>

<?php 
    /* include the footer file */
    require 'footer.php';
?>