<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";
    $app = new Silex\Application();
    $app['debug']= true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));
    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });
    $app->post("/result", function() use($app) {
        $count = RepeatCounter::CountRepeats($_POST['word'], $_POST['sentence']);
        return $app['twig']->render('result.html.twig', array("count" => $count));
    });
    return $app;
 ?>
