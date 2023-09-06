<?php

class Book {
    private $title;
    private $author;
    private $pages;

    public function __construct($title, $author, $pages) {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setPages($pages) {
        $this->pages = $pages;
    }

    public function getPages() {
        return $this->pages;
    }

    public function describe() {
        return $this->title . ' by ' . $this->author . ' has ' . $this->pages . ' pages.';
    }
}


$book = new Book("Harry Potter", "J.K. Rowling", 400);


echo $book->describe();

$book->setTitle("Hairy Trotters");
$book->setPages(555);
$book->setAuthor("JKR");

echo $book->describe();

?>
