<!-- Smit Padshala -->
<!-- 21BCP187 -->

<?php
$uploadDirectory = "C:/xampp/htdocs/webtechlab/File Handling/Files"; // Directory where you want to save the uploaded file

if (isset($_POST["submit"]) && isset($_FILES["fileToUpload"])) {
    $targetPath = $uploadDirectory . basename($_FILES["fileToUpload"]["name"]);
    if (file_exists($targetPath)) {
        echo "Sorry, the file already exists. Please rename the file and try again.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetPath)) {
            echo "File uploaded successfully!";
        } else {
            echo "Sorry, there was an error uploading your file. Please try again.";
        }
    }
} else {
    echo "Please select a file to upload.";
}
?>
