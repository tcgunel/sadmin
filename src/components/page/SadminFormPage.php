<?php

namespace OmerKamcili\Sadmin\components\page;

use OmerKamcili\Sadmin\components\generic\SadminBreadCrumb;
use OmerKamcili\Sadmin\views\SadminPageInterface;
use Illuminate\Support\Facades\View;

/**
 * Class SadminFormPage
 *
 * @package OmerKamcili\Sadmin\components\page
 */
class SadminFormPage implements SadminPageInterface
{

    /**
     * @var
     */
    private $breadCrumb;

    /**
     * @return string
     */
    public function render(): string
    {

        View::share('breadCrumb', $this->getBreadCrumb());

        return view('pages/form');

    }

    /**
     * @param SadminBreadCrumb $breadCrumb
     */
    public function addBreadCrumb(SadminBreadCrumb $breadCrumb)
    {
        $this->breadCrumb = $breadCrumb;
    }

    /**
     * @return SadminBreadCrumb
     */
    public function getBreadCrumb(): SadminBreadCrumb
    {
        return $this->breadCrumb;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }


}