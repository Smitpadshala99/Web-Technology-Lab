<!-- Smit Padshala -->
<!-- 21BCP187 -->

<?php
if (isset($_COOKIE["user"])) {
    setcookie("user", "", time() - 3600, "/");
    $message = "Cookie 'user' has been deleted.";
} else {
    $message = "Cookie 'user' does not exist.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Cookie</title>
</head>
<body>
<h2>Delete Cookie</h2>
<p><?php echo $message; ?></p>
</body>
</html>
