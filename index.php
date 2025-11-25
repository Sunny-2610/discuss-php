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
    // FIXED: Added isset() check before accessing session value
    if (isset($_GET['login']) && (!isset($_SESSION['user']['username']) || empty($_SESSION['user']['username']))) {
        include('client/login.php');
    }

    // FIXED: Added same condition check
    if (isset($_GET['signup']) && (!isset($_SESSION['user']['username']) || empty($_SESSION['user']['username']))) {
        include('client/signup.php');
    } else if (isset($_GET['ask'])) {   // FIXED undefined index warning
        include('./client/ask.php');
    } else if (isset($_GET['q-id'])) {
        $qid = $_GET['q-id'];
        include('./client/question-details.php');
    }
    
    else {
        include('./client/questions.php');
    }    
    ?>  
</body>
</html>
