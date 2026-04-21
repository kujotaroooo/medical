<?php
    require_once '../../config/config.php';
    $sql = "SELECT * FROM students";
    $stmt = $conn->prepare($sql); // prepare ini for statement
    $stmt->execute();          // tapos ig execute
    $result = $stmt->get_result(); // ngan ig get an result
    $stud = $result->fetch_all(MYSQLI_ASSOC); // tapos ig fetch all as associative array
    $search = isset($_GET['query']);
    foreach ($stud as $std):
        if ($std['student_number'] == $search || $std['first_name'] == $search || $std['last_name'] == $search || $std['middle_name'] == $search):
?>
    <li>
        <a href="#">
            <i class="fa fa-graduation-cap fa-fw"></i>
            <?php echo $std['student_number'] . " - " . ucfirst($std['last_name']) . ", " . ucfirst($std['first_name']) . " " . ucfirst($std['middle_name']); ?>
            <span class="fa arrow"></span>
        </a>

        <ul class="nav nav-third-level collapse">
            <?php include('fetchYear.php'); ?>
        </ul>
    </li>
<?php endif; endforeach; ?>

