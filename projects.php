<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projects - Daniel Tri Hendarto Tanra</title>
  <link rel="stylesheet" href="style.css" />
  <script defer src="java.js"></script>
</head>
<body>
  <header class="main-header">
    <div class="container header-flex">
      <div class="header-left">
        <h1 class="logo">Daniel Tri Hendarto Tanra</h1>
        <a href="Daniel Tanra CV.pdf" class="btn-download" download>Curriculum Vitae</a>
      </div>
      <nav>
        <ul class="nav-links">
          <li><a href="home.html">Home</a></li>
          <li><a href="about.html">About Me</a></li>
          <li><a href="projects.html">Projects</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="project-preview">
    <div class="container">
      <h2>My Projects</h2>
      <p>Here are some of the projects I’ve worked on. Hope they inspire you.</p>
      <div class="project-cards">
        <div class="card">
          <img src="security testing.png" alt="Penetration Tester Project" />
          <h3>Penetration Tester for Website</h3>
          <p>This tool uses Google API to simulate website security scoring from 1–100 and identify vulnerabilities to potential attacks.</p>
          <a class="btn-outline" href="https://github.com/Dimitrix94?tab=repositories" target="_blank">View on GitHub</a>
        </div>

        <div class="card">
          <img src="encrypt-decrypt-text.png" alt="Encryption Tool" />
          <h3>Cryptographic Algorithms for Text Encryption</h3>
          <p>This tool applies simple encryption techniques like Caesar, Vigenère, and basic RSA for secure message encoding and decoding.</p>
          <a class="btn-outline" href="https://github.com/Dimitrix94?tab=repositories" target="_blank">View on GitHub</a>
        </div>
      </div>
    </div>
  </main>

  <footer class="main-footer">
    <div class="container">
      <p>&copy; 2025 Daniel Tri Hendarto Tanra. All rights reserved.</p>
      <div class="social">
        <a href="https://github.com/Dimitrix94" target="_blank">GitHub</a>
        <a href="https://www.linkedin.com/in/danieltrihendartotanra/" target="_blank">LinkedIn</a>
      </div>
    </div>
  </footer>
</body>
</html>
<?php include("footer.php"); ?>
