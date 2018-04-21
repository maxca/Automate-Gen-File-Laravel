<?php
Route::group(['prefix' => 'shoppackage', 'as' => 'shoppackage.', 'namespace' => 'ShopPackage'], function () {
    Route::get('list', 'ShopPackageController@getShopPackagelist')->name('view');
    Route::get('create', 'ShopPackageController@getFormShopPackageCreate')->name('create');
    Route::get('detail', 'ShopPackageController@getShopPackageDetail')->name('detail');
    Route::post('create', 'ShopPackageController@submitFormShopPackageCreate')->name('submit.create');
    Route::get('update', 'ShopPackageController@getFormShopPackageUpdate')->name('update');
    Route::post('update', 'ShopPackageController@submitFormShopPackageUpdate')->name('submit.update');
    Route::delete('delete', 'ShopPackageController@submitFormShopPackageDelete')->name('submit.delete');

});
