<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 <form action="website.php" method="post">
   <input type="number" name="num">
   <input type="submit">
  </form>
               <?php
                  function cube($num){
                    return $num*$num*$num;
                  }
                  echo cube($_POST['num']);

                        ?>

                 </body>
</html>
