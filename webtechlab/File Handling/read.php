<!-- Smit Padshala -->
<!-- 21BCP187 -->

<?php
$filename = "example.txt";

if (file_exists($filename)) {
    $fileContent = file_get_contents($filename);
    echo "File content:\n" . $fileContent;
} else {
    echo "File does not exist.";
}
?>
