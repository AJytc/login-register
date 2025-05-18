<?php
    include("dbconnection.php");

    $email = $_POST["email"];
    $password = $_POST["password"];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($email)){
            echo "<script>alert('Empty Username'); window.location.href='index.php'</script>";
        }
        elseif(empty($password)){
            echo "<script>alert('Empty Password'); window.location.href='index.php'</script>";
        }

        $query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $stmt = $conn->prepare($query);
        $stmt->execute([
            ":email" => $email,
            ":password" => $password
        ]);

        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if($stmt->rowCount() == 1){
            session_start();
            $_SESSION['email'] = $userData['email'];
            echo "<script>alert('Login Successfully'); window.location.href='home.php'</script>";
        }
        else{
            echo "<script>alert('No Account Found! Please make sure you input your correct info!'); window.location.href='index.php'</script>";
        }
    }
?>
