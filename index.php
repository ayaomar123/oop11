<?php
declare(strict_types=1);
include 'includes/autoload.inc.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <form action="includes/calc.inc.php" method="post">
    <p>My Own Calc</p>
    <input type="number" name="num1" placeholder="num 1 ">
    <select class="" name="oper">
      <option value="add">Add</option>
      <option value="sub">sub</option>
      <option value="div">div</option>
      <option value="mul">mul</option>
    </select>
    <input type="number" name="num2" placeholder="num 2 ">
    <button type="submit" name="button">calculate</button>


  </form>

</body>
</html>
