<?php
Route::group(['prefix' => 'privilege', 'as' => 'privilege.', 'namespace' => 'Privilege'], function () {
    Route::get('list', 'PrivilegeController@getPrivilegelist')->name('view');
    Route::get('create', 'PrivilegeController@getFormPrivilegeCreate')->name('create');
    Route::get('detail', 'PrivilegeController@getPrivilegeDetail')->name('detail');
    Route::post('create', 'PrivilegeController@submitFormPrivilegeCreate')->name('submit.create');
    Route::get('update', 'PrivilegeController@getFormPrivilegeUpdate')->name('update');
    Route::post('update', 'PrivilegeController@submitFormPrivilegeUpdate')->name('submit.update');
    Route::delete('delete', 'PrivilegeController@submitFormPrivilegeDelete')->name('submit.delete');

});
