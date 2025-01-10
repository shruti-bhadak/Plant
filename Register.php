<?php
include('db.php'); // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input (simple validation)
    if (empty($first_name) || empty($last_name) || empty($mobile) || empty($email) || empty($password)) {
        $error = "All fields are required.";
    } else {
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert data into the database
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, mobile, email, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $first_name, $last_name, $mobile, $email, $hashed_password);

        if ($stmt->execute()) {
            $success_message = "Registration successful! <a href='LoginPage.php'>Click here to login</a>";
        } else {
            // If email already exists, show error
            if ($conn->errno === 1062) {
                $error = "This email is already registered. <a href='LoginPage.php'>Login here</a>";
            } else {
                $error = "Error: " . $conn->error;
            }
        }

        $stmt->close();
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Club - Registration</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body, html {
            height: 100%;
            font-family: 'Roboto', sans-serif;
        }

        /* Video background */
        .video-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            object-fit: cover;
            object-position: center;
        }

        /* Optional overlay for better readability */
        .video-bg::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: linear-gradient(145deg, #d7ffd9, #b8e7bb);
            padding: 30px;
            margin: 20px;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
            z-index: 1;
        }

        .logo img {
            width: 150px;
            margin-bottom: 20px;
            border-radius: 100px;
        }

        h2 {
            margin: 10px 0;
            color: #2f8f2f;
            font-weight: 700;
            font-size: 24px;
        }

        .textbox {
            margin: 15px 0;
        }

        .textbox input {
            width: 100%;
            max-width: 500px;
            padding: 10px;
            background: #fff;
            border: 1px solid #ddd;
            outline: none;
            border-radius: 8px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            transition: all 0.3s ease;
            margin-left: -10px;
        }

        .textbox input:focus {
            border-color: #2f8f2f;
            box-shadow: 0 0 5px rgba(47, 143, 47, 0.5);
        }

        .btn {
            width: 100%;
            padding: 15px;
            background-color: #2f8f2f;
            border: none;
            color: #fff;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #45a045;
            transform: scale(1.05);
        }

        .btn:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(47, 143, 47, 0.5);
        }

        .social {
            margin: 20px 0;
        }

        .social-icon img {
            width: 30px;
            margin: 0 10px;
            cursor: pointer;
            transition: opacity 0.3s ease;
            border-radius: 100px;
        }

        .social-icon img:hover {
            opacity: 0.8;
        }

        .error {
            color: red;
            font-size: 14px;
            margin: 10px 0;
        }

        .textbox input.error {
            border-color: red;
            box-shadow: 0 0 5px rgba(255, 0, 0, 0.5);
        }

        .error-message {
            color: red;
            font-size: 14px;
        }

        p a {
            color: #2f8f2f;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        p a:hover {
            text-decoration: underline;
            color: #1d681d;
        }
    </style>
</head>
<body>

    <!-- Video Background -->
    <video autoplay muted loop class="video-bg">
        <source src="background.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="container">
        <div class="login-box">
            <div class="logo">
                <img src="Logo.png" alt="More Green Logo">
            </div>
            <h2>Plant Club Registration</h2>

            <!-- Display error or success messages -->
            <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
            <?php if (isset($success_message)) { echo "<p>$success_message</p>"; } ?>

            <form action="register.php" method="POST">
                <div class="textbox">
                    <input type="text" name="first_name" placeholder="First Name" required>
                </div>
                <div class="textbox">
                    <input type="text" name="last_name" placeholder="Last Name" required>
                </div>
                <div class="textbox">
                    <input type="text" name="mobile" placeholder="Mobile Number" required>
                </div>
                <div class="textbox">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="textbox">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <input type="submit" class="btn" value="Register">
            </form>
            <div class="social">
                <a href="#" class="social-icon"><img src="google.png" alt="Google"></a>
                <a href="#" class="social-icon"><img src="github.png" alt="GitHub"></a>
                <a href="#" class="social-icon"><img src="facebook.png" alt="Facebook"></a>
            </div>
            <p>Already have an account? <a href="LoginPage.php">Login here</a></p>
        </div>
    </div>

</body>
</html>
