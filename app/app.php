<?php

            require_once __DIR__."/../vendor/autoload.php";
            require_once __DIR__."/../src/RoShamBo.php";

            $app = new Silex\Application();
            $app['debug']=true;

            $app->register(new Silex\Provider\TwigServiceProvider(),   array(
                'twig.path' => __DIR__.'/../views'));


            $app->get("/", function() use ($app) {
                return $app['twig']->render('game.twig');

            });
            $app->post("/player_2", function() use($app) {
            $player1 = $_POST['player_1'];

        return $app['twig']->render('player_2.twig', array('player_1' => $player1));
    });


            $app->post("/who_wins", function() use ($app) {


            $input = new RockPaperScissor;


            $variable = $input->checkWin($_POST['player_1'], $_POST['player_2']);
          return $app['twig']->render('who_wins.twig', array('decision' => $variable));
            });

           return $app;






 ?>
