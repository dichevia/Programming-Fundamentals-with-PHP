<?php
$bestBatch = [];
$bestBatchQuality = PHP_INT_MIN;
$bestBatchAverageQuality = PHP_INT_MIN;
$bestBatchLength = PHP_INT_MAX;

while (true) {
    $currentBatchQuality = PHP_INT_MIN;;
    $currentBatchAverageQuality = PHP_INT_MIN;;
    $currentBatchLength = PHP_INT_MAX;

    $input = readline();
    if ($input === 'Bake It!') {
        break;
    }
    $currentBatch = explode('#', $input);
    $currentBatchQuality = array_sum($currentBatch);
    $currentBatchAverageQuality = $currentBatchQuality / count($currentBatch);
    $currentBatchLength = count($currentBatch);

    if ($currentBatchQuality >= $bestBatchQuality) {
        if ($currentBatchQuality > $bestBatchQuality) {
            $bestBatchQuality = $currentBatchQuality;
            $bestBatch = $currentBatch;
            $bestBatchAverageQuality = $currentBatchAverageQuality;
            $bestBatchLength = $currentBatchLength;
        } elseif ($currentBatchQuality == $bestBatchQuality) {
            if ($currentBatchAverageQuality >= $bestBatchAverageQuality) {
                if ($currentBatchAverageQuality > $bestBatchAverageQuality) {
                    $bestBatchQuality = $currentBatchQuality;
                    $bestBatch = $currentBatch;
                    $bestBatchAverageQuality = $currentBatchAverageQuality;
                    $bestBatchLength = $currentBatchLength;
                } elseif ($currentBatchAverageQuality == $bestBatchAverageQuality) {
                    if ($currentBatchLength < $bestBatchLength) {
                        $bestBatchQuality = $currentBatchQuality;
                        $bestBatch = $currentBatch;
                        $bestBatchAverageQuality = $currentBatchAverageQuality;
                        $bestBatchLength = $currentBatchLength;
                    }
                }
            }
        }
    }
}

echo "Best Batch quality: $bestBatchQuality\n";
echo implode(' ', $bestBatch);