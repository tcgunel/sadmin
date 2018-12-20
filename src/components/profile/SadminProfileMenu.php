<?php

namespace OmerKamcili\Sadmin\components;


use ArrayIterator;
use OmerKamcili\Sadmin\components\generic\SadminGenericMenuItem;
use IteratorAggregate;

/**
 * Class SadminProfileMenu
 *
 * @package OmerKamcili\Sadmin\components
 */
class SadminProfileMenu implements IteratorAggregate
{

    /**
     * @var
     */
    private $items;


    /**
     * @param SadminGenericMenuItem $item
     */
    public function add(SadminGenericMenuItem $item): void
    {

        $this->items[] = $item;

    }

    /**
     * @return array
     */
    public function getAll(): array
    {

        return new $this->items;

    }

    /**
     * @return ArrayIterator|\Traversable
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->items);
    }

}