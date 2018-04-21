<?php
Route::group(['prefix' => '', 'as' => '.', 'namespace' => ''], function () {
    Route::get('list', 'Controller@getlist')->name('view');
    Route::get('create', 'Controller@getFormCreate')->name('create');
    Route::get('detail', 'Controller@getDetail')->name('detail');
    Route::post('create', 'Controller@submitFormCreate')->name('submit.create');
    Route::get('update', 'Controller@getFormUpdate')->name('update');
    Route::post('update', 'Controller@submitFormUpdate')->name('submit.update');
    Route::delete('delete', 'Controller@submitFormDelete')->name('submit.delete');

});
