<?php
 
 if (isset($_POST['content'])) {
    // Retrieve the content from the POST request
    $totalPrice = $_POST['content'];
}
else{
    echo "Total order: Null";
}

?>