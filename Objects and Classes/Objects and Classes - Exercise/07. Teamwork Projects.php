<?php

class Team
{
    private $teamName;
    private $owner;
    private $members = [];

    /**
     * Team constructor.
     * @param $teamName
     * @param $owner
     */
    public function __construct($owner, $teamName)
    {
        $this->teamName = $teamName;
        $this->owner = $owner;
    }

    /**
     * @return mixed
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @return array
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @param array $members
     */
    public function setMembers($members): void
    {
        $this->members[] = $members;
    }

}


$numberOfTeams = intval(readline());
$teams = [];
$exist = [];




for ($i = 0; $i < $numberOfTeams; $i++) {
    $teamExist = false;
    $ownerExist = false;
    $input = readline();
    $tokens = explode('-', $input);
    $owner = $tokens[0];
    $teamName = $tokens[1];
    foreach ($teams as $user) {
        if ($teamName === $user->getTeamName()) {
            $teamExist = true;
            echo "Team $teamName was already created!" . PHP_EOL;
            break;
        }
        if ($owner === $user->getOwner()) {
            $ownerExist = true;
            echo "$owner cannot create another team!" . PHP_EOL;
            break;
        }
    }
    if (!$teamExist && !$ownerExist) {
        $team = new Team($owner, $teamName);
        $teams[] = $team;
        echo "Team $teamName has been created by $owner!" . PHP_EOL;
        $exist[] = $owner;
    }
}

while (true) {
    $teamExist = false;
    $memberExist = false;
    $input = readline();
    if ($input === "end of assignment") {
        break;
    }
    $tokens = explode('->', $input);
    $memberCandidate = $tokens[0];
    $teamToJoin = $tokens[1];
    foreach ($teams as $team) {
        if ($team->getTeamName() === $teamToJoin) {
            $teamExist = true;
            break;
        }
    }
    if ($teamExist) {
        foreach ($exist as $element) {
            if ($memberCandidate === $element) {
                $memberExist = true;
                break;
            }
        }
        if (!$memberExist) {
            $team->setMembers($memberCandidate);
            $exist [] = $memberCandidate;
        } else {
            echo "Member $memberCandidate cannot join team {$team->getTeamName()}!" . PHP_EOL;
        }
    } else {
        echo "Team $teamToJoin does not exist!" . PHP_EOL;
    }
}

usort($teams, function (Team $a, Team $b) {
    $count1 = count($a->getMembers());
    $count2 = count($b->getMembers());
    if ($count1 === $count2) {
        return $a->getTeamName() > $b->getTeamName();
    }
    return $count1 < $count2;
});

foreach ($teams as $team) {
    if ($team->getMembers() != null) {
        echo $team->getTeamName() . PHP_EOL;
        echo '- ' . $team->getOwner() . PHP_EOL;
        $members = [];
        foreach ($team->getMembers() as $member) {
            $members[] = $member;
        }
        natcasesort($members);
        foreach ($members as $member) {
            echo '-- ' . $member . PHP_EOL;
        }
    }
}
echo 'Teams to disband:' . PHP_EOL;
foreach ($teams as $team) {
    if ($team->getMembers() == null) {
        echo $team->getTeamName() . PHP_EOL;
    }
}