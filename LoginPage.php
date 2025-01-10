<?php
session_start();
include('db.php'); // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input (simple validation)
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Both email and password are required.";
    } else {
        // Check if the user exists in the database
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // User found, check if password is correct
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                // Password is correct, redirect to homepage
                $_SESSION['user_id'] = $user['id']; // Store user ID in session
                $_SESSION['first_name'] = $user['first_name']; // Store user's first name
                header('Location: HomePage.php'); // Redirect to homepage
                exit();
            } else {
                $_SESSION['error'] = "Incorrect password.";
            }
        } else {
            $_SESSION['error'] = "No account found with this email.";
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
    <title>Plant Club - Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Roboto', sans-serif;
            overflow: hidden;
        }

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

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: linear-gradient(145deg, #d7ffd9, #b8e7bb);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
            width: 400px;
            text-align: center;
            z-index: 1;
        }

        .logo img {
            width: 150px;
            margin-bottom: 10px;
            border-radius: 100px;
        }

        h2 {
            margin: 10px 0;
            color: #2f8f2f;
            font-weight: 700;
        }

        .textbox {
            margin: 20px 0;
            position: relative;
        }

        .textbox input {
            width: 100%;
            padding: 15px;
            background: #fff;
            border: 1px solid #ddd;
            outline: none;
            border-radius: 8px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            transition: all 0.3s ease;
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
            transform: scale(1.02);
        }

        .btn:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(47, 143, 47, 0.5);
        }

        .error {
            color: red;
            font-size: 14px;
            margin: 10px 0;
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
            <h2>Plant Club</h2>

            <!-- Display error message -->
            <?php
            if (isset($_SESSION['error'])) {
                echo "<p class='error'>" . $_SESSION['error'] . "</p>";
                unset($_SESSION['error']); // Clear the error message after displaying it
            }
            ?>

            <form action="login.php" method="POST">
                <div class="textbox">
                    <input type="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
                </div>
                <div class="textbox">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <input type="submit" class="btn" value="Login">
            </form>
            <p><a href="#">Forgot Password?</a></p>
            <p>Don't have an account yet? <a href="Register.php">Register for free</a></p>
        </div>
    </div>
    <script>
        // Slow down video speed
        document.querySelector('.video-bg').playbackRate = 0.5;
    </script>
</body>
</html>
