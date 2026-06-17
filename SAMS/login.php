<?php
session_start();
include "php/config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - SAMS</title>
</head>
<body>

<h2>Login Page</h2>

<form method="POST">
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="login">Login</button>
</form>

<?php
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // simple query (we will improve later)
    $query = "SELECT * FROM students WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // for now we check email only (password later we improve)
        $_SESSION['user'] = $row['name'];

        echo "Login successful. Welcome " . $row['name'];
    } else {
        echo "Invalid login details";
    }
}
?>

</body>
</html>