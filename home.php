<?php include("header.php"); ?>
<main>
  <section class="hero">
    <div class="container">
      <div class="hero-text">
        <h2>Hello, I'm Daniel Tri Hendarto Tanra 👋</h2>
        <p>Network and Security Student at Universiti Teknologi Malaysia (UTM). Programmer, writer, business planner, and runner.</p>
        <a href="projects.php" class="btn">See My Work</a>
      </div>
      <div class="hero-img">
        <img src="daniel winning.jpg" alt="Daniel's Photo" />
      </div>
    </div>
  </section>

  <section class="about-preview">
    <div class="container">
      <h2>About Me</h2>
      <p>I’m an undergraduate student majoring in Network and Security at UTM. I work to sharpen my programming skills and grow into a cybersecurity professional. I also enjoy business, writing, filmmaking, running, and public speaking. Follow my journey on Instagram @daniel.tanra</p>
      <a href="about.php" class="btn-outline">More About Me</a>
    </div>
  </section>

  <section class="project-preview">
    <div class="container">
      <h2>Recent Projects</h2>
      <div class="project-cards">
        <div class="card">
          <img src="security testing.png" alt="Penetration Tester Project" />
          <h3>Penetration Tester for Website</h3>
          <p>Responsive tool built using Google API to evaluate web vulnerabilities.</p>
        </div>
        <div class="card">
          <img src="encrypt-decrypt-text.png" alt="Encryption Tool" />
          <h3>Cryptographic Algorithms for Text Encryption</h3>
          <p>Implements ciphers like Caesar and Vigenère for text encryption and decryption.</p>
        </div>
      </div>
      <a href="projects.php" class="btn-outline">View All Projects</a>
    </div>
  </section>
</main>
<?php include("footer.php"); ?>
