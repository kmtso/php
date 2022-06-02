<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action ="website.php" method="post">
      Num1    :<input type='number' name= 'num1'><br>
      operator:<input type='text' name= 'op'><br>
      Num2    :<input type='number' name= 'num2'><br>
  <input type="submit">


    </form>
               <?php

                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
               $op=$_POST["op"];
               if($op=="*"){
                 echo $num1*$num2;
               }elseif($op=='/'){
                   echo $num1/$num2;
                 }elseif($op=='-'){
                     echo $num1-$num2;
                   }elseif($op=='+'){
                       echo $num1+$num2;
                     }else{
                       echo "invalid operator";
                     }                           ?>

                 </body>
</html>
