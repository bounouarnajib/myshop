<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = htmlspecialchars($_POST["product"]);
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $quantity = htmlspecialchars($_POST["quantity"]);
    
    $order = "Product: $product, Name: $name, Email: $email, Quantity: $quantity\n";
    
    file_put_contents("orders.txt", $order, FILE_APPEND);
    
    echo "تم تقديم طلبك بنجاح!";
} else {
    echo "تم إرسال الطلب بطريقة غير صحيحة.";
}
?>
