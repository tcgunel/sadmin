<?php

namespace OmerKamcili\Sadmin\views;


use OmerKamcili\Sadmin\components\generic\SadminBreadCrumb;

/**
 * Interface SadminPageInterface
 *
 * @package OmerKamcili\Sadmin\views
 */
interface SadminPageInterface
{

    /**
     * @return string
     */
    public function render(): string;

    /**
     * @return SadminBreadCrumb
     */
    public function getBreadCrumb(): SadminBreadCrumb;

}