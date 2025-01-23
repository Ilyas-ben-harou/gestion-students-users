<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    @include('navBar')

    <div class="container w-75 m-auto p-2">
        <div class="row">
            @if (session()->has('succesLogin'))
                <div class="alert alert-success" role="alert">
                    {{ session('succesLogin') }}
                </div>
            @endif
        </div>
        <h1>Welcome to Our Website</h1>
        
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