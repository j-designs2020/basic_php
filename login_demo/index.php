<?php
    /* include the header file */
    require 'header.php';
?>





<main>
    <center> 
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
     
        <h1>
            Jason's Login Demo </font>
        <h2>
        <?php
            if (isset($_SESSION['userId'])){
            echo 'You are logged in!';
            }
            else {
                echo 'You are not signed in.';
            }
        ?>
       </font> 
</main>


<?php 
    /* include the footer file */
    require 'footer.php';
?>