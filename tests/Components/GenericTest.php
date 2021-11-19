<?php

namespace TCGunel\Sadmin\Test\Components;

use TCGunel\Sadmin\Components\Generic\BreadCrumb;
use TCGunel\Sadmin\Components\Generic\GenericMenuItem;
use Tests\TestCase;

/**
 * Class GenericTest
 *
 * @package TCGunel\Sadmin\Test\Components
 */
class GenericTest extends TestCase
{
    /**
     * SadminBreadCrumb
     */
    public function testBreadCrumb()
    {

        $object = new BreadCrumb();
        $this->assertInstanceOf('TCGunel\Sadmin\Components\Generic\BreadCrumb', $object);
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
        $this->assertInstanceOf('TCGunel\Sadmin\Components\Generic\GenericMenuItem', $object);
        $this->assertSame($object->label, 'foo');
        $this->assertSame($object->url, 'bar');
        $this->assertSame($object->icon, 'icon');

    }

}
