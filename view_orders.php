<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الطلبات</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        pre { text-align: left; margin: 2em auto; border: 1px solid #ddd; padding: 1em; max-width: 600px; background-color: #f9f9f9; }
    </style>
</head>
<body>
    <header>
        <h1>الطلبات</h1>
    </header>
    <main>
        <?php
        if (file_exists("orders.txt")) {
            echo "<pre>" . htmlspecialchars(file_get_contents("orders.txt")) . "</pre>";
        } else {
            echo "<p>لا توجد طلبات بعد.</p>";
        }
        ?>
    </main>
    <footer>
        <p>حقوق الطبع والنشر &copy; 2024 متجر المنتجات. جميع الحقوق محفوظة.</p>
    </footer>
</body>
</html>
