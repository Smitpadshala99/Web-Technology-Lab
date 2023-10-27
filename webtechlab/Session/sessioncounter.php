<!-- Smit Padshala -->
<!-- 21BCP187 -->

<?php
session_start();
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Counter</title>
</head>
<body>
<h2>Session Counter</h2>
<?php
echo "Page Views: " . $_SESSION['counter'];
?>
</body>
</html>
