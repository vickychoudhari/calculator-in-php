<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>calculator</title>
</head>
<body>
  <form method="post">
  <label> NUMBER ONE: </label><input type="text" name="num1"><br><br>
  <label> NUMBER TWO: </label><input type="text" name="num2"><br><br>


  <select name ="vishal">
    <option><strong>None</option>
    <option><strong>Add</strong></option>
    <option><strong>MULTIPLY</strong></option>
    <option><strong>SUBTRACT</strong></option>
    <option><strong>DIVISION</strong></option>
    <option><strong>MODULES</strong></option>
  </select>
  <br><br>
  <button type="submit" name="submit">calculate</button>
</form>
<p> answer is : 
<?php
if(isset($_POST['submit'])){
  $num1 =$_POST['num1'];
  $num2 =$_POST['num2'];
  $operator =$_POST['vishal'];
  switch ($operator) {
    case 'None':
    echo "There are no value selected operation";
    break;
    case 'Add':
     echo $num1 + $num2;
    break;
    case 'MULTIPLY':
     echo $num1 * $num2;
    break; 
    case 'SUBTRACT':
     echo $num1 - $num2;
    break; 
    case 'DIVISION':
     echo $num1 / $num2;
    break; 
    case 'MODULES':
     echo $num1 % $num2;
    break;  
  }
}
?></p>
</body>
</html>
