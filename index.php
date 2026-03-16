<?php
// Simple PHP test
$message = "Hello from PHP on GitHub!";
$date = date("Y-m-d H:i:s");
?>
<p>Auto Deploy Test ID: <?php echo uniqid(); ?></p>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP GitHub Test</title>
    <p>Auto Deploy Test ID: <?php echo uniqid(); ?></p>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            text-align: center;
            padding: 40px;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        .info {
            margin-top: 20px;
            padding: 10px;
            background: #eef;
            border-radius: 6px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1><?php echo $message; ?></h1>

    <div class="info">
        <p><strong>Server Time:</strong> <?php echo $date; ?></p>
        <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
        <p><strong>Server Software:</strong> <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?></p>
    </div>

    <p>If you can see this page, PHP is working correctly.</p>
</div>

</body>
</html>
