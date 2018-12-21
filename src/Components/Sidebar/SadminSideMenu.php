<?php

namespace OmerKamcili\Sadmin\Components\Sidebar;


use ArrayIterator;
use IteratorAggregate;

/**
 * Class SadminSideMenu
 *
 * @package OmerKamcili\Sadmin\components
 */
class SadminSideMenu implements IteratorAggregate
{

    /**
     * @var
     */
    private $items;

    /**
     * @param SadminMenuItem $item
     */
    public function add(SadminMenuItem $item): void
    {

        $this->items[] = $item;

    }

    /**
     * @param SadminMenuGroup $group
     */
    public function addGroup(SadminMenuGroup $group): void
    {
        $this->items[] = $group;
    }

    /**
     * @return array
     */
    public function getAll(): array
    {

        return new $this->items;

    }


    /**
     * @return ArrayIterator
     */
    public function getIterator(): ArrayIterator
    {

        return new ArrayIterator($this->items);

    }
}