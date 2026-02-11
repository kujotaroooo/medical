<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: 404.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/medical/public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/medical/public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="/medical/public/css/sb-admin-2.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <?php include('leftbar.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">
                        <?php echo strtoupper("welcome " . htmlentities($_SESSION['user']['username'])); ?>
                    </h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>
                        <div class="panel-body">
                            <?php echo $_SESSION['user']['username']; ?>
                        </div>
                    </div>
                </div>
            </div>

            <form method="post" action="../controller/logout.php">
                <input type="submit" name="logout" value="Logout">
            </form>
        </div>
    </div>

    <script src="/medical/public/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="/medical/public/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/medical/public/bower_components/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="/medical/public/js/sb-admin-2.js" type="text/javascript"></script>
</body>
</html>
