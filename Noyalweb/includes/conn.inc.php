<!-- <?php
$dsn = 'mysql:host=localhost;dbname=webdesign';
$user = 'root';
$password = 'root';
try {
$pdo = new PDO($dsn, $user, $password);
$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo ->exec("SET CHARACTER SET utf8");

}
catch (PDOException $e) {
echo 'Connection failed again: ' . $e->getMessage();
}
?> -->

