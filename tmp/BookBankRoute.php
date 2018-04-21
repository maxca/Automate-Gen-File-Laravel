<?php
Route::group(['prefix' => 'bookbank', 'as' => 'bookbank.', 'namespace' => 'BookBank'], function () {
    Route::get('list', 'BookBankController@getBookBanklist')->name('view');
    Route::get('create', 'BookBankController@getFormBookBankCreate')->name('create');
    Route::get('detail', 'BookBankController@getBookBankDetail')->name('detail');
    Route::post('create', 'BookBankController@submitFormBookBankCreate')->name('submit.create');
    Route::get('update', 'BookBankController@getFormBookBankUpdate')->name('update');
    Route::post('update', 'BookBankController@submitFormBookBankUpdate')->name('submit.update');
    Route::delete('delete', 'BookBankController@submitFormBookBankDelete')->name('submit.delete');

});
