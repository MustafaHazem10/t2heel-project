<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $Q1 = $_POST['Q1'];


    // VALIDATION 
    if (empty($name)) {
        $errors[] = 'email can not be empty';
    }
    if (isset($errors)) {
        echo 'there is errors';
    }
    if (strlen($name) < 3) {
        $errors[] = 'password can be more than 3';
    }
    if (isset($errors)) {
        foreach ($errors as $error) {
            echo "<h1 style='color:red'>" .  $error . "</h1>";
        }
        header("Refresh:3;url=index1.php");
    } else {
        include 'connect.php';
        $stmt = $conn->prepare("INSERT INTO career set name = '$name' , number = '$number', email = '$email' , Q1 = '$Q1' ");
        $stmt->execute();
        header("location:index1.php");
    }
} else {
    //متنساش تحط رابط البروجيكت
    header("location:task.php");
}
