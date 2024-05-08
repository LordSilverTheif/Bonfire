<nav class="navbar bg-dark  bg-gradient">
<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills me-auto mb-2 mb-lg-0">
            <li class="nav-item btn btn-outline-secondary"><a href="#" class="nav-link" aria-current="page">Class Home</a></li>
            <li class="nav-item btn btn-outline-secondary""><a href="#" class="nav-link">Announcements</a></li>
            <li class="nav-item btn btn-outline-secondary""><a href="assignments.php?classid=<?= $_SESSION["currentclass"] ?>" class="nav-link">Assignments</a></li>

            <li class="nav-item btn btn-outline-secondary""><a href="#" class="nav-link">People</a></li>
            <?php if($role == "teacher" || $role == "admin"){ ?> <li  class="nav-item btn btn-outline-secondary""><a href="viewStudentGrades.php?classid=<?= $_SESSION["currentclass"] ?>" class="nav-link">Grades </li></a></li> <?php } ?>
            <?php if($role == "student"){ ?> <li  class="nav-item btn btn-outline-secondary""><a href="viewGrades.php?classid=<?= $_SESSION["currentclass"] ?>" class="nav-link">Grades </li></a></li> <?php } ?>
            <li class="nav-item btn btn-outline-secondary""><a href="#" class="nav-link">Syllabus</a></li>
            <li class="nav-item btn btn-outline-secondary""><a href="classRoster.php?classid=<?= $_SESSION["currentclass"] ?>" class="nav-link">People</a></li>
            <li class="nav-item btn btn-outline-secondary""><a href="#" class="nav-link">Grades</a></li>
            <li class="nav-item btn btn-outline-secondary""><a href="syllabus.php?classid=<?= $_SESSION["currentclass"] ?> "class="nav-link">Syllabus</a></li>
            <li class="nav-item btn btn-outline-secondary""><a href="#" class="nav-link">Modules</a></li>
        </ul>
    </header>
</div>
</nav>
