<?php
Route::group(['prefix' => 'provinces', 'as' => 'provinces.', 'namespace' => 'Provinces'], function () {
    Route::get('list', 'ProvincesController@getProvinceslist')->name('view');
    Route::get('create', 'ProvincesController@getFormProvincesCreate')->name('create');
    Route::get('detail', 'ProvincesController@getProvincesDetail')->name('detail');
    Route::post('create', 'ProvincesController@submitFormProvincesCreate')->name('submit.create');
    Route::get('update', 'ProvincesController@getFormProvincesUpdate')->name('update');
    Route::post('update', 'ProvincesController@submitFormProvincesUpdate')->name('submit.update');
    Route::delete('delete', 'ProvincesController@submitFormProvincesDelete')->name('submit.delete');

});
