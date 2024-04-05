<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$firstName = htmlspecialchars($_SESSION["first_name"]);
$role = $_SESSION["role"];
//var_dump($_SESSION);
?>

<html>
<head>
    <title> Bonfire - Professor files page</title>
    <link href=../style.css type=text/css rel=stylesheet>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <p>Class Name</p>
    </div>
    <div id="side-bar">
        <p><a href=../Class-page.html>Home/Syllabus/Zoom</a></p>
        <p><a href=Assignments.html>Assignments</a></p>
        <p><a href=Exam.html>Exam</a></p>
        <p><a href=Course-annoucements.html>Course Annoucements</a></p>
        <p><a href=Professor-files.html>Professor Files/Modules</a></p>
        <p><a href=Chat-page.html>Communcation/Chat</a></p>
    </div>
    <div id="main-content">
        <p> This is where professor files will appear once they upload them</p>
    </div>
    <div id="footer">
        <p>This is where important events and announcements will be listed</p>
    </div>
</div>
</body>
</html>
