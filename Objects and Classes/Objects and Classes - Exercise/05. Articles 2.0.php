<?php

class Articles
{
    private $title;
    private $content;
    private $author;

    /**
     * Article constructor.
     * @param $title
     * @param $content
     * @param $author
     */
    public function __construct($title, $content, $author)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
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
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }


    public function __toString()
    {
        return $this->title . ' - ' . $this->content . ': ' . $this->author;
    }
}

$n = intval(readline());
$articles = [];


for ($i = 0; $i < $n; $i++) {
    $input = readline();
    list($title, $content, $author) = explode(', ', $input);
    $article = new Articles($title, $content, $author);
    $articles[] = $article;


}
$command = readline();

if ($command == 'title') {
    usort($articles, function (Articles $a, Articles $b) {
        return $a->getTitle() > $b->getTitle();
    });
}
if ($command == 'content') {
    usort($articles, function (Articles $a, Articles $b) {
        return $a->getContent() > $b->getContent();
    });
}
if ($command == 'author') {
    usort($articles, function (Articles $a, Articles $b) {
        return $a->getAuthor() > $b->getAuthor();
    });
}

foreach ($articles as $element) {
    echo $element . PHP_EOL;
}