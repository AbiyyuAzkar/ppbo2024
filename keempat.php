<?php
class Author
{
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function show() {
        echo "Author: {$this->name}\n";
        echo "Description: {$this->description}\n";
    }
}

class Book
{
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author; 
    public $publisher; 

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll() {
        echo "ISBN: {$this->ISBN}\n";
        echo "Title: {$this->title}\n";
        echo "Description: {$this->description}\n";
        echo "Category: {$this->category}\n";
        echo "Language: {$this->language}\n";
        echo "Number of Pages: {$this->numberOfPage}\n";
        $this->author->show();
        $this->publisher->show();
    }

    public function detail($ISBN) {
        if ($this->ISBN === $ISBN) {
            $this->showAll();
        } else {
            echo "Book with ISBN: $ISBN not found.\n";
        }
    }
}

class Publisher 
{
    public $name;
    public $address;
    public $phone;

    public function __construct($name, $address, $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function show() {
        echo "Publisher: {$this->name}\n";
        echo "Address: {$this->address}\n";
        echo "Phone: {$this->phone}\n";
    }
}

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