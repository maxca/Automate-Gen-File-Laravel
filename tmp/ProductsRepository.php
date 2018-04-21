<?php
namespace App\Repositories\Products;

use App\Repositories\BaseRepositoryWrap;

class ProductsRepository extends BaseRepositoryWrap
{
    /**
     * set all of endpoint api
     * @var array
     */
    protected $configEndpoint = [
        'list' => '/api/v1/products/list',
        'create' => '/api/v1/products/create',
        'update' => '/api/v1/products/update',
        'delete' => '/api/v1/products/delete',
    ];

    /**
     * set route alias name
     * @var array
     */
    protected $routeAliasName = [
        'create' => 'products.create',
        'update' => 'products.update',
        'delete' => 'products.delete',
    ];

    /**
     * set config header of table show in list view
     * @var array
     */
    protected $configFormColumn = [
        "cate_id",
        "parent_cate_id",
        "level",
        "icon_img",
        "cate_img_th",
        "cate_img_en",
        "sort",
        "cate_name_th",
        "cate_name_en",
    ];

    /**
     * set showing action menu and route
     * setting true open false close menu
     * @var array
     */
    protected $action = [
        'view' => true,
        'edit' => true,
        'dele' => true,
        'route_list' => 'products.view',
        'route_detail' => 'products.detail',
        'route_edit' => 'products.submit.update',
        'route_dele' => 'products.submit.delete',
    ];

    /**
     * set config form search attribute
     * @var string
     */
    protected $configListSearch = 'products.list';

    /**
     * set config create attribute
     * @var string
     */

    protected $configCreate = 'products.create';

    /**
     * set config update attribute
     * @var string
     */
    protected $configUpdate = 'products.update';
    /**
     * set route search action
     * @get form alias naming router.
     * @var string
     */
    protected $routeAction = 'products.view';

    /**
     * set title name of page
     * @var string
     */
    protected $title = 'Products';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * get show list view wrap with data.
     * @return view object
     */
    public function getList()
    {
        return parent::getListData();
    }
    public function getCreateForm()
    {
        return parent::getCreateForm();
    }

}

