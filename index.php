<?php
include 'vendor/autoload.php';

$app = new Silex\Application();
$app['debug']=true;
//var_dump($app);


$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));
$app->register(new Silex\Provider\SessionServiceProvider());
$bd = $app->register(new Silex\Provider\DoctrineServiceProvider(), array(
'db.options' => array(
'driver' => 'pdo_mysq',
'dbname' => 'resto',
'user'=>'root',
'password'=>''
//,'path' => __DIR__.'/app.db',
),
));
var_dump($bd);

/*
// TEST accès BDD
$app->get('/', function () use ($app) {
$sql = "SELECT * FROM user WHERE id = 1";
$post = $app['db']->fetchAssoc($sql, array(1));
return "<h1>{$post['title']}</h1>".
"<p>{$post['body']}</p>";
});
*/

$app->get('/', 'MonProjet\Controller\HomeController::hello');



$app->get('/flicker', function () use ($app) {
    return $app['twig']->render('flicker.twig', array(
        'name' => 'Flicker'
    ));
});



/*

$app->get('/', function () {
    return '<h1>Home</h1>';
});

$app->get('/hello', function () {
    return '<h2>Hello</h2>';
});


$app->get('/flicker', function () {
    return '<h2>Flicker</h2>';
});

$app->get('/bonjour', function () {
    return '<h2>Bonjour</h2>';
});

*/

$app->run();

