<?php
namespace Book;

class Book
{
    public $bookname;
    public $price;

    public function __construct($bookname,$price)
    {
        $this->bookname=$bookname;
        $this->price=$price;

    }

    public function getBookInfo(){
        echo "Book Name: $this->bookname";
        echo "<br>";
        echo "Book Price: $this->price";
    }
}
