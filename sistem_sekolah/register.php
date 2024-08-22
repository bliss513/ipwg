<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPP Management System</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 50%; margin: auto; }
        form { margin-bottom: 20px; }
        label { display: block; margin: 10px 0 5px; }
        input, select { width: 100%; padding: 8px; margin-bottom: 10px; }
        button { padding: 10px 15px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #45a049; }
        .message { color: green; }
    </style>
</head>
<body>
    <div class="container">
        <h1>SPP Management System</h1>

        <h2>Register Student</h2>
        <form action="register_student.php" method="post">
            <label for="name">Student Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="class">Class:</label>
            <input type="text" id="class" name="class" required>

            <button type="submit">Register</button>
        </form>

        <h2>Make Payment</h2>
        <form action="make_payment.php" method="post">
            <label for="student_id">Student ID:</label>
            <input type="number" id="student_id" name="student_id" required>

            <label for="amount">Payment Amount:</label>
            <input type="number" id="amount" name="amount" step="0.01" required>

            <button type="submit">Pay</button>
        </form>

        <div class="message">
            <?php
                // Display messages if any
                if (isset($_GET['message'])) {
                    echo htmlspecialchars($_GET['message']);
                }
            ?>
        </div>
    </div>
</body>
</html>
