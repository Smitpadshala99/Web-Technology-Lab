<!-- Smit Padshala -->
<!-- 21BCP187 -->

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session 1</title>
</head>
<body>
<h2>Session Example 1</h2>
<?php
$_SESSION["user"] = "Smit";
echo "Session information is set successfully.<br/>";
?>
<a href="session2.php">Visit next page</a>
</body>
</html>
