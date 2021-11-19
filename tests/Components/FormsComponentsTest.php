<?php

namespace TCGunel\Sadmin\Test\Components;

use TCGunel\Sadmin\Components\Form\SelectBox;
use TCGunel\Sadmin\Components\Form\TextArea;
use TCGunel\Sadmin\Components\Form\TextInput;
use TCGunel\Sadmin\Constants\Form\TextInputTypes;
use Tests\TestCase;

/**
 * Class FormsComponentsTest
 *
 * @package TCGunel\Sadmin\Test\Components
 */
class FormsComponentsTest extends TestCase
{

    /**
     * @var array
     */
    private $attr = [
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
        $object       = new TextInput($this->attr);
        $object->type = TextInputTypes::TEXT;

        foreach ($this->attr as $key => $foo) {
            $this->assertSame($object->{$key}, $foo);
        }
    }

    /**
     * SadminSelectBox
     */
    public function testSelectBox()
    {

        $object = new SelectBox($this->attr);

        foreach ($this->attr as $key => $foo) {
            $this->assertSame($object->{$key}, $foo);
        }

    }

    /**
     * SadminTextArea
     */
    public function testTextArea()
    {

        $object = new TextArea($this->attr);

        foreach ($this->attr as $key => $foo) {
            $this->assertSame($object->{$key}, $foo);
        }
    }

}
