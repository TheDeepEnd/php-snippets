<?php

$templateString = "Hi I'm name and noun verb adjective!";




foreach($_GET as $key => $value)
{

  $templateString = str_replace($key,$value,$templateString);

}

echo $templateString;


 ?>
<html>
<title>Mad Libs</title>
  <body>
    <form action="<? $_PHP_SELF ?>" method="GET">
        <fieldset style="width:600px">
          <legend>Mad Libs</legend>
          Please fill out the boxes with the requested information:
          <table>
            <tr>
              <td>Your Name:</td>
              <td><input type="text" name="name"></td>
            </tr>
            <tr>
              <td>A Noun:</td>
              <td><input type="text" name="noun"></td>
            </tr>
            <tr>
              <td>A Verb:</td>
              <td><input type="text" name="verb"></td>
            </tr>
            <tr>
              <td>An Adjective:</td>
              <td><input type="text" name="adjective"></td>
            </tr>

          </table>

        <input type="submit">  <? echo $error; ?>

        </fieldset>
    </form>

  </body>
</html>
