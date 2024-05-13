<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "admin" || "joy" && $password == "pass") {
        session_start();
        $_SESSION["user"] = "admin";
        header("Location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-image: url('ewu_back_logon.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            /* Increased max-width */
            margin: 0 auto;
            margin-top: 100px;
        }

        .login-form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            /* Increased padding */
            border-radius: 20px;
            /* Increased border-radius */
            box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.2);
            /* Increased box shadow */
        }

        .form-field input[type="text"],
        .form-field input[type="password"] {
            width: 100%;
            padding: 15px;
            /* Increased padding */
            border: 2px solid #ced4da;
            /* Increased border size */
            border-radius: 10px;
            /* Increased border-radius */
            margin-bottom: 20px;
            /* Increased margin bottom */
        }

        .form-field input[type="submit"] {
            width: 100%;
            padding: 15px;
            /* Increased padding */
            border: none;
            border-radius: 10px;
            /* Increased border-radius */
            background-color: #007bff;
            color: #ffffff;
            cursor: pointer;
        }

        .form-field input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Style for the admin login panel */
        .admin-panel {
            text-align: center;
            color: #007bff;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="login-form">
            <!-- Admin Login Panel Text -->
            <div class="admin-panel">
                ADMIN LOGIN PANEL
            </div>
            <!-- End Admin Login Panel Text -->

            <form action="login.php" method="post">
                <div class="form-field mb-4">
                    <input class="form-control" type="text" name="username" placeholder="Username">
                </div>
                <div class="form-field mb-4">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="form-field mb-4">
                    <input class="btn btn-primary" type="submit" value="Login" name="login">
                </div>
            </form>
        </div>
    </div>
</body>

</html>