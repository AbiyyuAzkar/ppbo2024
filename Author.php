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