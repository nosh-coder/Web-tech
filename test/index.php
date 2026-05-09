<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type = "radio" name= "foods[]" value = "Ramen">
        Ramen<br>
        <input type = "radio" name= "foods[]" value = "Cake">
        Cake<br>
        <input type = "radio" name= "foods[]" value = "Sushi">
        Sushi<br>
        <input type = "radio" name= "foods[]" value = "Pie">
        Pie<br>
        <input type = "submit" name="submit" value = "Submit">
    </form>
<?php
    if(isset($_POST["submit"]))
    {
        if(isset($_POST["foods"]))
        {
            $foods = $_POST["foods"];

            foreach($foods as $food)
            {
               echo "you like " . $food . "<br>";
            }
        }
        else 
            {
                echo "you didn't selected any food";
            }
    }
?>
</body>
</html>