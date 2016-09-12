<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Queen.php";

    $app = new Silex\Application();

    $app["debug"] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        "twig.path" => __DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("form.html.twig");
    });

    $app->get("/result", function() use ($app) {
        $newQueen = new Queen($_GET["x_coordinate_queen"], $_GET["y_coordinate_queen"]);
        return $app["twig"]->render("result.html.twig", array("result" => $newQueen->canAttack($_GET["x_coordinate_target"], $_GET["y_coordinate_target"])));
    });

    return $app;
 ?>
