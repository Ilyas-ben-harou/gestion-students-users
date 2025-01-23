<?php

return [

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'students'),
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'students',
        ],
    ],

    'providers' => [
        'students' => [
            'driver' => 'eloquent', // Use Eloquent for model-based authentication
            'model' => App\Models\Student::class, // Point to the Student model
        ],
    ],

    'passwords' => [
        'students' => [
            'provider' => 'students', // Reference the students provider
            'table' => 'password_reset_tokens', // Default Laravel table for password resets
            'expire' => 60, // Token expiry time (minutes)
            'throttle' => 60, // Throttle reset attempts
        ],
    ],

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
