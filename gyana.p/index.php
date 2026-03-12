<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Notexia — Online Notes System</title>

<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>

<header>

<div class="logo">
<img src="notexeria.jpg" alt="logo">
<span>Notexia</span>
</div>

<nav>
<a href="./index.php" class="active">Home</a>
<a href="./notes.html">Notes</a>
<a href="./repository.html">Repository</a>
<a href="./upload.php">Upload</a>
<a href="register.php">Register</a>
<a href="login.php">Login</a>
</nav>

</header>

<main class="page-content">

<!-- HERO -->
<section class="hero">

<div class="overlay"></div>

<div class="hero-content">
<h1>Online Notes & Repository System</h1>
<p>Store • Share • Download academic notes</p>

<a href="./login.php">
<button class="glow-btn">Join Notexia</button>
</a>
</div>

</section>

<!-- FEATURES -->
<section class="features">

<div class="card">
<img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c">
<h3>Upload Notes</h3>
<p>Upload PDFs & class notes securely</p>
<a href="./upload.php"><button>Upload Now</button></a>
</div>

<div class="card">
<img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6">
<h3>Browse Repository</h3>
<p>Explore organized resources</p>
<a href="./repository.html"><button>Explore</button></a>
</div>

<div class="card">
<img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b">
<h3>Download Instantly</h3>
<p>Fast cloud downloads</p>
<a href="./notes.html"><button>Download</button></a>
</div>

</section>

<!-- CONTACT -->
<section class="contact-home">

<h2>Contact Us</h2>
<p>Have questions? We’re here to help.</p>

<div class="contact-grid">
<form class="contact-form" action="contact.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Email Address" required>
    <textarea name="message" placeholder="Message..." rows="4" required></textarea>
    <button type="submit">Send Message</button>
</form>
<div class="contact-info">
<h3>Support Info</h3>

<p>📧 <a href="mailto:support@notexia.com">support@notexia.com</a></p>
<p>📞 <a href="tel:+919692262756">+91 96922 62756</a></p>
<p>📍 Bhubaneswar, India</p>
<p>📢 <a href="https://t.me/yourchannel" target="_blank">Join our Telegram channel</a></p>

</div>

</div>
</section>

</main>

<footer>
© 2026 Notexia • Always with you ❤️
</footer>

</body>
</html>