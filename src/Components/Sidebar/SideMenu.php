<?php

namespace TCGunel\Sadmin\Components\Sidebar;

use ArrayIterator;
use IteratorAggregate;
use TCGunel\Sadmin\Components\Interfaces\MenuItemInterface;

/**
 * Class SideMenu
 *
 * @package TCGunel\Sadmin\components
 */
class SideMenu implements IteratorAggregate
{

    /**
     * @var
     */
    private $items = [];

    /**
     * @param MenuItem $item
     */
    public function add(MenuItemInterface $item)
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
     * @return ArrayIterator
     */
    public function getIterator()
    {

        return new ArrayIterator($this->items);

    }
}
