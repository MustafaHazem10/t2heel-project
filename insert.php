<?php
                                // LOGIN //

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // VALIDATION 
    if (empty($email)) {
        $errors[] = 'email can not be empty';
    }
    if (isset($errors)) {
        echo 'there is errors';
    }
    if (strlen($password) < 3) {
        $errors[] = 'password can be more than 3';
    }
    if (isset($errors)) {
        foreach ($errors as $error) {
            echo "<h1 style='color:red'>" .  $error . "</h1>";
        }
        header("Refresh:3;url=index1.php");
    } else {
        include 'connect.php';
        $stmt = $conn->prepare("INSERT INTO users set email ='$email' , password = '$password' ");
        $stmt->execute();
        header("location:index1.php");
    }
} else {
    
    header("location:task.php");
}