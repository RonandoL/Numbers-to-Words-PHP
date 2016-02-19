<?php

	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/NumbersToWords.php';

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get('/', function() use ($app)
	{
		return $app['twig']->render('numberToWord.html.twig');
	});

	$app->get('/results', function() use ($app)
	{
		$num = new NumbersToWords($_GET['number']);
		$res = $num->convertNumber();
		return $app['twig']->render('numberToWord.html.twig', array('res' => $res));
	});

	return $app;

?>
