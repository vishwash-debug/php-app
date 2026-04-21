<?php
$conn = new mysqli("database-1.ccneo2ee69pt.us-east-1.rds.amazonaws.com", "admin", "YOUR_PASSWORD", "phpdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $conn->query("INSERT INTO users (name) VALUES ('$name')");
}

$result = $conn->query("SELECT * FROM users");

echo "<form method='POST'>
        <input type='text' name='name' />
        <input type='submit' />
      </form>";

while ($row = $result->fetch_assoc()) {
    echo $row['name'] . "<br>";
}
?>
