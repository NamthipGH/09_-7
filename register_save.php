<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register_Save</title>
</head>
<body>
    <?php
        $login = $_POST['login'];
        $passwd = $_POST['pwd'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];

        $conn = new PDO("mysql:host=localhost;dbname=webboardp;charset=utf8", "root", "");

        $sql = "INSERT INTO webboard (login, password, name, gender, email, role) VALUES ('$login', '$passwd','$name','$gender','$email','m')";

        $conn->exec($sql);
        $conn = null;
    ?>
</body>
</html>