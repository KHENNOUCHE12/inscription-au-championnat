<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة التسجيل</title>
    <link rel="stylesheet" href="styles.css"> <!-- رابط ملف التنسيقات -->
</head>
<body>
    <h1>تسجيل للمنافسة</h1>
    <form action="register_process.php" method="POST">
        <label for="name">الاسم الكامل:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">البريد الإلكتروني:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="phone">رقم الهاتف:</label>
        <input type="text" id="phone" name="phone" required>
        
        <label for="competition">اختر المنافسة:</label>
        <select id="competition" name="competition" required>
            <option value="competition1">منافسة 1</option>
            <option value="competition2">منافسة 2</option>
        </select>
        
        <button type="submit">تسجيل</button>
    </form>
</body>
</html>
