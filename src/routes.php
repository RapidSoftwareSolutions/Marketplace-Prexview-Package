<?php
$routes = [
    'metadata',
    'createDocument'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

