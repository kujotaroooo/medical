<?php
require_once '../../config/config.php';

$sql = "SELECT * FROM program";
$stmt = $conn->prepare($sql); // prepare ini for statement
$stmt->execute();              // tapos ig execute
$result = $stmt->get_result(); // ngan ig get an result
$programs = $result->fetch_all(MYSQLI_ASSOC); // tapos ig fetch all as associative array


?>
<ul class="nav">
<?php foreach ($programs as $program): ?>
    <li>
       
        <a href="">
            <?= $program['program_name'] ?> <span class="fa arrow"></span>
        </a>

     
    <?php include('fetchYear.php'); ?>
    </li>
<?php endforeach; ?>
</ul>


