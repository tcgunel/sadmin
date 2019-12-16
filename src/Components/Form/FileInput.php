<?php

namespace OmerKamcili\Sadmin\Components\Form;

use OmerKamcili\Sadmin\Components\Interfaces\FormElementInterface;
use Illuminate\Support\Facades\View;

/**
 * Class FileInput
 * @package OmerKamcili\Sadmin\Components\Form
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