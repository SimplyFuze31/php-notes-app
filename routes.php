<?php



$router->get('/',base_path('controllers/index.php'));

$router->get('/notes',base_path('controllers/notes/index.php'));
$router->get('/note',base_path('controllers/notes/show.php'));
$router->patch('/note', base_path('controllers/notes/update.php'));


$router->get('/note/create',base_path('controllers/notes/create.php'));
$router->post('/note/create',base_path('controllers/notes/store.php'));




/*return [
    '/' => base_path('controllers/index.php'),
    '/notes' => base_path('controllers/notes/index.php'),
    '/note' => base_path('controllers/notes/show.php'),
    '/note/create' => base_path('controllers/notes/create.php')
];*/