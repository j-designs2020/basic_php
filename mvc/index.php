<?php 

include 'includes/autoloader.inc.php';

  
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>



        <?php
            

   
            //set new static type


         /*   echo Person::$type;
            Person::setType("Rat");
            echo Person::$type;
            echo $person1->getType();*/


           
        ?>

        
    <form>
        <input type="text" id="name" name="name" value="Name"></text>
        <br>
        <input type="text" id="age" name="age" value="Age"></text>
        <br>
        <input type="text" id="color" name="color" value="Color"><text>
        <br>
        <select name="food">
            <option>Food</option>
            <option>Salmon and Shrimp</option>
            <option>Salmon and Wild Rice</option>
            <option>Beyond Natural Salmon</option>
            <option>Seafood</option>
            <option>Cod, Sole and Shrimp</option>
            <option>Ocean Whitefish and Tuna</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Make Selection</button>
        <br> <br> <br>

    </form>

    <?php
         if(isset($_GET['submit'])){
            $name = $_GET['name'];
            $age = $_GET['age'];
            $color = $_GET['color']; 
            $food = $_GET['food'];
            if ($food == "Food") {
                echo '<script>alert("Please Select a food option.")</script>';
            }
            else{
                $person = new Person($name, $age, $color, $food);
                echo '<br> Name: ';
                echo $person->getName();
                echo '<br> Age: ';
                echo $person->age;
                echo '<br> Color: ';
                echo $person->color;
                echo '<br> Food: ';
                echo $person->food;
            }    
         }
    ?> 


    </body>

</html>