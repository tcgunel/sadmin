<?php

namespace OmerKamcili\Sadmin\Components\Sidebar;

use ArrayIterator;
use IteratorAggregate;

/**
 * Class SideMenu
 *
 * @package OmerKamcili\Sadmin\components
 */
class SideMenu implements IteratorAggregate
{

    /**
     * @var
     */
    private $items;

    /**
     * @param MenuItem $item
     */
    public function add(MenuItem $item): void
    {

        $this->items[] = $item;

    }

    /**
     * @param MenuGroup $group
     */
    public function addGroup(MenuGroup $group): void
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