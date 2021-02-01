<?php
session_start();

$conn = new PDO("mysql:host=localhost;dbname=form", 'root', '');
if ($_POST['type'] == "page1_category") {
    $pageid = $_POST["pageid"];
    $category = $_POST["page1_category"];
    $datetime = date("Y-m-d h:i:sa");
    $userid = $_SESSION['userid'];
    try {
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM recommend WHERE `category` = '$category' and `pageid`='$pageid'");
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            echo "failed";
        } else {
            $add_query = "INSERT into recommend set userid='$userid', pageid='$pageid', `datetime`='$datetime', category='$category'";
            $conn->exec($add_query);
            echo "success";
        }
    } catch (PDOException $e) {
        echo "failed" . $e->getMessage();
    }
}

if ($_POST['type'] == "page2_category") {
    $pageid = $_POST["pageid"];
    $category = $_POST["page2_category"];
    $datetime = date("Y-m-d h:i:sa");
    $userid = $_SESSION['userid'];
    try {
        $exist_category = $conn->prepare("SELECT * from recommend where `category`='$category' and `pageid`='$pageid'");
        if ($exist_category->rowCount() > 0) {
            echo "failed";
        } else {
            $add_query = "INSERT into recommend set userid='$userid', pageid='$pageid', `datetime`='$datetime', category='$category' ";
            $conn->exec($add_query);
            echo "success";
        }
    } catch (PDOException $e) {
        echo "failed" . $e->getMessage();
    }
}

if ($_POST['type'] == "submit") {
    $userid = $_SESSION['userid'];
    $datetime = date("Y-m-d h:i:sa");
    $pageid = $_SESSION['code'];
    $expenditure = $_POST['expenditure'];
    $leisure = $_POST['leisure'];
    $feedback_arr = array();
    // feedback data insert
    if (!empty($_POST['page1_feedback'])) {
        array_push($feedback_arr, $_POST['page1_feedback']);
    }
    if (!empty($_POST['page2_feedback'])) {
        array_push($feedback_arr, $_POST['page2_feedback']);
    }
    for ($i = 0; $i < count($feedback_arr); $i++) {
        $pageid_temp = $pageid . ($i + 1);
        try {
            $add_query = "INSERT into feedback set userid='$userid', pageid='$pageid_temp', `datetime`='$datetime', feedback='$feedback_arr[$i]'";
            $conn->exec($add_query);
        } catch (PDOException $e) {
            echo "failed" . $e->getMessage();
        }
    }
    // expenditure and time save
    if ($expenditure != "" && $leisure != "") {
        try {
            $query = "INSERT into results set userid='$userid', `datetime`='$datetime', holidayExpenditure = '$expenditure', leisureTime='$leisure'";
            $conn->exec($query);
            echo "success";
        } catch (PDOException $e) {
            echo "failed" . $e->getMessage();
        }
    }
}
