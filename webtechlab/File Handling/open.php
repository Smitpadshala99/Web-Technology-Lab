<!-- Smit Padshala -->
<!-- 21BCP187 -->

<?php
$filename = "example.txt";
$file = fopen($filename, "r");

if ($file) {
    echo "File $filename opened successfully.";
    fclose($file);
} else {
    echo "Failed to open the file.";
}
?>
