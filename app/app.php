<?php
      require_once __DIR__."/../vendor/autoload.php";
      require_once __DIR__."/../src/Place.php";

      //SESSION - Stores Cookies
      session_start();

      if(empty($_SESSION['list_of_cities'])) {
        $_SESSION['list_of_cities'] = array();
      }

      $app = new Silex\Application();

      //Twig Path
      $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
      ));

      //Route and Controller
      $app->get("/", function() use ($app) {

        $all_cities = Place::getAll();

        return $app['twig']->render('city.html.twig', array('cities' => $all_cities));

      });

    /*  $app->get("/", function() use ($app) {

        $all_times = Place::getAll();

        return $app['twig']->render('city.html.twig', array('times' => $all_times));

      }); */

      //cities POST
      $app->post("/city", function() use ($app) {
        $city = new Place($_POST['cityName'], $_POST['lengthOfTime']);
        $city->save();

        return $app['twig']->render('create_city.html.twig', array('newcity' => $city));
      });


      //cities POST delete
      $app->post("/delete_city", function() use ($app) {

        Place::deleteAll();

        return $app['twig']->render('delete_city.html.twig');
      });

    return $app;
?>
