<!DOCTYPE html>
<html>
<head>
<title>Add Project</title>
<style>
body { background:#1f1f1f; color:#fff; font-family:Arial; padding:30px; }
input, textarea { width:100%; padding:12px; background:#333; border:1px solid #555; color:#fff; margin:10px 0; border-radius:6px; }
button { padding:12px 20px; background:#4CAF50; color:white; border:none; border-radius:6px; cursor:pointer; }
a { color:#4CAF50; }
</style>
</head>
<body>

<h2>Add Project</h2>

<form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="title" placeholder="Title" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <input type="file" name="image">
    <button>Add</button>
</form>

<br>
<a href="{{ route('admin.dashboard') }}">Back</a>

</body>
</html>
