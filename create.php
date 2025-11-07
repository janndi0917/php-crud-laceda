<?php
include 'config/db.php';
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_no = $_POST['student_no'];
    $fullname   = $_POST['fullname'];
    $branch     = $_POST['branch'];
    $email      = $_POST['email'];
    $contact    = $_POST['contact'];

    $sql = "INSERT INTO students (student_no, fullname, branch, email, contact)
            VALUES ('$student_no', '$fullname', '$branch', '$email', '$contact')";
    $message = $conn->query($sql) ? "<p class='success'>✅ Student added!</p>" : "<p class='error'>❌ Error: " . $conn->error . "</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Student</title>
<style>
    body {background:#121212;color:#fff;font-family:Segoe UI;display:flex;justify-content:center;align-items:center;height:100vh;}
    .container {background:#1e1e1e;padding:2rem;border-radius:20px;box-shadow:0 0 25px rgba(0,255,255,0.1);width:400px;}
    h2 {text-align:center;color:#00c3ff;}
    input, select {width:100%;padding:10px;margin:10px 0;background:#2a2a2a;border:none;border-radius:10px;color:#fff;}
    button {width:100%;padding:12px;border:none;border-radius:10px;background:linear-gradient(90deg,#00c3ff,#0077ff);color:#fff;font-weight:bold;cursor:pointer;}
    button:hover {transform:scale(1.02);}
    .success, .error {text-align:center;padding:10px;border-radius:10px;margin-bottom:10px;}
    .success {background:#003c2f;color:#00ffb3;}
    .error {background:#3c0000;color:#ff7070;}
    a {display:block;text-align:center;margin-top:10px;color:#00c3ff;text-decoration:none;}
</style>
</head>
<body>
<div class="container">
    <h2>Add New Student</h2>
    <?= $message ?>
    <form method="POST">
        <input type="text" name="student_no" placeholder="Student Number" required>
        <input type="text" name="fullname" placeholder="Full Name" required>
        <select name="branch" required>
            <option value="" disabled selected>Select Branch</option>
            <option value="IT">IT</option>
            <option value="CS">CS</option>
            <option value="IS">IS</option>
            <option value="ACT">ACT</option>
        </select>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="contact" placeholder="Contact" required>
        <button type="submit">Save Student</button>
    </form>
    <a href="index.php">← Back to Homepage</a>
</div>
</body>
</html>
