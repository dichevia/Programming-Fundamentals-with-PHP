<?php
$byViews = [];
$byLikes = [];

while (true) {
    $input = readline();
    if ($input === 'stats time') {
        break;
    }
    if (strpos($input, '-') !== false) {
        $args = explode('-', $input);
        $video = $args[0];
        $views = $args[1];
        if (!key_exists($video, $byViews)) {
            $byViews[$video] = $views;
            $byLikes[$video] = 0;
        } else {
            $byViews[$video] += $views;
        }

    }
    if (strpos($input, ':') !== false) {
        $args = explode(':', $input);
        $command = $args[0];
        $video = $args[1];
        if ($command === 'like') {
            if (!key_exists($video, $byLikes)) {
                $byLikes[$video] = 1;
            } else {
                $byLikes[$video] += 1;
            }

        } elseif ($command === 'dislike') {
            if (!key_exists($video, $byLikes)) {
                $byLikes[$video] -= 1;
            } else {
                $byLikes[$video] -= 1;
            }
        }
    }
}

$sorting = readline();

if ($sorting === 'by likes') {
    arsort($byLikes);
    foreach ($byLikes as $video => $likes) {
        echo "$video - $byViews[$video] views - $likes likes" . PHP_EOL;
    }
}
if ($sorting === 'by views') {
    arsort($byViews);
    foreach ($byViews as $video => $views) {
        echo "$video - $views views - $byLikes[$video] likes" . PHP_EOL;
    }
}