<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<style>
body { background:#1f1f1f; color:#fff; font-family:Arial; padding:20px; }
table { width:100%; border-collapse:collapse; margin-top:20px; }
table th, table td { border:1px solid #444; padding:10px; text-align:left; }
a.btn { padding:8px 12px; background:#4CAF50; color:white; text-decoration:none; border-radius:6px; }
a.del { background:#ff4d4d; }
.top { display:flex; justify-content:space-between; align-items:center; }
</style>
</head>
<body>

<div class="top">
    <h2>Admin Dashboard</h2>
    <div>
        <a href="{{ route('admin.create') }}" class="btn">Add Project</a>
        <form action="{{ route('admin.logout') }}" method="POST" style="display:inline">
            @csrf
            <button class="btn" style="background:#555">Logout</button>
        </form>
    </div>
</div>

@if(session('status'))
<p style="color:#4CAF50">{{ session('status') }}</p>
@endif

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Title</th>
    <th>Description</th>
    <th>Image</th>
    <th>Actions</th>
</tr>

@foreach($projects as $p)
<tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->name }}</td>
    <td>{{ $p->title }}</td>
    <td>{{ $p->description }}</td>
    <td>
        @if($p->image)
            <img src="/upload/{{ $p->image }}" width="80">
        @endif
    </td>
    <td>
        <a href="{{ route('admin.edit', $p->id) }}" class="btn">Edit</a>
        <a href="{{ route('admin.delete', $p->id) }}" class="btn del">Delete</a>
    </td>
</tr>
@endforeach
</table>

</body>
</html>
