<?php
Route::group(['prefix' => 'productgroup', 'as' => 'productgroup.', 'namespace' => 'ProductGroup'], function () {
    Route::get('list', 'ProductGroupController@getProductGrouplist')->name('view');
    Route::get('create', 'ProductGroupController@getFormProductGroupCreate')->name('create');
    Route::get('detail', 'ProductGroupController@getProductGroupDetail')->name('detail');
    Route::post('create', 'ProductGroupController@submitFormProductGroupCreate')->name('submit.create');
    Route::get('update', 'ProductGroupController@getFormProductGroupUpdate')->name('update');
    Route::post('update', 'ProductGroupController@submitFormProductGroupUpdate')->name('submit.update');
    Route::delete('delete', 'ProductGroupController@submitFormProductGroupDelete')->name('submit.delete');

});
