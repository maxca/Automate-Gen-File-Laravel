<?php
Route::group(['prefix' => 'amphures', 'as' => 'amphures.', 'namespace' => 'Amphures'], function () {
    Route::get('list', 'AmphuresController@getAmphureslist')->name('view');
    Route::get('create', 'AmphuresController@getFormAmphuresCreate')->name('create');
    Route::get('detail', 'AmphuresController@getAmphuresDetail')->name('detail');
    Route::post('create', 'AmphuresController@submitFormAmphuresCreate')->name('submit.create');
    Route::get('update', 'AmphuresController@getFormAmphuresUpdate')->name('update');
    Route::post('update', 'AmphuresController@submitFormAmphuresUpdate')->name('submit.update');
    Route::delete('delete', 'AmphuresController@submitFormAmphuresDelete')->name('submit.delete');

});
