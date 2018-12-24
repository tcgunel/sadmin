<?php

namespace OmerKamcili\Sadmin\Test\Components;


use OmerKamcili\Sadmin\Components\Form\SadminSelectBox;
use OmerKamcili\Sadmin\Components\Form\SadminTextArea;
use OmerKamcili\Sadmin\Components\Form\SadminTextInput;
use OmerKamcili\Sadmin\SadminTextInputTypes;
use Tests\TestCase;
use Illuminate\Validation\ValidationException;

/**
 * Class FormsComponentsTest
 *
 * @package OmerKamcili\Sadmin\Test\Components
 */
class FormsComponentsTest extends TestCase
{

    /**
     * @var array
     */
    private $attr
        = [
            'id'          => 'a',
            'name'        => 'b',
            'value'       => 'c',
            'placeholder' => 'd',
            'label'       => 'e',
            'class'       => 'f',
            'description' => 'g',
            'required'    => 'h',

        ];

    /**
     * SadminTextInput
     */
    public function testTextInput()
    {
        $object = new SadminTextInput($this->attr);
        $object->type = SadminTextInputTypes::TEXT;
        $this->assertInstanceOf('OmerKamcili\Sadmin\Components\Interfaces\SadminFormElementInterface', $object);
        foreach ($this->attr as $key => $foo) {
            $this->assertSame($object->{$key}, $foo);
        }
    }

    /**
     * SadminSelectBox
     */
    public function testSelectBox()
    {

        $object = new SadminSelectBox($this->attr);
        $this->assertInstanceOf('OmerKamcili\Sadmin\Components\Interfaces\SadminFormElementInterface', $object);
        foreach ($this->attr as $key => $foo) {
            $this->assertSame($object->{$key}, $foo);
        }

    }

    /**
     * SadminTextArea
     */
    public function testTextArea()
    {
        $object = new SadminTextArea($this->attr);
        $this->assertInstanceOf('OmerKamcili\Sadmin\Components\Interfaces\SadminFormElementInterface', $object);
        foreach ($this->attr as $key => $foo) {
            $this->assertSame($object->{$key}, $foo);
        }
    }

}