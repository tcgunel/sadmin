<?php

namespace OmerKamcili\Sadmin\Components\Sidebar;

use Illuminate\Support\Facades\View;
use OmerKamcili\Sadmin\Components\Interfaces\MenuItemInterface;

/**
 * Class SadminMenuItem
 *
 * @package OmerKamcili\Sadmin\components
 */
class MenuItem implements MenuItemInterface
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
     * @var string
     */
    private $view = 'menu.side-menu-item';


    /**
     * MenuItem constructor.
     *
     * @param string $label
     * @param string $url
     * @param string $icon
     */
    public function __construct(string $label, string $url, string $icon = 'fa fa-angle-double-right')
    {

        $this->label = $label;
        $this->url   = $url;
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
