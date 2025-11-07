<?php
include 'config/db.php';
$result = $conn->query("SELECT * FROM students");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Students</title>
<style>
    body {background:#121212;color:#fff;font-family:Segoe UI;padding:30px;}
    table {width:100%;border-collapse:collapse;margin-top:20px;}
    th, td {border-bottom:1px solid #333;padding:10px;text-align:left;}
    th {color:#00c3ff;}
    tr:hover {background:#1e1e1e;}
    a.button {padding:8px 12px;border-radius:8px;text-decoration:none;color:#fff;margin-right:5px;}
    .edit {background:#0077ff;}
    .delete {background:#ff4040;}
    .add {background:#00c3ff;}
</style>
</head>
<body>
<h2>📋 Student Records</h2>
<a href="create.php" class="button add">+ Add Student</a>
<table>
    <tr>
        <th>ID</th><th>Student No</th><th>Full Name</th><th>Branch</th><th>Email</th><th>Contact</th><th>Date Added</th><th>Actions</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['student_no'] ?></td>
        <td><?= $row['fullname'] ?></td>
        <td><?= $row['branch'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['contact'] ?></td>
        <td><?= $row['date_added'] ?></td>
        <td>
            <a href="update.php?id=<?= $row['id'] ?>" class="button edit">Edit</a>
            <a href="delete.php?id=<?= $row['id'] ?>" class="button delete">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
<a href="index.php" style="color:#00c3ff;">← Back to Homepage</a>
</body>
</html>
