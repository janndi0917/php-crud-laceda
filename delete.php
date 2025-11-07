<?php
include 'config/db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();

if (isset($_POST['confirm'])) {
    $conn->query("DELETE FROM students WHERE id=$id");
    header("Location: read.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delete Student</title>
<style>
    body {background:#121212;color:#fff;font-family:Segoe UI;display:flex;justify-content:center;align-items:center;height:100vh;}
    .box {background:#1e1e1e;padding:2rem;border-radius:20px;text-align:center;width:400px;}
    h2 {color:#ff7070;}
    button {padding:10px 20px;border:none;border-radius:10px;color:#fff;cursor:pointer;margin:10px;}
    .yes {background:#ff4040;}
    .no {background:#0077ff;}
</style>
</head>
<body>
<div class="box">
    <h2>Are you sure?</h2>
    <p>Delete <strong><?= $row['fullname'] ?></strong> (<?= $row['student_no'] ?>)?</p>
    <form method="POST">
        <button type="submit" name="confirm" class="yes">Yes, Delete</button>
        <a href="read.php"><button type="button" class="no">Cancel</button></a>
    </form>
</div>
</body>
</html>
