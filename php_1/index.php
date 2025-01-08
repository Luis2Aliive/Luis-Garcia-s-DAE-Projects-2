<?php
// Declaring A Variable 
$greeting = "Welcome To VerseVibe!";

// Declare An Integer Variable
$year = 2026;

// Declare A Boolean Variable
$isPHPFun = true;

// Output The Values Of The Variables 
echo $greeting . "<br>"; // Concatenation With A Line Break 
echo "the current year is " . $year . "<br>";
echo "Is learning PHP fun?" . ($isPHPFun ? "Yes" : "No") . "<br>";

// Declare A Variable To Hold The User's Age
$age = 15; 

// Decision-Making Structure
if ($age >= 18) {
    echo "You Are Eligible To Enter VerseVibe.<br>";
} else {
    echo "You Are Not Eligible To Enter VerseVibe.<br>";
}

// Another Example: Determine If A Number Is Even Or Odd
$number = 60;

if ($number % 2 == 0) {
    echo "The Number $Number Is Even.<br>";
} else {
    echo "The Number $Number Is Odd.<br>";
}
?>