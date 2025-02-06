<?php
    session_start();
    $_SESSION['username'] = 'Faizan Khan'; // Temporary username for demo
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }
        body {
            background: #f8f9fa;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 28px;
            color: #343a40;
        }
        p {
            font-size: 18px;
            margin-top: 10px;
        }
        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            transition: 0.3s;
        }
        .logout-btn:hover {
            background: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <p><?php echo "Today is " . date('l, F j, Y'); ?></p>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
