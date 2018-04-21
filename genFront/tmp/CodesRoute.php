<?php

# ProductRently view route group.
Route::group([
    'namespace' => 'Codes',
    'prefix' => 'recently',
    'as' => 'codes.',
    'middleware' => [
        'web', 'member',
    ],
], function ($router) {
    # get view with blade showing data.
    $router->get('/create', 'CodesController@getCodesCreateView')->name('create');
    $router->get('/list', 'CodesController@getCodesListView')->name('list');
    $router->get('/detail', 'CodesController@getCodesDetailView')->name('detail');
    $router->get('/edit', 'CodesController@getCodesEditView')->name('edit');

    # processing data with api.
    $router->post('/create', 'CodesController@postCodesCreate')->name('post.create');
    $router->post('/update', 'CodesController@postCodesUpdate')->name('post.update');
    $router->post('/delete', 'CodesController@postCodesDelete')->name('post.delete');

    # processing data by ajax with api.
    $router->post('/ajax/create', 'CodesController@postCodesCreateAjax')->name('post.create.ajax');
    $router->post('/ajax/update', 'CodesController@postCodesUpdateAjax')->name('post.update.ajax');
    $router->post('/ajax/delete', 'CodesController@postCodesDeleteAjax')->name('post.delete.ajax');
});
