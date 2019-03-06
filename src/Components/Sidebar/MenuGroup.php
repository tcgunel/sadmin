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
     * SadminMenuGroup constructor.
     *
     * @param string $label
     * @param string $icon
     */
    public function __construct(string $label, string $icon = 'fa fa-angle-double-right')
    {

        $this->label = $label;
        $this->icon = $icon;

    }

    /**
     * @return string
     * @throws \Throwable
     */
    public function render(): string
    {
        return View::make('menu.side-menu-group')
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
    public function add($label, $url): void
    {

        $item = new Stdclass();
        $item->label = $label;
        $item->url = $url;
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