<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rainiel A. Mangune | Portfolio</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; background: #f9f9f9; }
    .container { width: 90%; max-width: 1000px; margin: auto; }

    header { background: #fff; padding: 15px 0; border-bottom: 1px solid #ddd; position: sticky; top: 0; z-index: 10; }
    header .container { display: flex; justify-content: space-between; align-items: center; }
    header .logo { font-size: 1.5em; font-weight: bold; color: #222; }
    nav ul { list-style: none; display: flex; gap: 20px; }
    nav ul li a { text-decoration: none; color: #333; font-weight: 500; }
    nav ul li a:hover { color: #007BFF; }

    .hero { display: flex; align-items: center; justify-content: space-between; padding: 80px 0; }
    .hero-text { max-width: 600px; }
    .hero-text h2 { font-size: 2em; margin-bottom: 10px; }
    .hero-text h1 { font-size: 3em; margin-bottom: 20px; }
    .hero-text .highlight { color: #FF8500; }
    .hero-text p { font-size: 1.2em; margin-bottom: 30px; }
    .btn { display: inline-block; padding: 10px 20px; background: #007BFF; color: #fff; text-decoration: none; border-radius: 4px; transition: background 0.3s; }
    .btn:hover { background: #0056b3; }
    .social-icons { margin-top: 20px; }
    .social-icons a { margin-right: 10px; text-decoration: none; color: #333; font-size: 1.4em; }

    /* Hide the avatar image container */
    .hero-image {
      display: none;
    }

    section { padding: 60px 0; }
    section h2 { text-align: center; font-size: 2em; margin-bottom: 20px; }
    .about p, .skills ul, .education p, .work p { max-width: 700px; margin: auto; }
    .skills ul { list-style: none; display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; }
    .skills ul li { background: #e0e0e0; padding: 8px 12px; border-radius: 4px; }

    .contact form { max-width: 500px; margin: auto; display: flex; flex-direction: column; gap: 15px; }
    .contact input, .contact textarea { padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 1em; }
    .contact button { padding: 10px; background: #007BFF; color: #fff; border: none; border-radius: 4px; cursor: pointer; }
    .contact button:hover { background: #0056b3; }

    footer { background: #fff; text-align: center; padding: 20px 0; border-top: 1px solid #ddd; }
    footer p { color: #777; }

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
      <!-- Removed / hidden avatar -->
      <div class="hero-image">
        <img src="https://via.placeholder.com/280" alt="Your avatar" />
      </div>
    </div>
  </section>

  <section id="about" class="about">
    <div class="container">
      <h2>About Me</h2>
      <p>POGI LANG!</p>
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
      <p>WALA PA NGANI!</p>
    </div>
  </section>

  <section id="work" class="work">
    <div class="container">
      <h2>Work / Experience</h2>
      <p>WALA PA NGANI!</p>
    </div>
  </section>

  <section id="contact" class="contact">
    <div class="container">
      <h2>Contact Me</h2>
      <form action="#" method="POST">
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
