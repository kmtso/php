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
  function __construct(){
    echo "New Book Created<br>";
  }
}
  $book1 = new Book;
  $book1 -> title=" Harry Potter";
  $book1 -> author= "JK ROWLING";
  $book1 -> pages =400;
  echo "$book1->title<br>";
  $book2 = new Book;
  $book2 -> title="Lord of the Rings";
  $book2 -> author= "Tolkien";
  $book2 -> pages =700;
  echo "$book2->title";
?>
<?php include "footer.html" ?>

                 </body>
</html>
