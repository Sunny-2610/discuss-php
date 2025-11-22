<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discuss Project</title>
    <?php include('client/commonFiles.php'); ?>
</head>
<body>
    <?php 
    session_start();
    include('client/header.php'); 
    ?>

    <?php 
    // FIXED: Added isset() check before accessing $_SESSION['user']['username']
    if (isset($_GET['login']) && (!isset($_SESSION['user']['username']) || empty($_SESSION['user']['username']))) {
        include('client/login.php');
    }

    // FIXED: Same issue here, applied same condition
    if (isset($_GET['signup']) && (!isset($_SESSION['user']['username']) || empty($_SESSION['user']['username']))) {
        include('client/signup.php');
    }
    ?>
</body>
</html>
