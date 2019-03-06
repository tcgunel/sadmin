<?php

namespace OmerKamcili\Sadmin\Test\Components;


use OmerKamcili\Sadmin\Components\Generic\BreadCrumb;
use OmerKamcili\Sadmin\Components\Generic\GenericMenuItem;
use Tests\TestCase;

/**
 * Class GenericTest
 *
 * @package OmerKamcili\Sadmin\Test\Components
 */
class GenericTest extends TestCase
{
    /**
     * SadminBreadCrumb
     */
    public function testBreadCrumb()
    {

        $object = new BreadCrumb();
        $this->assertInstanceOf('OmerKamcili\Sadmin\Components\Generic\BreadCrumb', $object);
        $object->addItem('foo', 'bar');
        $this->assertIsArray($object->items);
        $firstItem = reset($object->items);
        $this->assertSame($firstItem->label, 'foo');
        $this->assertSame($firstItem->url, 'bar');

    }

    /**
     * GenericMenuItem
     */
    public function testGenericMenuItem()
    {

        $object = new GenericMenuItem('foo', 'bar', 'icon');
        $this->assertInstanceOf('OmerKamcili\Sadmin\Components\Generic\GenericMenuItem', $object);
        $this->assertSame($object->label, 'foo');
        $this->assertSame($object->url, 'bar');
        $this->assertSame($object->icon, 'icon');

    }

}