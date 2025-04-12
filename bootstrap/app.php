<?php

require_once __DIR__.'/../vendor/autoload.php';

(new Laravel\Lumen\Bootstrap\LoadEnvironmentVariables(
    dirname(__DIR__)
))->bootstrap();

date_default_timezone_set(env('APP_TIMEZONE', 'UTC'));

$app = new Laravel\Lumen\Application(
    dirname(__DIR__)
);

// Enable facades (needed for response() and other Laravel-style helpers)
$app->withFacades();

// Enable Eloquent ORM
$app->withEloquent();

// Load config files
$app->configure('services');
$app->configure('auth');
$app->configure('app');

// Bind exception handler and console kernel
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

// Route middleware
$app->routeMiddleware([
    'auth' => App\Http\Middleware\Authenticate::class,
    'gateway.auth' => App\Http\Middleware\GatewayAuthenticate::class,
]);

// Register service providers
$app->register(App\Providers\AuthServiceProvider::class);

// OPTIONAL: Bind Response class if you're using it directly
$app->bind(Illuminate\Contracts\Routing\ResponseFactory::class, function ($app) {
    return new Illuminate\Routing\ResponseFactory(
        $app['Illuminate\Contracts\View\Factory'],
        $app['Illuminate\Routing\Redirector']
    );
});

// Register your routes
$app->router->group([
    'namespace' => 'App\Http\Controllers',
], function ($router) {
    require __DIR__.'/../routes/web.php';
});

return $app;
