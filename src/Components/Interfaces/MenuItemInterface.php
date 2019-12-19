<?php

namespace OmerKamcili\Sadmin\Components\Interfaces;

use Illuminate\Support\Facades\View;

/**
 * Interface SadminFormElementInterface
 *
 * @package OmerKamcili\Sadmin\components\interfaces
 */
abstract class MenuItemInterface
{

    /**
     * @var
     */
    public $id = '';
    
    /**
     * @var
     */
    public $label = '';

    /**
     * @var
     */
    public $class = '';

    /**
     * @var
     */
    public $icon;

    /**
     * @var
     */
    public $view;

    /**
     * SadminMenuElementInterface constructor.
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
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label): void
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class): void
    {
        $this->class = $class;
    }

    /**
     * @return mixed
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param mixed $icon
     */
    public function setIcon($icon): void
    {
        $this->icon = $icon;
    }

    /**
     * @return mixed
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param mixed $view
     */
    public function setView($view): void
    {
        $this->view = $view;
    }

  

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }

}