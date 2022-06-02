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

  function getPagesRange(){
    if ($this->pages<=500){
      return "less than or equal to 500 pages";
    }else{
      return "larger than 500 pages";
    }
  }
}
  $book1 = new Book("Harry Potter","JK ROWLING",700);

  echo "$book1->title<br>";
  echo $book1->getPagesRange();

?>
<?php include "footer.html" ?>

                 </body>
</html>
