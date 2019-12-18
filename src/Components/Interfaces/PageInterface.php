<?php

namespace OmerKamcili\Sadmin\Components\Interfaces;

use OmerKamcili\Sadmin\Components\Generic\BreadCrumb;

/**
 * Interface SadminPageInterface
 *
 * @package OmerKamcili\Sadmin\views
 */
interface PageInterface
{

    /**
     * @return string
     */
    public function render();

    /**
     * @return BreadCrumb|null
     */
    public function getBreadCrumb();

    /**
     * @return array|null
     */
    public function getBasicAlerts();

    /**
     * @return string|null
     */
    public function __toString();

}