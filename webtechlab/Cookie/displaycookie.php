<!-- Smit Padshala -->
<!-- 21BCP187 -->

<html>
<body>
<?php
if (!isset($_COOKIE["user"])) {
    echo "Sorry, the cookie is not found!";
} else {
    echo "Cookie Value: " . $_COOKIE["user"];
}
?>
</body>
</html>
