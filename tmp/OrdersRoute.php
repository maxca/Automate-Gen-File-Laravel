<?php
Route::group(['prefix' => 'orders', 'as' => 'orders.', 'namespace' => 'Orders'], function () {
    Route::get('list', 'OrdersController@getOrderslist')->name('view');
    Route::get('create', 'OrdersController@getFormOrdersCreate')->name('create');
    Route::get('detail', 'OrdersController@getOrdersDetail')->name('detail');
    Route::post('create', 'OrdersController@submitFormOrdersCreate')->name('submit.create');
    Route::get('update', 'OrdersController@getFormOrdersUpdate')->name('update');
    Route::post('update', 'OrdersController@submitFormOrdersUpdate')->name('submit.update');
    Route::delete('delete', 'OrdersController@submitFormOrdersDelete')->name('submit.delete');

});
