<?php

namespace TCGunel\Sadmin\Components\Interfaces;

use TCGunel\Sadmin\Components\Generic\BreadCrumb;

/**
 * Interface SadminPageInterface
 *
 * @package TCGunel\Sadmin\views
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
