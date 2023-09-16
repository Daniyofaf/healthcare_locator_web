<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::prefix('amakari')->group(function () {
    // Your admin routes here
});

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('hospitals', HospitalController::class);
    $router->resource('clinics', ClinicController::class);
    $router->resource('specialized_-hospitals', Specialized_Hospital_Controller::class);
    $router->resource('specialized_-clinics', Specialized_Clinic_Controller::class);
    $router->resource('statuses', StatusController::class);
    $router->resource('services', ServiceController::class);
    $router->resource('locations', LocationController::class);

    // Route::get('/search/', 'PostsController@search')->name('search');
    //Route::post('/search', 'PostsController@search');
    //Route::post('hospital', 'HospitalAndClinicFormController@store');

});
