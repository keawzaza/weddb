<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add work</title>
        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form method="POST" action="insert_event.php">
            <label>ชื่อผู้ป่วย:</label>
            <input type="text" name="ชื่อผู้ป่วย" class="form-control" placeholder="ชื่อผู้ป่วย" required> <br>
            <label>พยาบาลที่เรียก:</label>
            <input type="text" name="พยาบาลที่เรียก" class="form-control" placeholder="พยาบาลที่เรียก" required> <br>
            <label>สถานที่รับ:</label>
            <input type="text" name="สถานที่รับ" class="form-control" placeholder="สถานที่รับ" required><br>
            <label>สถานที่ส่ง:</label>
            <input type="text" name="สถานที่ส่ง" class="form-control" placeholder="สถานที่ส่ง" required><br>
            <label>ความเร่งด่วน</label>
            <input type="text" name="ความเร่งด่วน" class="form-control" placeholder="ความเร่งด่วน" required><br>
            <input type="submit" value="submit" class="btn btn-success" >
            <a href="show_db.php" class="btn btn-danger">Cancel</a>
        </form>
    
    </div>
</body>
</div>
</html>