<?php
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
   /* Route::pattern('id', '[0-9]+');
    Route::pattern('id2', '[0-9]+');*/

    #Admin Dashboard
    Route::get('dashboard', 'Admin\DashboardController@index');
	 Route::resource('listing', 'Admin\DashboardController@listing');
	//Route::post('export/data', 'Admin\DashboardController@export');
	Route::post('export/data', [
    'as' => 'export/data', 'uses' => 'Admin\DashboardController@export'
]);
    
 
});
