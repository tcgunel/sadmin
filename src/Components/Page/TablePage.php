<?php

namespace TCGunel\Sadmin\Components\Page;

use TCGunel\Sadmin\Components\Generic\BreadCrumb;
use TCGunel\Sadmin\Components\Generic\TableProgress;
use TCGunel\Sadmin\Components\Interfaces\AddableBasicAlert;
use TCGunel\Sadmin\Components\Interfaces\PageInterface;
use Illuminate\Support\Facades\View;

/**
 * Class TablePage
 *
 * @package TCGunel\Sadmin\Components\Page
 */
class TablePage implements PageInterface
{

    use AddableBasicAlert;

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
     * @var
     */
    public $progress;

    /**
     * @var array
     */
    public $formatter = [];

    /**
     * @var array
     */
    public $filters = [];

    /**
     * @var
     */
    public $filterAction;

    /**
     * @var
     */
    public $filterButtonText;

    /**
     * @var array
     */
    public $script = [];

    /**
     * TablePage constructor.
     */
    public function __construct()
    {

        $this->view = 'sadmin::' . config('sadmin.theme') . '/' . $this->view;

    }

    /**
     * @param mixed $breadCrumb
     */
    public function setBreadCrumb($breadCrumb)
    {
        $this->breadCrumb = $breadCrumb;
    }

    /**
     * @return string
     */
    public function render()
    {

        View::share('breadCrumb', $this->getBreadCrumb());
        View::share('page', $this);

        return View::make($this->view)->render();

    }

    /**
     * @return BreadCrumb
     */
    public function getBreadCrumb()
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
     * @param $field
     * @param $function
     */
    public function addFormatter($field, $function)
    {

        $this->formatter[$field] = $function;

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
    public function setData(array $data)
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
    public function setPagination($pagination)
    {

        $this->pagination = $pagination;

    }

    /**
     * @return TableProgress|null
     */
    public function getProgress()
    {

        return $this->progress;

    }

    /**
     * @param mixed $progress
     */
    public function setProgress($progress)
    {

        $this->progress = $progress;

    }

    /**
     * @param $item
     *
     * @return TablePage
     */
    public function addFilterItem($item)
    {
        $this->filters[] = $item;

        return $this;
    }

    /**
     * @param $item
     */
    public function addScript($item)
    {

        $this->script[] = $item;

    }

    /**
     * @return array|null
     */
    public function getScript()
    {

        return $this->script;

    }

}
