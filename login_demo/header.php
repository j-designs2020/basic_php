<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="This is Jason's PHP/MySQL training log-in system.">
<title>Jason's PHP Training Demo </title>
<link rel="stylesheet" href="css/style.css">
</head>



<body>

</body>


<header>

    <nav>
        
           
        <!---site main logo--->
        <table id="t0"> 
        <tr>
        <td>
       
        <a href="#">
            <img src="img/logo.png" height="100px" alt="Jason's Login Demo">
        </a>           
        </td>
   
        <td> <div id="top">
        <ul> <b> <center>
        <li><a href="index.php">Home</a> |</li><li> Portfolio |</li><li> About |</li><li><a href="account.php"> Your Account</a></li></b>
        </ul>  </center>
        </p>
        </div>
        </td>


</tr><tr>
        <td>
            <table id="t2">
            <tr>
            <td>
            <?php
            if (isset($_SESSION['userId'])){
             echo   ' <td> <div id="top2">   
                <form action="includes/logout.inc.php" method="GET"> 
            <button type="submit">Log Out</button> 
                   
                    </form> </td>';
            }
            else {
                echo '<tr><div id="top2"><form action="includes/login.inc.php" method="POST">
                <input type="text" name="mailuid" placeholder="Username/E-mail..." length="20">
                <input type="password" name="pwd" placeholder="Password..." length="20">  
                
                <button type="submit" name="login-submit">Log In</button> 
                      
                        </form> </td>    
                   <td> <div id="top3">
                <a href="signup.php">SIGN UP</a></td></tr>
                </tr></tr>
                </form>   ';
            }
            ?>
            
            </div>
            </table>    
        


        </td>
        </tr>
        </table>


 
        


        
       






    

        

    </nav>
</header>


