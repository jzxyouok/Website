<?php

use Illuminate\Routing\Router;

/** @var Router $router */

$router->get('last/action/{token}', ['as' => 'last.action', 'uses' => 'Frontend\EntryController@validateInvite']);
$router->post('last/action/{token}', ['as' => 'last.action.post', 'uses' => 'Frontend\EntryController@addToOrganisation']);
$router->get('subscribe/{email}', [
    'as' => 'beta.subscribe',
    'uses' => 'Frontend\EntryController@subscribe',
]);
