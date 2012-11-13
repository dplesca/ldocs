<?php

return array(

	'GET /' => function()
	{		
		$parser = IoC::resolve('markdown');
		$navigation = str_replace('/docs', '', $parser->transform( File::get('../docs/contents.md') ) );
		$content = $parser->transform(File::get('../docs/index.md'));
		return View::make('home.index')->with('navigation', $navigation)->with('content', $content);
	},

	'GET /(:any)/(:any)' =>  function($folder, $file){
		if(File::exists('../docs/'.$folder.'/'.$file.'.md')){
			$parser = IoC::resolve('markdown');
			$navigation = str_replace('/docs', '', $parser->transform( File::get('../docs/contents.md') ) );
			$content = str_replace('/docs', '', $parser->transform( File::get('../docs/'.$folder.'/'.$file.'.md') ) );
			return View::make('home.index')->with('navigation', $navigation)->with('content', $content);
		}
		else return Response::error('404');	
	}

);