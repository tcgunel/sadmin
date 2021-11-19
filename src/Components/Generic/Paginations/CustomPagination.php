<?php

namespace TCGunel\Sadmin\Components\Generic\Paginations;

use TCGunel\Sadmin\Components\Interfaces\PaginationInterface;
use Illuminate\Support\Facades\View;

/**
 * Class CustomPagination
 * @package TCGunel\Sadmin\Components\Generic\Paginations
 */
class CustomPagination implements PaginationInterface
{

    /**
     * @var
     */
    public $nextPage = '';

    /**
     * @var
     */
    public $previousPage = '';

    /**
     * @var
     */
    public $pages;

    /**
     * @var
     */
    public $currentPage;

    /**
     * @var string
     */
    private $view = 'component/pagination';

    /**
     * CustomPagination constructor.
     */
    public function __construct()
    {

        $this->view = config('sadmin.theme') . '/' . $this->view;

    }

    /**
     * @return string
     */
    public function render()
    {

        View::share('paginator', $this);

        return View::make($this->view)->render();

    }

    /**
     * @return string
     */
    public function getNextPage()
    {

        return $this->nextPage;

    }

    /**
     * @return string
     */
    public function getPreviousPage()
    {

        return $this->previousPage;

    }

    /**
     * @return array
     */
    public function getPages()
    {

        return $this->pages;

    }

    /**
     * @param mixed $nextPage = ['label' => 'string', 'url' => 'string']
     */
    public function setNextPage($nextPage)
    {

        $this->nextPage = $nextPage;

    }

    /**
     * @param mixed $previousPage = ['label' => 'string', 'url' => 'string']
     */
    public function setPreviousPage($previousPage)
    {

        $this->previousPage = $previousPage;

    }

    /**
     * @param mixed $pages = array[1 => 'url', 2 => 'url']
     *
     */
    public function setPages($pages)
    {

        $this->pages = $pages;

    }

    /**
     * @return int
     */
    public function getCurrentPage()
    {

        return $this->currentPage;

    }

    /**
     * @param mixed $currentPage
     */
    public function setCurrentPage($currentPage)
    {

        $this->currentPage = $currentPage;

    }

    /**
     * @return string
     */
    public function __toString()
    {

        return $this->render();

    }


}
