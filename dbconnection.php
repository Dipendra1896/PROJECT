<?php
$firstName = $_POST['firstname'];
$middleName = $_POST['middlename'];
$lastName = $_POST['lastname'];
$nationality = $_POST['nationality'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashPassword = md5($password);
$gender = $_POST['gender'];
$dateOfBirth = $_POST['date_of_birth'];
$profession = $_POST['profession'];
$hobbies = implode(',', $_POST['hobbies']);
$favoriteColor = $_POST['favorite_color'];

//Database connection
$conn = new mysqli('epiz_33420718','root','','usersdata');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("INSERT INTO information(name, middlename, lastname, nationality, address, email, password, gender, date_of_birth, profession, hobbies, favorite_color) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssss", $firstName, $middleName, $lastName, $nationality, $address, $email, $hashPassword, $gender, $dateOfBirth, $profession, $hobbies, $favoriteColor);
    $stmt->execute();
    echo "Registration is completed successfully.....";
    $stmt->close();
    $conn->close();
}
?>