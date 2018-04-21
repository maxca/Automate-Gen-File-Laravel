<?php
Route::group(['prefix' => 'auctionwinner', 'as' => 'auctionwinner.', 'namespace' => 'AuctionWinner'], function () {
    Route::get('list', 'AuctionWinnerController@getAuctionWinnerlist')->name('view');
    Route::get('create', 'AuctionWinnerController@getFormAuctionWinnerCreate')->name('create');
    Route::get('detail', 'AuctionWinnerController@getAuctionWinnerDetail')->name('detail');
    Route::post('create', 'AuctionWinnerController@submitFormAuctionWinnerCreate')->name('submit.create');
    Route::get('update', 'AuctionWinnerController@getFormAuctionWinnerUpdate')->name('update');
    Route::post('update', 'AuctionWinnerController@submitFormAuctionWinnerUpdate')->name('submit.update');
    Route::delete('delete', 'AuctionWinnerController@submitFormAuctionWinnerDelete')->name('submit.delete');

});
