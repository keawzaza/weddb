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

$sql = "SELECT * FROM event";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>event</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class = "container">
<a href= "add_event.php" class="btn btn-success mb-4">Add+</a>
<table class="table table-striped table-hover">
    <tr>
        <th>รหัสเคส</th>
        <th>ชื่อผู้ป่วย</th>
        <th>พยาบาลที่เรียก</th>
        <th>สถานที่รับ</th>
        <th>สถานที่ส่ง</th>
        <th>ความเร่งด่วน</th>
    </tr>
<?php
while ($row = mysqli_fetch_array($result)) {
?>
    <tr>
        <td><?=$row["IDcase"]?></td>
        <td><?=$row["Patient name"]?></td>
        <td><?=$row["Nurse name"]?></td>
        <td><?=$row["Pick up location"]?></td>
        <td><?=$row["Place of delivery	"]?></td>
        <td><?=$row["urgency"]?></td>
    </tr>
<?php
}
mysqli_close($conn); //ปิดการเชื่อมต่อ
?>
</table>
</div>
</body>
</html>