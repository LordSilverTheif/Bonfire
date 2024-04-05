<?php
require_once "../../config.php";
$pdo = getDBConnection();
$subjects = array("CSCI", "MATH", "ITEC", "PHYS","CHEM");
$classNumbers = array("105", "120", "125", "230", "260", "305", "315", "445", "450");
$cols = array("name", "teacher_id", "start_date", "end_date", "term");
$classArray = array();
for($i = 0;$i<15;$i++)
{
    $randomSubjectIndex = rand(1,count($subjects));
    $randomSubject = $subjects[$randomSubjectIndex];
    $randomClassNumberIndex = rand(1, count($classNumbers));
    $randomClassNumber = $classNumbers[$randomClassNumberIndex];
    $className = "$randomSubject $randomClassNumber";
    $teacher_id = rand(1,5);
    $start_date = '2024-01-22';
    $end_date = '2024-05-20';
    $term = "SP2024";
    $classArray[] = array($className, $teacher_id, $start_date, $end_date, $term);


}
var_dump($classArray);