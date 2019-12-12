<?php

namespace OmerKamcili\Sadmin\Test\Components;

use OmerKamcili\Sadmin\Components\Form\SelectBox;
use OmerKamcili\Sadmin\Components\Form\TextArea;
use OmerKamcili\Sadmin\Components\Form\TextInput;
use OmerKamcili\Sadmin\Constants\Form\TextInputTypes;
use Tests\TestCase;

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