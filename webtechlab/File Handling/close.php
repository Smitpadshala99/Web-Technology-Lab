<!-- Smit Padshala -->
<!-- 21BCP187 -->

<?php
$filename = "example.txt";
$file = fopen($filename, "r");

if ($file) {
    fclose($file); // Close the file when you are done
    echo "File closed successfully.";
} else {
    echo "Failed to open the file.";
}
?>
