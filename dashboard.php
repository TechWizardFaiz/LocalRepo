<?php
    session_start();
    $_SESSION['username'] = 'Faizan Khan'; // Temporary username for demo
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }
        body {
            background: linear-gradient(to right, #007bff, #6610f2);
            color: white;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }
        h1 {
            font-size: 32px;
            font-weight: 700;
            color: #ffeb3b;
        }
        p {
            font-size: 18px;
            margin-top: 10px;
        }
        .logout-btn {
            display: inline-block;
            padding: 12px 24px;
            margin-top: 20px;
            background: #ff4444;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: 0.3s;
        }
        .logout-btn:hover {
            background: #cc0000;
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
