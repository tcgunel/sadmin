<?php

namespace TCGunel\Sadmin\Components\Form;

use TCGunel\Sadmin\Components\Interfaces\FormElementInterface;
use Illuminate\Support\Facades\View;

/**
 * Class FileInput
 * @package TCGunel\Sadmin\Components\Form
 */
class FileInput extends FormElementInterface
{

    /**
     * @var bool
     */
    public $multiple = false;

    /**
     * @var string
     */
    public $view = 'form-elements/file-input';

    /**
     * FileInput constructor.
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
