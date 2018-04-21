<?php
Route::group(['prefix' => 'addresss', 'as' => 'addresss.', 'namespace' => 'Addresss'], function () {
    Route::get('list', 'AddresssController@getAddressslist')->name('view');
    Route::get('create', 'AddresssController@getFormAddresssCreate')->name('create');
    Route::get('detail', 'AddresssController@getAddresssDetail')->name('detail');
    Route::post('create', 'AddresssController@submitFormAddresssCreate')->name('submit.create');
    Route::get('update', 'AddresssController@getFormAddresssUpdate')->name('update');
    Route::post('update', 'AddresssController@submitFormAddresssUpdate')->name('submit.update');
    Route::delete('delete', 'AddresssController@submitFormAddresssDelete')->name('submit.delete');

});
