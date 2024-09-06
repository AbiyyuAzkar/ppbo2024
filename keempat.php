<?php
 require_once 'Author.php';
 require_once 'Book.php';
 require_once 'Publisher.php';
$author = new Author("J.K. Rowling", "Famous for writing the Harry Potter series.");
$publisher = new Publisher("Bloomsbury", "London, UK", "020 7631 5600");

$book = new Book(
    "978-0747532743", 
    "Harry Potter and the Philosopher's Stone", 
    "The first book in the Harry Potter series.", 
    "Fantasy", 
    "English", 
    223, 
    $author, 
    $publisher
);

$book->showAll();
echo "\n";
$book->detail("978-0747532743");