<?php



$router->get('/',base_path('controllers/index.php'));

$router->get('/notes',base_path('controllers/notes/index.php'));

$router->get('/note',base_path('controllers/notes/show.php'));
$router->patch('/note', base_path('controllers/notes/update.php'));
$router->delete('/note', base_path('controllers/notes/destroy.php'));

//Notes create and store
$router->get('/note/create',base_path('controllers/notes/create.php'));
$router->post('/notes',base_path('controllers/notes/store.php'));

//User register
$router->get('/register',base_path('controllers/registration/create.php'));
$router->post('/register',base_path('controllers/registration/store.php'));