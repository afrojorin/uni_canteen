<?php
$firstname = $_['firstname']
$lastname = $_['lastname']
$course_name = $_POST['course_name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$semester = $_POST['semester'];






//Database connection
$conn = new mysqli('localhost', 'root', '', 'info');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt = $conn ->prepare("insert into data(first_name,last_name,course_name,phone_number,email,semester) values(?,?,?,?,?,?)");

$stmt->bind_param("ssssss",$firstname,$lastname,$course_name,$phone_number,$email,$semester);
$stmt->execute();
echo "Signed in successfully..";
$stmt->close();
$conn->close();
}

?>
