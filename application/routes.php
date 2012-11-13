<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Application Routes
	|--------------------------------------------------------------------------
	|
	| Simply tell Laravel the HTTP verbs and URIs it should respond to. It's a
	| piece of cake to create beautiful applications using the elegant RESTful
	| routing available in Laravel.
	|
	| Let's respond to a simple GET request to http://example.com/hello:
	|
	|		'GET /hello' => function()
	|		{
	|			return 'Hello World!';
	|		}
	|
	| You can even respond to more than one URI:
	|
	|		'GET /hello, GET /world' => function()
	|		{
	|			return 'Hello World!';
	|		}
	|
	| It's easy to allow URI wildcards using (:num) or (:any):
	|
	|		'GET /hello/(:any)' => function($name)
	|		{
	|			return "Welcome, $name.";
	|		}
	|
	*/

	'GET /' => function()
	{		
		$parser = new Markdown_Parser();
		$navigation = str_replace('/docs', '', $parser->transform( file_get_contents('../docs/contents.md') ) );
		$content = $parser->transform(file_get_contents('../docs/index.md'));
		return View::make('home.index')->with('navigation', $navigation)->with('content', $content);
	},

	'GET /(:any)/(:any)' =>  function($folder, $file){
		if(file_exists('../docs/'.$folder.'/'.$file.'.md')){
			$parser = new Markdown_Parser();
			$navigation = str_replace('/docs', '', $parser->transform( file_get_contents('../docs/contents.md') ) );
			$content = str_replace('/docs', '', $parser->transform( file_get_contents('../docs/'.$folder.'/'.$file.'.md') ) );
			return View::make('home.index')->with('navigation', $navigation)->with('content', $content);
		}
		else return Response::error('404');	
	}

);