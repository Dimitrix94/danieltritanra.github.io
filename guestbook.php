<?php
$host = "localhost";
$db = "portfolio_db";
$user = "danieltrihendartotanra";
$pass = "danieltanra2";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$note = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $conn->real_escape_string($_POST['name']);
  $comment = $conn->real_escape_string($_POST['comment']);

  $sql = "INSERT INTO guestbook_entries (name, comment) VALUES ('$name', '$comment')";
  $note = $conn->query($sql) ? "✅ Comment posted!" : "❌ Error: " . $conn->error;
}

$entries = $conn->query("SELECT * FROM guestbook_entries ORDER BY posted_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Guestbook</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <main class="container">
    <h2>Guestbook</h2>
    <form method="POST">
      <label>Your Name</label><br>
      <input type="text" name="name" required><br><br>

      <label>Your Comment</label><br>
      <textarea name="comment" rows="4" required></textarea><br><br>

      <button type="submit" class="btn">Post Comment</button>
    </form>
    <p><?= $note ?></p>

    <h3>Previous Comments:</h3>
    <?php while ($row = $entries->fetch_assoc()): ?>
      <div class="card">
        <strong><?= htmlspecialchars($row['name']) ?></strong> on <?= $row['posted_at'] ?><br>
        <p><?= nl2br(htmlspecialchars($row['comment'])) ?></p>
      </div>
    <?php endwhile; ?>
  </main>
</body>
</html>
