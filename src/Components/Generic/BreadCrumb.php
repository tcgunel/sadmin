<?php

namespace OmerKamcili\Sadmin\Components\Generic;

use stdClass;

/**
 * Class SadminBreadCrumb
 *
 * @package OmerKamcili\Sadmin\components\generic
 */
class BreadCrumb
{

    /**
     * @var
     */
    public $items;

    /**
     * @param string $label
     * @param string $url
     */
    public function addItem(string $label, string $url = ''): void
    {

        $item          = new stdClass();
        $item->label   = $label;
        $item->url     = $url;
        $this->items[] = $item;

    }

    /**
     * @return string
     */
    public function render(): string
    {

        return view('component/bread-crumb', ['breadCrumbs' => $this->items]);

    }

    /**
     * @return string
     */
    public function __toString()
    {

        return $this->render();

    }


}