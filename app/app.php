<?php

            require_once __DIR__."/../vendor/autoload.php";
            require_once __DIR__."/../src/RoShamBo.php";

            $app = new Silex\Application();

            $app->register(new Silex\Provider\TwigServiceProvider(),   array(
                'twig.path' => __DIR__.'/../views'));


            $app->get("/", function() use ($app) {
                return $app['twig']->render('game.twig');

            });
            $app->post("/who_wins", function() use ($app) {
            $player1 = new RockPaperScissor($_GET['rock1'], $_GET['paper1'], $_GET['scissors1']);
            $player2 = new RockPaperScissor($_GET['rock2'], $_GET['paper2'], $_GET['scissors2']);
                return $app['twig']->render('who_wins.twig');
            });

           return $app;






 ?>
