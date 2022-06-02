<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 <form action="website.php" method="post">
   <input type="text" name="studentName">
   <input type="submit">
  </form>
               <?php
               $grades = array('Jim' => 'A', 'Ming'=>'A+','Ben'=>'C' ); //(key=>value)
               echo $grades[$_POST['studentName']];
                        ?>

                 </body>
</html>
