<?php
namespace App\Repositories\CliamProduct;

use App\Repositories\BaseRepositoryWrap;

class CliamProductRepository extends BaseRepositoryWrap
{
    /**
     * set all of endpoint api
     * @var array
     */
    protected $configEndpoint = [
        'list' => '/api/v1/cliamproduct/list',
        'create' => '/api/v1/cliamproduct/create',
        'update' => '/api/v1/cliamproduct/update',
        'delete' => '/api/v1/cliamproduct/delete',
    ];

    /**
     * set route alias name
     * @var array
     */
    protected $routeAliasName = [
        'create' => 'cliamproduct.create',
        'update' => 'cliamproduct.update',
        'delete' => 'cliamproduct.delete',
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
        'route_list' => 'cliamproduct.view',
        'route_detail' => 'cliamproduct.detail',
        'route_edit' => 'cliamproduct.submit.update',
        'route_dele' => 'cliamproduct.submit.delete',
    ];

    /**
     * set config form search attribute
     * @var string
     */
    protected $configListSearch = 'cliamproduct.list';

    /**
     * set config create attribute
     * @var string
     */

    protected $configCreate = 'cliamproduct.create';

    /**
     * set config update attribute
     * @var string
     */
    protected $configUpdate = 'cliamproduct.update';
    /**
     * set route search action
     * @get form alias naming router.
     * @var string
     */
    protected $routeAction = 'cliamproduct.view';

     /**
     * set iamge list
     * @var array
     */
    protected $imageList = [
        'image_th',
        'image_en',
    ];

    /**
     * set custome link
     * @var array
     */
    protected $customLink = [
        # set key = column
        # set value = route alias name
        'id_user' => 'members.detail',
        'cate_id' => 'category.detail',
    ];
    
    /**
     * set title name of page
     * @var string
     */
    protected $title = 'CliamProduct';

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

