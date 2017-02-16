<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/ScrabbleScore.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('input.html.twig');
    });

    $app->get('/output', function() use ($app) {
        $my_word = new ScrabbleScore($_GET['userWord'], 0);
        $my_word->score = $my_word->test_Input($my_word->word);
        return $app['twig']->render('output.html.twig', array('word' => $my_word));
    });

    return $app;
 ?>
