<?php

namespace OmerKamcili\Sadmin\Components\Generic;

use stdClass;
use Illuminate\Support\Facades\View;

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
     * @var string
     */
    private $view = 'component/bread-crumb';

    /**
     * BreadCrumb constructor.
     */
    public function __construct()
    {

        $this->view = config('sadmin.theme') . '/' . $this->view;

    }

    /**
     * @param string $label
     * @param string $url
     */
    public function addItem(string $label, string $url = '')
    {

        $item          = new stdClass();
        $item->label   = $label;
        $item->url     = $url;
        $this->items[] = $item;

    }

    /**
     * @return string
     */
    public function render()
    {

        return View::make($this->view, ['breadCrumbs' => $this->items])->render();

    }

    /**
     * @return string
     */
    public function __toString()
    {

        return $this->render();

    }


}