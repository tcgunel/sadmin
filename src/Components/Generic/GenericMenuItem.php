<?php

namespace OmerKamcili\Sadmin\Components\Generic;

use Illuminate\Support\Facades\View;
use OmerKamcili\Sadmin\Components\Interfaces\MenuItemInterface;

/**
 * Class GenericMenuItem
 * @package OmerKamcili\Sadmin\Components\Generic
 */
class GenericMenuItem implements MenuItemInterface
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
    private $view = 'menu.generic-bootstrap-li';

    /**
     * GenericMenuItem constructor.
     *
     * @param string $label
     * @param string $url
     * @param string $icon
     */
    public function __construct(string $label, string $url, string $icon = '')
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