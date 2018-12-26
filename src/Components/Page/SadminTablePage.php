<?php
/**
 * Created by PhpStorm.
 * User: omerkamcili
 * Date: 25.12.2018
 * Time: 14:57
 */

namespace OmerKamcili\Sadmin\Components\Page;


use OmerKamcili\Sadmin\Components\Generic\SadminBreadCrumb;
use OmerKamcili\Sadmin\Components\Interfaces\SadminPageInterface;
use Illuminate\Support\Facades\View;

/**
 * Class SadminTablePage
 *
 * @package OmerKamcili\Sadmin\Components\Page
 */
class SadminTablePage implements SadminPageInterface
{


    /**
     * @var
     */
    public $title;

    /**
     * @var
     */
    public $description;

    /**
     * @var string
     */
    private $view = 'pages/table';

    /**
     * @var
     */
    public $breadCrumb;

    /**
     * @var array
     */
    public $fields = [];

    /**
     * @var array
     */
    public $data = [];


    /**
     * @var
     */
    public $pagination;

    /**
     * @param mixed $breadCrumb
     */
    public function setBreadCrumb($breadCrumb): void
    {
        $this->breadCrumb = $breadCrumb;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        View::share('breadCrumb', $this->getBreadCrumb());
        View::share('page', $this);

        return View::make($this->view)->render();

    }

    /**
     * @return SadminBreadCrumb
     */
    public function getBreadCrumb(): SadminBreadCrumb
    {

        return $this->breadCrumb;

    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->render();
    }

    /**
     * @return array
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * @param array $fields
     */
    public function setFields(array $fields): void
    {
        $this->fields = $fields;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @param mixed $pagination
     */
    public function setPagination($pagination): void
    {
        $this->pagination = $pagination;
    }


}