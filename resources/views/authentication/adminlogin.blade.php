<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Edcel's Portfolio</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --primary-color: #00f0ff;
            --bg-light: #1a1a1a;
            --bg-white: #111111;
            --dark-text: #FFFFFF;
            --body-text: #c0c0c0;
            --border-color: #333333;
            --shadow-lg: 0 0 15px rgba(0, 240, 255, 0.5);
        }

        body {
            background-color: var(--bg-white);
            font-family: 'Inter', sans-serif;
            color: var(--body-text);
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Navbar Styling */
        .navbar {
            padding: 1rem 0;
            background-color: rgba(17, 17, 17, 0.9);
            border-bottom: 1px solid var(--border-color);
        }
        .container { max-width: 1100px; margin: 0 auto; padding: 0 1.5rem; display: flex; justify-content: space-between; align-items: center; }
        .nav-logo { font-size: 1.5rem; font-weight: 900; color: var(--primary-color); text-decoration: none; }
        .nav-links a { text-decoration: none; color: var(--body-text); font-weight: 500; transition: 0.3s; }
        .nav-links a:hover { color: var(--primary-color); }

        /* Login Section Styling */
        .login-section {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .login-card {
            background-color: var(--bg-light);
            padding: 2.5rem;
            border-radius: 12px;
            border: 1px solid var(--primary-color);
            box-shadow: var(--shadow-lg);
            width: 100%;
            max-width: 400px;
        }

        .login-title {
            color: var(--primary-color);
            font-size: 1.8rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 2rem;
            text-shadow: 0 0 5px rgba(0, 240, 255, 0.7);
        }

        .form-group { margin-bottom: 1.5rem; }
        .form-group label { display: block; margin-bottom: 0.5rem; color: var(--dark-text); font-weight: 600; }
        
        .form-input {
            width: 100%;
            padding: 0.8rem;
            background-color: var(--bg-white);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            color: white;
            font-size: 1rem;
            outline: none;
            transition: 0.3s;
        }

        .form-input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 8px rgba(0, 240, 255, 0.3);
        }

        .login-btn {
            width: 100%;
            padding: 0.8rem;
            background-color: var(--primary-color);
            color: #111;
            font-weight: 700;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 1rem;
        }

        .login-btn:hover {
            background-color: #00c3ff;
            transform: translateY(-2px);
            box-shadow: 0 0 15px rgba(0, 240, 255, 0.6);
        }
    </style>
</head>

<body>

    <header class="navbar">
        <div class="container">
            <a href="{{ url('/') }}" class="nav-logo">EDCEL</a>
            <nav class="nav-links">
                <a href="{{ url('/') }}">Back to Home</a>
            </nav>
        </div>
    </header>

    <section class="login-section">
        <div class="login-card">
            <h1 class="login-title">Admin Access</h1>

            <form action="{{ route('loginhome.form') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-input" required placeholder="admin@example.com">
                </div>
            
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-input" required placeholder="Enter your password">
                </div>

                <button type="submit" class="login-btn">Login</button>
            </form>
        </div>
    </section>

</body>
</html>