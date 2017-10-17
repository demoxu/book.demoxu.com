<?php
use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function ($request, $response, $args) {
	$response->write("Hello, Welcome to Slim Framework!!!");
	return $response;
});

// $app->get ( '/[{name}]', function (Request $request, Response $response, array $args) {
// 	// Sample log message
// 	$this->logger->info ( "Slim-Skeleton '/' route" );
	
// 	// Render index view
// 	return $this->renderer->render ( $response, 'index.phtml', $args );
// } );

$app->get ( '/books/{id}', function ($request, $response, $args) {
	// Show book identified by $args['id']
} );

$app->post ( '/books', function ($request, $response, $args) {
	// Create new book
} );

$app->put ( '/books/{id}', function ($request, $response, $args) {
	// Update book identified by $args['id']
} );

$app->delete ( '/books/{id}', function ($request, $response, $args) {
	// Delete book identified by $args['id']
} );

// $app->map ( [ 
// 		'GET',
// 		'POST' 
// ], '/books', function ($request, $response, $args) {
// 	// Create new book or list all books
// } );

// $app->get ( '/home', '\HomeController:home' );

// $app->get ( '/method1', '\MyController:method1' );
// $app->get ( '/method2', '\MyController:method2' );
// $app->get ( '/method3', '\MyController:method3' );