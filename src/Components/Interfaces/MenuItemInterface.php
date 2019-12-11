<?php

namespace OmerKamcili\Sadmin\Components\Interfaces;

/**
 * Interface MenuItemInterface
 *
 * @package OmerKamcili\Sadmin\components
 */
interface  MenuItemInterface
{
    /**
     * @return string
     */
    public function render(): string;

}