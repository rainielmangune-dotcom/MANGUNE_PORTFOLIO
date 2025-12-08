<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register | Rainiel Portfolio</title>
<style>
body { font-family:'Inter'; margin:0; background:#1f1f1f; color:#e6e6e6; height:100vh; display:flex; justify-content:center; align-items:center; }
.glass-box { width:100%; max-width:450px; padding:40px; background:rgba(43,43,43,0.95); border-radius:24px; border:1px solid rgba(255,255,255,0.1); text-align:center; }
h2 { margin-bottom:25px; color:#4CAF50; }
.input-field { width:90%; padding:14px; margin:12px 0; background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.1); border-radius:12px; color:#fff; }
.input-field:focus { outline:none; border-color:#4CAF50; }
.register-btn { width:100%; padding:14px; background:#4CAF50; color:#fff; border:none; border-radius:14px; cursor:pointer; }
.register-btn:hover { transform:translateY(-2px); }
</style>
</head>
<body>
<div class="glass-box">
    <h2>Register</h2>
    @if(session('status'))<div style="color:#4CAF50; margin-bottom:10px;">{{ session('status') }}</div>@endif
    @if($errors->any())<div style="color:#ff4d4d; margin-bottom:10px;">@foreach($errors->all() as $error)<p>{{ $error }}</p>@endforeach</div>@endif
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" class="input-field" required>
        <input type="email" name="email" placeholder="Email" class="input-field" required>
        <input type="password" name="password" placeholder="Password" class="input-field" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="input-field" required>
        <button type="submit" class="register-btn">Register</button>
    </form>
    <p><a href="{{ route('login.form') }}" style="color:#4CAF50;">Already have an account? Login</a></p>
    <p><a href="{{ route('welcome') }}" style="color:#4CAF50;">Back to Welcome</a></p>
</div>
</body>
</html>
