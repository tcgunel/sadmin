<?php

namespace OmerKamcili\Sadmin\Components\Page;

use OmerKamcili\Sadmin\Components\Generic\BreadCrumb;
use OmerKamcili\Sadmin\Components\Generic\TableProgress;
use OmerKamcili\Sadmin\Components\Interfaces\PageInterface;
use Illuminate\Support\Facades\View;

/**
 * Class TablePage
 *
 * @package OmerKamcili\Sadmin\Components\Page
 */
class TablePage implements PageInterface
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
     * @var
     */
    public $progress;

    /**
     * @var array
     */
    public $formatter = [];

    /**
     * TablePage constructor.
     */
    public function __construct()
    {

        $this->view = config('sadmin.theme') . '/' . $this->view;

    }

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
     * @return BreadCrumb
     */
    public function getBreadCrumb(): BreadCrumb
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

    /**
     * @return TableProgress
     */
    public function getProgress(): TableProgress
    {

        return $this->progress;

    }

    /**
     * @param mixed $progress
     */
    public function setProgress($progress): void
    {

        $this->progress = $progress;

    }

}