<?php
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

namespace MonProjet\Controller;
class HomeController {


	//use Silex\Application;
	static function hello(Application $app)  {
	 return $app['twig']->render('hello.twig', array(
	        'name' => 'Rantanplan'
	    ));
	// return("<h2>Hello</h2>");
	}
}