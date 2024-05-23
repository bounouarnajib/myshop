<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    
    $contactMessage = "Name: $name, Email: $email, Message: $message\n";
    
    file_put_contents("contacts.txt", $contactMessage, FILE_APPEND);
    
    echo "تم إرسال رسالتك بنجاح!";
} else {
    echo "تم إرسال النموذج بطريقة غير صحيحة.";
}
?>
