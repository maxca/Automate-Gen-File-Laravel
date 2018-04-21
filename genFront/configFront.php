<?php
$name = ucfirst($argv[1]);

$path_file = [
    'Controller' => 'app/Http/Controllers/{name}/',
    'Request' => 'app/Http/Requests/{name}/',
    // 'Model' => 'app/Models/{name}/',
    'Repository' => 'app/Repository/{name}/',
    'Interfaces' => 'app/Repository/{name}/',
    // 'Route' => 'app/Http/Routes/newRoute.php',
    // 'View' => 'resources/views/{name}/',
    // 'Config' => 'config/{name}/',

];
$nameNew = strtolower($name);
$view = "resources/views/{$nameNew}/";
$newRoute = "routes/newRoute.php";

$providers = "
	 \App::bind(
            '{interfaces}',
            '{storage}'
        );
";

$skip = [
    'providers' => 'app/Providers/RepositoryServiceProvider.php',
    'route' => 'app/Http/routes.php',
];
