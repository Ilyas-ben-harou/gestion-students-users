<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Login Page</title>
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        .form-title {
            text-align: center;
            color: #333;
            margin-bottom: 1.5rem;
        }
        .btn-primary {
            background-color: #0d6efd;
            border: none;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="form-title">Welcome Back</h2>
        <div class="row">
            @if (session()->has('error'))
                <div class="alert alert-warning" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <form action="{{ route('etudiant.login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary">Log in</button>
            <a href="{{ route('etudiants.create')}} " class="btn btn-secondary">Sing-up</a>
        </form>
    </div>
</body>
</html>