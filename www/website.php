<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

               <form action="website.php" method="post">

                apples:<input type="checkbox" name="fruits[]" value="apples"><br>
                oranges:<input type="checkbox" name="fruits[]" value="oranges"><br>
                pears:<input type="checkbox" name="fruits[]" value="pears"> <br>

                <input type="submit">
               </form>
               <?php
               $fruits=$_POST["fruits"];

               echo $fruits[0]; // first element 
                        ?>

                 </body>
</html>
