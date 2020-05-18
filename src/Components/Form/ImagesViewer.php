<?php

namespace OmerKamcili\Sadmin\Components\Form;

use OmerKamcili\Sadmin\Components\Interfaces\FormElementInterface;
use Illuminate\Support\Facades\View;

/**
 * Class ImagesViewer
 * @package OmerKamcili\Sadmin\Components\Form
 *
 * TODO: Confirmable button will be added
 *
 */
class ImagesViewer extends FormElementInterface
{

    /**
     * @var array
     */
    public $images = [];

    /**
     * @var string
     */
    public $view = 'form-elements/images-viewer';

    /**
     * ImagesViewer constructor.
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
    function render()
    {

        return View::make($this->view, ['row' => $this])->render();

    }

    /**
     * @param $image array
     */
    public function addImage($image)
    {
        array_push($this->images, $image);
    }

}
