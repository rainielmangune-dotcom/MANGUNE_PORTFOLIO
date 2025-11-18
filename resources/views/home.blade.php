<?php
// ----------------------
// PHP FORM HANDLER
// ----------------------
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $status = "<p style='color:#4CAF50;'>Message Sent Successfully!</p>
               <p><strong>Name:</strong> $name</p>
               <p><strong>Email:</strong> $email</p>
               <p><strong>Message:</strong> $message</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rainiel A. Mangune | Portfolio</title>

  <!-- ========== CSS SECTION ========== -->
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    
    /* Formal dark background */
    body { 
        font-family: Arial, sans-serif; 
        line-height: 1.6; 
        color: #e6e6e6; 
        background: #1f1f1f; 
    }

    .container { width: 90%; max-width: 1000px; margin: auto; }

    header { 
        background: #2b2b2b; 
        padding: 15px 0; 
        border-bottom: 1px solid #444; 
        position: sticky; 
        top: 0; 
        z-index: 10; 
    }
    header .container { display: flex; justify-content: space-between; align-items: center; }
    header .logo { font-size: 1.5em; font-weight: bold; color: #fff; }
    nav ul { list-style: none; display: flex; gap: 20px; }
    nav ul li a { text-decoration: none; color: #ddd; font-weight: 500; }
    nav ul li a:hover { color: #4CAF50; }

    .hero { display: flex; align-items: center; justify-content: space-between; padding: 80px 0; }
    .hero-text h2 { font-size: 2em; margin-bottom: 10px; }
    .hero-text h1 { font-size: 3em; margin-bottom: 20px; }
    .highlight { color: #4CAF50; }
    .hero-text p { font-size: 1.2em; margin-bottom: 30px; color: #ccc; }
    .btn { padding: 10px 20px; background: #4CAF50; color: #fff; text-decoration: none; border-radius: 4px; }
    .btn:hover { background: #3e8e41; }

    .hero-image { display: none; }

    .social-icons a { margin-right: 10px; font-size: 1.4em; color: #ccc; }
    .social-icons a:hover { color: #4CAF50; }

    section { padding: 60px 0; }
    section h2 { text-align: center; font-size: 2em; margin-bottom: 20px; color: #fff; }

    .skills ul { display: flex; list-style: none; flex-wrap: wrap; justify-content: center; gap: 10px; }
    .skills ul li { background: #333; padding: 8px 12px; border-radius: 4px; color: #ddd; }

    .work-list { max-width: 700px; margin: auto; list-style: disc; padding-left: 20px; line-height: 1.8; color: #ccc; }

    .contact form { max-width: 500px; margin: auto; display: flex; flex-direction: column; gap: 15px; }
    .contact input, .contact textarea { padding: 10px; border: 1px solid #555; background: #2b2b2b; color: #fff; border-radius: 4px; font-size: 1em; }
    .contact button { padding: 10px; background: #4CAF50; color: #fff; border: none; border-radius: 4px; cursor: pointer; }
    .contact button:hover { background: #3e8e41; }

    footer { background: #2b2b2b; text-align: center; padding: 20px 0; border-top: 1px solid #444; }
    footer p { color: #999; }

    @media (max-width: 768px) {
      .hero { flex-direction: column-reverse; text-align: center; }
    }
  </style>
</head>
<body>

  <header>
    <div class="container">
      <div class="logo">Rainiel</div>
      <nav>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#education">Education</a></li>
          <li><a href="#work">Work</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="home" class="hero">
    <div class="container">
      <div class="hero-text">
        <h2>Hi There,</h2>
        <h1>I'm <span class="highlight">Rainiel A. Mangune</span></h1>
        <p>I am into Web Development</p>
        <a href="#about" class="btn">About Me</a>
        <div class="social-icons">
          <a href="#" title="LinkedIn">🔗</a>
          <a href="#" title="GitHub">🐙</a>
          <a href="#" title="Twitter">🐦</a>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about">
    <div class="container">
      <h2>About Me</h2>
      <p style="max-width: 750px; margin: auto; text-align: center; color: #ccc;">
        I am Rainiel A. Mangune, a passionate and dedicated web developer currently 
        pursuing my Bachelor of Science in Computer Science. I am committed to improving 
        my skills in front-end and back-end development, problem-solving, and modern 
        web technologies. My goal is to create efficient, responsive, and user-friendly 
        digital experiences while continuously learning and adapting to the fast-paced 
        world of technology.
      </p>
    </div>
  </section>

  <section id="skills" class="skills">
    <div class="container">
      <h2>Skills</h2>
      <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>JavaScript</li>
        <li>PHP</li>
        <li>Laravel</li>
        <li>MySQL</li>
      </ul>
    </div>
  </section>

  <section id="education" class="education">
    <div class="container">
      <h2>Education</h2>
      <p style="text-align:center; color:#ccc;">
        I am currently a <strong>3rd year BSCS student</strong> improving my skills in 
        software development, web technologies, and computer systems.
      </p>
    </div>
  </section>

  <section id="work" class="work">
    <div class="container">
      <h2>Work / Experience</h2>
      <p style="color:#ccc;">
        I completed my OJT at <strong>Blue Phenix Computer</strong>, where I gained experience in:
      </p>
      <ul class="work-list">
        <li>Computer hardware assembly & disassembly</li>
        <li>Troubleshooting and diagnostics</li>
        <li>Software installation and configuration</li>
        <li>Customer technical assistance</li>
      </ul>
    </div>
  </section>

  <section id="contact" class="contact">
    <div class="container">
      <h2>Contact Me</h2>

      <?php if (isset($status)) echo $status; ?>

      <form method="POST">
        <input type="text" name="name" placeholder="Your Name" required />
        <input type="email" name="email" placeholder="Your Email" required />
        <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
        <button type="submit">Send</button>
      </form>

    </div>
  </section>

  <footer>
    <div class="container">
      <p>© 2025 Rainiel A. Mangune</p>
    </div>
  </footer>

</body>
</html>
