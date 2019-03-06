<?php

namespace OmerKamcili\Sadmin\Components\Interfaces;


/**
 * Interface PaginationInterface
 *
 * @package OmerKamcili\Sadmin\Components\Interfaces
 */
interface PaginationInterface
{

    /**
     * @return string
     */
    public function render(): string;

    /**
     * @return string
     */
    public function getNextPage(): string;

    /**
     * @return string
     */
    public function getPreviousPage(): string;

    /**
     * @return array[1 => 'url', 2 => 'url']
     *
     */
    public function getPages(): array;


    /**
     * @return int
     */
    public function getCurrentPage(): int;

}