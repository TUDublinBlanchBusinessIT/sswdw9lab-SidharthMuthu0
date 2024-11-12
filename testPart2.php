<?php
require 'Team.php';


$team = new Team("Eagles");


$team->finalScore(3, 1); 
$team->finalScore(2, 2); 
$team->finalScore(1, 4); 


echo "Goal Average: " . $team->getGoalAverage();
?>