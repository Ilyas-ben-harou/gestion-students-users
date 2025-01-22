<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" >
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
        }
        .navbar {
            background-color: #1a73e8;
            padding: 15px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar-brand {
            color: white;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
        }
        .navbar-buttons {
            display: flex;
            gap: 15px;
        }
        .nav-button {
            background-color: transparent;
            border: 2px solid white;
            color: white;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.3s;
        }
        .nav-button:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #1a73e8;
            margin-bottom: 20px;
        }
        .welcome-message {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
        }
        .current-time {
            margin-top: 20px;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="/" class="navbar-brand">MyWebsite</a>
        <div class="navbar-buttons">
            <a href="{{route('welcome')}}" class="nav-button">Home</a>
            <a href="{{route('etudiants.etudiants')}}" class="nav-button">list d'etudiants</a>
            <a href="{{route('users.users')}}" class="nav-button">list users</a>
            <a href="{{route('etudiant.login')}}" class="nav-button">Login</a>
        </div>
    </nav>

    <div class="container">
        <h1>Welcome to Our Website</h1>
        <div class="row">
            @if (session()->has('succesLogin'))
                <div class="alert alert-success" role="alert">
                    {{ session('succesLogin') }}
                </div>
            @endif
        </div>
        <div class="welcome-message">
            <?php
            $hour = date('H');
            $greeting = '';
            
            if ($hour >= 5 && $hour < 12) {
                $greeting = 'Good morning';
            } elseif ($hour >= 12 && $hour < 18) {
                $greeting = 'Good afternoon';
            } else {
                $greeting = 'Good evening';
            }
            
            echo "<p>$greeting, visitor!</p>";
            echo "<p>We're glad to have you here.</p>";
            ?>
        </div>
        <div class="current-time">
            <?php
            echo "Current time: " . date('l, F j, Y - g:i A');
            ?>
        </div>
    </div>
</body>
</html>