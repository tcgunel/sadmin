<?php

namespace OmerKamcili\Sadmin\Components\Form;

use OmerKamcili\Sadmin\Components\Interfaces\FormElementInterface;
use Illuminate\Support\Facades\View;

/**
 * Class SelectBox
 * @package OmerKamcili\Sadmin\Components\Form
 */
class SelectBox extends FormElementInterface
{

    /**
     * @var string
     */
    public $view = 'form-elements/select-box';

    /**
     * @var
     */
    public $selected;

    /**
     * @var array
     */
    public $data = [];

    /**
     * @var bool
     */
    public $search = false;

    /**
     * $var string
     */
    public $script = "{}";

    /**
     * SelectBox constructor.
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
    public function render()
    {

        return View::make($this->view, ['row' => $this])->render();

    }

}