<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if($_SESSION['is_logged_id'] != TRUE)
    {
        header("Location: fromlogin.php");
        exit();
    }
    ?>
    <h1> Selamat Datang, <?php echo $_SESSION['nama']?></h1>
    <a href="logout.php"> Logout</a>
</body>
</html>
