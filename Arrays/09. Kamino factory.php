<?php

$length = intval(readline());
$dna = readline();
$troopIndex = 1;
$winningTroopIndex = 0;
$bestDNA = [
    0 => 0,//longest seq
    1 => $length,//leftMost index
    2 => 0,//sum 1
    3 => []//sequence itself
];
$pretendDNA = $bestDNA;

while ($dna != 'Clone them!') {
    $dna = explode('!', $dna);
    $bestSeq = 0;
    $bestSeqPretend = 0;
    $leftMost = $length;
    $leftMostPretend = $length;
    $sumOnes = 0;
    $thisTrooperDNA = [];


    for ($i = 0; $i < $length; $i++) {
        $thisTrooperDNA[] = $dna[$i];
        if ((int)$dna[$i] == 1) {
            $sumOnes++;
            $bestSeqPretend++;
            if ((int)$dna [$i - 1] == 0 || $i == 0) {
                $leftMostPretend = $i;
            } else {
                if ($leftMostPretend < $leftMost) {
                    $leftMost = $leftMostPretend;
                }
            }
        } else {//0
            if ($bestSeqPretend > $bestSeq) {
                $bestSeq = $bestSeqPretend;
            }
            $bestSeqPretend = 0;
        }

    }//dna

    $pretendDNA[0] = $bestSeq;
    $pretendDNA[1] = $leftMost;
    $pretendDNA[2] = $sumOnes;
    $pretendDNA[3] = $thisTrooperDNA;

    //Comparison
    if ($pretendDNA[0] > $bestDNA[0]) {
        $bestDNA = $pretendDNA;
        $winningTroopIndex = $troopIndex;
    } else if ($pretendDNA[0] == $bestDNA[0]) {
        if ($pretendDNA[1] < $bestDNA[1]) {
            $bestDNA = $pretendDNA;
            $winningTroopIndex = $troopIndex;
        } else if ($pretendDNA[1] == $bestDNA[1]) {
            if (($pretendDNA[2] > $bestDNA[2])) {
                $bestDNA = $pretendDNA;
                $winningTroopIndex = $troopIndex;
            }
        }
    }else {
        $bestDNA = $pretendDNA;
        $winningTroopIndex = $troopIndex;
    }

    $dna = readline();
    $troopIndex++;
}

//print

echo "Best DNA sample $winningTroopIndex with sum: $bestDNA[2]." . PHP_EOL . implode(' ', $bestDNA[3]);