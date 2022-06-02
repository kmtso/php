<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action ="website.php" method="post">
      What is your grade?<br>
      <input type='text' name= 'grade'><br>

  <input type="submit">


    </form>
               <?php

                $grade = $_POST['grade'];
                $grade = strtoupper($grade);
                switch ($grade) {
                  case 'A':
                     echo "excellent";
                    break;
                  case 'B':
                    echo "Good";
                    break;

                  case 'C':
                      echo "Average";
                      break;

                  case 'D':
                    echo "Pass";
                    break;

                    case 'F':
                      echo "Fail";
                      // code...
                      break;
                    default:
                    // code...
                    echo "invalid grade";
                    break;
                }
   ?>

                 </body>
</html>
