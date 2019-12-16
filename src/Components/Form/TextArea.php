<?php

namespace OmerKamcili\Sadmin\Components\Form;

use OmerKamcili\Sadmin\Components\Interfaces\FormElementInterface;
use Illuminate\Support\Facades\View;

/**
 * Class TextArea
 * @package OmerKamcili\Sadmin\Components\Form
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

        $this->view = config('sadmin.theme') . '/' . $this->view;

    }

    /**
     * @return string
     */
    public function render(): string
    {

        return View::make($this->view, ['row' => $this])->render();

    }

}