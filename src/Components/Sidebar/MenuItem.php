<?php

namespace TCGunel\Sadmin\Components\Sidebar;

use Illuminate\Support\Facades\View;
use TCGunel\Sadmin\Components\Interfaces\MenuItemInterface;

/**
 * Class SadminMenuItem
 *
 * @package TCGunel\Sadmin\components
 */
class MenuItem extends MenuItemInterface
{

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $view = 'menu.side-menu-item';

    /**
     * @var string
     */
    public $icon = 'fa fa-angle-double-right';

    /**
     * MenuItem constructor.
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
     */
    public function render()
    {

        View::share('page', $this);

        return View::make($this->view, ['row' => $this])->render();

    }

}
