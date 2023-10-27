<!-- Smit Padshala -->
<!-- 21BCP187 -->

<?php
$filename = "example.txt";

if (file_exists($filename)) {
    if (unlink($filename)) {
        echo "File deleted successfully.";
    } else {
        echo "Failed to delete the file.";
    }
} else {
    echo "File does not exist.";
}
?>
