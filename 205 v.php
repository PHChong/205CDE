?php

$mysqli = mysqli_connect("localhost", "username", "password", "database");

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0) {
    // The username and password are valid.
    header("Location: /home.php");
} else {
    // The username and password are not valid.
    echo "Invalid username or password.";
}

mysqli_close($mysqli);

?>

