This code snippet demonstrates a common error in PHP related to the usage of the `mysql_*` functions.  The `mysql_connect()` function, while functional, is deprecated and poses a security risk.

```php
<?php
$link = mysql_connect('localhost', 'user', 'password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('database', $link);

$result = mysql_query("SELECT * FROM table", $link);

if (!$result) {
    die('Could not query: ' . mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
    //Process data
    print_r($row);
}

mysql_free_result($result);
mysql_close($link);
?>
```