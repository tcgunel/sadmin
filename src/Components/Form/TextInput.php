<?php

namespace TCGunel\Sadmin\Components\Form;

use TCGunel\Sadmin\Components\Interfaces\FormElementInterface;
use TCGunel\Sadmin\Constants\Form\TextInputTypes;
use Illuminate\Support\Facades\View;

/**
 * Class SadminTextInput
 *
 * @package TCGunel\Sadmin\components\form
 */
class TextInput extends FormElementInterface
{

    /**
     * @var
     */
    public $step;

    /**
     * @var
     */
    public $type = TextInputTypes::TEXT;

    /**
     * @var string
     */
    public $view = 'form-elements/text-input';

    /**
     * TextInput constructor.
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
