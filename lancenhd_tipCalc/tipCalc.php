<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title> Challenge 1!  Create a tip Calculator</title>
<head>
</head>

<!--That BODY -->
<body>
<p>Hello, I was created to help you calculate your tip !</p>

<form>
<p>Total cost: Ex(69.50) </p> <input type="text" name="bill" placeholder="0.00">

<p>The percent Ex(50): </p> <input type="text" name="percentage" placeholder="0">

<br>
<button type="submit" name="submit" value="submit">Calculate</button>

</form>


  <?php
if(isset($_GET['submit'])){
   $bill= $_GET['bill'];
   $percent= $_GET['percentage'];
   $tipFunc = $percent/100;
  $tipFinal = $bill * $tipFunc;
  //Just for the format. Ex '2.00'
  $tipFinal = number_format($tipFinal,2);

  echo "Tip = $ $tipFinal (^ O ^)/";
}
   ?>



</body>
</html>
