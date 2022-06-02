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
  private $rating;
  function __construct($title,$author,$pages,$rating){
    $this -> title=$title;
    $this -> author=$author;
    $this -> pages =$pages;
    $this -> rating = $rating;
  }

  function getPagesRange(){
    if ($this->pages<=500){
      return "less than or equal to 500 pages";
    }else{
      return "larger than 500 pages";
    }
  }
  function getRating(){
    echo $this->rating;
  }
  function SetRating($rating){
    if ($rating>=0&&$rating<=5)
      $this->rating=$rating;
    else
      $this->rating=-1;
  }
}
  $book1 = new Book("Harry Potter","JK ROWLING",700,5);

  echo "$book1->title<br>";
  echo $book1->getPagesRange();
  echo "<br>";
  echo $book1->getRating();
  echo "<br>";
  $book1->setRating(1);
  echo $book1->getRating();
  echo "<br>";
  $book1->setRating(100);
  echo $book1->getRating();?>
<?php include "footer.html" ?>

                 </body>
</html>
