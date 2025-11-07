<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Branch Directory System</title>
<style>
    body {
        background-color: #121212;
        color: #e0e0e0;
        font-family: 'Segoe UI', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .container {
        text-align: center;
        background-color: #1e1e1e;
        padding: 2rem 3rem;
        border-radius: 20px;
        box-shadow: 0 0 25px rgba(0, 255, 255, 0.1);
    }
    h1 {
        color: #00c3ff;
        margin-bottom: 1.5rem;
    }
    a {
        display: block;
        margin: 10px 0;
        padding: 12px;
        background: linear-gradient(90deg, #00c3ff, #0077ff);
        color: #fff;
        border-radius: 10px;
        text-decoration: none;
        transition: 0.3s;
    }
    a:hover {
        transform: scale(1.05);
        background: linear-gradient(90deg, #0077ff, #00c3ff);
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Student Branch Directory System</h1>
        <a href="create.php">➕ Add Student</a>
        <a href="read.php">📋 View Students</a>
        <a href="read.php">✏️ Update Student</a>
        <a href="read.php">🗑️ Delete Student</a>
    </div>
</body>
</html>
