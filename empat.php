<?php

require 'Author.php';
require 'Book.php';
require 'Publisher.php';

$author = new Author("Tedrik Stepanus", "H1101231027");
$publisher = new Publisher("Penerbit Satrio", "Jalan Karya Baru", 123456789);
$book = new Book(123456789, "Pemrograman PHP bersama Pak Dian Prawira", "Sangat Mudah Dipahami", "Komputer", "Bahasa Indonesia", 10000,$author,$publisher);

print_r($book->showAll());

print_r($book->detail(123456789));
