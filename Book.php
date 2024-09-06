<?php

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