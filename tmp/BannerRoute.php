<?php
Route::group(['prefix' => 'banner', 'as' => 'banner.', 'namespace' => 'Banner'], function () {
    Route::get('list', 'BannerController@getBannerlist')->name('view');
    Route::get('create', 'BannerController@getFormBannerCreate')->name('create');
    Route::get('detail', 'BannerController@getBannerDetail')->name('detail');
    Route::post('create', 'BannerController@submitFormBannerCreate')->name('submit.create');
    Route::get('update', 'BannerController@getFormBannerUpdate')->name('update');
    Route::post('update', 'BannerController@submitFormBannerUpdate')->name('submit.update');
    Route::delete('delete', 'BannerController@submitFormBannerDelete')->name('submit.delete');

});
