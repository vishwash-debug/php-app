<?php
$host = "YOUR_RDS_ENDPOINT";
$user = "admin";
$pass = "password";
$db = "testdb";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $conn->query("INSERT INTO users (name) VALUES ('$name')");
}

$result = $conn->query("SELECT * FROM users");
?>

<form method="POST">
    Name: <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<?php while($row = $result->fetch_assoc()) { ?>
    <p><?php echo $row['name']; ?></p>
<?php } ?>
