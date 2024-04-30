<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $ชื่อผู้ป่วย = $_POST['ชื่อผู้ป่วย'] ?? '';
    $พยาบาลที่เรียก = $_POST['พยาบาลที่เรียก'] ?? '';
    $สถานที่รับ = $_POST['สถานที่รับ'] ?? ''; // แก้ไขให้เป็น 'สถานที่รับ'
    $สถานที่ส่ง = $_POST['สถานที่ส่ง'] ?? '';
    $ความเร่งด่วน = $_POST['ความเร่งด่วน'] ?? '';

    // Insert data into database
    $sql = "INSERT INTO event(ชื่อผู้ป่วย, พยาบาลที่เรียก, สถานที่รับ, สถานที่ส่ง, ความเร่งด่วน) VALUES ('$ชื่อผู้ป่วย', '$พยาบาลที่เรียก', '$สถานที่รับ', '$สถานที่ส่ง', '$ความเร่งด่วน')";
    
    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>