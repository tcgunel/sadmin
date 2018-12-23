<?php

namespace OmerKamcili\Sadmin\Components\Sidebar;


use OmerKamcili\Sadmin\Components\Interfaces\SadminMenuItemInterface;
use Illuminate\Support\Facades\View;

/**
 * Class SadminMenuItem
 *
 * @package OmerKamcili\Sadmin\components
 */
class SadminMenuItem implements SadminMenuItemInterface
{

    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $url;
    /**
     * @var string
     */
    public $icon;

    /**
     * SadminMenuItem constructor.
     *
     * @param string $label
     * @param string $url
     * @param string $icon
     */
    public function __construct(string $label, string $url, string $icon = 'fa fa-angle-double-right')
    {
        $this->label = $label;
        $this->url = $url;
        $this->icon = $icon;
    }

    /**
     * @return string
     * @throws \Throwable
     */
    public function render(): string
    {

        return View::make('menu.side-menu-item')
            ->with(['label' => $this->label, 'url' => $this->url, 'icon' => $this->icon])
            ->render();
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
