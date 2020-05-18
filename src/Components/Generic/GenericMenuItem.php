<?php

namespace OmerKamcili\Sadmin\Components\Generic;

use Illuminate\Support\Facades\View;
use OmerKamcili\Sadmin\Components\Interfaces\MenuItemInterface;

/**
 * Class GenericMenuItem
 * @package OmerKamcili\Sadmin\Components\Generic
 */
class GenericMenuItem extends MenuItemInterface
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $url = '#';

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $view = 'menu.generic-bootstrap-li';

    /**
     * GenericMenuItem constructor.
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
     * @throws \Throwable
     */
    public function render()
    {

        return View::make($this->view, ['row' => $this])->render();

    }

}
