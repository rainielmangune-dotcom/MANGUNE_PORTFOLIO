<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome | Rainiel Portfolio</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
<style>
body { font-family:'Inter'; margin:0; background:#1f1f1f; color:#e6e6e6; height:100vh; display:flex; justify-content:center; align-items:center; }
.glass-box { width:100%; max-width:500px; padding:50px; background:rgba(43,43,43,0.95); border-radius:24px; border:1px solid rgba(255,255,255,0.1); backdrop-filter:blur(15px); text-align:center; }
h1 { font-size:2.5em; margin-bottom:10px; }
p { font-size:1.2em; margin-bottom:30px; color:#ccc; }
.btn { padding:12px 25px; margin:0 10px; background:#4CAF50; color:#fff; font-weight:600; text-decoration:none; border-radius:12px; }
.btn:hover { background:#3e8e41; }
</style>
</head>
<body>
<div class="glass-box">
    <h1>Hi I am Rainiel Mangune</h1>
    <p>Welcome to my portfolio</p>
    <a href="{{ route('login.form') }}" class="btn">Login</a>
    <a href="{{ route('register.form') }}" class="btn">Sign Up</a>
</div>
</body>
</html>