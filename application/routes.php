<?php

return array(

	'GET /' => function()
	{		
		$parser = IoC::resolve('markdown');
		if (Cache::has('navigation')){
			$navigation = Cache::get('navigation');
		} else {
			$navigation = str_replace('/docs', '', $parser->transform( File::get('../docs/contents.md') ) );
			Cache::put('navigation', $navigation, 60*24);
		}

		if (Cache::has('homepage')){
			$content = Cache::get('homepage');
		} else {
			$content =  $parser->transform( File::get('../docs/index.md') );
			Cache::put('homepage', $content, 60*24);
		}
		
		return View::make('home.index')->with('navigation', $navigation)->with('content', $content);
	},

	'GET /(:any)/(:any)' =>  function($folder, $file){
		if(File::exists('../docs/'.$folder.'/'.$file.'.md')){
			$parser = IoC::resolve('markdown');
			if (Cache::has('navigation')){
				$navigation = Cache::get('navigation');
			} else {
				$navigation = str_replace('/docs', '', $parser->transform( File::get('../docs/contents.md') ) );
				Cache::put('navigation', $navigation, 60*24);
			}

			$content = str_replace('/docs', '', $parser->transform( File::get('../docs/'.$folder.'/'.$file.'.md') ) );
			return View::make('home.index')->with('navigation', $navigation)->with('content', $content);
		}
		else return Response::error('404');
	}

);