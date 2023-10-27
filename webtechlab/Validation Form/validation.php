<?php
// Define variables and initialize them
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>PHP Form Validation Example - Result</h2>
<p>Name: <?php echo $name; ?></p>
<p>E-mail: <?php echo $email; ?></p>
<p>Website: <?php echo $website; ?></p>
<p>Comment: <?php echo $comment; ?></p>
<p>Gender: <?php echo $gender; ?></p>
</body>
</html>
