<?php
$localhost="localhost";
$login="root";
$pass="";
$db="englishtest";
$sql=mysqli_connect($localhost, $login, $pass, $db);
if(!$sql)
{
    die("Connection failed");
}

$select = 'SELECT * FROM promo_prices';
$result = mysqli_query($sql, $select);
if (isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["email"])) {

    $name = $sql->real_escape_string($_POST["name"]);
    $phone = $sql->real_escape_string($_POST["phone"]);
    $email = $sql->real_escape_string($_POST["email"]);
    $insert = "INSERT INTO applications (name, phone,email) VALUES ('$name', '$phone','$email')";
    if ($sql->query($insert)) {
        echo "<script>
alert('В ближайшее время с Вами свяжется!');
window.location.href='/';
</script>";
    } else {
        echo "Ошибка: " . $sql->error;
    }
    $sql->close();
}
?>

