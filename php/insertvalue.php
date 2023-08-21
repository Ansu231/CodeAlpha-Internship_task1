<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $college = $_POST["college"];
    $course = $_POST["course"];
    $branch = $_POST["branch"];
    $department = $_POST["department"];
    $education = $_POST["education"];
    $internship = $_POST["internship"];
    $role = $_POST["role"];
    $company = $_POST["company"];
    $weeks = $_POST["weeks"];
    $experience = $_POST["experience"];

    //connection
    $servername = "localhost";
    $username = "root";
    $password = " ";
    $dbname = "task";
    $conn = new mysqli('localhost', 'root', '', 'task');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO user_info (name, email, password, dob, address, college, course, branch, department, education, internship, role, company, weeks, experience)
            VALUES ('$name', '$email', '$password', '$dob', '$address', '$college', '$course', '$branch', '$department', '$education', '$internship', '$role', '$company', '$weeks', '$experience')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
} else {
    echo "Form not submitted.";
}
?>
