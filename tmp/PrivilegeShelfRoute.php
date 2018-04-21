<?php
Route::group(['prefix' => 'privilegeshelf', 'as' => 'privilegeshelf.', 'namespace' => 'PrivilegeShelf'], function () {
    Route::get('list', 'PrivilegeShelfController@getPrivilegeShelflist')->name('view');
    Route::get('create', 'PrivilegeShelfController@getFormPrivilegeShelfCreate')->name('create');
    Route::get('detail', 'PrivilegeShelfController@getPrivilegeShelfDetail')->name('detail');
    Route::post('create', 'PrivilegeShelfController@submitFormPrivilegeShelfCreate')->name('submit.create');
    Route::get('update', 'PrivilegeShelfController@getFormPrivilegeShelfUpdate')->name('update');
    Route::post('update', 'PrivilegeShelfController@submitFormPrivilegeShelfUpdate')->name('submit.update');
    Route::delete('delete', 'PrivilegeShelfController@submitFormPrivilegeShelfDelete')->name('submit.delete');

});
