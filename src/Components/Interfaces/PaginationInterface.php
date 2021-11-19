<?php

namespace TCGunel\Sadmin\Components\Interfaces;

/**
 * Interface PaginationInterface
 *
 * @package TCGunel\Sadmin\Components\Interfaces
 */
interface PaginationInterface
{

    /**
     * @return string
     */
    public function render();

    /**
     * @return string
     */
    public function getNextPage();

    /**
     * @return string
     */
    public function getPreviousPage();

    /**
     * @return array[1 => 'url', 2 => 'url']
     */
    public function getPages();

    /**
     * @return int
     */
    public function getCurrentPage();

}
