<?php

namespace OmerKamcili\Sadmin\components;


/**
 * Interface SadminMenuItemInterface
 *
 * @package OmerKamcili\Sadmin\components
 */
interface  SadminMenuItemInterface
{
    /**
     * @return string
     */
    public function render(): string;

}