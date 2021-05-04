<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\DB;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', [TestController::class, 'index']);
// Route::get('/contact', [TestController::class, 'contact']);
// Route::get('test/{id}/{name}', [TestController::class, 'show_test']); // Doesn't matter what is the name inside {}

// Route::resource('tests', TestController::class);


// Database Raw SQL Queries

Route::get('/insert', function(){
// Facade

    DB::insert('insert into test(title, content, is_admin) values(?,?,?)', 
                ['PHP with Laravel', 'Second content', 1]);
});


Route::get('/read', function() {

    $results = DB::select('select * from test where id = ?', [1]); // An array of results, STD class object
    return var_dump($results);
    
    foreach($results as $result) {
        // return($result->title);
    }
});

Route::get('/update', function(){

    $updated = DB::update('update test set title = "Update title" where id = ?', [1]);

    return $updated; // return 1

});

Route::get('/delete', function(){

    $deleted = DB::delete('delete from test where id = ?', [3]);

    if ($deleted == 1) {
        return "It's successfully deleted!";
    } else {
        return "It's repeated deletion.";
    }

});