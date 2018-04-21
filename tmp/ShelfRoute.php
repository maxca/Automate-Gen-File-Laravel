<?php
Route::group(['prefix' => 'shelf', 'as' => 'shelf.', 'namespace' => 'Shelf'], function () {
    Route::get('list', 'ShelfController@getShelflist')->name('view');
    Route::get('create', 'ShelfController@getFormShelfCreate')->name('create');
    Route::get('detail', 'ShelfController@getShelfDetail')->name('detail');
    Route::post('create', 'ShelfController@submitFormShelfCreate')->name('submit.create');
    Route::get('update', 'ShelfController@getFormShelfUpdate')->name('update');
    Route::post('update', 'ShelfController@submitFormShelfUpdate')->name('submit.update');
    Route::delete('delete', 'ShelfController@submitFormShelfDelete')->name('submit.delete');

});
