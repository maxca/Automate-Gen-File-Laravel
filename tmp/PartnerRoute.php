<?php
Route::group(['prefix' => 'partner', 'as' => 'partner.', 'namespace' => 'Partner'], function () {
    Route::get('list', 'PartnerController@getPartnerlist')->name('view');
    Route::get('create', 'PartnerController@getFormPartnerCreate')->name('create');
    Route::get('detail', 'PartnerController@getPartnerDetail')->name('detail');
    Route::post('create', 'PartnerController@submitFormPartnerCreate')->name('submit.create');
    Route::get('update', 'PartnerController@getFormPartnerUpdate')->name('update');
    Route::post('update', 'PartnerController@submitFormPartnerUpdate')->name('submit.update');
    Route::delete('delete', 'PartnerController@submitFormPartnerDelete')->name('submit.delete');

});
