<!DOCTYPE html>
<html>
<head>
<title>Edit Project</title>
<style>
body { background:#1f1f1f; color:#fff; font-family:Arial; padding:30px; }
input, textarea { width:100%; padding:12px; background:#333; border:1px solid #555; color:#fff; margin:10px 0; border-radius:6px; }
button { padding:12px 20px; background:#4CAF50; color:white; border:none; border-radius:6px; cursor:pointer; }
a { color:#4CAF50; }
</style>
</head>
<body>

<h2>Edit Project</h2>

<form action="{{ route('admin.update', $project->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" value="{{ $project->name }}" required>
    <input type="text" name="title" value="{{ $project->title }}" required>
    <textarea name="description" required>{{ $project->description }}</textarea>

    <p>Current Image:</p>
    @if($project->image)
        <img src="/upload/{{ $project->image }}" width="120"><br>
    @endif

    <input type="file" name="image">
    <button>Update</button>
</form>

<br>
<a href="{{ route('admin.dashboard') }}">Back</a>

</body>
</html>
