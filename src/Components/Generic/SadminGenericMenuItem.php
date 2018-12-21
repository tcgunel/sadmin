<?php

namespace OmerKamcili\Sadmin\Components\Generic;


use OmerKamcili\Sadmin\Components\Interfaces\SadminMenuItemInterface;

/**
 * Class SadminGenericMenuItem
 *
 * @package OmerKamcili\Sadmin\components\generic
 */
class SadminGenericMenuItem implements SadminMenuItemInterface
{
    /**
     * @var string
     */
    private $label;
    /**
     * @var string
     */
    private $url;
    /**
     * @var string
     */
    private $icon;

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
        ])->render();

    }
}