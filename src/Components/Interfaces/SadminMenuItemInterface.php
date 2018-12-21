<?php

namespace OmerKamcili\Sadmin\Components\Interfaces;


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