<?php

define('HIGH_AVERAGE_SCORE', 90);

$studentsJson = file_get_contents('data/students.json');
$students = json_decode($studentsJson, true);

function total_score($student)
{
    return array_reduce($student['scores'], fn ($total, $score) => $total + $score, 0);
}

function count_score($student)
{
    return count($student['scores']);
}

function average_score($student)
{
    $totalScore = total_score($student);
    $countScore = count_score($student);
    return  $countScore > 0 ? $totalScore / $countScore : 0;
}

return array_filter($students, fn ($student) => average_score($student) > HIGH_AVERAGE_SCORE);
