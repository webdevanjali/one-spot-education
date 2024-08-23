// app/Http/Kernel.php

protected $routeMiddleware = [
    // Other middleware
    'role' => \App\Http\Middleware\RoleMiddleware::class,
];
