<?php
namespace App\Repositories\Members;

use App\Repositories\BaseRepositoryWrap;

class MembersRepository extends BaseRepositoryWrap
{
    /**
     * set all of endpoint api
     * @var array
     */
    protected $configEndpoint = [
        'list' => '/api/v1/members/list',
        'create' => '/api/v1/members/create',
        'update' => '/api/v1/members/update',
        'delete' => '/api/v1/members/delete',
    ];

    /**
     * set route alias name
     * @var array
     */
    protected $routeAliasName = [
        'create' => 'members.create',
        'update' => 'members.update',
        'delete' => 'members.delete',
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
        'route_view' => 'members.view',
        'route_edit' => 'members.submit.update',
        'route_dele' => 'members.submit.delete',
    ];

    /**
     * set config form search attribute
     * @var string
     */
    protected $configListSearch = 'Members.list';

    /**
     * set config create attribute
     * @var string
     */

    protected $configCreate = 'Members.create';
    /**
     * set route search action
     * @get form alias naming router.
     * @var string
     */
    protected $routeAction = 'members.view';

    /**
     * set title name of page
     * @var string
     */
    protected $title = 'Members';

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

