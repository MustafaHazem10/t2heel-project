<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    $Q1 = $_POST['Q1'];
    $Q2 = $_POST['Q2'];
    $Q3 = $_POST['Q3'];
    $Q4 = $_POST['Q4'];
    $Q5 = $_POST['Q5'];
    $Q6 = $_POST['Q6'];
 
    // VALIDATION 
    if (empty($Q1)) {
        $errors[] = 'email can not be empty';
    }
    if (isset($errors)) {
        echo 'there is errors';
    }
    if (strlen($Q1) < 3) {
        $errors[] = 'password can be more than 3';
    }
    if (isset($errors)) {
        foreach ($errors as $error) {
            echo "<h1 style='color:red'>" .  $error . "</h1>";
        }
        header("Refresh:3;url=index1.php");
    } else {
        include 'connect.php';
        $stmt = $conn->prepare("INSERT INTO employment set Q1 = '$Q1' , Q2 = '$Q2', Q3 = '$Q3' , Q4 = '$Q4' , Q5 = '$Q5' , Q6 = '$Q6' ");
        $stmt->execute();
        header("location:index1.php");
    }
} else {
    //متنساش تحط رابط البروجيكت
    header("location:task.php");
}