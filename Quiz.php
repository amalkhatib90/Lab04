<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
////access the global array called $_POST to get the values from the text fields
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

$count = 5;
if ($q1 != 6){
        $count--;}
if ($q2 != "Wichita"){
        $count--;}
if ($q3 != "Washington DC"){
        $count--;}
if ($q4 != "July 4"){
        $count--;}
if ($q5 != "March"){
        $count--;}
$grade = $count/5 * 100;
echo "1) Which number of the following is > 5: <br> You answered: ". $q1 . "<br> Correct answer: 6 <br>";

echo "<br> 2) Which city is the largest in Kansas: <br> You answered: ". $q2 . "<br> Correct answer: Wichita <br>";

echo "<br> 3) What is the capital of America: <br> You answered: ". $q3 . "<br> Correct answer: Washington DC <br>";

echo "<br> 4) When did Americans celebrate Independence Day: <br> You answered: ". $q4 . "<br> Correct answer: July 4 <b
r>";

echo "<br> 5) Which month marks the starting of Spring: <br> You answered: ". $q5 . "<br> Correct answer: March <br>";

echo "<br> You answered ". $count . " correct answer(s) out of 5! Your grade is: " . $grade . "%";
?>
