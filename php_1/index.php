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

// Function to calculate the price after applying a discount
function calculateDiscountedPrice($originalPrice, $discountPercent) {
    return $originalPrice - ($originalPrice * $discountPercent / 100);
}

// Function to recommend clothing based on weather
function recommendClothing($temperature) {
    if ($temperature >= 25) {
        return "It's hot! T-Shirts and Shorts are the best choice.";
    } elseif ($temperature >= 15) {
        return "The weather is mild. A Sweatshirt with Pants is a great option.";
    } else {
        return "It's cold! Layer up with a Sweatshirt, T-Shirt, and warm Pants.";
    }
}

// Main script: Use the functions
$tShirtPrice = 25; // Original price of a T-shirt in dollars
$sweatshirtPrice = 50; // Original price of a sweatshirt in dollars
$pantsPrice = 40; // Original price of pants in dollars
$shortsPrice = 30; // Original price of shorts in dollars
$discountPercent = 20; // Discount percentage
$currentTemperature = 22; // Current temperature in Celsius

// Calculate discounted prices
$discountedTShirtPrice = calculateDiscountedPrice($tShirtPrice, $discountPercent);
$discountedSweatshirtPrice = calculateDiscountedPrice($sweatshirtPrice, $discountPercent);
$discountedPantsPrice = calculateDiscountedPrice($pantsPrice, $discountPercent);
$discountedShortsPrice = calculateDiscountedPrice($shortsPrice, $discountPercent);

// Display discounted prices
echo "Discounted Prices:<br>";
echo "T-Shirt: $$discountedTShirtPrice<br>";
echo "Sweatshirt: $$discountedSweatshirtPrice<br>";
echo "Pants: $$discountedPantsPrice<br>";
echo "Shorts: $$discountedShortsPrice<br><br>";

// Recommend clothing based on weather
$recommendation = recommendClothing($currentTemperature);
echo $recommendation;

<?php
// One-dimensional array for clothing items and their prices
$clothingItems = [
    "T-Shirt" => 25,
    "Sweatshirt" => 50,
    "Pants" => 40,
    "Shorts" => 30
];

// Function to calculate the price after applying a discount
function calculateDiscountedPrice($price, $discountPercent) {
    return $price - ($price * $discountPercent / 100);
}

// Function to display clothing items with their discounted prices
function displayClothingItems($items, $discountPercent) {
    echo "Clothing Items and Discounted Prices:<br>";
    foreach ($items as $item => $price) {
        $discountedPrice = calculateDiscountedPrice($price, $discountPercent);
        echo "$item: $$discountedPrice<br>";
    }
    echo "<br>";
}

// Main script
$discountPercent = 15; // Discount percentage
$currentTemperature = 18; // Current temperature in Celsius

// Display the clothing items with their discounted prices
displayClothingItems($clothingItems, $discountPercent);

// Recommend clothing based on weather
function recommendClothing($temperature) {
    if ($temperature >= 25) {
        return "It's hot! T-Shirts and Shorts are the best choice.";
    } elseif ($temperature >= 15) {
        return "The weather is mild. A Sweatshirt with Pants is a great option.";
    } else {
        return "It's cold! Layer up with a Sweatshirt, T-Shirt, and warm Pants.";
    }
}

$recommendation = recommendClothing($currentTemperature);
echo $recommendation;
?>
