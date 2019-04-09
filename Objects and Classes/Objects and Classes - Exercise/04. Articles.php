<?php

class Article
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

    public function Edit($newContent)
    {
        $this->content = $newContent;
    }

    public function ChangeAuthor($newAuthor)
    {
        $this->author = $newAuthor;
    }

    public function Rename($newName)
    {
        $this->title = $newName;
    }

    public function __toString()
    {
        return $this->title . ' - ' . $this->content . ': ' . $this->author;
    }
}

list($title, $content, $author) = explode(', ', readline());
$article = new Article($title, $content, $author);

$n = intval(readline());

for ($i = 0; $i < $n; $i++) {
    $input = readline();
    list ($cmd, $new) = explode(': ', $input);
    if ($cmd === "Edit") {
        $article->Edit($new);
    }
    if ($cmd === "ChangeAuthor") {
        $article->changeAuthor($new);
    }
    if ($cmd === "Rename") {
        $article->Rename($new);
    }
}

echo $article;