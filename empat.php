<?php

// Class Author
class Author {
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($type) {
        if ($type == 'brief') {
            return [
                'name' => $this->name
            ];
        } else if ($type == 'detailed') {
            return [
                'name' => $this->name,
                'description' => $this->description
            ];
        }
    }
}

// Class Book
class Book {
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
        return [
            'ISBN' => $this->ISBN,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'language' => $this->language,
            'numberOfPage' => $this->numberOfPage,
            'author' => $this->author->show('brief'), 
            'publisher' => $this->publisher->name 
        ];
    }

    public function detail($ISBN) {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        } else {
            return null;  
        }
    }
}

// Class Publisher
class Publisher {
    public $name;
    public $address;
    private $phone;

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
}

$author = new Author("Tedrik Stepanus", "H1101231027");
$publisher = new Publisher("Penerbit Satrio", "Jalan Karya Baru", 123456789);
$book = new Book(123456789, "Pemrograman PHP bersama Pak Dian Prawira", "Sangat Mudah Dipahami", "Komputer", "Bahasa Indonesia", 10000,$author,$publisher);

print_r($book->showAll());

print_r($book->detail(123456789));
