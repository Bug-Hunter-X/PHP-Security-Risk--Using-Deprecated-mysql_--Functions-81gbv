This improved code uses MySQLi with prepared statements, providing protection against SQL injection.

```php
<?php
$mysqli = new mysqli('localhost', 'user', 'password', 'database');

if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_error);
}

$stmt = $mysqli->prepare("SELECT * FROM table");

if (!$stmt) {
    die('Prepare Error: ' . $mysqli->error);
}

$stmt->execute();
$result = $stmt->get_result();

if (!$result) {
    die('Execute Error: ' . $mysqli->error);
}

while ($row = $result->fetch_assoc()) {
    //Process data
    print_r($row);
}

$stmt->close();
$mysqli->close();
?>
```