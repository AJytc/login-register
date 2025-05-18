<?php
    include("dbconnection.php");

    $email = $_POST["email"];
    $password = $_POST["password"];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($email)){
            echo "<script>alert('Email is required'); window.location.href='register.php'</script>";
            exit();
        }
        elseif(empty($password)){
            echo "<script>alert('Password is required'); window.location.href='register.php'</script>";
            exit();
        }

        // Check if email already exists
        $checkQuery = "SELECT * FROM users WHERE email = :email";
        $checkStmt = $conn->prepare($checkQuery);
        $checkStmt->execute([":email" => $email]);

        if($checkStmt->rowCount() > 0){
            echo "<script>alert('Email already registered'); window.location.href='register.php'</script>";
            exit();
        }

        // Insert new user
        $insertQuery = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $insertStmt = $conn->prepare($insertQuery);
        $insertStmt->execute([
            ":email" => $email,
            ":password" => $password
        ]);

        echo "<script>alert('Registration Successful. Please login.'); window.location.href='index.php'</script>";
    }
?>
