<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/WordFrequency.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render("phrases.html.twig");
    });


    $app->post("/frequency", function() use ($app) {
        $repeats = new RepeatCounter();
        $frequency = $repeats->countRepeats($_POST['phrase'], $_POST['word']);
        return $app['twig']->render("repeater.html.twig", array("frequency" => $frequency, "phrase" => $_POST['phrase'], "word" => $_POST['word']));
    });

    return $app;
?>
