<?php
require_once "config.php";
session_start();
$pdo = getDBConnection();

$classid = $_SESSION["currentclass"];
$assignmentname =$_POST["inputAssignment"];
$maxgrade=$_POST["inputMaxGrade"];
$descript =$_POST["inputDescription"];
$ddate= $_POST["inputDueDate"];
$categ =$_POST["inputAssigmentCategory"];

var_dump($_POST);
$sql="Insert into assignments(assignment_name, max_grade, class_id, description, due_date, category)
values(:assignment_name, :max_grade, :class_id, :description, :due_date, :category)";
try {
    echo "Starting try";
    if ($stmt = $pdo->prepare($sql)) {
        echo "prepared statement";
        $stmt->bindParam(":assignment_name", $assignmentname, PDO::PARAM_STR);
        $stmt->bindParam(":max_grade", $maxgrade, PDO::PARAM_INT);
        $stmt->bindParam(":class_id", $classid, PDO::PARAM_INT);
        $stmt->bindParam(":description", $descript, PDO::PARAM_STR);
        $stmt->bindParam(":due_date", $ddate, PDO::PARAM_STR);
        $stmt->bindParam(":category", $categ, PDO::PARAM_STR);
        if($stmt->execute()){
            header("location: ./assignments.php?status=Assignment%20Successfully%20Created");
        }
    }
    else {
        header("location: ./assignments.php?status=Failed%20to%20Create%20Assignment"); //add a parameter here with a failure statmenet
    }
}
catch(PDOException $e) {
    echo $e->getMessage();
}
?>
