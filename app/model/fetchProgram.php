<?php
require_once '../../config/config.php';

$sql = "SELECT * FROM program";
$stmt = $conn->prepare($sql); // prepare ini for statement
$stmt->execute();              // tapos ig execute
$result = $stmt->get_result(); // ngan ig get an result
$programs = $result->fetch_all(MYSQLI_ASSOC); // tapos ig fetch all as associative array

$sql1 =  "SELECT * FROM year_level";
$stmt1 = $conn->prepare($sql1);
$stmt1->execute();
$result1 = $stmt1->get_result();
$years =  $result1->fetch_all(MYSQLI_ASSOC);

foreach ($programs as $program):

?>
    <li>
    
        <a href="#">
            <i class="fa fa-graduation-cap fa-fw"></i>
            <?php echo $program['program_code']; ?>
            <span class="fa arrow"></span>
        </a>

        <ul class="nav nav-third-level collapse">
            
            <ul class="nav nav-third-level">
            <?php foreach($years as $year): ?>
                <li>
                    <a href="medRecord.php?prog=<?= $program['program_id'] ?>&&yr=<?= $year['year_level_id'] ?>">
                        <i class="fa fa-level-up fa-fw"></i>
                        <?php echo $year['year_level_name'] ?>
                    </a>
                </li>
                <?php endforeach;?>
            </ul>

        </ul>
    </li>
<?php endforeach; ?>

