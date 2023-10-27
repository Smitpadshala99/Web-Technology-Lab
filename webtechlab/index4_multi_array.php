<!-- 21BCP187 -->
<!-- Smit Padshala -->
<!-- MultiDimensional Array -->

<?php
$studentData = array(
    array("name" => "Smit", "age" => 20),
    array("name" => "Nisarg", "age" => 19),
    array("name" => "Tej", "age" => 21)
);

echo "Student 1: Name - " . $studentData[0]["name"] . ", Age - " . $studentData[0]["age"] . "<br>";
echo "Student 2: Name - " . $studentData[1]["name"] . ", Age - " . $studentData[1]["age"] . "<br>";
echo "Student 3: Name - " . $studentData[2]["name"] . ", Age - " . $studentData[2]["age"];
?>
