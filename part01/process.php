<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 1</title>
</head>
<body>

<?php
    $weight = $_POST['weight'];
    $height = $_POST['height'];

$BMI= ($weight/($height * $height)) * 703; 


    //formula for calculating BMI:
    //BMI = (Weight in Pounds / (Height in inches x Height in inches)) x 703
    //source: http://www.bmi-calculator.net/bmi-formula.php

?>

<h1>BMI Calculation</h1>
<p id="output-here">Your BMI is<?php echo $BMI; ?>, which is considered:
<?php 

if($BMI <18.2){
    echo "underweight";
}else if ($BMI > 30){
    echo "obese";
} else {echo "Normal";}
?>
 </p>

</body>