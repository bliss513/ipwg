<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPP Payment System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #007BFF;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        nav {
            margin: 20px;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            color: #007BFF;
            text-decoration: none;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        main {
            padding: 20px;
            max-width: 800px;
            margin: auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin: 10px 0 5px;
        }

        form input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        form button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #218838;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>SPP Payment System</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#" id="make-payment-link">Make a Payment</a></li>
        </ul>
    </nav>

    <main id="main-content">
        <div id="home">
            <h2>Welcome to the SPP Payment System</h2>
            <p>Here you can make payments for SPP. Click the link above to start the payment process.</p>
        </div>

        <div id="payment-form" style="display: none;">
            <h2>Make a Payment</h2>
            <form id="payment-form-element">
                <label for="student_name">Student Name:</label>
                <input type="text" id="student_name" name="student_name" required>
                <br>
                <label for="amount">Amount:</label>
                <input type="number" id="amount" name="amount" step="0.01" required>
                <br>
                <button type="submit">Submit Payment</button>
            </form>
            <button id="back-button">Back to Home</button>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 SPP Payment System. All rights reserved.</p>
    </footer>

    <script>
        document.getElementById('make-payment-link').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('home').style.display = 'none';
            document.getElementById('payment-form').style.display = 'block';
        });

        document.getElementById('back-button').addEventListener('click', function() {
            document.getElementById('home').style.display = 'block';
            document.getElementById('payment-form').style.display = 'none';
        });

        document.getElementById('payment-form-element').addEventListener('submit', function(event) {
            event.preventDefault();
            const studentName = document.getElementById('student_name').value;
            const amount = document.getElementById('amount').value;

            alert(`Payment submitted:\nStudent Name: ${studentName}\nAmount: ${amount}`);
            
            // Here you would typically send the data to a server using fetch or XMLHttpRequest.
            // For demonstration purposes, we'll just reset the form and return to the home view.
            document.getElementById('payment-form').style.display = 'none';
            document.getElementById('home').style.display = 'block';
        });
    </script>
</body>
</html>
