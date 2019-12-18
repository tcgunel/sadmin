<?php

namespace OmerKamcili\Sadmin\Components\Generic;

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
        // TODO: Change with static View::make method
        return view($this->view)->with([
            'label' => $this->label,
            'url'   => $this->url,
            'icon'  => $this->icon,
        ]);

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