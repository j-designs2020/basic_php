<!DOCTYPE html>
<html>
<head>
<title>Jason's PHP Training Calculator</title>
</head>



<body>

<form>
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator">
        <option>Select Function</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
    <button type="submit2" name="submit2" value="submit2">Clear</button>
</form>
<p>The answer is:</p>

<?php
    if(isset($_GET['submit'])){
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        if (is_numeric($result1) && is_numeric($result2) && $result1 != "" && $result2 != ""){
            switch ($operator) {
                case "Select Function":
                    echo "ERROR. Please select an option.";
                break;
                case "Add":
                    echo $result1 + $result2; 
                break;
                case "Subtract":
                    echo $result1 - $result2; 
                break;
                case "Multiply":
                    echo $result1 * $result2; 
                break;
                case "Divide":
                    echo $result1 / $result2; 
                break;
            }
        }
        else {
            echo "ERROR. Please enter only numbers.";
        }
    }
    if(isset($_GET['submit2'])){
        $result1 = "";
        $result2 = "";
        $operator = "";
    }


    $dayofweek = date("w");
    $day = date("d");
    $day2 = date("l");
    $year = date("Y");

    
    echo nl2br("\n\n\n\n");
    echo "Today's Date: ", $day, " ", $day2, ", ", $year;
?>


</body>





</html>