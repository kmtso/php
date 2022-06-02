<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 <form action="website.php" method="post">
   <input type="text" name="name">
   <input type="submit">
  </form>
               <?php
                  function sayHi($name){
                    echo "Hello $name!<br>";
                  }
                  sayHi($_POST['name']);
                  sayHi("Sir/Madam")
                        ?>

                 </body>
</html>
