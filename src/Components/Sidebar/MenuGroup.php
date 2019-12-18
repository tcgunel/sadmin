<?php

namespace OmerKamcili\Sadmin\Components\Sidebar;

use stdClass;
use Illuminate\Support\Facades\View;
use OmerKamcili\Sadmin\Components\Interfaces\MenuItemInterface;

/**
 * Class SadminMenuGroup
 *
 * @package OmerKamcili\Sadmin\components
 */
class MenuGroup implements MenuItemInterface
{

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var
     */
    public $items;

    /**
     * @var
     */
    public $urls = [];

    /**
     * @var string
     */
    private $view = 'menu.side-menu-group';

    /**
     * MenuGroup constructor.
     *
     * @param string $label
     * @param string $icon
     */
    public function __construct(string $label, string $icon = 'fa fa-angle-double-right')
    {

        $this->label = $label;
        $this->icon  = $icon;
        $this->view  = config('sadmin.theme') . '/' . $this->view;

    }

    /**
     * @return string
     * @throws \Throwable
     */
    public function render()
    {
        return View::make($this->view)
            ->with([
                'label' => $this->label,
                'icon'  => $this->icon,
                'items' => $this->items,
                'urls'  => $this->urls,
            ])->render();
    }

    /**
     * @param $label
     * @param $url
     */
    public function add($label, $url)
    {

        $item          = new Stdclass();
        $item->label   = $label;
        $item->url     = $url;
        $this->items[] = $item;
        array_push($this->urls, $url);

    }

    /**
     * @return string
     * @throws \Throwable
     */
    public function __toString()
    {

        return $this->render();

    }

}