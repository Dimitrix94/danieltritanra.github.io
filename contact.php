<?php
$host = "localhost";  
$db = "portfolio_db";
$user = "danieltrihendartotanra";
$pass = "danieltanra2";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$msg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $conn->real_escape_string($_POST['name']);
  $email = $conn->real_escape_string($_POST['email']);
  $message = $conn->real_escape_string($_POST['message']);

  $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
  if ($conn->query($sql)) {
    $msg = "✅ Message sent successfully!";
  } else {
    $msg = "❌ Error: " . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Contact Me</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <main class="container">
    <h2>Contact Me</h2>
    <form method="POST" action="">
      <label>Name</label><br>
      <input type="text" name="name" required><br><br>

      <label>Email</label><br>
      <input type="email" name="email" required><br><br>

      <label>Message</label><br>
      <textarea name="message" rows="5" required></textarea><br><br>

      <button type="submit" class="btn">Send Message</button>
    </form>
    <p><?= $msg ?></p>
  </main>
</body>
</html>
