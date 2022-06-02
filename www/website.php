<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php include "header.html" ?>

<?php
class Book {
  var $title;
  var $author;
  var $pages;
  function __construct($title,$author,$pages){
    $this -> title=$title;
    $this -> author=$author;
    $this -> pages =$pages;
  }


}
  $book1 = new Book("Harry Potter","JK ROWLING",400);

  echo "$book1->title<br>";

?>
<?php include "footer.html" ?>

                 </body>
</html>
