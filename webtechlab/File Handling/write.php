<!-- Smit Padshala -->
<!-- 21BCP187 -->

<?php
$filename = "example.txt";
$content = "Good Bye!";

$file = fopen($filename, "w");

if ($file) {
    fwrite($file, $content);
    fclose($file);
    echo "Content has been written to the file.";
} else {
    echo "Failed to open the file for writing.";
}
?>
