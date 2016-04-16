<?php
/*
*  Parameters in $_GET[""] are the names of the fields passed
*  when form is submitted.
*
*  str_replace() is being used to remove '$' in case of dollar input,
*  and '%' in case of percentage input.
*/
  $bill = str_replace('$','',$_GET["bill"]);
  $percentage = str_replace('%','',$_GET["percentage"]);


/*
*  is_numeric() checks to make sure the parameter is a numeric
*/
    if ((!is_numeric($bill) && $bill != NULL)
        || (!is_numeric($percentage) && $percentage != NULL))
    {
      /* Sets an $error variable for a message to display on an invalid input */
      $error = "<font color='red'>Invalid, try again!</font>";
    }
    else
    {
      /* Calculates the tip based on bill and parameter */
      $tip = $bill * $percentage / 100;

      /* Calculates the total cost based on bill and tip */
      $total = $bill + $tip;

      /* Then prepends a '$' for the output */
      $tip = "$" . $tip;

      /* Then prepends a '$' for the output */
      $total = "$" . $total;
    }

?>

<html>
  <title>Tip Calculator</title>
  <body>
<form action="<? $_PHP_SELF ?>" method="GET">
    <fieldset style="width:600px">
      <legend>Tip Calculator</legend>
    <table>
       <tr>
        <td>
          Bill before tip:
        </td>
        <td>
          <input type="text" name="bill" value="0.00">
        </td>
      </tr>
      <tr>
        <td>
          Percent Tip:
        </td>
        <td>
          <input type="text" name="percentage" value="0">
        </td>
      </tr>
      <tr>
        <td>
          Amount to tip:
        </td>
        <td>
          <? echo $tip; ?>
        </td>
      </tr>
      <tr>
        <td>
          Total bill:
        </td>
        <td>
          <? echo $total; ?>
        </td>
      </tr>
    </table>
    <input type="submit">  <? echo $error; ?>

    </fieldset>
</form>
  </body>
</html>
