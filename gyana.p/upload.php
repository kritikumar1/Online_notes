<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sell Notes - Notexia</title>

<link rel="stylesheet" href="upload.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

<header>
<div class="logo">
<img src="notexeria.jpg" alt="logo">
<span>Notexia</span>
</div>

<nav>
<a href="index.php">Home</a>
<a href="notes.html">Notes</a>
<a href="repository.html">Repository</a>
<a class="active">Upload</a>
<a href="login.php">Login</a>
</nav>
</header>

<section class="upload">

<h1>Sell Your Notes</h1>
<p>Upload and earn money from your study materials</p>

<form id="uploadForm" enctype="multipart/form-data">

<div class="upload-box">
<input type="file" id="fileInput" required>
</div>

<div class="meta">

<input type="text" id="title" placeholder="Notes Title" required>

<input type="number" id="price" placeholder="Price ₹" required>

<select id="subject" required>
<option value="">Select Subject</option>
<option>Computer Science</option>
<option>Engineering</option>
<option>Business</option>
<option>Science</option>
</select>

<textarea id="description" placeholder="Description"></textarea>

<button type="submit">Publish Notes</button>

</div>

</form>

</section>

<section class="market">

<h2>Trending Notes</h2>

<div class="grid">

<div class="card">
<h3>Data Structures Master Notes</h3>
<p>CS • 50 pages</p>
<span>₹49</span>
<button>Buy Now</button>
</div>

<div class="card">
<h3>Thermodynamics Full Guide</h3>
<p>Mechanical</p>
<span>₹39</span>
<button>Buy Now</button>
</div>

<div class="card">
<h3>Business Management PDF</h3>
<p>BBA</p>
<span>₹29</span>
<button>Buy Now</button>
</div>

</div>

</section>

<footer>
© 2026 Notexia Marketplace ❤️
</footer>

<script>
document.getElementById("uploadForm").addEventListener("submit", function(e){
e.preventDefault();

alert("Upload successful! (Backend connect kale real upload heba)");

this.reset();
});
</script>

</body>
</html>