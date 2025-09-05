<?php
include 'php_includes/connection.php';

if (!isset($_SESSION['user'])) {
    header("Location: about.php");
    exit;
}

$id = $_POST['id'];
$editor_name = $_SESSION['user'];
$edit_date = date('Y-m-d');
$edit_time = date('H:i:s');

if (isset($_POST['update_history'])) {
    $history = $_POST['history'];
    $sql = "UPDATE about_content SET history=?, editor_name=?, edit_date=?, edit_time=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $history, $editor_name, $edit_date, $edit_time, $id);
    $stmt->execute();
}
if (isset($_POST['update_mission'])) {
    $mission = $_POST['mission'];
    $sql = "UPDATE about_content SET mission=?, editor_name=?, edit_date=?, edit_time=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $mission, $editor_name, $edit_date, $edit_time, $id);
    $stmt->execute();
}
if (isset($_POST['update_vision'])) {
    $vision = $_POST['vision'];
    $sql = "UPDATE about_content SET vision=?, editor_name=?, edit_date=?, edit_time=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $vision, $editor_name, $edit_date, $edit_time, $id);
    $stmt->execute();
}

header("Location: about.php");
exit;