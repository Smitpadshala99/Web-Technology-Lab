<!-- Smit Padshala -->
<!-- 21BCP187 -->

<!-- Associative Array -->

<!-- 1st way: -->
<!-- $salary=array("Smit"=>"350000","Bhavya"=>"450000","Nisarg"=>"200000"); -->

<!-- 2nd way: -->
<!-- $salary["Smit"]="350000";
$salary["Bhavya"]="450000";
$salary["Nisarg"]="200000"; -->

<?php
    $salary=array("Smit"=>"550000","Bhavya"=>"450000","Nisarg"=>"500000");
    echo "Smit salary: ".$salary["Smit"]."<br/>";
    echo "Bhavya salary: ".$salary["Bhavya"]."<br/>";
    echo "Nisarg salary: ".$salary["Nisarg"]."<br/>";
?>
