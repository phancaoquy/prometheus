<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the total price from the AJAX request
    $totalPrice = isset($_POST['totalPrice']) ? $_POST['totalPrice'] : null;

    // Now you can use $totalPrice as a PHP variable
    // For example, you can perform some calculations or store it in a database
    echo "Total Price: " . $totalPrice;
} else {
    // Handle the case where the request is not via POST
    echo "Invalid request!";
}
?>
