<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nusoundtara";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT title, image, description, price_range FROM events";
$result = $conn->query($sql);

$events = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
} else {
    echo "0 results";
}
$conn->close();

echo json_encode($events);
?>
