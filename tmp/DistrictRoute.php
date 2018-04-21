<?php
Route::group(['prefix' => 'district', 'as' => 'district.', 'namespace' => 'District'], function () {
    Route::get('list', 'DistrictController@getDistrictlist')->name('view');
    Route::get('create', 'DistrictController@getFormDistrictCreate')->name('create');
    Route::get('detail', 'DistrictController@getDistrictDetail')->name('detail');
    Route::post('create', 'DistrictController@submitFormDistrictCreate')->name('submit.create');
    Route::get('update', 'DistrictController@getFormDistrictUpdate')->name('update');
    Route::post('update', 'DistrictController@submitFormDistrictUpdate')->name('submit.update');
    Route::delete('delete', 'DistrictController@submitFormDistrictDelete')->name('submit.delete');

});
