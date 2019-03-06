<?php

namespace OmerKamcili\Sadmin\Components\Generic;

use OmerKamcili\Sadmin\Components\Interfaces\MenuItemInterface;

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
     * SadminGenericMenuItem constructor.
     *
     * @param string $label
     * @param string $url
     * @param string $icon
     */
    public function __construct(string $label, string $url, string $icon = '')
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

        return view('menu.generic-bootstrap-li')->with([
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