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
    $สถานที่รับ = $_POST['สถานที่รับ'] ?? '';
    $สถานที่ส่ง = $_POST['สถานที่ส่ง'] ?? '';
    $ความเร่งด่วน = $_POST['ความเร่งด่วน'] ?? '';
    $ประเภทเปล = $_POST['ประเภทเปล'] ?? '';

    // Insert data into database
    $sql = "INSERT INTO event(ชื่อผู้ป่วย, พยาบาลที่เรียก, สถานที่รับ, สถานที่ส่ง, ความเร่งด่วน, ประเภทเปล) 
            VALUES ('$ชื่อผู้ป่วย', '$พยาบาลที่เรียก', '$สถานที่รับ', '$สถานที่ส่ง', '$ความเร่งด่วน','$ประเภทเปล')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    // // Get the channel access token from an environment variable
    // $channel_access_token = getenv('access_token');

    // // Define the Flex Message JSON
    // $flexMessage = array(
    //     "type" => "flex",
    //     "altText" => "Get a Task",
    //     "contents" => array(
    //         "type" => "bubble",
    //         "body" => array(
    //         "type" => "box",
    //         "layout" => "vertical",
    //         "contents" => array(
    //             array(
    //             "type" => "text",
    //             "text" => "New Task",
    //             "weight" => "bold",
    //             "size" => "xl"
    //             ),
    //             array(
    //             "type" => "text",
    //             "text" => "Click the button below to get a task.",
    //             "wrap" => true,
    //             "margin" => "lg"
    //             )
    //         )
    //         ),
    //         "footer" => array(
    //         "type" => "box",
    //         "layout" => "horizontal",
    //         "contents" => array(
    //             array(
    //             "type" => "button",
    //             "style" => "primary",
    //             "action" => array(
    //                 "type" => "uri",
    //                 "label" => "Get Task",
    //                 "uri" => "https://your-api-endpoint.com/get-task"
    //             )
    //             )
    //         )
    //         )
    //     )
    // );

    // // Prepare and send the message
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, 'https://api.line.me/v2/bot/message/push');
    // curl_setopt($ch, CURLOPT_POST, true);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    //     'to' => 'U417f9c5ff40484a0302adb495e5d8945', // Test ID
    //     'messages' => [
    //         [
    //             'type' => 'text',
    //             'text' => 'New task created successfully',
    //         ],
    //         json_decode(json_encode($flexMessage), true), // Convert JSON to array
    //     ],
    // ]));
    // curl_setopt($ch, CURLOPT_HTTPHEADER, [
    //     'Content-Type: application/json',
    //     'Authorization: Bearer ' . $channel_access_token
    // ]);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // $response = curl_exec($ch);
    // curl_close($ch);

    // Output the response (for debugging)
    echo $response;
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>