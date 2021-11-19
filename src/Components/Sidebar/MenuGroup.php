<?php

namespace TCGunel\Sadmin\Components\Sidebar;

use Illuminate\Support\Facades\View;
use TCGunel\Sadmin\Components\Interfaces\MenuItemInterface;

/**
 * Class SadminMenuGroup
 *
 * @package TCGunel\Sadmin\components
 */
class MenuGroup extends MenuItemInterface
{
    /**
     * @var
     */
    public $items = [];
    /**
     * @var
     */
    public $urls = [];
    /**
     * @var array
     */
    public $itemProperties = [
        'id'    => '',
        'label' => '',
        'url'   => '#',
    ];

    public $icon = 'fa fa-angle-double-right';

    /**
     * @var string
     */
    public $view = 'menu.side-menu-group';

    /**
     * MenuGroup constructor.
     *
     * @param array $properties
     */
    public function __construct(array $properties = [])
    {

        parent::__construct($properties);

        $this->view = 'sadmin::' . config('sadmin.theme') . '/' . $this->view;

    }

    /**
     * @return string
     * @throws Throwable
     */
    public function render()
    {

        View::share('page', $this);

        return View::make($this->view, ['row' => $this])->render();

    }

    /**
     * @param array $properties
     */
    public function add(array $properties = [])
    {

        $item           = new \stdClass();
        $baseProperties = $this->itemProperties;

        foreach ($this->itemProperties as $key => $foo) {

            $item->{$key} = array_key_exists($key, $properties) ? $properties[$key] : $foo;

        }

        array_push($this->urls, $item->url);
        $this->items[] = $item;

    }

}
