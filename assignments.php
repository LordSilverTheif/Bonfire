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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert class name</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/stylesheets/style.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<?php include("svgImages.html"); ?>
<main class="d-flex flex-nowrap">
    <?php include("leftSideMenu.php"); ?>
    <div id="primary-window" class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark">
        <h1 class="my-5">Assignments.</h1>
        <?php
        if($role == "teacher"){
            ?>
            <div class="flex-grid-wrapper">
                <p>
                    <a href="createAssignment.php" class="btn btn-info">Make an assignment.</a>
                </p>
            </div>
            <?php
        }
        ?>
    </div>

</main>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<!-- end .container -->
<!--       _
       .__(.)< (Connor did it!)
        \___)
~~~~~~~~~~~~~~~~~~-->
</html>