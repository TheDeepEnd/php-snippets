<?php


$templateString = "Hi I'm ++name++! ++noun2++ is ++adjective1++
and ++noun1++ is ++adjective2++! ++noun2++ ++verb2++ the ++adjective3++
++noun3++! The end, also ++verb1++!";

if ($_GET == NULL)
{

  $templateString = "";

}
else {
  foreach($_GET as $key => $value)
  {

    if ($value == NULL)
    {
    $templateString = str_replace($key,"________",$templateString);
    }
    else
    {
    $templateString = str_replace($key,$value,$templateString);
    }
  }
}




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
              <td>Name:</td>
              <td><input type="text" name="++name++" value=""></td>
            </tr>
            <tr>
              <td>Noun:</td>
              <td><input type="text" name="++noun1++" value=""></td>
              <td>Noun:</td>
              <td><input type="text" name="++noun2++" value=""></td>
              <td>Noun:</td>
              <td><input type="text" name="++noun3++" value=""></td>
            </tr>
            <tr>
              <td>Verb:</td>
              <td><input type="text" name="++verb1++" value=""></td>
              <td>Verb:</td>
              <td><input type="text" name="++verb2++" value=""></td>
            </tr>
            <tr>
              <td>Adjective:</td>
              <td><input type="text" name="++adjective1++" value=""></td>
              <td>Adjective:</td>
              <td><input type="text" name="++adjective2++" value=""></td>
              <td>Adjective:</td>
              <td><input type="text" name="++adjective3++" value=""></td>
            </tr>

          </table>

        <input type="submit">  <? echo $templateString; ?>

        </fieldset>
    </form>

  </body>
</html>
