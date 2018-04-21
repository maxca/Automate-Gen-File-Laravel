<?php
Route::group(['prefix' => 'point', 'as' => 'point.', 'namespace' => 'Point'], function () {
    Route::get('list', 'PointController@getPointlist')->name('view');
    Route::get('create', 'PointController@getFormPointCreate')->name('create');
    Route::get('detail', 'PointController@getPointDetail')->name('detail');
    Route::post('create', 'PointController@submitFormPointCreate')->name('submit.create');
    Route::get('update', 'PointController@getFormPointUpdate')->name('update');
    Route::post('update', 'PointController@submitFormPointUpdate')->name('submit.update');
    Route::delete('delete', 'PointController@submitFormPointDelete')->name('submit.delete');

});
