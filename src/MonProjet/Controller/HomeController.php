<?php
namespace MonProjet\Controller;
class HomeController {


	//use Silex\Application;
	static function hello()  {
	 return $app['twig']->render('hello.twig', array(
	        'name' => 'Rantanplan'
	    ));
	// return("<h2>Hello</h2>");
	}
}