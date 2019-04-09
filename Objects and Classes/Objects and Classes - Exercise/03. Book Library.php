<?php

class Library
{
    private $name;
    private $listOfBooks;

    public function __construct($name, $listOfBooks)
    {
        $this->name = $name;
        $this->listOfBooks[] = $listOfBooks;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getListOfBooks()
    {
        return $this->listOfBooks;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $listOfBooks
     */
    public function setListOfBooks($listOfBooks): void
    {
        $this->listOfBooks = $listOfBooks;
    }


}

class Book
{
    private $title;
    private $author;
    private $publisher;
    private $releaseDate;
    private $isbnNumber;
    private $price;

    public function __construct($title, $author, $publisher, $releaseDate, $isbnNumber, $price)

    {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->releaseDate = $releaseDate;
        $this->isbnNumber = $isbnNumber;
        $this->price = $price;


    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @return mixed
     */
    public function getIsbnNumber()
    {
        return $this->isbnNumber;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @param mixed $publisher
     */
    public function setPublisher($publisher): void
    {
        $this->publisher = $publisher;
    }

    /**
     * @param mixed $releaseDate
     */
    public function setReleaseDate($releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @param mixed $isbnNumber
     */
    public function setIsbnNumber($isbnNumber): void
    {
        $this->isbnNumber = $isbnNumber;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }


}

$n = intval(readline());
$listOfBooks = [];
$libraryList = [];

for ($i = 0; $i < $n; $i++) {
    $input = readline();
    list($title, $author, $publisher, $releaseDate, $isbnNumber, $price) = explode(' ', $input);
    $book = new Book($title, $author, $publisher, $releaseDate, $isbnNumber, $price);
    $listOfBooks[] = $book;

}
foreach ($listOfBooks as $value) {
    $author = $value->getAuthor();
    $price = $value->getPrice();

    if (!key_exists($author, $libraryList)) {
        $libraryList[$author] = 0;
    }
    $libraryList[$author] += $price;
}

uksort($libraryList, function ($a, $b) use ($libraryList) {
    if ($libraryList[$a] < $libraryList[$b]) return 1;
    elseif ($libraryList[$a] > $libraryList[$b]) return -1;
    else return strcmp($a, $b);
});

foreach ($libraryList as $key => $value) {
    echo $key . " -> " . number_format($value, 2, ".", "") . PHP_EOL;
}


