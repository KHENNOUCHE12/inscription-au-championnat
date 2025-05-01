<?php
// الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "competition_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// استلام البيانات من النموذج
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$competition = $_POST['competition'];

// إدخال البيانات في الجدول
$sql = "INSERT INTO registrations (name, email, phone, competition) VALUES ('$name', '$email', '$phone', '$competition')";

if ($conn->query($sql) === TRUE) {
    echo "تم التسجيل بنجاح!";
} else {
    echo "خطأ: " . $sql . "<br>" . $conn->error;
}

// إغلاق الاتصال
$conn->close();
?>
