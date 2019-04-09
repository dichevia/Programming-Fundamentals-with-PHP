<?php

class StudentReport
{
    private $username;
    private $date = [];
    private $comment = [];

    /**
     * StudentReport constructor.
     * @param $username
     * @param $date
     * @param $comment
     */
    public function __construct($username)
    {
        $this->username = $username;

    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param array $date
     */
    public function setDate(array $date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment): void
    {
        $this->comment[] = $comment;
    }

}

function isUserExist($array, $newUser)
{
    foreach ($array as $elem) {
        if ($elem->getUsername() == $newUser) {
            return true;
        }
    }
    return false;
}


$users = [];

while (true) {
    $input = readline();
    if ($input == 'end of dates') {
        break;
    }
    $input = explode(' ', $input);
    $username = $input[0];
    if (!isUserExist($users, $username)) {
        if (count($input) > 1) {
            $dates = explode(',', $input[1]);
            $user = new StudentReport($username);
            $user->setDate($dates);
            $users [] = $user;
        } else {
            $user = new StudentReport($username);
            $users [] = $user;
        }
    } else {
        $temp = [];
        $dates = explode(',', $input[1]);
        foreach ($users as $el) {
            if ($username == $el->getUsername()) {
                $temp = $el->getDate();
                for ($i = 0; $i < count($temp); $i++) {
                    $dates[] = $temp[$i];
                }
                $el->setDate($dates);
            }
        }
    }
}

while (true) {
    $input2 = readline();
    if ($input2 == 'end of comments') {
        break;
    }
    list($username2, $comment) = explode('-', $input2);
    foreach ($users as $value) {
        if ($username2 == $value->getUsername()) {
            $value->setComment($comment);
        }
    }
}

usort($users, function (StudentReport $a, StudentReport $b) {
    return $a->getUsername() > $b->getUsername();
});

foreach ($users as $output) {
    echo $output->getUsername() . PHP_EOL;
    echo "Comments:" . PHP_EOL;
    foreach ($output->getComment() as $comment) {
        echo "- $comment" . PHP_EOL;
    }

    $dateSort = $output->getDate();
    echo 'Dates attended:' . PHP_EOL;
    if (count($dateSort) != 0) {
        sort($dateSort);
        foreach ($dateSort as $date) {
            echo '-- ' . $date . PHP_EOL;
        }
    }
}