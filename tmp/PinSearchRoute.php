<?php
Route::group(['prefix' => 'pinsearch', 'as' => 'pinsearch.', 'namespace' => 'PinSearch'], function () {
    Route::get('list', 'PinSearchController@getPinSearchlist')->name('view');
    Route::get('create', 'PinSearchController@getFormPinSearchCreate')->name('create');
    Route::get('detail', 'PinSearchController@getPinSearchDetail')->name('detail');
    Route::post('create', 'PinSearchController@submitFormPinSearchCreate')->name('submit.create');
    Route::get('update', 'PinSearchController@getFormPinSearchUpdate')->name('update');
    Route::post('update', 'PinSearchController@submitFormPinSearchUpdate')->name('submit.update');
    Route::delete('delete', 'PinSearchController@submitFormPinSearchDelete')->name('submit.delete');

});
