<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;

class AdminController extends Controller
{
    public function showLogin()
    {
        if (auth()->check() && auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            if (auth()->user()->role !== 'admin') {
                Auth::logout();
                return back()->withErrors(['access' => 'Not an admin account']);
            }
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    // DASHBOARD
    public function dashboard()
    {
        $projects = Project::all();
        return view('admin.dashboard', compact('projects'));
    }

    // CREATE
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image'
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('upload'), $imageName);
        }

        Project::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName
        ]);

        return redirect()->route('admin.dashboard')->with('status', 'Project added!');
    }

    // EDIT
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image'
        ]);

        $imageName = $project->image;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('upload'), $imageName);
        }

        $project->update([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName
        ]);

        return redirect()->route('admin.dashboard')->with('status', 'Project updated!');
    }

    // DELETE
    public function delete($id)
    {
        $project = Project::findOrFail($id);

        if ($project->image && file_exists(public_path('upload/' . $project->image))) {
            unlink(public_path('upload/' . $project->image));
        }

        $project->delete();

        return redirect()->route('admin.dashboard')->with('status', 'Project deleted!');
    }
}
