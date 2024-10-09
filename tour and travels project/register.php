<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'project';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO registration(name,email,phone,age,gender) values ('$name','$email','$phone','$age','$gender')";
    mysqli_query($conn,$sql);

}
?>