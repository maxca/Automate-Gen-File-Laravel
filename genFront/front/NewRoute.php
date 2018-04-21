
# {replace} view route group.
Route::group([
    'namespace' => '{replace}',
    'prefix' => '{replace_url}',
    'as' => '{replace_snc}.',
    'middleware' => [
        'web', 'member',
    ],
], function ($router) {
    # get view with blade showing data.
    $router->get('/create', '{replace}Controller@get{replace}CreateView')->name('create');
    $router->get('/list', '{replace}Controller@get{replace}ListView')->name('list');
    $router->get('/detail', '{replace}Controller@get{replace}DetailView')->name('detail');
    $router->get('/edit', '{replace}Controller@get{replace}EditView')->name('edit');

    # processing data with api.
    $router->post('/create', '{replace}Controller@post{replace}Create')->name('post.create');
    $router->post('/update', '{replace}Controller@post{replace}Update')->name('post.update');
    $router->post('/delete', '{replace}Controller@post{replace}Delete')->name('post.delete');

    # processing data by ajax with api.
    $router->post('/ajax/create', '{replace}Controller@post{replace}CreateAjax')->name('post.create.ajax');
    $router->post('/ajax/update', '{replace}Controller@post{replace}UpdateAjax')->name('post.update.ajax');
    $router->post('/ajax/delete', '{replace}Controller@post{replace}DeleteAjax')->name('post.delete.ajax');
});
