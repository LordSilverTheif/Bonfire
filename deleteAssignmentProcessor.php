<?php
require_once "config.php";
$pdo = getDBConnection();

$id = $_POST["id"];


$sql="DELETE FROM assignments
          WHERE id = :id";

if($stmt = $pdo->prepare($sql))
{
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    if($stmt->execute())
    {
        header("location: assignments.php");
    }
}
?>
