<?php
Route::group(['prefix' => 'pmmessage', 'as' => 'pmmessage.', 'namespace' => 'PmMessage'], function () {
    Route::get('list', 'PmMessageController@getPmMessagelist')->name('view');
    Route::get('create', 'PmMessageController@getFormPmMessageCreate')->name('create');
    Route::get('detail', 'PmMessageController@getPmMessageDetail')->name('detail');
    Route::post('create', 'PmMessageController@submitFormPmMessageCreate')->name('submit.create');
    Route::get('update', 'PmMessageController@getFormPmMessageUpdate')->name('update');
    Route::post('update', 'PmMessageController@submitFormPmMessageUpdate')->name('submit.update');
    Route::delete('delete', 'PmMessageController@submitFormPmMessageDelete')->name('submit.delete');

});
