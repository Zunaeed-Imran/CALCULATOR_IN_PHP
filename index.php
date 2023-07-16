<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="get">
    <input type="text" name="num1" placeholder="Enter 1st number">
    <input type="text" name="num2" placeholder="Enter 2nd number">

    <select name="operator">
      <option value="">None</option>
      <option value="+">Add</option>
      <option value="-">SubTraction</option>
      <option value="*">Multiply</option>
      <option value="/">Divide</option>
    </select> <br>

    <button type="submit" name="submit" value="submit">Calculate</button>
  </form>

  <p>The answer is: </p>

  <?php
  if(isset($_GET['submit'])){
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];

    switch($operator){
      case "None":
        echo "You need to select any method!";
        break;
      case "+":
        echo $result1 + $result2;
        break;
      case "-":
        echo $result1 - $result2;
        break;
      case "*":
        echo $result1 * $result2;
        break;
      case "/":
        echo $result1 / $result2;
        break;
    }
  }
  
  ?>

</body>
</html>