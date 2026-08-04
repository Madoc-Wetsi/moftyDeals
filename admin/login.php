<?php
session_start();
include("../PHP/database.php");

$message = "";

if (isset($_POST['login'])) {
  $Username = $_POST['username'];
  $Password = $_POST['password'];

  $sql = "SELECT * FROM admin WHERE user_name='$Username' AND password='$Password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    $_SESSION['admin'] = $Username;
    header('Location: dashboard.php');
    exit();
  } else {
    $message = "Invalid username or password.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
  <?php if (!empty($message)): ?>
    <div class="error-message"><?php echo htmlspecialchars($message); ?></div>
  <?php endif; ?>

  <div class="login-box">
    <h2>Admin Login</h2>
    <form method="post" autocomplete="off">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" name="login">Login</button>
      <a href="#">Forgot Password?</a>
    </form>
  </div>
</body>
</html>