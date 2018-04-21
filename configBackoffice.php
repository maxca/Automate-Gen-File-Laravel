<?php
$name = ucfirst($argv[1]);
$small = strtolower($name);
$path_file = [
    'Controller' => 'app/Http/Controllers/Backend/{name}/',
    'Request' => 'app/Http/Requests/{name}/',
    // 'Model' => 'app/Models/{name}/',
    'Repository' => 'app/Repositories/{name}/',
    'Interfaces' => 'app/Repositories/{name}/',
    'Route' => 'app/Http/Routes/Backend/{name}/',
    'Config' => 'config/{small}/',

];

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
