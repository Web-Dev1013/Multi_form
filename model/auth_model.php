<?php
session_start();

$conn = new PDO("mysql:host=localhost;dbname=form", 'root', '');
if ($_POST['type'] == 1) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $code = $_POST['code'];

    try {
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * from users where username='$username' and `password`='$password' and code='$code'");
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            foreach ($result as $temp) {
                $_SESSION['username'] = $temp['username'];
                $_SESSION['userid'] = $temp['id'];
                $_SESSION['code'] = $temp['code'];
            }
            echo "success";
        } else {
            echo "failed";
        }
    } catch (PDOException $e) {
        echo "failed" . $e->getMessage();
    }
}
if ($_POST['type'] == "logout") {
    session_destroy();
    echo "success";
}

$conn = null;
