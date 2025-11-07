<?php
include 'config/db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_no = $_POST['student_no'];
    $fullname = $_POST['fullname'];
    $branch = $_POST['branch'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $sql = "UPDATE students SET student_no='$student_no', fullname='$fullname', branch='$branch', email='$email', contact='$contact' WHERE id=$id";
    if ($conn->query($sql)) {
        header("Location: read.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Student</title>
<style>
    body {background:#121212;color:#fff;font-family:Segoe UI;display:flex;justify-content:center;align-items:center;height:100vh;}
    .container {background:#1e1e1e;padding:2rem;border-radius:20px;width:400px;}
    h2 {text-align:center;color:#00c3ff;}
    input, select {width:100%;padding:10px;margin:10px 0;background:#2a2a2a;border:none;border-radius:10px;color:#fff;}
    button {width:100%;padding:12px;border:none;border-radius:10px;background:linear-gradient(90deg,#00c3ff,#0077ff);color:#fff;font-weight:bold;}
    button:hover {transform:scale(1.02);}
    a {display:block;text-align:center;margin-top:10px;color:#00c3ff;}
</style>
</head>
<body>
<div class="container">
<h2>Update Student</h2>
<form method="POST">
    <input type="text" name="student_no" value="<?= $row['student_no'] ?>" required>
    <input type="text" name="fullname" value="<?= $row['fullname'] ?>" required>
    <select name="branch" required>
        <option value="<?= $row['branch'] ?>" selected><?= $row['branch'] ?></option>
        <option value="IT">IT</option>
        <option value="CS">CS</option>
        <option value="IS">IS</option>
        <option value="ACT">ACT</option>
    </select>
    <input type="email" name="email" value="<?= $row['email'] ?>" required>
    <input type="text" name="contact" value="<?= $row['contact'] ?>" required>
    <button type="submit">Update</button>
</form>
<a href="read.php">← Back</a>
</div>
</body>
</html>
