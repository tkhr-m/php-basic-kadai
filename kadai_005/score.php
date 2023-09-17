<?php
$score1 = 80;
$score2 = 60;
$score3 = 55;
$score4 = 40;
$score5 = 100;
$score6 = 25;
$score7 = 80;
$score8 = 95;
$score9 = 30;
$score10 = 60;

$scores = [$score1, $score2, $score3, $score4, $score5, $score6, $score7, $score8, $score9, $score10];

$sum = 0;

for ($i = 0; $i < count($scores); $i++) {
  $sum += $scores[$i];
}

$average = $sum / 10;

echo $average;
