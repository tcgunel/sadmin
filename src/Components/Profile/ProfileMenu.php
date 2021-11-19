<?php

namespace TCGunel\Sadmin\Components\Profile;

use ArrayIterator;
use TCGunel\Sadmin\Components\Generic\GenericMenuItem;
use IteratorAggregate;

/**
 * Class ProfileMenu
 *
 * @package TCGunel\Sadmin\components
 */
class ProfileMenu implements IteratorAggregate
{

    /**
     * @var
     */
    private $items = [];

    /**
     * @var
     */
    public $imageUrl;

    /**
     * @var
     */
    public $label;

    /**
     * @param GenericMenuItem $item
     */
    public function add(GenericMenuItem $item)
    {

        $this->items[] = $item;

    }

    /**
     * @return array
     */
    public function getAll()
    {

        return new $this->items;

    }

    /**
     * @return ArrayIterator|\Traversable
     */
    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }

}
