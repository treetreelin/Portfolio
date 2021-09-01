<?php 

/**
 * Used to define the routes in the system.
 * 
 * A route should be defined with a key matching the URL and an
 * controller#action-to-call method. E.g.:
 * 
 * '/' => 'index#index',
 * '/calendar' => 'calendar#index'
 */
$routes = array();


//登入才能使用
if(isset($_SESSION["loginrole"]))
{
    $routes['/changeaccount']='auth#changeaccount';
    $routes['/changeaccounthtml']='auth#getchangeaccounthtml';
}
$routes['/']='index#index';
$routes['/courseview']='index#courseview';
$routes['/createaccount']='index#createaccount';
$routes['/getcos']='index#getCoursesDataByName';
