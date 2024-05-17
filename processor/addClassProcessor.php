<?php
require_once "../config.php";
$pdo = getDBConnection();

$id = $_POST["id"];
$cname =$_POST["cname"];
$teacherID=$_POST["teacher"];
$teachers = $_POST["teachers"];
$sdate =$_POST["sdate"];
$edate= $_POST["edate"];
$term =$_POST["term"];
$students = $_POST["students"];
var_dump($_POST);
$sql= "INSERT into classes
          SET class_name = :class_name,
              teacher_id = :teacher_id,
              start_date = :start_date,
              end_date = :end_date,
              term = :term
";
try {
    if ($stmt = $pdo->prepare($sql)) {
        echo "stmt prepared";
        $stmt->bindParam(":class_name", $cname, PDO::PARAM_STR);
        $stmt->bindParam(":teacher_id", $teacherID, PDO::PARAM_INT);
        $stmt->bindParam(":start_date", $sdate, PDO::PARAM_STR);
        $stmt->bindParam(":end_date", $edate, PDO::PARAM_STR);
        $stmt->bindParam(":term", $term, PDO::PARAM_STR);
        echo "binded params";
        if ($stmt->execute()) {
            echo "<p> First Stmt Executed</p><ol>";
            #Class should be created
            $lastId = $pdo->lastInsertId();
            //echo $lastId;
            foreach ($teachers as $teacher){
                echo "<li><ol>";
                echo "<li> Working on teacher $teacher</li>";
                $teacherSql = "INSERT into teachers (class_id, teacher_id)
                                VALUES(:class_id, :teacher_id)";
                if ($teacherStmt = $pdo->prepare($teacherSql)) {
                    echo "<li> Statement successfully prepared</li>";
                    $teacherStmt->bindParam(":class_id", $lastId, PDO::PARAM_INT);
                    $teacherStmt->bindParam(":user_id", $teacher, PDO::PARAM_INT);
                    if ($teacherStmt->execute()) {
                        echo "<li> Statment successfully executed</li>";
                        echo "$teacherStmt added to class with id $lastId";
                        unset($teacherSql);
                        unset($teacherStmt);
                        //TODO: Try to do this with a created statement instead of loop
                    } else {
                        echo "<li> Statement not executed </li>";
                        echo "Problem adding teacher ($teacher) to class ($lastId)";
                    }
                } else {
                    echo "<li> Statement not prepared</li>";
                }
                echo "</ol></li>";
            }
            foreach ($students as $student) {
                echo "<li><ol>";
                echo "<li> Working on student $student</li>";
                $studentSql = "Insert into course_grades (class_id, user_id)
                            VALUES(:class_id, :user_id)";
                if ($studentStmt = $pdo->prepare($studentSql)) {
                    echo "<li> Statement successfully prepared</li>";
                    $studentStmt->bindParam(":class_id", $lastId, PDO::PARAM_INT);
                    $studentStmt->bindParam(":user_id", $student, PDO::PARAM_INT);
                    if ($studentStmt->execute()) {
                        echo "<li> Statment successfully executed</li>";
                        echo "$student added to class with id $lastId";
                        unset($studentSql);
                        unset($studentStmt);
                        //TODO: Try to do this with a created statement instead of loop
                    } else {
                        echo "<li> Statement not executed </li>";
                        echo "Problem adding student ($student) to class ($lastId)";
                    }
                } else {
                    echo "<li> Statement not prepared</li>";
                }
                echo "</ol></li>";
            }
            echo "</ol>";
            if(mkdir("../class_data/${lastId}/assignments", 0777, true)) {
                mkdir("../class_data/${lastId}/files", 0777, true);
                header("location: ../editClasses.php?status=Added%20Class%20Successfully"); //add a parameter here with a success statmenet
            }
        } else {
            header("location: ../editClasses.php?status=Failed%20to%20add%20Class"); //add a parameter here with a failure statmenet
        }
    }
}
catch(PDOException $e) {
    echo $e->getMessage();
}
?>