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
    public function render(): string;

    /**
     * @return BreadCrumb
     */
    public function getBreadCrumb(): BreadCrumb;

    /**
     * @return string
     */
    public function __toString(): string;

}