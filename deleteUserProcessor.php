<?php
require_once "config.php";
$pdo = getDBConnection();

$id = $_POST["id"];


$sql="DELETE FROM users
          WHERE id = :id";

if($stmt = $pdo->prepare($sql))
{
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    if($stmt->execute())
    {
        header("location: editUsers.php");
    }
}
?>