<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "VerseVibe_database";

// Create Connection
$conn = new mysqli ($servername, $username, $password, $VerseVibe_database);

// Check Connection 
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$age = 15

if ($age >= 13) {
    echo "You Are Allowed To Register.";
} else {
    echo "Sorry, You Must Be 13 Or Older To Register."
}

// Array Of Clothes 
$clothes = array ("T-Shirts", "Sweatshirts", "Pants & Shorts",);

// Loop Through And Print Each Item
for ($i = 0; $i < count($clothes); $i++) {
    echo "You Have $Clothes[$i].<br>";
}

// Function To Calculate Total Price Of Clothing Items
function calculateTotal($pricePerItem, $quantity) {
    $total = $pricePerItem * $quantity;
    return $total;
}

// Example Usage 
$shirtPrice = 25;
$shirtQuantity = 3;

$totalCost = calculateTotal($shirtPrice, $shirtQuantity);

echo "Total Cost For Shirts: $$totalCost";

$product = array(
    "name" => "VerseVibe T-Shirt",
    "Price" => 45,
    "size" => "M"
    "in_stock" => true
);

echo "Product: " . $product["name"] . "<br>";
echo "Price: $" . $product["price"] . "<br>";

$inventory = array (
    array ("item" => "T-Shirt", "Price" => N/A, "stock" => N/A)
    array ("item" => "Sweatshirt", "Price" => N/A, "stock" => N/A)
    array ("item" => "Pants & Shorts", "Price" => N/A, "stock" => N/A)
);

// Loop Through Inventory
echo "<br><strong>Inventory List:</strong><br>";
for ($i = 0; $i < count($inventory); $i++) {
    echo $inventory[$i]["item"] . " -$" . $inventory[$i]["price"] . " - In Stock: " . $inventory[$i]["stock"] . "<br>";

// Database Connection 
$servername = "localhost";
$username = "root";
$password = "";
$"VerseVibe_database";

$conn = new mysqli ($servername, $username, $password, $VerseVibe_database);

// Check Connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Insert A New Clothing Item 
$sql = "INSERT INTO clothes (item_name, price) VALUES ('T-Shirt', N/A)";

If ($conn->query($sql) === TRUE) {
    echo "New Item Added Successfully. <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Retrieve All Clothing Items 
$sql = "SELECT ID, item_name, price FROM clothers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo "ID: " . $row["ID"] . "-Item: " . $row[ "item_name"]. " - Price $" . $row["price"]. "<br>";
    }
} else {
    echo "No Items Found.";
}

// Update The Price Of The T-Shirt
$sql = "UPDATE clothes SET price = 30 WHERE item_name = 'T-Shirt'";

if ($conn->query($sql) === TRUE) {
    echo "Item Updated Successfully. <br>";
} else {
    echo "Error Updating Item: ". $coon->error;
}

// Delete The T-Shirt 
$sql = "DELETE FROM clothes WHERE item_name = 'T-Shirt'";

if ($conn->query($sql) === TRUE) {
    echo "Item Deleted Successfully.<br>";
} else {
    echo "Error Deleting Item:" . $conn->error;
}
<?php
$conn->close();
?>
}

?>