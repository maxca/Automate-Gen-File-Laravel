<?php
Route::group(['prefix' => 'bannerhomepage', 'as' => 'bannerhomepage.', 'namespace' => 'BannerHomepage'], function () {
    Route::get('list', 'BannerHomepageController@getBannerHomepagelist')->name('view');
    Route::get('create', 'BannerHomepageController@getFormBannerHomepageCreate')->name('create');
    Route::get('detail', 'BannerHomepageController@getBannerHomepageDetail')->name('detail');
    Route::post('create', 'BannerHomepageController@submitFormBannerHomepageCreate')->name('submit.create');
    Route::get('update', 'BannerHomepageController@getFormBannerHomepageUpdate')->name('update');
    Route::post('update', 'BannerHomepageController@submitFormBannerHomepageUpdate')->name('submit.update');
    Route::delete('delete', 'BannerHomepageController@submitFormBannerHomepageDelete')->name('submit.delete');

});
