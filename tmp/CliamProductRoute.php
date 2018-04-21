<?php
Route::group(['prefix' => 'cliamproduct', 'as' => 'cliamproduct.', 'namespace' => 'CliamProduct'], function () {
    Route::get('list', 'CliamProductController@getCliamProductlist')->name('view');
    Route::get('create', 'CliamProductController@getFormCliamProductCreate')->name('create');
    Route::get('detail', 'CliamProductController@getCliamProductDetail')->name('detail');
    Route::post('create', 'CliamProductController@submitFormCliamProductCreate')->name('submit.create');
    Route::get('update', 'CliamProductController@getFormCliamProductUpdate')->name('update');
    Route::post('update', 'CliamProductController@submitFormCliamProductUpdate')->name('submit.update');
    Route::delete('delete', 'CliamProductController@submitFormCliamProductDelete')->name('submit.delete');

});
