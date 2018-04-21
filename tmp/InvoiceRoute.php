<?php
Route::group(['prefix' => 'invoice', 'as' => 'invoice.', 'namespace' => 'Invoice'], function () {
    Route::get('list', 'InvoiceController@getInvoicelist')->name('view');
    Route::get('create', 'InvoiceController@getFormInvoiceCreate')->name('create');
    Route::get('detail', 'InvoiceController@getInvoiceDetail')->name('detail');
    Route::post('create', 'InvoiceController@submitFormInvoiceCreate')->name('submit.create');
    Route::get('update', 'InvoiceController@getFormInvoiceUpdate')->name('update');
    Route::post('update', 'InvoiceController@submitFormInvoiceUpdate')->name('submit.update');
    Route::delete('delete', 'InvoiceController@submitFormInvoiceDelete')->name('submit.delete');

});
