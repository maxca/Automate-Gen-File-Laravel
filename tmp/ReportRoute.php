<?php
Route::group(['prefix' => 'report', 'as' => 'report.', 'namespace' => 'Report'], function () {
    Route::get('list', 'ReportController@getReportlist')->name('view');
    Route::get('create', 'ReportController@getFormReportCreate')->name('create');
    Route::get('detail', 'ReportController@getReportDetail')->name('detail');
    Route::post('create', 'ReportController@submitFormReportCreate')->name('submit.create');
    Route::get('update', 'ReportController@getFormReportUpdate')->name('update');
    Route::post('update', 'ReportController@submitFormReportUpdate')->name('submit.update');
    Route::delete('delete', 'ReportController@submitFormReportDelete')->name('submit.delete');

});
