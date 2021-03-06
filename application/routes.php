<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

Route::get('/', function()
{
	return View::make('home.index');
});

Route::post('contactMe', function()
{

	// Aquiring data from contact form
	$name = Input::get('name');
	$email = Input::get('email');
	$message = Input::get('message');

	$input = array(
		'name' => $name,
		'email' => $email,
		'message' => $message
		);

	$rules = array(
		'name' => 'required|alpha|max:50',
		'email' => 'required|email',
		'message' => 'max:1000'
		);

	$validation = Validator::make($input, $rules);

	if($validation->fails()){
		echo implode('', $validation->errors->all());
	}else{
		$myEmail = 'marcellinja@gmail.com';
		$subj = 'www.jeanmarcellin.net - Message from: '.$name;
		$eMess = 'NAME: '.$name.'<br>';
		$eMess .= 'MESSAGE: '.$message;
		$eHead = 'EMAIL" '.$email;

		$mailsend=mail("$myEmail","$subj","$eMess","$eHead");

		if($mailsend){
			$message = 'Your message has been sucessfuly sent!';
			echo $message;
		}else{
			$message = 'Your message was not sent, please contact me directly at: <a href="mailto:marcellinja@gmail.com" id="myAddress">marcellinja@gmail.com</a>';
			echo $message;
		}
	}
});

Route::post('contactMobile', function(){
	// Aquiring data from contact form
	$name = Input::get('nameMobile');
	$email = Input::get('emailMobile');
	$message = Input::get('messageMobile');

	$input = array(
		'name' => $name,
		'email' => $email,
		'message' => $message
		);

	$rules = array(
		'name' => 'required|alpha|max:50',
		'email' => 'required|email',
		'message' => 'max:1000'
		);

	$validation = Validator::make($input, $rules);

	if($validation->fails()){
		echo implode('', $validation->errors->all());
	}else{
		$myEmail = 'marcellinja@gmail.com';
		$subj = 'www.jeanmarcellin.net - Message from: '.$name;
		$eMess = 'NAME: '.$name.'<br>';
		$eMess .= 'MESSAGE: '.$message;
		$eHead = 'EMAIL" '.$email;

		$mailsend=mail("$myEmail","$subj","$eMess","$eHead");

		if($mailsend){
			$message = 'Your message has been sucessfuly sent!';
			echo $message;
		}else{
			$message = 'Your message was not sent, please contact me directly at: <a href="mailto:marcellinja@gmail.com" id="myAddress">marcellinja@gmail.com</a>';
			echo '<a data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>';
			echo $message;
		}
	}

});

Route::get('downloadDoc', function(){
	$location = 'public/_resumes/';
	return Response::download($location.'JeanMarcellinCV.docx');
});

Route::get('downloadPdf', function(){
	$location = 'public/_resumes/';
	return Response::download($location.'JeanMarcellinCV.pdf');
});

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});