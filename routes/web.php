<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/{name?}', function ($name="Maskung") {
    echo "User name is ". $name;
});

Route::get('test/{id}/{name}', function ($id, $name) {
    echo "your id: $id and Name: $name";
})
->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('/getData', function() {
    $fetchData = DB::select('SELECT * FROM t_media WHERE id = ?',
    array(33));

    echo "<pre>";
    print_r($fetchData);
    echo "</pre>";


});
