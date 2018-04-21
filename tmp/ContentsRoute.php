<?php
Route::group(['prefix' => 'contents', 'as' => 'contents.', 'namespace' => 'Contents'], function () {
    Route::get('list', 'ContentsController@getContentslist')->name('view');
    Route::get('create', 'ContentsController@getFormContentsCreate')->name('create');
    Route::get('detail', 'ContentsController@getContentsDetail')->name('detail');
    Route::post('create', 'ContentsController@submitFormContentsCreate')->name('submit.create');
    Route::get('update', 'ContentsController@getFormContentsUpdate')->name('update');
    Route::post('update', 'ContentsController@submitFormContentsUpdate')->name('submit.update');
    Route::delete('delete', 'ContentsController@submitFormContentsDelete')->name('submit.delete');

});
