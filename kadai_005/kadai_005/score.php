<?php
$scores = ['score1' => 80, 'score2' => 60, 'score3' => 55, 'score4' => 40, 'score5' => 100, 'score6' => 25, 'score7' => 80, 'score8' => 95, 'score9' => 30, 'score10' => 60];

$sum = 0;

foreach ($scores as $key => $score) {
  $sum += $scores[$key];
}

$average = $sum / 10;

echo $average;
