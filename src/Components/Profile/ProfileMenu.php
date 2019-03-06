<?php

namespace OmerKamcili\Sadmin\Components\Profile;


use ArrayIterator;
use OmerKamcili\Sadmin\Components\Generic\GenericMenuItem;
use IteratorAggregate;

/**
 * Class ProfileMenu
 *
 * @package OmerKamcili\Sadmin\components
 */
class ProfileMenu implements IteratorAggregate
{

    /**
     * @var
     */
    private $items;


    /**
     * @param GenericMenuItem $item
     */
    public function add(GenericMenuItem $item): void
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