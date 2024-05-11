<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        .submitted-data {
            margin-top: 20px;
        }

        .submitted-data p {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Form Submission Result</h2>
        <div class="submitted-data">
            <?php

            // Establish database connection
            $servername = "localhost";
            $username = "root"; // default XAMPP username
            $password = ""; // default XAMPP password
            $database = "contact_form_db"; // your database name
            $conn = new mysqli($servername, $username, $password, $database);

            // Retrieve form data
            $name = $_POST['name'];
            $student_id = $_POST['student_id'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Student ID:</strong> $student_id</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Phone Number:</strong> $phone</p>";
            echo "<p><strong>Subject:</strong> $subject</p>";
            echo "<p><strong>Message:</strong> $message</p>";

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Insert form data into database
            $sql = "INSERT INTO contact_form (name, student_id, email, phone, subject, message) 
                    VALUES ('$name', '$student_id', '$email', '$phone', '$subject', '$message')";

            if ($conn->query($sql) === TRUE) {
                echo "<h2 style='text-align: center;'>Form submitted successfully!</h2>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }


            // Close database connection
            $conn->close();
            ?>
        </div>
    </div>

    <!-- CREATE TABLE contact_form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    student_id VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    attachment VARCHAR(255),
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); -->

</body>

</html>