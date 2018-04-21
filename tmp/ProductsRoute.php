<?php
Route::group(['prefix' => 'products', 'as' => 'products.', 'namespace' => 'Products'], function () {
    Route::get('list', 'ProductsController@getProductslist')->name('view');
    Route::get('create', 'ProductsController@getFormProductsCreate')->name('create');
    Route::get('detail', 'ProductsController@getProductsDetail')->name('detail');
    Route::post('create', 'ProductsController@submitFormProductsCreate')->name('submit.create');
    Route::get('update', 'ProductsController@getFormProductsUpdate')->name('update');
    Route::post('update', 'ProductsController@submitFormProductsUpdate')->name('submit.update');
    Route::delete('delete', 'ProductsController@submitFormProductsDelete')->name('submit.delete');

});
