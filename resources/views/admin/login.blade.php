<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<style>
body { background:#1f1f1f; color:#fff; font-family:Arial; height:100vh; display:flex; justify-content:center; align-items:center; }
.box { background:#2b2b2b; padding:40px; border-radius:12px; width:350px; }
input { width:100%; padding:12px; margin:10px 0; background:#333; border:1px solid #555; color:white; border-radius:6px; }
button { width:100%; padding:12px; background:#4CAF50; border:none; color:white; border-radius:6px; cursor:pointer; }
button:hover { background:#3e8e41; }
</style>
</head>
<body>

<div class="box">
    <h2>Admin Login</h2>

    @if($errors->any())
        <p style="color:red">{{ $errors->first() }}</p>
    @endif

    <form action="{{ route('admin.login.post') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Admin Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button>Login</button>
    </form>
</div>

</body>
</html>
