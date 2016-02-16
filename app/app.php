<?php

	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/Time.php';

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get('/', function() use ($app){
		return $app['twig']->render('clock_form.html.twig');
	});

	$app->post('/results', function() use ($app){
		$angleDiff = new Time($_POST['hour'], $_POST['minute']);
		return $app['twig']->render('clock_form.html.twig', array('results', $angleDiff));
	});

	return $app;

?>
