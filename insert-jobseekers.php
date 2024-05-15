<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    $skills = $_POST['skills'];
    $hobbies = $_POST['hobbies'];
    $Q1 = $_POST['Q1'];
    $Q2 = $_POST['Q2'];
    $Q3 = $_POST['Q3'];
    $Q4 = $_POST['Q4'];
    $Q5 = $_POST['Q5'];
    $Q6 = $_POST['Q6'];
    $Q7 = $_POST['Q7'];
    $Q8 = $_POST['Q8'];
    $Q9 = $_POST['Q9'];
    $Q10 = $_POST['Q10'];
    $Q11 = $_POST['Q11'];

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
        $stmt = $conn->prepare("INSERT INTO missions set name ='$name' , age = '$age' 
        , location = '$location' , skills = '$skills' , hobbies = '$hobbies' 
        , Q1 = '$Q1' , Q2 = '$Q2'  
        , Q3 = '$Q3' , Q4 = '$Q4' , Q5 = '$Q5' 
        , Q6 = '$Q6' , Q7 = '$Q7' , Q8 = '$Q8' 
        , Q9 = '$Q9' , Q10 = '$Q10' , Q11 = '$Q11' ");
        $stmt->execute();
        header("location:index1.php");
    }
} else {
    //متنساش تحط رابط البروجيكت
    header("location:task.php");
}