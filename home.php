<?php
    session_start();

    if(!isset($_SESSION['email'])){
        echo "<script>alert('Please Login'); window.location.href='index.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
</head>
<body>
    <b>WELCOME POGI, <?php echo $_SESSION['email']; ?>!</b>

    <br><br>
    <form action="logout.php" method="post">
        <button type="submit">Sign Out</button>
    </form>
</body>
</html>
