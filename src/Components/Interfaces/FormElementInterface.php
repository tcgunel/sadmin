<?php

namespace TCGunel\Sadmin\Components\Interfaces;

use Illuminate\Support\Facades\View;

/**
 * Interface SadminFormElementInterface
 *
 * @package TCGunel\Sadmin\components\interfaces
 */
abstract class FormElementInterface
{

    /**
     * @var
     */
    public $id;

    /**
     * @var
     */
    public $name;

    /**
     * @var
     */
    public $value;

    /**
     * @var
     */
    public $placeholder = null;

    /**
     * @var
     */
    public $label;

    /**
     * @var
     */
    public $class;

    /**
     * @var
     */
    public $description;

    /**
     * @var mixed
     */
    public $required = null;

    /**
     * @var
     */
    public $autocomplete = null;

    /**
     * @var
     */
    public $view;

    /**
     * SadminFormElementInterface constructor.
     *
     * @param array $properties
     */
    public function __construct(array $properties = [])
    {

        foreach ($properties as $key => $foo) {

            if (property_exists($this, $key)) {

                $this->{$key} = $foo;

            }
        }

        View::share('row', $this);

    }

    /**
     * @return string
     */

    abstract function render();

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @param mixed $placeholder
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }

}
