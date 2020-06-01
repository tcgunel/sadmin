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
