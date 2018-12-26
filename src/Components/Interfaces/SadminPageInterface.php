<?php

namespace OmerKamcili\Sadmin\Components\Interfaces;


use OmerKamcili\Sadmin\Components\Generic\SadminBreadCrumb;

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

    /**
     * @return string
     */
    public function __toString(): string;

}