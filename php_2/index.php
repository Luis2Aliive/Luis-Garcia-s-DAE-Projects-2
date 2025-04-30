<?php
// Define constants
define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "VerseVibe_database");

// Create Connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check Connection 
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Example of storing data
$age = 15;

// Conditional statement
if ($age >= 13) {
    echo "You Are Allowed To Register.<br>";
} else {
    echo "Sorry, You Must Be 13 Or Older To Register.<br>";
}

// Array of clothes
$clothes = array("T-Shirts", "Sweatshirts", "Pants & Shorts");

// Loop through and print each item
for ($i = 0; $i < count($clothes); $i++) {
    echo "You Have " . $clothes[$i] . ".<br>";
}

// Function to calculate total price
function calculateTotal($pricePerItem, $quantity) {
    return $pricePerItem * $quantity;
}

// Using the function
$shirtPrice = 25;
$shirtQuantity = 3;
$totalCost = calculateTotal($shirtPrice, $shirtQuantity);
echo "Total Cost For Shirts: $$totalCost<br>";

// Associative array
$product = array(
    "name" => "VerseVibe T-Shirt",
    "price" => 45,
    "size" => "M",
    "in_stock" => true
);

echo "Product: " . $product["name"] . "<br>";
echo "Price: $" . $product["price"] . "<br>";

// Multi-dimensional array
$inventory = array(
    array("item" => "T-Shirt", "price" => 20, "stock" => 50),
    array("item" => "Sweatshirt", "price" => 35, "stock" => 30),
    array("item" => "Pants & Shorts", "price" => 28, "stock" => 40)
);

// Loop through inventory
echo "<br><strong>Inventory List:</strong><br>";
for ($i = 0; $i < count($inventory); $i++) {
    echo $inventory[$i]["item"] . " - $" . $inventory[$i]["price"] . " - In Stock: " . $inventory[$i]["stock"] . "<br>";
}

// Insert a new clothing item
$sql = "INSERT INTO clothes (item_name, price) VALUES ('T-Shirt', 20)";
if ($conn->query($sql) === TRUE) {
    echo "New Item Added Successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Retrieve all clothing items
$sql = "SELECT ID, item_name, price FROM clothes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"] . " - Item: " . $row["item_name"] . " - Price: $" . $row["price"] . "<br>";
    }
} else {
    echo "No Items Found.<br>";
}

// Update the price of the T-Shirt
$sql = "UPDATE clothes SET price = 30 WHERE item_name = 'T-Shirt'";
if ($conn->query($sql) === TRUE) {
    echo "Item Updated Successfully.<br>";
} else {
    echo "Error Updating Item: " . $conn->error . "<br>";
}

// Delete the T-Shirt
$sql = "DELETE FROM clothes WHERE item_name = 'T-Shirt'";
if ($conn->query($sql) === TRUE) {
    echo "Item Deleted Successfully.<br>";
} else {
    echo "Error Deleting Item: " . $conn->error . "<br>";
}

// Close connection
$conn->close();
?>

