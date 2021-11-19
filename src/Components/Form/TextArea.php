<?php

namespace TCGunel\Sadmin\Components\Form;

use TCGunel\Sadmin\Components\Interfaces\FormElementInterface;
use Illuminate\Support\Facades\View;

/**
 * Class TextArea
 * @package TCGunel\Sadmin\Components\Form
 */
class TextArea extends FormElementInterface
{

    /**
     * @var int
     */
    public $row = 3;

    /**
     * @var string
     */
    public $view = 'form-elements/text-area';

    /**
     * TextArea constructor.
     *
     * @param array $properties
     */
    public function __construct(array $properties = [])
    {

        parent::__construct($properties);

        $this->view = 'sadmin::' . config('sadmin.theme') . '/' . $this->view;

    }

    /**
     * @return string
     */
    public function render()
    {

        return View::make($this->view, ['row' => $this])->render();

    }

}
