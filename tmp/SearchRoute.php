<?php
Route::group(['prefix' => 'search', 'as' => 'search.', 'namespace' => 'Search'], function () {
    Route::get('list', 'SearchController@getSearchlist')->name('view');
    Route::get('create', 'SearchController@getFormSearchCreate')->name('create');
    Route::get('detail', 'SearchController@getSearchDetail')->name('detail');
    Route::post('create', 'SearchController@submitFormSearchCreate')->name('submit.create');
    Route::get('update', 'SearchController@getFormSearchUpdate')->name('update');
    Route::post('update', 'SearchController@submitFormSearchUpdate')->name('submit.update');
    Route::delete('delete', 'SearchController@submitFormSearchDelete')->name('submit.delete');

});
