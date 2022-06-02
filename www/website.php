<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
        $characterName ="Tom";//string
        $characterAge = 80;
        echo "<h1> Ming's Site</h1>";
        echo "<hr>";
        echo "<p> This is my site</p>";
        echo("Hello World");
        echo "There once was a man named $characterName <br>";
        echo "He was $characterAge years old <br>";
        $characterName="Mike";
        echo "He really liked the name $characterName <br>";
        echo "But didn't like being $characterAge years old<br>";
        $phrase ="To be or not to be";
        $age = 23; // int
        $gpa= 2.30;
        $isMale= true;

        echo strtoupper("$phrase:");
        echo strlen("$phrase");
        echo(" characters");
        echo"<hr>";
        echo("first character:$phrase[0]");
        $phrase[3]='h';
        echo "Ming"[0];
        echo "$phrase";
        echo str_replace("he","BE",$phrase);//php -S localhost:4000
        echo "<br>";
        echo substr($phrase,5,7); /*http://localhost:4000/www/website.php*/
        echo 5-9;
        $age--;
        $age=$age*4;
        $age*=4;

        echo $age;
        echo 10%3;
        echo abs(-100);
        echo "<br>";
        echo pow(2,4);
        echo max(2,10);
        echo round(3.2);
        echo ceil(3.43);
        echo floor(3.5);
        echo "<br>";
               ?>
               <!--
               <form action="website.php" method="get">

                color: <input type="text" name="color">
                Plural Noun:<input type="text" name="pluralNoun">
                celebrity:<input type="text" name="celebrity">
                Password:<input type="password" name="password">
                <input type="submit">
               </form>
             -->
               <form action="website.php" method="post">

                Password:<input type="password" name="password">
                <input type="submit">
               </form>
               <br>
               Your password: <?php
                $password=$_POST["password"];
                echo $password;
                $friends = array("Ken","King","Ray","Tom", );
                $friends[4]="Dwight";
                echo "<br>";
                echo $friends[4];

                echo "<br>number of friends: ";
                echo count($friends);
               ?>
                <!--
               Your name is

               <?php
                //echo  $_GET["name"];
               ?>Your age is
               <?php
                //echo $_GET["age"];
                /*                Name: <input type="text" name="name">
                                Age <input type="number" name="age">
                                <input type="number" name="num1">
                                <input type="number" name="num2">
*/
               ?>
               ANSWER:

               <?php //echo $_GET["num1"]+$_GET["num2"]
               $color=$_GET["color"];
               $pluralNoun=$_GET["pluralNoun"];
               $celebrity=$_GET["celebrity"];
               echo "Rose is $color <br>";
               echo "$pluralNoun is blue <br>";
               echo "I love $celebrity <br>";
               ?>
              -->
                 </body>
</html>
