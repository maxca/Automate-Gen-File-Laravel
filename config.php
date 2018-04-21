<?php
$name = ucfirst($argv[1]);

$path_file = [
    'Controller' => 'app/Http/Controllers/{name}/',
    'Request' => 'app/Http/Requests/{name}/',
    'Model' => 'app/Models/{name}/',
    'Repository' => 'app/Repository/{name}/',
    'Interfaces' => 'app/Repository/{name}/',

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
