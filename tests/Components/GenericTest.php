<?php

namespace OmerKamcili\Sadmin\Test\Components;


use OmerKamcili\Sadmin\Components\Generic\SadminBreadCrumb;
use OmerKamcili\Sadmin\Components\Generic\SadminGenericMenuItem;
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

        $object = new SadminBreadCrumb();
        $this->assertInstanceOf('OmerKamcili\Sadmin\Components\Generic\SadminBreadCrumb', $object);
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

        $object = new SadminGenericMenuItem('foo','bar', 'icon');
        $this->assertInstanceOf('OmerKamcili\Sadmin\Components\Generic\SadminGenericMenuItem', $object);
        $this->assertSame($object->label,'foo');
        $this->assertSame($object->url, 'bar');
        $this->assertSame($object->icon, 'icon');

    }

}