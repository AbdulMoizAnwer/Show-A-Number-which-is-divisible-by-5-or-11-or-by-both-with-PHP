<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show the Number which is divisible by 5 and 11</title>
</head>
<body>
    <h1>Show If A Number is Divisible by 5 and 11 or Not</h1>
    <form action="#" method="POST">
        <label>Enter your number</label>
        <input type="text" name="n1">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $n1 = $_POST['n1'];
    if($n1%5==0 && $n1%11==0) //number divided by 5 and 11 but reminders remain 0
        echo $n1 . " is divisible by 5 and 11";
    else if($n1%5==0) //number divided by 5 but reminders remain 0
        echo $n1 . " is divisible by 5";
    else if($n1%11==0) //number divided by 11 but reminders remain 0
        echo $n1 . " is divisible by 11";
    else    
        echo "The number provided could not be divisible by 5 and 11";
    }
?>
