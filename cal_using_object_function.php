<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="prac6.php" method="get">
        <input type="number" name="num1" placeholder="Enter 1st number"><br>
        <input type="number" name="num2" placeholder="Enter 2nd number"><br>
        <input type="symbol" name="symbol" placeholder="Enter any Symbil"><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php

class po{
    function panda($a, $b, $symbol){
        if(isset($_REQUEST['submit'])){
            if($symbol == '+'){
                echo $a + $b;
            }elseif($symbol == '-'){
                echo $a - $b;
            }elseif($symbol == '*'){
                echo $a * $b;
            }elseif($symbol == '/'){
                echo $a / $b;
            }else{
                echo('Enter correct Symbol');
            }
        }
    }
}
$calculator = new po();

if(isset($_REQUEST['num1']) && isset($_REQUEST['num2']) && isset($_REQUEST['symbol'])){
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];
    $symbol = $_REQUEST['symbol'];
    $calculator->panda($num1, $num2, $symbol);
}

?>